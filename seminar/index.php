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
				<h1>勉強会タイトル</h1>
			</div>
			<div class="row">
				<div class="col-xs-9">
					<div class="seminar-detail">
						<p>日時：2019/12/18(水)19:00～21:00</p>
						<p>場所：若草通りのとこ</p>
						<p>主催者：○○○○</p>
						<p class="created-date">作成日：2019/12/10</p>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="join-btn">
						<p>お申し込みは<br>こちら</p>
						<a href="./join.php" class="btn btn-danger btn-lg">参加する</a>
					</div>
				</div>
			</div>
			<div class="seminar-content">
				<h3>イベント概要</h3>
				<p>こんなイベントですよ。</p>
			</div>
			<div class="seminar-content">
				<h3>日時・会場・会費</h3>
				<p>日時：2019/12/18</p>
				<p>会場：若草通りのとこ</p>
				<p>会費：500円</p>
			</div>
			<div class="seminar-content">
				<h3>タイムテーブル</h3>
				<p>こんな時間割ですよ。</p>
			</div>
			<div class="seminar-content">
				<h3>その他</h3>
				<p>登壇枠募集中★</p>
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