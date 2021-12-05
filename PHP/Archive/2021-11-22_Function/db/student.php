<?php include_one "db.php";?>

<?php

$stu=find('member',10);
echo $stu['id'];

?>