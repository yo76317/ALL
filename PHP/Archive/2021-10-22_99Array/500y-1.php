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
    $year=2021;
for($i=$year;$i<=($year+500);$i++){
    if($i % 400 == 0 || ($i % 4 == 0 && $i % 100 !=0))
    $leaps[]=$i;
}

echo "<pre>";
print_r($leaps);
echo "</pre>";

// 以上是求出五百年閏年次數 //

if(in_array(2151,$leaps)){
    echo 2151 . "是閏年";
}else{echo 2151 . "不是閏年";

}




?>
</body>
</html>