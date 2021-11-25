<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    
<style>
.cell{
    width:100px;
    height:50px;
    border:1px solid #999;
    margin:0;
    box-sizing:border-box;
}

.calendar{
    width:702px;
    height:352px;
    margin:auto;
    border:1px solid red;
    box-sizing:border-box;
    display:flex;
    flex-wrap:wrap;
    align-content:start;
    justify-content:start;
}

</style>
</head>
<body>


<?php
    $specialDate=['2021-11-15'=>'發薪水','2021-12-25'=>'聖誕節'];

    $firstDay=date("Y-m-01");
    $month=date("m");
    $firstWeekWhiteDays=date("w",strtotime($firstDay));
    $monthDays=date("t",strtotime($firstDay));
    $firstWeekDays=7-$firstWeekWhiteDays;
    $weeks=ceil(($firstWeekWhiteDays+$monthDays)/7);
    $lastWeekDays=($firstWeekWhiteDays+$monthDays)%7;
    $lastWeekWhiteDays=7-$lastWeekDays;
    $allCells=($weeks+1)*7;

    //陣列中加入首列資料
    $td=['周日','周一','周二','周三','周四','周五','周六'];
    //陣列中加入月前空白;
    for($i=0;$i<$firstWeekWhiteDays;$i++){
        $td[]="";
    }
    for($i=0;$i<$monthDays;$i++){ //決定當月有幾周
        $td[]=($i+1);
    }
   for($i=0;$i<$lastWeekWhiteDays;$i++){
        $td[]="";
    }

    ?>
<div class="calendar">
    
<?php


for($i=0;$i<$allCells;$i++){
    $date=date("Y-m-").($i+1);
    echo "<div class='cell'>";
    echo $td[$i];
    if(array_key_exists($date,$specialDate)){
        echo $specialDate[$date];
    }
    echo "</div>";
}

?>
</div>
</body>
</html>