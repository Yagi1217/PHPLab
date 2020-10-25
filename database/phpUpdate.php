<?php
  //SQLサーバー接続
  include "./pdo.php";
  
  print('<p>データを更新します。</p>');
  $id = 5;
  $name = 'デジタルカメラ';
  if (!is_numeric($name)) {
      $name = mysqli_real_escape_string($link, $name);
      $name = "'" . $name . "'";
  }
  $sql = sprintf("UPDATE shouhin SET name = %s WHERE id = %s", ($name), ($id));
  $result_flag = mysqli_query($link, $sql);
  if (!$result_flag) {
      die('UPDATEクエリーが失敗しました。'.mysqli_error($link));
  }
  print('<p>更新後のデータを取得します。</p>');
  $result = mysqli_query($link, 'SELECT id,name FROM shouhin');
  if (!$result) {
      die('SELECTクエリーが失敗しました。'.mysqli_error($link));
  }
  while ($row = mysqli_fetch_assoc($result)) {
      print('<p>');
      print('id='.$row['id']);
      print(',name='.$row['name']);
      print('</p>');
  }

  //SQLサーバー切断
  include "./close.php";
?>
