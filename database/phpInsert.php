<?php
  //SQLサーバー接続
  include "./pdo.php";
  
  $id = 5;
  $name = "Toyama's Wine";

  if (!is_numeric($name)) {
      $name = mysqli_real_escape_string($link, $name);
      $name = "'" . $name . "'";
  }
  $sql = "INSERT INTO shouhin (id, name) VALUES ($id, $name)";
  print('<p>エスケープ後のデータ:'.$name.'</p>');
  $result_flag = mysqli_query($link, $sql);
  if (!$result_flag) {
      die('INSERTクエリーが失敗しました。'.mysqli_error($link));
  }
  print('<p>追加後のデータを取得します。</p>');
  $result = mysqli_query($link, 'SELECT id,name FROM shouhin');
  if (!$result) {
      die('SELECTクエリーが失敗しました。'.mysqli_error($link));
  }
  while ($row = $result->fetch_assoc()) {
      print('<p>');
      print('id='.$row['id']);
      print(',name='.$row['name']);
      print('</p>');
  }

  //SQLサーバー切断
  include "./close.php";
?>
