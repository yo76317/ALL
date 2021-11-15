<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建立陣列</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1>陣列基本款</h1>
<?php
$naem=[];
$subject=['國文','英文','數學','地理','地理','歷史'];
$name['judy']=[95,64,70,90,84];
$name['amo']=[95,64,70,90,84];
$name['john']=[95,64,70,90,84];
$name['peter']=[95,64,70,90,84];
$name['hebe']=[95,64,70,90,84];

echo "<pre>";
print_r($name);
print_r($subject);
echo "</pre>";

print_r($name['judy']);

echo "judy的國文成績為".$name['judy'][0]."分";





?>


<!-- <h3>一維陣列</h3> -->
</body>
</html>