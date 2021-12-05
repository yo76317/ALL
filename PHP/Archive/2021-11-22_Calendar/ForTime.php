<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strtotime應用</title>
</head>
<body>
    <h1>strtotime應用</h1>
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
    ?>

    <h1>利用迴圈來計算連續五個周一的日期</h1>
    <div>
    例:
        <ol>
            <li>2021-10-04 星期一</li>
            <li>2021-10-11 星期一</li>
            <li>2021-10-18 星期一</li>
            <li>2021-10-25 星期一</li>
            <li>2021-11-01 星期一</li>
        </ol>
    </div>

    <?php
        echo "days"."<br>";
        echo date("w",time())."<br>";

        $weekStr=['星期天','星期一','星期二','星期三','星期四','星期五','星期六'];
        $base='2021-10-04';
        $basetime=strtotime($base);

        //echo date("Y-m-d",$basetime). " " . $weekStr[date("w",$basetime)];

    

        for($i=0;$i<5;$i++){
            $secs=strtotime("+".($i*7)." days",$basetime);
            echo date("Y-m-d",$secs). " " . $weekStr[date("w",$secs)];
            echo "<br>";

        }

    ?>
</body>
</html>