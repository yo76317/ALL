<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <?php include "../member-GET/include/include_head.php";?>
<!-- include 可以放在所有地方，這邊是載入php引用css -->
</head>
<body>
    
    <nav>
        <?php
            if(isset($_GET['err'])){
            echo "帳號或密碼錯誤，請重新登入";
            }
        ?>
        <a href="reg.php"><button>註冊新會員</button></a>
        <a href="login.php"><button>點我登入</button></a>
    </nav>

    <?php include "./include/include_header.php";?>
 <?php include "./include/include_nav.php";?>
 <?php include "./include/include_side_bar.php";?>






 <?php include "./include/include_footer.php";?>
</body>
</html>