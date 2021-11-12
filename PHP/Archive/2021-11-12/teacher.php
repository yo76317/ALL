<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');


$range=(isset($_GET['id']))?$_GET['id']:20;

$sql="select * from `students` where `id`< $range";
$rows=$pdo->query($sql)->fetchAll();

//echo $rows
//print_r($rows)
//var_dump($rows)


//$pdo=new PDO('資料庫的連線資訊','帳號','密碼','[其他參數]');

?>
<style>
    table{
        border: 3px double;
        border-collapse: collapse;
    }

    td {
        border: 1px solid black;
        padding: 5px 10px;
    }
    tr:nth-child(odd){
        background:lightgreen;
    }
    tr:nth-child(even){
        background:pink;
    }

</style>
<table>
    <tr>
        <td>學號</td>
        <td>座號</td>
        <td>姓名</td>
        <td>性別</td>
        <td>出生年月日</td>
        <td>畢業國中</td>
    </tr>


<?php
foreach($rows as $row){
    echo "<tr>";
    echo "<td>" . $row['uni_id']    . "</td>";
    echo "<td>" . $row['seat_num']  . "</td>";
    echo "<td>" . $row['name']      . "</td>";
    if(mb_substr($row['national_id'],1,1)==1){
        echo "<td>男生</td>";
    }else{
        echo "<td>女生</td>";

    }
    echo "<td>" . $row['birthday']  . "</td>";
    echo "<td>" . $row['secondary'] . "</td>";
    echo "</tr>";
}


?>
</table>