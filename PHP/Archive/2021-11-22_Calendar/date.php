<?php
        $date=date("今天是西元Y年m月d日")."<br>";
        $now="今天是";

        if(date("N")>=6){
            echo $date . $now ."假日"."<br>";
        }else{
            echo $date . $now ."上班日"."<br>";
        }

        $date=date("今天是西元Y年m月d日");
        echo date("N");
    ?>