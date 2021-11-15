<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link rel="stylesheet" href="./syle01.css">
</head>

<body>
    <?php include "header.html"; ?>
    <!-- 可用函式() 或是空一格 去接檔名 -->

    <?php
    if(isset($_GET['do'])){
        include "nav.php";
    }
    ?>
    <!-- 在網頁尾加上?do=隨意數值 會呼叫DO出來 -->



    <?php include "div.php"; ?>
    <div class="body">
        file01的內容
    </div>

    <?php include "footer.php"; ?>

</body>

</html>