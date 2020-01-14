<?php
	session_start();
	require_once dirname(__FILE__) . '/../includes/require.php';
	$conn = new DbConn();

		$sql  = ' SELECT * FROM seminars ';
		$sql .= ' WHERE id="'.$_GET['id'].'"' ;
		$seminars = $conn->fetch($sql);

		if(COUNT($seminars)>0){
			$seminar=$seminars[0];
		}

		$seminar_id = $seminar['id'];
		$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	<link rel="stylesheet" href="../assets/css/app.css">
  <title>imitationcom</title>
</head>
<body>
	<?php
		require_once dirname(__FILE__) . '/../includes/header.php';
	?>
	<div class="main">
		<div class="container">	
			<div class="seminar-title">
				<h1><?php echo $seminar['title']; ?></h1>
			</div>
			<div class="row">
				<div class="col-xs-9">
					<div class="seminar-detail">
						<p>日時：<?php echo $seminar['date'].' '.$seminar['time']; ?></p>
						<p>場所：<?php echo $seminar['place']; ?></p>
						<p>主催者：<?php echo $seminar['organizer']; ?></p>
						<p class="created-date">作成日：<?php echo $seminar['created_at']; ?></p>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="price">
						<h3>会費</h3>
						<h3><?php echo $seminar['price']; ?>円</h3>
					</div>
				</div>
			</div>
			<div class="row question">
				<p class="payment-method">上記のイベントに参加しますか？</p>
			</div>
			<div class="row">
				<form action="joined.php" method="post">
					<div class="col-xs-6">
						<div class="local">
							<p class="payment-method">会場払いで</p>
							<button type="submit" name="postpay" class="btn btn-danger">参加する</button>
							<input type="hidden" name="seminar_id" value="<?php echo $seminar_id; ?>">
							<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
						</div>
					</div>
				</form>
				<div class="col-xs-6">
					<div class="stripe">
						<p class="payment-method">ストライプで決済して</p>
						<form action="../stripe/charge.php" method="post">
							<input type="hidden" name="seminar_id" value="<?php echo $seminar_id; ?>">
							<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
							<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									data-key="pk_test_ayoixpekguQ6vHEr27R8I0QW00AVzbqc78"
									data-amount="500"
									data-name="このセミナーの参加費は500円です"
									data-locale="auto"
									data-allow-remember-me="false"
									data-label="参加する"
									data-currency="jpy">
							</script>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>



	<?php
		require_once dirname(__FILE__) . '/../includes/footer.php';
	?>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../assets/js/app.js"></script>
</body>
</html>