<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算距離自己下一次生日還有幾天</title>
</head>
<body>
    <h1>計算距離自己下一次生日還有幾天</h1>
    <div>我的生日03-17</div>
    <div>下一次生日2022-03-17</div>
    <?php
        date_default_timezone_set('Asia/Taipei');
        $now=strtotime('now');
        $nextBirthday=strtotime('2022-03-17');
        $gap=($nextBirthday-$now)/86400;

        echo floor($gap) . "天";
        echo "<br>";
        $year=floor(floor($gap)/365);
        echo $year;
        echo "<br>";
        $month=floor(floor(floor($gap)%365)/30);
        echo $month;
        echo "<br>";
        $days=floor(floor($gap)%365)%30;
        echo $days;
        echo "<br>";

        echo "<br>";
        echo "我的下次生日還有".$year."年".$month."月".$days."天";
    ?>
</body>
</html>