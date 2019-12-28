<?php
	require_once dirname(__FILE__) . '/../includes/require.php';
	require_once dirname(__FILE__) . '/../includes/islogin.php';
	$conn = new DbConn();

	//新規登録トークン作成
	if(isset($_POST['create'])){
		$email = $_POST['email'];

		$token = sha1(uniqid(rand(),1));

		$sql  = ' INSERT INTO s_users ';
		$sql .= ' VALUES ("", "'.$email.'", null, "'.$token.'", null, null, CURRENT_TIMESTAMP)';
		$conn->fetch($sql);

		require_once dirname(__FILE__) . '/../includes/mail_token.php';
	}

	//本登録アップデート
	if($_POST){
		$nickname = $_POST['nickname'];
		$password = $_POST['password'];
		$token = $_POST['token'];

		$hash_pass = password_hash($password, PASSWORD_DEFAULT);

		$sql  = ' UPDATE s_users SET ';
		$sql .= ' nickname = "'.$nickname.'",';
		$sql .= ' password = "'.$hash_pass.'",';
		$sql .= ' pre_token = NULL';
		$sql .= ' WHERE pre_token = "'.$_SESSION['token'].'"';
		$conn->fetch($sql);
		var_dump($sql);
		session_destroy();
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
					<?php
						if($_POST){
							echo '<div class="alert alert-danger" role="alert">';
							echo $errorMessage;
							echo '</div>';
						}
					?>
					<form action="../index.php" method="post">
						<label>メールアドレス</label>
						<input type="mail" class="form-control input-lg" name="mail" placeholder="メールアドレス" required>
						<label>パスワード</label>
						<input type="password" class="form-control input-lg" name="password" placeholder="パスワード" required>
						<button type="submit" name="login" class="btn btn-danger btn-center btn-lg">ログイン</button>
					</form>
				</div>
				<div class="newuser-content">
					<h3>新規登録はこちら</h3>
					<label>メールアドレス</label>
					<form action="./index.php" method="post">
						<input type="mail" class="form-control input-lg" name="email" placeholder="メールアドレス" required>
						<button type="submit" name="create" class="btn btn-primary btn-center btn-lg">新規登録</button>
					</form>
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