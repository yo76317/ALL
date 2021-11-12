<?php
$yo76317="mysql:host=localhost;charset=utf8;dbname=yo76317";
$pdo=new PDO($yo76317,'root','');


$range=$_GET['id']; 
//如果有帶ID值在網址，就可以代入語法↓

// $range=(isset($_GET['id']))?$_GET['id']:20;
// 如果網址有ID就代入，沒ID的話就自己代入20 . 三元運算式

$sql="select * from `students` where `id`< $range";
$rows=$pdo->query($sql)->fetchAll();

// echo $rows  
//陣列會不能轉字符

// echo "<pre>";
// print_r($rows);
// echo "</pre>";

// echo "<pre>";
// var_dump($rows);
// echo "</pre>";

// $pdo=new PDO('資料庫的連線資訊','帳號','密碼','[其它參數]');
?>

<!-- foreach($rows as $row){
echo $row['name']."<br>";}
把rows換orw，印出row裡的name -->

<table>
    <tr>
        <td>學號<td>
        <td>座號</td>
        <td>姓名</td>
        <td>性別</td>
        <td>出生年月日</td>
        <td>畢業國中</td>
    </tr>
    <?php
foreach($rows as $row){
    echo "<tr>";
    echo "<td>" . $row['uni_id']."</td>";
    echo "<td>" . $row['seat_num<']."</td>";
    echo "<td>" . $row['name']."</td>>";
    if(mb_substr($row['national_id'],1,1)==1){ //ID欄位0.1第1個位置.長度1 等於1就
        echo "<td>男生</td>";
    }else{
        echo "<td>女生</td>";
    }
    echo "<td>" . $row['birthday']."</td>";
    echo "<td>" . $row['secondary']."</td>";
    echo "</tr>";
    ?>
</table>