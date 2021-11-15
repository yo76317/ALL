<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>字串取代</h1>
    <h3>將”aaddw1123”改成”*********”</h3>
    <?php
    $str='today is a good day';
     echo  str_repeat("*",strlen($str));

    echo "<hr>";

    $array=[];
    for($i=0;$i<strlen($str);$i++){
        /* echo $str[$i]; */
        $s=substr($str,$i,1);
        if(!in_array($s,$array)){
            $array[]=$s;
        }
    }
    echo str_replace($array,'*',$str);
    ?>

</body>
</html>