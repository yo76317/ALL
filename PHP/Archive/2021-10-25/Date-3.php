<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>計算離自己生日還有幾天</h1>
<span>開始日期:2021-10-25</span><br>
<span>結束日期:2022-03-17</span>
<hr>
<?php
date_default_timezone_set('asia/taipei'); //時區會影響判斷(最後的秒數)
echo "現在時間".strtotime('2021-10-25');
echo"<br>";
echo "生日時間".strtotime('2022-03-17');

$gapdays=(strtotime('2022-03-17')-strtotime('2021-10-25'))/(24*60*60);
echo "<br>下次生日還要" . $gapdays."天";


?>
</body>
</html>