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
<?php include "./include/include_side_bar.php"; ?>

<div class="content">
<form action="./api/api_check_login.php" method="post">
<table id="loginForm">
    <tr>
        <td colspan='2'>
            會員登入
        </td>
    </tr>

    <tr>
        <td>
            帳號：
        </td>
        <td>
            <input type="text" name="account" id="">
        </td>
    </tr>

    <tr>
        <td>
            密碼
        </td>
        <td>
            <input type="password" name="password" id="">
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <input type="submit" value="登入">
            <input type="reset" value="重新輸入">
        </td>
    </tr>
</table>
</form>
</div>

<?php include "./include/include_footer.php"; ?>

</body>
</html>