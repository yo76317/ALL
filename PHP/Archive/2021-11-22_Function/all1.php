<?php
//呼叫function all 把account代入$table
$rows=all('account');

//跑全部的陣列 $row 在這邊公式是前面多加s  所以是($rows as $orw)
foreach($rows as $row){ 
    echo $row['id']."-".$row['account']."<br>";
    //輸出  row的id  字串   row的account
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