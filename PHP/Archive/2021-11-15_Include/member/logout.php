<?php

session_start();
unset($_SESSION['user']);

// 回首頁
header("location:index.php");


?>