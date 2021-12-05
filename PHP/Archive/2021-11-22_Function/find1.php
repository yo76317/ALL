<?php
echo "<pre>";
print_r(find('member',12));
echo "</pre>";

function find($name1,$name2){
    $dsn="mysql:host=localhost;charset=utf8;dbname=member";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$name1` WHERE `id`='$name2'";
    //希望是回傳自己使用return
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
?>