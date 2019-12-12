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

	<link rel="stylesheet" href="./assets/css/app.css">
  <title>imitationcom</title>
</head>
<body>
	<?php
		require_once dirname(__FILE__) . '/includes/header.php';
	?>

	<div class="main-img">
		<img src="./assets/img/study.jpg" alt="勉強会風景写真">
	</div><!--メイン画像end-->
<div class="container">
	<div class="row">
		<form method="" action="">
			<div class="col-xs-2">
				<select name="" id="" class="form-control input-lg">
					<option value="">日付</option>
				</select>
			</div>
			<div class="col-xs-5">
				<input type="text" placeholder="キーワードで検索" class="form-control input-lg">
			</div>
			<div class="col-xs-2">
				<button class="btn btn-success btn-lg">検索</button>
			</div>
		</form>
		<div class="col-xs-3">
			<a href="" class="btn btn-danger btn-lg">イベントを作成する</a>
		</div>
	</div><!--検索フォームとイベント作成へボタンend-->
</div>
	<div class="container">
		<div class="row">
			<div class="content col-xs-12">
				<div class="content-title">
					<h2>勉強会タイトル</h2>
					<p>公開日：2019/12/15</p>
				</div>
				<div class="overview">
					<p>日時：2019/12/20</p>
					<p>会場：若草通のとこ</p>
					<p>会費：500円</p>
					<p>ここに概要が入ります　ここに概要が入ります　ここに概要が入ります　ここに概要が入ります　ここに概要が入ります　ここに概要が入ります　ここに概要が入ります　ここに概要が入ります　ここに概要が入ります　ここに概要が入ります　ここに概要が入ります　ここに概要が入ります</p>
				</div>
				<div class="content-footer">
					<p>作成者：田中太郎</p>
					<p>参加人数：5/10人</p>
				</div>
			</div>
		</div><!--１つの勉強会のくくりend-->
	</div>
	<button class="btn btn-default btn-lg more">↓↓さらに表示する↓↓</button>

	<?php
		require_once dirname(__FILE__) . '/includes/footer.php';
	?>



	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="./assets/js/app.js"></script>
</body>
</html>