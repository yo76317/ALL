<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <?php include "./include/include_head.php"; ?>
</head>
<body>
<!-- include外部導入 -->
<?php include "./include/include_header.php"; ?>
<?php include "./include/include_nav.php"; ?>
<?php include "./include/include_side_bar.php"; ?>


<div class="content">
<h3>會員中心<h3>
    <!-- 抓取網址上的user -->
<?=$_GET['user'];?>歡迎你: 

<?php
// 連接資料庫 member
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
// pdo 登入
$pdo=new PDO($dsn,'root','');
// 設$變數 = select查循 * from從 `資料表1`,`資料表2` where條件 `資1`.的`id` =等於 `資2`.的`id` &&和 `資1`.的`account`=等於'{$_GET['user']}這段是抓取網址上的user;
$sql="SELECT * FROM `account`,`member` WHERE `account`.`id` = `member`.`id` && `account`.`account`='{$_GET['user']}'";
$user=$pdo->query($sql)->fetch(); //多Fetch


?>
個人資料:
<li>帳號:<?=$user['account'];?></li>
<li>帳號:<?=$user['address'];?></li>
<li>帳號:<?=$user['mobile'];?></li>
<li>帳號:<?=$user['mail'];?></li>
<li>帳號:<?=$user['birthday'];?></li>

</div>
<?php include "./include/include_footer.php"; ?>
</body>
</html>