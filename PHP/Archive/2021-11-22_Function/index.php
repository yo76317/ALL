<?php
// 範本1 第一行hello呼叫第二行的function
//然後第一行的變數aaa代入到第二行的($name)
//執行hello的內容也就是第三行
//所以會輸出 字串hello + $name(這裡是第一行的aaa)
// hello aaa
hello("aaa");
function hello($name){
    echo "hello  ".$name;
}































?>