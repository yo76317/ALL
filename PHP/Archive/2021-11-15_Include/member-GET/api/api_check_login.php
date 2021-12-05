<?php

// 範本一
/* $account=$_POST['account'];
$password=$_POST['password']; */

// 跳過來會帶入$_POST兩個值來判斷
// $sql="SELECT count(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";

// 以下封印
//echo $sql;
//SELECT * FROM `account` WHERE `account`='$_POST['account']' && `password`='$_POST['password']'

// $dsn="mysql:host=localhost;charset=utf8;dbname=member";
// $pdo=new PDO($dsn,'root','');

// 以下封印
/* echo "<br>";
$result=$pdo->query($sql);
var_dump($result);
echo "<br>"; */

// $result=$pdo->query($sql)->fetchColumn();

// 以下封印
// 這是登入後判斷帳號正確去那裡，錯誤去那裡
// if($result>0){
//     header("location:../dashboard.php");
// }else{
//     header('location:../index.php?err=1');
    // err=1 會輸出"帳號或密碼錯誤，請重新登入"
// }




// 範本二
// 跳過來會帶入$_POST兩個值來判斷
$sql="SELECT count(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";

$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$result=$pdo->query($sql)->fetchColumn();


// 登入後，跳轉到指定網址
if($result>0){
    header("location:../dashboard.php?user=".$_POST['account']); //網址後輸出加上資料庫帳號
}else{
    header('location:../index.php?err=1'); //err=1 是帳號密碼錯誤訊息
}

?>