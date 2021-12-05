<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯會員資料
    </title>
    <?php include "./include/include_head.php"; ?>
</head>
<body>
    
<?php include "./include/include_header.php"; ?>
<?php include "./include/include_nav.php"; ?>
<?php include "./include/include_side_bar.php"; ?>

<div class="content">
<h3>編輯會員資料</h3><br>
<form action="./api/api_edit_user.php?user=<?=$_GET['user'];?>" method="post">
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="select * from `account` , `member` 
               where `account`.`id`=`member`.`id` && 
               `account`.`account`='{$_GET['user']}';";

// echo $sql;
$user=$pdo->query($sql)->fetch();
?>


    <!-- <p>id: < ?=$user['id'];?>
    <input type="hidden" id="id" name="id" value="<?=$user['id'];?>"></p>

    <label for="address">地址:</label><br>
    <input type="text" id="address" name="address"><br>

    <label for="mobile">電話:</label><br>
    <input type="text" id="mobile" name="mobile"><br>

    <label for="mail">mail:</label><br>
    <input type="text" id="mail" name="mail"><br>

    <label for="birthday">生日:</label><br>
    <input type="date" id="birthday" name="birthday"><br><br>

    <input type="submit" value="送出修改"> -->
   
    
<p>id:<?=$user['id'];?><input type="hidden" name="id" value="<?=$user['id'];?>"></p>
<p>地址: <input type="text" name="address" value="<?=$user['address'];?>"></p>
<p>電話: <input type="text" name="mobile" value="<?=$user['mobile'];?>"></p>
<p>mail: <input type="text" name="mail" value="<?=$user['mail'];?>"></p>
<p>生日: <input type="text" name="birthday" value="<?=$user['birthday'];?>"></p>
<p><input type="submit" value="修改"></p>

</form>
</div>

<?php include "./include/include_footer.php"; ?>
</body>
</html>