
<h3>會員中心<h3>
    <!-- 抓取網址上的user -->
    <?=$_SESSION['user'];?>歡迎你:<br>

<?php
// 連接資料庫 member
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
// pdo 登入
$pdo=new PDO($dsn,'root','');
// 設$變數 = select查循 * from從 `資料表1`,`資料表2` where條件 `資1`.的`id` =等於 `資2`.的`id` &&和 `資1`.的`account`=等於'{$_GET['user']}這段是抓取網址上的user;
$sql="SELECT * FROM `account`,`member` WHERE `account`.`id` = `member`.`id` && `account`.`account`='{$_SESSION['user']}'";
$user=$pdo->query($sql)->fetch(); //多Fetch


?>
個人資料:
<li>帳號:<?=$user['account'];?></li>
<li>帳號:<?=$user['address'];?></li>
<li>帳號:<?=$user['mobile'];?></li>
<li>帳號:<?=$user['mail'];?></li>
<li>帳號:<?=$user['birthday'];?></li>
