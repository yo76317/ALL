<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建立陣列</title>
    <link rel="stylesheet" href="./style.css">
<body>
<h1>陣列基本款全給值</h1>
<?php
$naem=[];
$subject=['國文','英文','數學','地理','歷史'];
$name['judy']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['amo']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['john']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['peter']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['hebe']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];

echo "<pre>";
print_r($name);
echo "</pre>";


print_r($name['judy']);
$students=array_keys($name);
echo "</pre>";

print_r($subject);
echo "judy的國文成績為".$name['judy']['國文']."分";





?>
</body>
</html>