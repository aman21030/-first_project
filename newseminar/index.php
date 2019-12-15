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
			<form action="confirm.php" method="post">
				<div class="row">
					<h1>〜〜勉強会新規作成〜〜</h1>
					<label>勉強会タイトル</label>
					<input type="text" class="form-control" name="title" required>
					<div class="col-xs-1">
					<label>日時</label>
					</div>
					<div class="col-xs-4">
						<input type="date" class="form-control" name="date" min="" max="9999-12-31" required>
					</div>
					<div class="col-xs-7">
						<input type="text" class="form-control" name="time" placeholder="時間を入力" required>
					</div>

					<label>場所</label>
					<input type="text" class="form-control" name="place" required>
					<label>主催者</label>
					<input type="text" class="form-control" name="organizer" required>

					<div class="col-xs-1">
						<label>会費</label>
					</div>
					<div class="col-xs-4">
						<input type="number" min="0" class="form-control" name="price" required>
					</div>
					<div class="col-xs-7">円</div>
				</div>
				<div class="row">
					<h4>★イベント説明欄★</h4>
					<label>イベント概要</label>
					<textarea name="overview" id="" rows="5" class="form-control" required></textarea>
					<label>日時・会場・会費</label>
					<textarea name="details" id="" rows="5" class="form-control"></textarea>
					<label>タイムテーブル</label>
					<textarea name="timetable" id="" rows="5" class="form-control"></textarea>
					<label>その他</label>
					<textarea name="other" id="" rows="5" class="form-control"></textarea>
					<button type="submit" class="btn btn-success btn-lg confirm-btn">確認する</button>
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