<?php
  //SQLサーバー接続
  include "./pdo.php";
  
  while ($row = $result->fetch_assoc()) {
      print('<p>');
      print('id='.$row['id']);
      print(',name='.$row['name']);
      print('</p>');
  }
  print('<p>データを追加します。</p>');
  $sql = "INSERT INTO shouhin (id, name) VALUES (4, 'プリンター')";
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
