<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("include.php");?>


<h2>簡易</h2>
<p>
    $arr = array("A","B","C");<br>
    print_r($arr);<br>
    echo "< br>";
    print_r($arr[0]);<br>
    echo "< br>";
    print_r($arr[1]);<br>
    echo "< br>";
    print_r($arr,true); //不印<br>
    echo "< br>";
    $result=print_r($arr,true);  //轉換變數後<br>
    echo $result; //竟然會印<br>
</p>
    <?php
    $arr = array("A","B","C");
    print_r($arr);
    echo "<br>";
    print_r($arr[0]);
    echo "<br>";
    print_r($arr[1]);
    echo "<br>";
    print_r($arr,true); //不印
    echo "<br>";
    $result=print_r($arr,true);  //轉換變數後
    echo $result; //竟然會印
    ?>


    <hr>


    <h2>Indexed 索引式</h2>
      <p> $A = array("one","two","three");<br>
      print_r($A);<br>
      echo "br";<br>
      echo $A[0];<br>
      </p>
    <?php
    $A = array("one","two","three");
    print_r($A);
    echo "<br>";
    echo $A[0];
    ?>


<hr>

<h2>Associative 關聯式</h2>
    <p> $age=array("chen"=>"10y","yo"=>"20y","qing"=>"30y");<br>
    print_r($age);<br>
    echo "br";<br>
    echo $age["chen"];<br>
    </p>
  <?php
    $age=array("chen"=>"10y","yo"=>"20y","qing"=>"30y");
    print_r($age);
    echo "<br>";
    echo $age["chen"];
  ?>


<hr>

<h2>count() 獲取陣列組長度(幾個值) </h2>
    <p>$A = array("one","two","three");<br>
      echo count($A);<br>
    </p>
    <?php
    $A = array("one","two","three");
    echo count($A);
    ?>


<hr>

<h2>[] 索引陣列</h2>
    <p>$name = array("chen","yo","qing");<br>
    echo $name[0]."_".$name[1]."_".$name[2];<br>
    
    </p>
    <?php
    $name = array("chen","yo","qing");
    echo $name[0]."_".$name[1]."_".$name[2];
    ?>


<hr>


<h2>索引陣列印all數值</h2>
    <p> 
    $name = array("chen","yo","qing");<br>
    $arrlength = count($name);<br>
    <br>
    for($x=0;$x<$arrlength;$x++){<br>
      echo $name[$x];<br>
    } <br>
    </p>
    <?php
    $name = array("chen","yo","qing");
    $arrlength = count($name);

    for($x=0;$x<$arrlength;$x++){
      echo $name[$x];
    }
    ?>


<hr>


<h2>二維</h2>
    <p>    
    </p>
    <?php
$name1 = [
  ["chen",10,10,],
  ["yo",20,20],
  ["qing",30,30]
  ];
YO($name1);
    ?>


<hr>


<h2>二維-改key且帶值，應用度高</h2>
    <p>平常用兩個陣列才能取兩值，二維變成只要一個陣列就能取雙值<br> 
      < ?php<br>
      $car = <br>
      [<br>
      ['id'=>'A','age'=>"10",'color'=>'blue'],<br>
      ['id'=>'B','age'=>"20",'color'=>'yellow'],<br>
      ['id'=>'C','age'=>"30",'color'=>'red']<br>
      ];<br>
      <br>
      YO($car);<br>  
      ?><br>
      <br>
      < ?php foreach($car as $key => $value6): ?><br>
      < h2 style="color:< ?= $value6['color']; ?>"> h2 < /h2><br>
      < ?php; ?><br>
      <br>
      < h2 style="color:< ?= $car[2]['color']; ?>"> h2 < /h2><br>
      </p>
    <hr>
    <?php
$car = 
      [
      ['id'=>'A','age'=>"10",'color'=>'blue'],
      ['id'=>'B','age'=>"20",'color'=>'yellow'],
      ['id'=>'C','age'=>"30",'color'=>'red']
      ];
      
YO($car);
?>

<?php foreach($car as $key => $value6): ?>
  <h2 style="color:<?= $value6['color']; ?>"> h2 </h2>
  <?php endforeach; ?>
  
  <h2 style="color:<?= $car[0]['color']; ?>"> h2 </h2>


  <hr>


<h2>二維陣列加foreach</h2>
    <p>跟上面一樣，再練習一次   
    </p>
    <?php
    $agee=["chen"=>'10',"yo"=>'20',"qing"=>'30'];
    print_r($agee);
    echo "<br>";
    echo $agee["chen"]."<br>";
    
    foreach ($agee as $na=>$value7):
      echo "name=".$na." 和 "."age=".$value7;
      echo "<br>";
    endforeach;
    ?>


<hr>


<h2></h2>
    <p>    
    </p>
    <?php
$eat=['id'=>'apple']
    ?>


</body>
</html>