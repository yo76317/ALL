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
<h1>九九乘法表</h1>
<?php
$nine=[];

for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
    $nine[]="$j X $i =" . ($j*$i);
    }
}

for($i=0;$i<count($nine);$i++){  // count 
    echo $nine[$i];
    if($i%9==8){   //if(($i+1)%9==0)
        echo "<br>";
    }
}
?>
</body>
</html>