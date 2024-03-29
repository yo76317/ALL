<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=file_uploade";
$pdo=new PDO($dsn,'root','');

//判斷網址是否有帶參數do來決定要進行何種資料撈取語法
//假如有do就執行switch分別代表1.2.3
if(isset($_GET['do'])){
    switch($_GET['do']){
        case 1:
            // 數字之外都是單引號 (字串)
            $rows=$pdo->query("select * from users where status='2'")->fetchAll();
            break;
        case 2:
            // 數字之外都是單引號 (字串)
            $rows=$pdo->query("select * from users where status='1'")->fetchAll();
        break;
        case 3:
            // 數字之外都是單引號 (字串)
            $rows=$pdo->query("select * from users where status='0'")->fetchAll();
        break;
    }
        // w+適合在完全無檔時,創檔案
        //建立檔案資源
        $file=fopen('result.csv','w+');

        //建立bom檔頭，解決window下excel在開啟utf8檔案時，中文亂碼問題
        $bom= chr(239) . chr(187) . chr(191);
    
        //將bom寫入檔頭
        fwrite($file,$bom);
}else{  
    //如果網址沒有do，則只做顯示全部資料，不製作檔案匯出
    $rows=$pdo->query("select * from users")->fetchAll();
}

echo "<ul>";
foreach($rows as $key => $row){
    echo "<li>";    
    echo $row[0].",".$row[1].",".$row[2].",".$row[3];
    echo "</li>";
    
    //如果有建立下載檔案,則將資料依照csv格式寫入到檔案中
    if(isset($file)){
        fwrite($file,$row[0].",".$row[1].",".$row[2].",".$row[3]."\r\n");
    }

}
echo "</ul>";
//如果有建立下載檔案，則在最後要記得關閉檔案資源
if(isset($file)){
    fclose($file);
}
?>

<a href="?do-1">下載已施打一劑名單</a>&nbsp;&nbsp;
<a href="?do-2">下載已施打二劑名單</a>&nbsp;&nbsp;
<a href="?do-3">未施打名單</a>

<?php

// 如果它是存在才顯示出來,讓你能下載
if(file_exists('result.csv')){
    echo "<a href='result.csv' download>下載檔案</a>";
}
?>