<?php
    function pdo($dbname){
        $dsn="mysql:host=localhost;charset=utf8;dbname=$dbname";
        return=new PDO($dsn,'root','');
    }




?>