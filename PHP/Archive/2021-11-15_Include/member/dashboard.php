<?php
session_start();

// 增加對會員中心頁面的保護判斷exit以下不執行
if(!isset($_SESSION['user'])){
    header("location:index.php");
    exit();
  }

?>

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
    <?php include "./frontend/dashboard.php";?>
</div>
<?php include "./include/include_footer.php"; ?>
</body>
</html>