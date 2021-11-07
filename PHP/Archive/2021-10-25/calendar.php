<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table{
    width:500px;

}
</style>
<body>
    <h1>線上月曆</h1>
    <?php
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