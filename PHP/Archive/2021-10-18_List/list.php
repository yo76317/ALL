
<h2>使用for迴圈來產生以下的數列<br>
3,5,7,11,13,17……97</h2>
<?php

for($i=3;$i<100;$i=$i*2+1){
    $test=false; //表示質數

    for($j=2;$j<$i;$j++){
        if($i % $j ==0){
            $test=true;  //表示不是質數
        }
    }
    
    for($i=3;$i<100;$i=$i*2+1){
        echo $i , ",";
    }
}
?>