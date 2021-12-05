<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//当前显示的年份
$year=$_GET['y']?$_GET['y']:date('Y');
//当前显示的月份
$month=$_GET['m']?$_GET['m']:date('m');
//当前月好多天
$days=date('t',strtotime("$year-$month-1"));
//当前月1号是周几
$week=date('w',strtotime("$year-$month-1"));

if($month==1){
    $preyear=$year-1;
    $premonth=12;
}else{
    $preyear=$year;
    $premonth=$month-1;
}
if($month==12){
    $nextyear=$year+1;
    $nextmonth=1;
}else{
    $nextyear=$year;
    $nextmonth=$month+1;
}

//万年历表格
echo "<h2>".$year."年".$month."月</h2>";
echo "<table width='50%' border='1px'>";
echo "<tr>";
echo "<td>周日</td>";
echo "<td>周一</td>";
echo "<td>周二</td>";
echo "<td>周三</td>";
echo "<td>周四</td>";
echo "<td>周五</td>";
echo "<td>周六</td>";
echo "</tr>";
for($i=1-$week;$i<=$days;){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i>$days || $i<1){
            echo "<td>&nbsp;</td>";
        }else{
            echo "<td>$i</td>";
        }
        $i++;
    }
    echo "</tr>";
}
echo "</table>";
echo "<a href='test.php?y=$preyear&m=$premonth'>上一月</a>";
echo "<a href='test.php?y=$nextyear&m=$nextmonth'>下一月</a>";
echo "<br/>";
?>
</body>
</html>