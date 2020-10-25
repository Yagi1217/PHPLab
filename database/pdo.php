<?php
  $link = mysqli_connect('localhost', 'testuser', 'testuser', 'uriage');
  $link->set_charset(‘utf8‘); //コードセット設定
  if(mysqli_connect_errno() > 0){
      echo '接続に失敗しました';
      exit;
  }
  print('<p>接続に成功しました。</p>');
  $result = mysqli_query($link, "SELECT * FROM shouhin");
  if (!$result) {
      die('クエリーが失敗しました。'.mysqli_error($link));
  }
?>
