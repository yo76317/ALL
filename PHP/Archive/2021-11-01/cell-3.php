<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cell{width:50px;
        height:50px;
        border:1px solid black;
        display:inline-block;
        margin:0;
        box-sizing:border-box;
}

        .calendar{
            width:352px;
            height:352px;
            border:1px solid red;
            margin:auto;
            box-sizing:border-box;
            display:flex;
            flex-wrap:wrap;
        }
    </style>
</head>
<body>
    
<div class="calendar">
<?php
    $td=['日','一','二','三','四','五','六',
        ' ',1,2,3,4,5,6];
for($i=0;$i<49;$i++){
    if($i<14){
    echo "<div class='cell'>";
    echo $td[$i];
    echo "</div>";
}else{
    echo "<div class='cell'></div>";
}
}
?>
</div>
</body>
</html>