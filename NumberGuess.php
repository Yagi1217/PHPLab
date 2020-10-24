<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);
?>
<html>
<head><title>Number Guess</title></head>
<body bgcolor="white">
<h2>「１～１００」の数当てゲーム</h2>
    乱数で設定された「１～１００」の数字を当てて下さい。<br>
<?php
  $cnt = filter_input( INPUT_POST, "cnt" );
  $num = filter_input( INPUT_POST, "num" );
  $ans = filter_input( INPUT_POST, "ans" );

  if (!isset($cnt))   $cnt= -1;
  if ($cnt==-1)       $num= rand(1,100);

  $cnt++;

  if ($cnt>0) {
    print("応答回数： $cnt<br>");
    if ($num==$ans){
    echo("正解です！！<br>");
    $cnt= -1;
  }
  else  if ($num<$ans) echo("もっと小さな値です!!<br>");
  else  echo("もっと大きな値です!!<br>");
}
?>
  <form action="num.php" method="post">
  What's your Guess?
  <input type=text name=ans>
  <input type=submit value="Submit">
<?php
  print("<input type=\"hidden\" name=cnt value=\"$cnt\">");
  print("<input type=\"hidden\" name=num value=\"$num\">");
?>
  </form>
</body>
</html>
