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
		<div class="row l-content">
			<div class="login-content">
				<h3>ログインはこちら</h3>
				<form action="../index.php" method="post">
					<label>メールアドレス</label>
					<input type="mail" class="form-control" name="mail" placeholder="メールアドレス" required>
					<label>パスワード</label>
					<input type="password" class="form-control" name="password" placeholder="パスワード" required>
					<button class="btn btn-danger btn-center">ログイン</button>
				</form>
			</div>
			<div class="newuser-content">
				<h3>新規登録はこちら</h3>
				<label>メールアドレス</label>
				<input type="mail" class="form-control" name="mail" placeholder="メールアドレス" required>
				<a href="./newuser.php" class="btn btn-primary btn-center">新規登録</a>
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