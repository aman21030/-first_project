<?php
	require_once dirname(__FILE__) . '/require.php';
	$conn = new DbConn();

	//セッション開始
	session_start();

	//ログインボタンが押された場合
	$errorMessage = "";

	if($_POST["login"]){
		//１．ユーザIDのチェック
		if(empty($_POST["user_id"])){
			$errorMessage = 'ユーザーIDが未入力です。';
		}	elseif (empty($_POST['password'])){
			$errorMessage = 'パスワードが未入力です。';
		}

		if(!empty($_POST['user_id']) && !empty($_POST['password'])){
			//入力したユーザーIDを格納
			$user_id = $_POST['user_id'];
			$password = $_POST['password'];

			$sql  = 'SELECT * FROM s_users ';
			$sql .= ' WHERE login_id ="'.$user_id.'"';
			$s_users = $conn->fetch($sql);

			if(count($s_users) > 0){
				$user = $s_users[0];
				//パスワード確認
				if(password_verify ( $password, $user['password'])){
					session_regenerate_id();
					//セッション追加
					$_SESSION['id'] = $user['id'];
					$_SESSION['nickname'] = $user['nickname'];

					//トップページへ移動
					header("location: http://6101.web-seito.com/imitationcom/index.php");
				}else{
					$errorMessage = 'ユーザーIDもしくはパスワードに誤りがあります。';
				}
			}else{
				$errorMessage = 'ユーザーIDもしくはパスワードに誤りがあります。';
			}	
		}
	}

	return $errorMessage;
?>