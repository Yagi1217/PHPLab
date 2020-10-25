<?php
  $to = 'masayuki.yagi@xerotta.com';
  $subject = 'test mail';
  $message = "This is Test mail¥nMulti Line";
  $message = wordwrap($message, 70, "¥r¥n");
  $headers = 'From: <送信元のアドレス>'."¥r¥n".
             'To: <送信先のアドレス>'."¥r¥n".
             'X-Mailer: PHP/' . phpversion();
  if (mail($to, $subject, $message, $headers, '<送信元サーバー>')){
    print('成功');
  }else{
    print('エラー');
  }
?>
