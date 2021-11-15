<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>書名</h3>
<form action='api/get/book/1' method='GET'>
    <input type='text' name='book' value=''>
    <input type='submit' value='送出'>

    <form action='api/get/book/1' method='POST' enctype='multipart/form-data'>
    <input type='text' name='book' value=''>
    <input type='submit' value='送出'>
    
</form>
</form>  
</body>
</html>