<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>date格式化參數</h1>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<hr>
<?php
    echo date("Y/m/d")
?>
<hr>
<?php
    echo date("m月j日 l")
?>
<hr>
<?php
echo date("Y-m-d H:i:s")
?>
<hr>
<?php
echo date("Y-n-j H:i:s")
?>
<hr>
<?php
$date=date("今天是西元Y年m月d日");
    if(date("N")<=6){
        echo $date . "<br>今天要上班...";
    }else{
            echo $date . "今天假日,睡吧";
        }
?>
<hr>
<h2>strtotime應用</h2>
<h3>時間的平移</h3>
<?php
date_default_timezone_set('Asia/Taipei');
        $now=strtotime("now");
        echo $now;
        echo "<br>";
        echo date("Y-m-d H:i:s");
        echo "<br>";
        $tomorrow=strtotime("+1 days");
        echo "明天".date("Y-m-d H:i:s",$tomorrow);
        echo "<br>";
        $tomorrow=strtotime("-1 days");
        echo "昨天".date("Y-m-d H:i:s",$tomorrow);
        echo "<br>";
        $nextMonth=strtotime("+1 month");
        echo "下個月".date("Y-m-d H:i:s",$nextMonth);
        echo "<br>";
        ?>
<hr>
<h2>strtotime應用</h2>
<h3>利用迴圈來計算連續五個周一的日期</h3>
<?php
$weekStr=['星期天','星期一', '星期二', '星期三', '星期四', '星期五', '星期六',];
$base='2021-10-4';
$basetime=strtotime($base);
//echo date("Y-m-d",$basetime). " " . $weekStr[date("w",$basetime)]; 這是跑一天一次，下面是跑七天一次
for($i=0;$i<5;$i++){
    $secs=strtotime("+".($i*7). " days" ,$basetime);
    echo date("Y-m-d",$secs). " " .$weekStr[date("w",$secs)];  
    echo "<br>";
}


?>
</body>
</html>