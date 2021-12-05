<?php
$account=$_POST['account'];

// $password=md5(['password']);
$password=($_POST['password']);
// 盡量用MD5


// 前面順序可隨意，後面要對前面順序
$mail=$_POST['mail'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$birthday=$_POST['birthday'];

$sql_account="insert into `account`(`account`,`password`,`mail`) values('$account','$password','$mail')";
$sql_member="insert into `member`(`name`,`address`,`mobile`,`birthday`) values('$name','$address','$mobile','$birthday')";


// 聯接資料庫
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');


// 執行寫入資料表的動作
echo $pdo->exec($sql_account);
echo $pdo->exec($sql_member);

// 查看有無成功謝入資料庫echo出來
echo $sql_account;
echo "<hr>";
echo $sql_member;
echo "<hr>";

// header("location:../index.php");
// 這是轉指向頁面 header("Refresh:1;url=../index.php")
?>