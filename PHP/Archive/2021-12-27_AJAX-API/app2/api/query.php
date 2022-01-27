<?php
include_once "base.php";
// 處理查詢資料的請求
$q=$_GET['q'];
// %放前面，代表後面要有q  ， 如果%放後面，代表前面要有q ， 都放就前後都q
$rows=$Stu->q("SELECT * from students WHERE `name` like '%$q%'");
echo json_encode($rows);
?>