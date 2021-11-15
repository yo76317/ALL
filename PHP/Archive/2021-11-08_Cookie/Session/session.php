<?php
session_start();

$_SESSION['name']='yo';

echo $_SESSION['name'];

$_SESSION['students']=['A','B','C'];

?>