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

date_default_timezone_set('asia/taipei');
echo date ("Y-m-d h:i:s");
echo"<br>";
echo date("Y-m-d h:i:s",0);
echo"<br>";
echo strtotime('19870-1-1 01:00:00')



?>
</body>
</html>