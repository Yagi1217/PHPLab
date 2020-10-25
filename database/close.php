<?php
  $close_flag = mysqli_close($link);
  if ($close_flag){
      print('<p>切断に成功しました。</p>');
  }
?>
