<?php
	$title = nl2br(htmlspecialchars($_POST['title']));
	$date = nl2br(htmlspecialchars($_POST['date']));
	$time = nl2br(htmlspecialchars($_POST['time']));
	$place = nl2br(htmlspecialchars($_POST['place']));
	$organizer = nl2br(htmlspecialchars($_POST['organizer']));
	$price = nl2br(htmlspecialchars($_POST['price']));
	$overview = nl2br(htmlspecialchars($_POST['overview']));
	$details = nl2br(htmlspecialchars($_POST['details']));
	$timetable = nl2br(htmlspecialchars($_POST['timetable']));
	$other = nl2br(htmlspecialchars($_POST['other']));
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
		<div class="col-xs-8 col-xs-offset-2">
			<form action="../index.php" method="post">
				<div class="row">
					<h1>〜〜勉強会新規作成確認〜〜</h1>
				</div>
				<div class="row">
					<label class="space">勉強会タイトル</label>
					<p><?php echo $title; ?></p>
					<input type="hidden" name="title" value="<?php echo $title; ?>">
				</div>
				<div class="row space">
					<div class="col-xs-2">
					<label>日時</label>
					</div>
					<div class="col-xs-10">
						<p><?php
							 echo date('Y年n月j日', strtotime($date));
							 echo 　　;
							 echo $time;
							 ?></p>
						<input type="hidden" name="date" value="<?php echo $date; ?>">
						<input type="hidden" name="time" value="<?php echo $time; ?>">
					</div>
				</div>
				<div class="row">
					<label class="space">場所</label>
					<p><?php echo $place; ?></p>
					<input type="hidden" name="place" value="<?php echo $place; ?>">
				</div>
				<div class="row">
					<label class="space">主催者</label>
					<p><?php echo $organizer; ?></p>
					<input type="hidden" name="organizer" value="<?php echo $organizer; ?>">
				</div>
				<div class="row space">
					<div class="col-xs-2">
						<label>会費</label>
					</div>
					<div class="col-xs-10">
						<?php echo $price; ?>円
						<input type="hidden" name="price" value="<?php echo $price; ?>">
					</div>
				</div>
				<div class="row">
					<h4>★イベント説明欄★</h4>
					<label class="space">イベント概要</label>
					<p><?php echo $overview; ?></p>
					<input type="hidden" name="overview" value="<?php echo $overview; ?>">
					<label class="space">日時・会場・会費</label>
					<p><?php echo $details; ?></p>
					<input type="hidden" name="details" value="<?php echo $details; ?>">
					<label class="space">タイムテーブル</label>
					<p><?php echo $timetable; ?></p>
					<input type="hidden" name="timetable" value="<?php echo $timetable; ?>">
					<label class="space">その他</label>
					<p><?php echo $other; ?></p>
					<input type="hidden" name="other" value="<?php echo $other; ?>">
					<div class="button-group">
						<button type="button" class="btn btn-default btn-lg" onclick="history.back()">戻る</button>
						<button type="submit" name="newseminar" class="btn btn-success btn-lg">確定する</button>
					</div>
				</div>
			</form>
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