<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            width:500px;
            margin:auto;
            padding:20px;
            border:1px solid black;
        }
        td{
            padding:5px;
            text-align: center;
            border:1px solid black;
        }
        .holiday{background:pink;} 
    </style>
</head>
<body>
    <h1>線上月曆</h1>
    <?php

/*     $firstDay=date("Y-m-01");
    $month=date("m"); */
    $firstDay=date("Y-m-d");  //年月日
    $month=date("m");  //月
    $monthDays=date("t",strtotime($firstDay));  //每月的天數
    $firstWeekWhiteDays=date("w",strtotime($firstDay));  //星期的第幾天為第一天
    $firstWeekDays=7-$firstWeekWhiteDays;  // 7天-星期第幾天=第一週天數6
    $weeks=ceil(($firstWeekWhiteDays+$monthDays)/7); //(星期的第幾天+月)/7=4.4第一週的天數ceil進位求天花板=5
    $lastWeekDays=($firstWeekWhiteDays+$monthDays)%7; //星期的第幾天+月/7 =4.4%求餘數=4 最後剩4天
    $lastWeekWhiteDays=7-$lastWeekDays;
    echo "年月日".$firstDay;
    echo "<br>";   
    echo "當前月".$month;
    echo "<br>";
    echo "每月天數".$monthDays;
    echo "<br>";
    echo "星期的第幾天為第一天".$firstWeekWhiteDays;
    echo "<br>";
    echo "第一週天數".$firstWeekDays;
    echo "<br>";
    echo "4.4用ceil求天花板=".$weeks;
    echo "<br>";
    echo "最後一週天數=".$lastWeekDays;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    
    echo "</tr>";
    for($i=0;$i<$weeks;$i++){ //決定當月有幾周
        echo "<tr>";
        if($i==0){
            //印空白日
            for($k=0;$k<$firstWeekWhiteDays;$k++){

                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            }
            
            for($l=0;$l<$firstWeekDays;$l++){
                
                echo "<td>";
                echo $i*7+$l+1;
                echo "</td>";
            }
            
        }elseif($i==$weeks-1){
            for($m=0;$m<$lastWeekDays;$m++){
                
                echo "<td>";
                echo $i*7+$m+1-$firstWeekWhiteDays;
                echo "</td>";
            }
            for($n=0;$n<$lastWeekWhiteDays;$n++){
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            }

        }else{

            for($j=0;$j<7;$j++){
                
                echo "<td>";
                echo $i*7+$j+1-$firstWeekWhiteDays;
                echo "</td>";
    
            }
        }
        echo "</tr>";   
    }
    echo "</table>";
    ?>
</body>
</html>