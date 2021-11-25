<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <link rel="stylesheet" href="./monthlyCalendar.css";>
    
</head>
<body>
<?php
//年
$year=$_GET['y']?$_GET{'y'}:date('Y',time());
//月
$month=$_GET['m']?$_GET['m']:date('n',time());
//總天數
$days=date('t',strtotime("$year-$month-1"));
//一號是星期幾
$week=date('w',strtotime("$year-$month-1"));

//月>12,年+1.月=1
if($month==1){
    $preyear=$year-1;
    $premonth=12;
}else{
    //下一年跟下一月
    $preyear=$year;
    $premonth=$month-1;
}
//月<1，年-1.月=12
if($month==12){
    $nextyear=$year+1;
    $nextmonth=1;
}else{
    //下一年跟下一月
    $nextyear=$year;
    $nextmonth=$month+1;
}
?>

<div class="th1">
<h1>monthly calendar</h1>
<h3><?php echo $year ?> - <?php echo $month ?></h3>
</div>

<div class="date2">
<!-- <a href="./index.php?year=2021&amp;month=10">前一個月</a> -->
<!-- <a href="./index.php?year=2021&amp;month=12">下一個月</a> -->
<a href="index.php?year=<?php echo $prevYear ?>&month=<?php echo $prevMonth ?>">上一月</a>
<a href="./index.php">當月</a>
<a href="index.php?year=<?php echo $nextYear ?>&month=<?php echo $nextMonth ?>">下一月</a>
    
</div>



<?php
$specialDate=['2021-11-19'=>'打莫德納疫苗','2021-11-22'=>'交作業']; //特殊日期

$openDay=date("Y-m-01"); //起始日期
$month=date("m"); //m數字月份
$weekDay=date("w",strtotime($openDay)); //w星期幾.數字.日=0~6
$weekDay2=date("l",strtotime($openDay)); //l完整的文本格式
$monthDays=date("t",strtotime($openDay)); //t指定的月份有幾天
$oneWeekDay=7-$weekDay; // 這星期天數 = 7-今天是星期幾
$weeks=ceil(($weekDay+$monthDays)/7); //小數就進位,(今天星期幾+天數)除7 = 這個月有幾洲
$lastWeekDays=($weekDay+$monthDays)%7; //最後一週天數 = (今天星期幾+月份天數)%7的餘數



    //標頭
    echo "<table>";
    echo "<tbody>";
    echo "<tr>";
    echo "<th>日</th>";
    echo "<th>一</th>";
    echo "<th>二</th>";
    echo "<th>三</th>";
    echo "<th>四</th>";
    echo "<th>五</th>";
    echo "<th>六</th>";
    echo "</tr>";
    
    //表格
    for($i=0;$i<$weeks;$i++){  //這個月有幾週weeks=5
        
        if($i==0){  //假如i等於0
            for($k=0;$k<$weekDay;$k++){
                //今天星期幾之前的都印空白
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            }

            for($l=0;$l<$oneWeekDay;$l++){ //第一週天數
                $date=date("Y-m-").($i*7+$l+1); //date輸出日期格式 年月
                $w=date('w',strtotime($date)); //strtotime轉換成秒，再用date轉換成星期中的第幾天，0跟6是假日

                
                //檢查$specialDate內有無$date日期,有的話上css($sp='special) 沒有就空值
                if(array_key_exists($date,$specialDate)){ 
                    $sp='special';
                }else{
                    $sp='';
                }

                if($w==0 || $w==6){
                    echo "<td class='dayoff $sp'>"; 
                }else{
                    echo "<td class='$sp'>";
                }

                echo $i*7+$l+1; // 0+第一週第一天0.1.2.3.4.5
                echo "<br>";
                if(!empty($sp)){
                    echo $specialDate[$date];
                }
                echo "</td>";
            }
        
        }elseif($i==$weeks-1){ //0.1.2.3.4
            for($m=0;$m<$lastWeekDays;$m++){  //最後一週天數
                $date=date("Y-m-").($i*7+$m+1-$weekDay); //date輸出日期格式 年月.星期幾
                $w=date('w',strtotime($date)); //轉換
                if(array_key_exists($date,$specialDate)){
                    $sp='special';
                }else{
                    $sp='';
                }
                if($w==0 || $w==6){
                    echo "<td class='dayoff $sp'>";
                }else{
                    echo "<td class='$sp'>";
                }
                echo $i*7+$m+1-$weekDay; //i代表第5*7加上去，第五週0.1.2
                echo "<br>";

                //檢查$specialDate內有無$date日期,有的話上css($sp='special) 沒有就空值
                if(!empty($sp)){
                    echo $specialDate[$date];
                }
                echo "</td>";
            }
            for($n=0;$n<$lastWeekDays;$n++){  
                //最後一週天數，之後都印空白
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            }

        }else{
            for($j=0;$j<7;$j++){  //7週
                $date=date("Y-m-").($i*7+$j+1-$weekDay); //同上只是用星期幾，date輸出日期格式 年月.星期幾
                $w=date('w',strtotime($date));//轉換

                //檢查$specialDate內有無$date日期,有的話上css($sp='special) 沒有就空值
                if(array_key_exists($date,$specialDate)){
                    $sp='special';
                }else{
                    $sp='';
                }

                if($w==0 || $w==6){
                   echo "<td class='dayoff $sp'>";
                }else{
                    echo "<td class='$sp'>";
                }
                echo $i*7+$j+1-$weekDay; //i代表第2*7 & 3*7 & 4*7 加上去，第二.三.四週0.1.2.3.4.5.6 

                echo "<br>";
                if(!empty($sp)){
                    echo $specialDate[$date];
                }
                echo "</td>";
            }
        }
        echo "</tr>";   
    }
    echo "</tbody>";
    echo "</table>";
    
echo "<div>";
//echo "起始日期: ".$openDay."<br>";
echo "這個月是: ".$month."月"."<br>";
echo "今天是星期幾: ".$weekDay2."<br>";
echo "這個月總天數: ".$monthDays."天"."<br>";
//echo "第一週的天數: ".$oneWeekDay."<br>";
//echo "這個月有幾週: ".$weeks."<br>";
//echo "最後一週天數: ".$lastWeekDays."<br>";
echo "</div>";
?>

</body>
</html>