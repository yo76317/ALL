<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>日期與時間</h1>

<h2>給兩日期，計算中間間隔天數</h2>
<span>開始日期:2021-10-1</span><br>
<span>結束日期:2021-11-3</span>
<hr>
<?php

date_default_timezone_set('asia/taipei'); //時區會影響判斷(最後的秒數)
echo "開始秒數".strtotime('2021-10-1');
echo"<br>";
echo "結束秒數".strtotime('2021-11-3');

$gapdays=(strtotime('2021-11-3')-strtotime('2021-10-1'))/(24*60*60);
echo "<br>間隔" . $gapdays."天";


?>
</body>
</html>