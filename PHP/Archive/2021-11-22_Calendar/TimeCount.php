<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
date_default_timezone_set('Asia/Taipei');

echo "當前時間: ".time().'<br>'; //現在時間戳
$tomorrow=time()+(60*60*24);
echo "明天時間: ".$tomorrow.'<br>';
echo "今天日期是: ".date('Y-m-d').'<br>';
echo "指定日期是: ".date('Y-m-d',time()).'<br>';

$WeekSeconds=time()+(24*60*60*7); //24h*60m*60s*7d
echo "下周日期是: ".date('Y-m-d',$WeekSeconds).'<br>';

$nowtime=time();
$waittime=time()-(24*60*60*7);
$WeekSecondsend=$nowtime-$waittime;
echo "一周秒數: ".$WeekSecondsend.'<br>';

echo "指定時間: ".$timea = '2012-11-14 21:16:16'.'<br>';// 指定時間

echo "strtotime(+1 days,)加一天: ".strtotime("+1 days",).'<br>';
echo "開始的秒數: ".strtotime('2021-11-20').'<br>';
echo "結束的秒數: ".strtotime('2021-11-21').'<br>';
echo "開始-結束(秒): ".$gap=(strtotime('2021-11-21')-strtotime('2021-11-20')).'<br>';
echo "開始-結束(天): ".$gap=(strtotime('2021-11-21')-strtotime('2021-11-20'))/(24*60*60).'<br>';

echo "<hr>"



?>
</body>
</html>