<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>字串取代</h1>
    <h3>將”aaddw1123”改成”*********”</h3>
    <?php
    $str='aaddw11223';
    echo str_repeat("*",10);
    echo "<hr>"
    echo str_repeat("*",strlen($str));
    echo "<hr>"
    echo str_teplace('a',"*",$str);
    echo "<hr>"
    echo str_replace(['a','b','w','1','2','3'],'*',$str);
    
    $array=[]
    for($i=0;$i<strlen($str);$i++;){
        echo substr($str,$i,1);
        echo"<br>";

    $array=[]
    for($i=0;$i<strlen($str);$i++;){
        echo substr($str,$i,1);
        if(!in_array($s,$array)){
            $array[]=$s;
        }
    }
    echo str_replace([$array,'*',$str);
    ?>
</body>
</html>