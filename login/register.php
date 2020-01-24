<?php
	require_once dirname(__FILE__) . '/../includes/require.php';
	$conn = new DbConn();



	//新規登録トークン作成
	if(isset($_POST['create'])){
		$email = htmlspecialchars($_POST['email']);

		$sql  = ' SELECT * FROM s_users ';
		$sql .= ' WHERE email="'.$email. '"';
		$users = $conn->fetch($sql);
		$user = $users[0];
		
		if(count($users) > 0){
			$error['email'] = 'duplicate';
		}else{

		$token = sha1(uniqid(rand(),1));

		$sql  = ' INSERT INTO s_users ';
		$sql .= ' VALUES ("", "'.$email.'", null, "'.$token.'", null, null, CURRENT_TIMESTAMP)';
		$conn->fetch($sql);

		require_once dirname(__FILE__) . '/../includes/mail_token.php';
		}

	}
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
  <title>新規登録</title>
</head>
<body>
	<?php
		require_once dirname(__FILE__) . '/../includes/header.php';
	?>
	<div class="container main">
		<div class="col-xs-8 col-xs-offset-2">
			<h1>新規登録</h1>
			<p>メールアドレスを入力し送信ボタンを押すと登録用メールが送信されます。</p>
			<?php
				if($_POST){
					if($error['email'] == 'duplicate'){
						echo '<div class="alert alert-danger" role="alert">そのメールアドレスはすでに登録されています。</div>';
					}else{
					echo $alertMessage;
					}
				}
				
			?>
			<label>メールアドレス</label>
			<form action="./register.php" method="post">
			<input type="mail" class="form-control input-lg" name="email" placeholder="メールアドレス" required>
			<button type="submit" name="create" class="btn btn-success btn-center btn-lg">送信</button>
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