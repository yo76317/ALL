<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>天干地支年</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>天干地支年</h1>
    <?php
    //1984 甲子年
    $sky=[ '甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸',];
    $land=[ '子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥', ];
    $zodiac=[];
    for($i=0;$i<60;$i++){
        $zodiac[]=$sky[$i%10] . $land[$i%12];
    }

    echo "<pre>";
    print_r($zodiac);
    echo "</pre>";
    $tt=[];
    for($i=0;$i<60;$i++){
        $tt[1984+$i]=$zodiac[$i];

    }
    echo "<pre>";
    print_r($tt);
    echo "</pre>";

    echo $tt['2021'] . '年';
    ?>
</body>
</html>