<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$id=$_POST['id'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$birthday=$_POST['birthday'];

// 更新的sql語法;
$sql_account="UPDATE `account` SET `mail`='$mail' WHERE `id`='$id'";
$sql_member="UPDATE `member` SET `address`='$address',`mobile`='$mobile',`birthday`='$birthday' WHERE `id`=$id'";

// 執行更新   PDO => 更新exec (不是用query,fetch,拿取會是空值)
$pdo->exec($sql_account);
$pdo->exec($sql_member);

// 跳轉指定網址，加上?讓網址後面顯示USER={$_GET['user']};
header("location:../dashboard.php?user={$_GET['user']}");


?>