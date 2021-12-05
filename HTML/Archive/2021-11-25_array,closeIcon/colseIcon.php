<?php
$arr=["第一行 key=0",
    "第二行 key=1",
     "第三行 key=2",
     "第四行 key=3",
     "第五行 key=4",
];
?>

<?php
$color1=["black",
        "yellow",
        "red",
        "green",
        "gray",
];
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>


</style>
<body>
    <div class="container-fluid">


        <!-- foreach 會依array裡面的值有幾項而代入幾次 -->
        <?php
        print_r($arr);
        echo "<br>";
        print_r($color1);
        ?>


        <?php foreach ($arr as $key => $value):?>

            <div class="alert alert-primary col" role="alert">
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
            </button>

       <!-- <h3 style="color:yellow"> id 3 del </h3> 這是css原碼樣子 -->
            <h3 style="color:<?=$color1[$key]?>"> <?= $value; ?> </h3>

            </div>
        <?php endforeach;?>

<hr>

                <!-- row佔一行，並且加上button按鈕功能data-dismiss消失 -->
                <!-- role 無障礙閱讀,不加也可以但閱讀障礙的人就看不到 -->
    <div class="row">
        <div class="alert alert-primary col" role="alert">
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
            A simple primary alert—check it out!
        </div>
        <div class="alert alert-info col" role="alert">
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
            A simple info alert—check it out!
          </div>
    </div>

                <!-- 單行佔6格 -->
    <div class="col-6">
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
            A simple info alert—check it out!
          </div>
    </div>



<?php include("include.php");?>
<?php
$yovalue=[
['id'=>"A",'color'=>"black"],
['id'=>"B",'color'=>"yellow"],
['id'=>"C",'color'=>"red"],
['id'=>"D",'color'=>"green"],
['id'=>"E",'color'=>"gray"],
];
?>

    <h2>二維陣列取數值</h2>
    <p>改了key及帶數值 foreach </p>
<?php
YO($yovalue);
?>

<?php foreach ($yovalue as $key => $value5):?>

    <div class="alert alert-primary col">
        <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span>
        </button>

       <!-- <h3 style="color:yellow"> id 3 del </h3> 這是css原碼樣子 -->
            <h3 style="color:<?= $value5['color'] ?>"> <?= $value5['id']; ?> </h3>

            </div>

<?php endforeach;?>


</body>

</html>