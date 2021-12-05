<?php
//暫存，跟1.2是一樣的

// echo"<pre>";
// print_r(all('account'));
// echo"</pre>";

$rows=all('account');

foreach($rows as $row){ 
    echo $row['id']."-".$row['account']."<br>";
}

function all($table){
    //熟記
    $dsn="mysql:host=localhost;charset=utf8;dbname=member";
    $pdo=new PDO($dsn,'root','');

    //      查詢     從  function的變數
    $sql="SELECT * FROM `$table`";
    //function的變數 = pdo -> 詢問($sql) -> 可把電腦自行編碼去除
    $rows=$pdo->query($sql)->fetchall(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();
}
?>