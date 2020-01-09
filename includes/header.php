<?php
session_start();

	echo ' <header> ';
	echo '	 <a href="http://6101.web-seito.com/imitationcom/"><img src="http://6101.web-seito.com/imitationcom/assets/img/seminar_illust.png" alt="ロゴ"></a> ';
	if(is_null($_SESSION['user_id'])){
		echo '	 <a href="http://6101.web-seito.com/imitationcom/login/index.php" class="btn btn-default">ログイン・新規登録</a> ';
	}elseif(isset($_SESSION['user_id'])){
		echo '	 <a href="" class="btn btn-default">ログアウト</a> ';
	}
	
	echo ' </header> ';//ヘッダーend