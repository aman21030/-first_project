<?php
	require_once dirname(__FILE__) . '/../includes/require.php';
	// require_once dirname(__FILE__) . '/../includes/islogin.php';
	$conn = new DbConn();


	//本登録アップデート
	session_start();
	if(isset($_POST['registration'])){
		$nickname = $_POST['nickname'];
		$password = $_POST['password1'];
		$token = $_POST['token'];

		$hash_pass = password_hash($password, PASSWORD_DEFAULT);

		$sql  = ' UPDATE s_users SET ';
		$sql .= ' nickname = "'.$nickname.'",';
		$sql .= ' password = "'.$hash_pass.'",';
		$sql .= ' pre_token = NULL';
		$sql .= ' WHERE pre_token = "'.$_SESSION['token'].'"';
		$conn->fetch($sql);
		session_destroy();
	}

	//ログインボタンを押してPOSTしたとき
	if(isset($_POST['login'])){

		//入力されたメールアドレスとパスワードを取得
		$login_mail = $_POST['mail'];
		$login_password = $_POST['password'];

		// パスワードを暗号化する
		$original_string = $login_password;
		// $hashed_string = hash('sha256', $original_string);

		// データベースにあるか
		$sql  = ' SELECT * FROM s_users ';
		$sql .= ' WHERE email = "'.$login_mail.'"';
		// $sql .= ' AND password = "'.$login_password.'"';
		$logins = $conn->fetch($sql);

		var_dump($logins);
		// データベースに１件のみ存在する場合はログインOK
		if(isset($logins) && count($logins) == 1){
			$login = $logins[0];
			// var_dump($login['password']);
			// セッションにユーザーIDを保持する
			if(password_verify( $login_password, $login['password'])){
				session_regenerate_id();
				$_SESSION['user_id'] = $login['id'];
				$_SESSION['nickname'] = $login['nickname'];

				$login_success_url = "http://6101.web-seito.com/imitationcom/";
				header("Location: {$login_success_url}");
				exit;
			}
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
  <title>imitationcom</title>
</head>
<body>
	<?php
		require_once dirname(__FILE__) . '/../includes/header.php';
	?>
	<div class="main">
		<div class="container">
			<div class="row l-content">
			<?php
				
			?>
				<div class="login-content">
					<h3>ログインはこちら</h3>
					<?php
						// if($_POST){
						// 	echo '<div class="alert alert-danger" role="alert">';
						// 	echo $errorMessage;
						// 	echo '</div>';
						// }
					?>
					<form action="./index.php" method="post">
						<label>メールアドレス</label>
						<input type="mail" class="form-control input-lg" name="mail" placeholder="メールアドレス" required>
						<label>パスワード</label>
						<input type="password" class="form-control input-lg" name="password" placeholder="パスワード" required>
						<button type="submit" name="login" class="btn btn-danger btn-center btn-lg">ログイン</button>
					</form>
				</div>
				<div class="newuser-content">
					<h3>新規登録はこちら</h3>
					<a href="register.php" class="btn btn-primary btn-center btn-lg">新規登録</a>
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