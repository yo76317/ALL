<?php
// $c=rand(65,90);
// echo chr($c)."<br>";
// 只有第一個字會轉成第一個字元
// echo "A=>" . ord('A');


// 英文大小寫及數字組合
// 每次產生字串在4~8字元之間
// 每次產生的排列順序，不固定

$str="jypqg";
$length=rand(4,8);
 for($i=0;$i<$length;$i++){
$type=rand(1,3);
// echo "type=>".$type."<br>";
switch($type){
    case 1:
    // 大寫英文
    $str.=chr(rand(65,90));
    break;

    case 2:
    // 小寫英文
    $str.=chr(rand(97,122));
    break;

    case 3:
    // 數字
    $str.=chr(rand(48,57));
    break;
}
}

echo $str."<br>";

$padding=10;
// 字型範圍邊框 (字大小,角度大小,字體位址,度量字符)
// 左下,右下,右上,左上
$fontBox=imagettfbbox(30,0,'E:\Dropbox\Operation\PHP\php_file_and_graphic\font\comici.ttf',$str);

// imagettfbbox回來的數組
$x_array=[$fontBox[0],$fontBox[2],$fontBox[4],$fontBox[6]];
$y_array=[$fontBox[1],$fontBox[3],$fontBox[5],$fontBox[7]];

// 最大X-最小X 最大Y-最小Y = 0,0
$fw=(max($x_array)-min($x_array));
$fh=(max($y_array)-min($y_array));

// 字體加在padding=10 
$w=$fw + $padding;
$h=$fh + $padding;

// imagecreatetruecolor 建一個圖像大小 (width,height)
$dstimg=imagecreatetruecolor($w,$h);

// imagecolorallocate 顏色 ($image,顏色RGB)
$white=imagecolorallocate($dstimg,200,200,180);
$black=imagecolorallocate($dstimg,0,0,0);
// imagefill 區域填充($image,x,x,color)
imagefill($dstimg,0,0,$white);


echo "w=>".$w."<br>";
echo "h=>".$h."<br>";

// 拉下來所以加上padding/2(間隔的一半)+ X=0-最小X Y=字體總高-最大的Y
$start_x=$padding/2+(0-min($x_array));
$start_y=($padding/2)+$fh-max($y_array);


// 指定字型 ($image,siez,angle,x,y,color,字體路逕,度量字串)
imagettftext($dstimg,30,0,$start_x,$start_y,$black,'E:\Dropbox\Operation\PHP\php_file_and_graphic\font\comici.ttf',$str);

echo "<pre>";
print_r($fontBox);
echo "</pre>";


// imagefill($dstimg,0,0,$white);
// for($i=0;$i<$length;$i++){
//     $c=mb_substr($str,$i,1);
//     imagestring($dstimg,5,(10+$i*rand(15,20)),(10+rand(0,10)),$c,$black);
// }
imagepng($dstimg,'captcha.png');
?>
<!-- 載入圖片 -->
<img src="captcha.png" alt="">