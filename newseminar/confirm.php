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
					<p>タイトルが入ります</p>
					<input type="hidden" name="" value="">
				</div>
				<div class="row space">
					<div class="col-xs-2">
					<label>日時</label>
					</div>
					<div class="col-xs-10">
						<p>2019/12/18　　19:00〜21:00</p>
						<input type="hidden" name="calendar" value="">
						<input type="hidden" name="" value="">
					</div>
				</div>
				<div class="row">
					<label class="space">場所</label>
					<p>若草通のとこ</p>
					<input type="hidden" name="" value="">
				</div>
				<div class="row">
					<label class="space">主催者</label>
					<p>◯◯◯◯</p>
					<input type="hidden" name="" value="">
				</div>
				<div class="row">
					<div class="col-xs-2">
						<label class="space">会費</label>
					</div>
					<div class="col-xs-10">
						500円
						<input type="hidden" name="" value="">
					</div>
				</div>
				<div class="row">
					<h4>★イベント説明欄★</h4>
					<label class="space">イベント概要</label>
					<p>イベントの概要が入りますイベントの概要が入りますイベントの概要が入りますイベントの概要が入りますイベントの概要が入りますイベントの概要が入ります</p>
					<input type="hidden" name="" value="">
					<label class="space">日時・会場・会費</label>
					<p>日時・会場・会費のこと</p>
					<input type="hidden" name="" value="">
					<label class="space">タイムテーブル</label>
					<p>タイムテーブル的な。</p>
					<input type="hidden" name="" value="">
					<label class="space">その他</label>
					<p>その他書きたいこと〜〜〜</p>
					<input type="hidden" name="" value="">
					<div class="button-group">
						<button type="button" class="btn btn-default btn-lg">戻る</button>
						<button tyype="submit" class="btn btn-success btn-lg">確定する</button>
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