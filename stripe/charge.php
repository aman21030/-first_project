<?php
	// ダウンロードしたStripeのPHPライブラリのinit.phpを読み込む
require_once dirname(__FILE__).'/stripe_charge/init.php';

// APIのシークレットキー
\Stripe\Stripe::setApiKey('sk_test_dqXIwesR43vlRjbk55xvXISz00v52mJiEs');

$chargeId = null;

try {
    // (1) オーソリ（与信枠の確保）
    $token = $_POST['stripeToken'];
    $charge = \Stripe\Charge::create(array(
        'amount' => 500,
        'currency' => 'jpy',
        'description' => 'test',
        'source' => $token,
        'capture' => false,
    ));
    $chargeId = $charge['id'];

    // (2) 注文データベースの更新などStripeとは関係ない処理
    
    require_once dirname(__FILE__) . '/../includes/require.php';
		$conn = new DbConn();

		$user_id = $_POST['user_id'];
		$seminar_id = $_POST['seminar_id'];
		$payment_method = 1;

    $sql  = ' INSERT INTO payment ';
    $sql .= ' VALUES ("", "'.$user_id.'", "'.$seminar_id.'", "'.$payment_method.'", CURRENT_TIMESTAMP)';
    $conn->fetch($sql);

    // (3) 売上の確定
    $charge->capture();

    // 購入完了画面にリダイレクト
    header("Location: ./complete.php");
    exit;
} catch(Exception $e) {
    if ($chargeId !== null) {
        // 例外が発生すればオーソリを取り消す
        \Stripe\Refund::create(array(
            'charge' => $chargeId,
        ));
    }

    // エラー画面にリダイレクト
    header("Location: ./error.php");
    exit;
}
?>