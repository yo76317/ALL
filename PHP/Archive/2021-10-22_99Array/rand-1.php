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
<h1>亂數</h1>
<h1></h1>

<?php
//echo radn(1,38);

$nums=[];
for($i=0;$i<6;$i++){
$t=rand(1,38);  //$nums[]=rand(1,38);
    if(!in_array($t,$nums)){   //in_array 比對值有才回傳
        $nums[]=$t;
    }
}
echo "<pre>";
print_r($nums);
echo "</pre>";


?>
</body>
</html>