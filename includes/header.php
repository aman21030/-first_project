<?php

	//ログインボタンを押してPOSTしたとき
	if(isset($_POST['login'])){

		//入力されたメールアドレスとパスワードを取得
		$login_mail = htmlspecialchars($_POST['mail']);
		$login_password = htmlspecialchars($_POST['password']);

		// パスワードを暗号化する
		$original_string = $login_password;
		$hashed_string = hash('sha256', $original_string);

		// データベースにあるか
		$sql  = ' SELECT * FROM s_user ';
		$sql .= ' WHERE email="'.$login_mail.'"';
		$sql .= ' AND password = "'.$hashed_string.'"';
		$login = $conn->fetch($sql);

		// データベースに１件のみ存在する場合はログインOK
		if(isset($login) && count($login) == 1){
			// セッションにユーザーIDを保持する
			session_start();
			$_SESSION['user_id'] = $login[0]['id'];
		}
	}

	echo ' <header> ';
	echo '	 <a href="http://6101.web-seito.com/imitationcom/"><img src="http://6101.web-seito.com/imitationcom/assets/img/seminar_illust.png" alt="ロゴ"></a> ';
	if(is_null($_SESSION['user_id'])){
		echo '	 <a href="http://6101.web-seito.com/imitationcom/login/index.php" class="btn btn-default">ログイン・新規登録</a> ';
		var_dump($_SESSION['user_id']);
	}elseif(isset($_SESSION['user_id'])){
		echo '	 <a href="" class="btn btn-default">ログアウト</a> ';
	}
	
	echo ' </header> ';//ヘッダーend