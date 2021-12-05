<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <?php include "./include/include_head.php"; ?>
<!-- include 可以放在所有地方，這邊是載入php引用css -->
</head>
<body>
    
    <nav>
        <?php
            if(isset($_GET['err'])){
            echo "帳號或密碼錯誤，請重新登入";
            }
        ?>

<?php
        if(isset($_SESSION['user'])){
         ?>
            <a href="dashboard.php"><button>會員中心</button></a>
        <?php
        }else{   
?>


        <a href="reg.php"><button>註冊新會員</button></a>
        <a href="login.php"><button>點我登入</button></a>
        <?php
        }
        ?>
    </nav>


<?php include "./include/include_footer.php"; ?>
</body>
</html>