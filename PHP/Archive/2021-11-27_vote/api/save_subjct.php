<?php
include_once "../db.php";


// 資料表欄位名稱=>資料內容
$topic_array=['topic'=>$_POST['subject']];
insert('subject','topic_array');

?>