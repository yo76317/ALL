<?php

// if($_FILES['file']['error']==0)
if(!empty($_FILES['csv']['tmp_name'])){
    // 使用時間加MD5做編碼
    $filename=md5(time());
    


    // 先抓檔名
    $subname=explode(".",$_FILES['csv']['name'])[1];
    // 抓副檔名 
    $newFileName=$filename.".".$subname;

    /* 這邊是用先抓file name，再用explode file name
    比較清楚的做法
    $subname=$_FILES['file']['name'];
    $subname=explode(".",$subname); */

    // explode 另一種做法 炸開後用key值[1]拿副檔名
    // $subname=explode(".",$_FILES['csv']['name'])[1];
    
    // filename + 副檔名 賦值給 newFileName
    // $newFileName=$filename.".".$subname;

    // 先印出看檔名知道每個變數結果
    echo "new=>".$newFileName."<br>";
    echo "tmp_name=>".$_FILES['csv']['tmp_name']."<br>";
    echo "fileOrignName=>".$_FILES['csv']['name']."<br>";

    // 把檔案傳到那裡  file + newFileName(長編碼)
    move_uploaded_file($_FILES['csv']['tmp_name'],"file/".$newFileName);

    // 檔案放在這個地方
    // echo "<a href='file/{$newFileName}'>{$_FILES['csv']['tmp_name']}</a>";

    // 假如檔案是txt 或 csv 
    // 就使用自訂函數,saveToDB看起來專業一點
    if($subname=='txt' || $subname=="csv"){
        saveToDB("file/".$newFileName);
    }
}

echo "<hr>";

// 自訂涵數
// fopen(filename,mode,include_path,context)
function saveToDB($file){
    echo "得到檔案".$file."<br>";
    echo "準備進行資料處理作業..."."<br>";

    $dsn="mysql:host=localhost;charset=utf8;dbname=file_uploade";
    $pdo=new PDO($dsn,'root','');

    // fopen打開檔案 , r+ 讀寫,指向檔案開頭
    $resource=fopen($file,'r+');
    $count=0;
    $success=0;
    // feof 函數檢測是否到文件末尾
    while(!feof($resource)){
        // fgets 取得一行,完成指針才會動一格
        $str=explode(",",fgets($resource));
        echo "<pre>";
        print_r($str);
        echo "</pre>";

    // $str執行到4時 加上 count>0 (跑到第二圈才會執行sql)
   if($count>0 && count($str)==4){
    $sql="INSERT INTO `users`(`num`,`name`,`gender`,`status`) VALUES 
                ('{$str[0]}', '{$str[1]}', '{$str[2]}', '{$str[3]}')";
         // INSERT INTO `users` (`num`, `name`, `gender`, `status`) VALUES (NULL, '', '', '')
        $pdo->exec($sql);
        echo "已寫入".implode(",",$str)."到資料表";
        $success++;
        }
        $count++;


        // 文件指針中讀取一行
        // echo fgets($resource)."<br>";
        
    }
 
    //關閉檔案
    fclose($resource);

    echo "<br>一共處理了".($count)."筆資料<br>";
    echo "<br>總共成功寫入了了".($success)."筆資料<br>";

}
    // 判斷檔案結尾

    // 新增檔案內容,要記得加斷行
    // fwrite($resource,"6,man,男,1,\r\n");

    // 檔案開啟後，最後自然要關閉,比較完整
  

?>