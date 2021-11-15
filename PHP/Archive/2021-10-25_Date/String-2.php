<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $str='this,is,a,book';
        $array=explode(',',$str);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        $file="photo.jpg";
        $split=explode(".",$file);
        print_r($split);
        if($split[1]=='jpg' || $split[1]=='gif' || $split[1]=='png'){
            echo "是圖檔";
        }
        $newFileName='20211025'.rand(10000,99999).".".$split[1];
        echo "新檔名為:".$newFileName;
?>
<h2>字串組合</h2>
<h3>上列陣列再組合成"this is a book"</h3>
<?php
echo implode(" ",$array);
echo "<hr>";
echo join(" ",$array);
?>

</body>
</html>