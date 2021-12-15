<?php

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
<h1 class="header">文字檔案匯入練習</h1>
<!---建立檔案上傳機制--->
<form action="csv_upload.php" method="post" enctype="multipart/form-data">
     <p><input type="file" name="csv" id="csv"></p>
     <p><input type="submit" value="上傳"></p>
 </form>

<!----讀出匯入完成的資料----->



</body>
</html>