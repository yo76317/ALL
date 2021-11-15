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
        }
    </style>
</head>
<body>
    
<div class="calendar">
<?php
for($i=0;$i<49;$i++){
    echo "<div class='cell'></div>";
}

?>
</div>
</body>
</html>