<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>五百年的閏年</h1>

<?php
    $year=2022;
    if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 !=0)){
        echo "西元".$year . "是閏年";
    }else{echo "西元".$year . "不是閏年";}
?>
</body>
</html>