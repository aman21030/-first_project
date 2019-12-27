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
<div class="container main">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<h1>～～ユーザー新規登録～～</h1>
			<p><?php //echo $email; ?>様、表示名とパスワードの設定をお願いします。</p>
			<form action="./index.php" method="post">
				<label>表示名</label>
				<input type="text" name="nickname" class="form-control input-lg" placeholder="表示名" required>
				<label>パスワード</label>
				<input type="password" name="password1" class="form-control input-lg" placeholder="パスワード" required>
				<input type="password" name="password2" class="form-control input-lg" placeholder="パスワードをもう一度入力" required>
				<button type="submit" name="" class="btn btn-success btn-center btn-lg">登録する</button>
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