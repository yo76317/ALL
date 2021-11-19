
<h3>編輯會員資料</h3><br>
<form action="./api/api_edit_user.php?user=<?=$_SESSION['user'];?>" method="post">
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="select * from `account` , `member` 
               where `account`.`id`=`member`.`id` && 
               `account`.`account`='{$_SESSION['user']}';";

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