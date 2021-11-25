<?php
//三角形星星函式
stars(5);  

function stars($row){
for($j=1;$j<=$row;$j++){
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    }

    for($i=0;$i<(2*$j-1);$i++){
        echo "*";
    }
    echo"<br>";
}
}
?>