<?php
/****
 * 1.建立資料庫及資料表
 * 2.建立上傳圖案機制
 * 3.取得圖檔資源
 * 4.進行圖形處理
 *   ->圖形縮放
 *   ->圖形加邊框
 *   ->圖形驗證碼
 * 5.輸出檔案
 */

// 檔案有無上傳成功,有就繼續,沒有就停
if(isset($_FILES['img']['tmp_name'])){
    // 把圖檔存到img資料夾
    move_uploaded_file($_FILES['img']['tmp_name'] , 'img/'.$_FILES['img']['name']);
    // 判斷檔案是什麼檔
    // 不同圖形格式用不同方式打開
    // im(路徑.)
    switch($_FILES['img']['type']){
        case "image/jpeg":
            $srcimg=imagecreatefromjpeg('img/'.$_FILES['img']['name']);
            break;
        case "image/png":
            $srcimg=imagecreatefrompng('img/'.$_FILES['img']['name']);
            break;
        case "image/gif":
            $srcimg=imagecreatefromgif('img/'.$_FILES['img']['name']);
            break;
        case "image/bmp":
            $srcimg=imagecreatefrombmp('img/'.$_FILES['img']['name']);
            break;
    }

    // 印出變數的相關訊息
    // var_dump($img);
    
    // 目的地=建一個真彩色圖像 函數(x,y 寬高) 
    // $dstimg=imagecreatetruecolor(504,378);

    // 原始檔 邊 抓POST放大縮小
    $info=getimagesize('img/'.$_FILES['img']['name']);
    $scaleRate=$_POST['rate'];
    
    //目標檔案大小
    $dwidth=$info[0]*$scaleRate;
    $dheight=$info[1]*$scaleRate;

    
    if(isset($_POST['border'])){
        $border=ceil(($dwidth*0.1)/2);
    }else{
        $border=0;
    }
    
    //內嵌圖片大小
    $inner_w=$dwidth-($border*2);
    $inner_h=$dheight-($border*2);

    $dstimg=imagecreatetruecolor($dwidth,$dheight);
    $white=imagecolorallocate($dstimg,255,100,100);
    imagefill($dstimg,0,0,$white);
    
    imagecopyresampled($dstimg,$srcimg,$border,$border,0,0,$inner_w,$inner_h,$info[0],$info[1]);
    $filename='img/'.explode(".",$_FILES['img']['name'])[0]."_border.png";
    imagepng($dstimg,$filename);


    // 一.
    // 重採樣複製和調整圖像的一部分 dst目的地xy  src來源xy dst寬高 src寬高
    // imagecopyresampled($dstimg,$srcimg,0,0,0,0,504,378,2016,1512);
    // 兩個檔案 (正常+一個縮圖) name有副檔名 要先去掉
    // $filename='img/'.explode(".",$_FILES['img']['name'])[0]."_small.png";
    // 轉成png會加上副檔名 $filename
    // imagepng($dstimg,$filename);
        
    // 二
    // 定義顏色-black
    // $black=imagecolorallocate($dstimg,0,0,0);
    // 區域填充 左上角為0,0
    // imagefill($dstimg,0,0,$black);
    // 重覆拷貝部分圖像並調整大小
    // imagecopyresampled($dstimg,$srcimg,0,0,0,0,504,378,2016,1512);
    // $filename='img/'.explode(".",$_FILES['img']['name'])[0]."_border.png";
    // 輸出影像並存檔(轉png)
    // imagepng($dstimg,$filename);


}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文字檔案匯入</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="header">圖形處理練習</h1>
<!---建立檔案上傳機制--->
<form action="?" method="post" enctype="multipart/form-data">
    <!-- 有勾選時才會送到saver value -->
    <input type="checkbox" name="border" value="1">是否有邊框<br>
    <!-- 放大縮小 -->
    <select name="rate">
        <option value="2">放大成兩倍</option>
        <option value="0.5">縮小成一半</option>
        <option value="0.25">縮小成1/4</option>
    </select>
    <p><input type="file" name="img" id=""></p>
    <p><input type="submit" value="上傳"></p>
 </form>



<!----縮放圖形----->
<!-- 縮小後檔案還是一樣大,要加壓縮參數 -->
<?php
if(isset($_FILES['img']['name'])){
?>

<div>你上傳的圖片為:</div>
<img src='img/<?=$_FILES['img']['name'];?>'>

<div>縮放後成為:</div>
<img src='<?=$filename;?>'>

<?php
}
?>


<!----圖形加邊框----->


<!----產生圖形驗證碼----->



</body>
</html>