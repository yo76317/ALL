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
    /* display:inline-block; */
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
}
.dayoff{
    background-color:red;
}
</style>
</head>
<body>

<?php
$specialDate=['2021-11-19'=>'打莫德納疫苗','2021-11-22'=>'交作業'];
//特殊日期



$openDay=date("Y-m-01"); //起始日期
$month=date("m"); //m數字月份
$weekDay=date("w",strtotime($openDay)); //w星期幾.數字.日=0~6
$monthDays=date("t",strtotime($openDay)); //t指定的月份有幾天
$oneWeekDay=7-$weekDay; // 這星期天數 = 7-今天是星期幾
$weeks=ceil(($weekDay+$monthDays)/7); //小數就進位,(今天星期幾+天數)除7 = 這個月有幾週
$lastWeekDays=($weekDay+$monthDays)%7; //最後一週天數 = (今天星期幾+月份天數)%7的餘數
$lastWeekWhiteDays=7-$lastWeekDays; //7-最後一週天數=剩下空白日子
$allCells=($weeks+1)*7; //(這個月週數+1)*7 = 這週的格子



//陣列中加入首列資料
$td=['周日','周一','周二','周三','周四','周五','周六'];

//月前空值
for($i=0;$i<$weekDay;$i++){
    $td[]="";
}
//決定當月有幾周
for($i=0;$i<$monthDays;$i++){ 
    $td[]=($i+1);
}
//最後日子加上空值
for($i=0;$i<$lastWeekWhiteDays;$i++){
    $td[]="";
}
?>

<div class="calendar">
<?php

for($i=0;$i<$allCells;$i++){ //週數格子35
    if(is_numeric($td[$i])){
        $date=date("Y-m-").$td[$i];
        $w=date("w",strtotime($date));
    }

    if($w==0 || $w==6){

        echo "<div class='dayoff cell'>";
    }else{

        echo "<div class='cell'>";
    }


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