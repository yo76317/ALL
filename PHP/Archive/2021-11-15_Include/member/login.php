<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <?php include "./include/include_head.php"; ?>
</head>
<body>
<?php include "./include/include_header.php"; ?>
<?php include "./include/include_nav.php"; ?>



<?php
if($_GET['action']!='login'){
    include "./include/include_side_bar.php"
}
?>

<div class="content">
<?php
    $action=(isset($_GET[]))


<!-- 改用代參數組合 -->
<!-- 
< ?php
 switch($_GET['action']){
    case "login":
        include "./frontend/login.php";
        break;
    case "edit_user":
        include "./frontend/edit_user.php";
        break;
    case "dashboard":
        include "./frontend/dashboard.php";
        break;
    case "reg":
        include "./frontend/reg.php";
        break;
    }
 
? > -->

</div>

<?php include "./include/include_footer.php"; ?>
</body>
</html>