<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $mail_to = $email;
  $title = 'ユーザー本登録のお知らせ';
  $contents = '本文：'.$email.'様、imitationcomへのご参加ありがとうございます。
  ニックネームとパスワードの設定を行いますので、下記URLにアクセスして変更手続きを進めてください。

  http://6101.web-seito.com/imitationcom/login/newuser.php?token='.$token.'

  もしこのメールに心当たりがなければ無視してください。';

  if(mb_send_mail($mail_to,$title,$contents)){
    $alertMessage = '<div class="alert alert-success">'.$email.'へ本登録メールを送信しました。</div>';
  }else{
    $alertMessage = '<div class="alert alert-success">'.$email.'へ本登録メールを送信できませんでした。</div>';
  }
  // '<div class="alert alert-success">'.$alertMessage.'</div>'
?>