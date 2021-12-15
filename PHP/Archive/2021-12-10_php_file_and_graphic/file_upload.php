<?php

// if($_FILES['file']['error']==0)
if(!empty($_FILES['file']['tmp_name'])){
    // 使用時間加MD5做編碼
    $filename=md5(time());
    


    // 先抓檔名
    $subname=$_FILES['file']['name'];
    // 抓副檔名 
    $subname=explode(".",$subname);

    /* 這邊是用先抓file name，再用explode file name
    比較清楚的做法
    $subname=$_FILES['file']['name'];
    $subname=explode(".",$subname); */

    // explode 另一種做法 炸開後用key值[1]拿副檔名
    $subname=explode(".",$_FILES['file']['name'])[1];
    
    // filename + 副檔名 賦值給 newFileName
    $newFileName=$filename.".".$subname;

    // 先印出看檔名知道每個變數結果
    echo "new=>".$newFileName."<br>";
    echo "tmp_name=>".$_FILES['file']['tmp_name']."<br>";
    echo "fileOrignName=>".$_FILES['file']['tmp_name']."<br>";

    // 把檔案傳到那裡  file + newFileName(長編碼)
    move_uploaded_file($_FILES['file']['tmp_name'],"file/".$newFileName);
}

?>