 <?php  // 前端帳號密碼送來，檢查是否正確

$acc='chen';
$pw='1234';

if($acc==$_POST['acc'] && $pw==$_POST['pw']){
    //$_SESSION['user']=$_POST['acc']; 
    //設一個狀態，直接看卡鐘狀態
    setcookie('user',$_POST['acc'],time()+3600);
    //成功就導到使用者中心
    header("location:mem_center.php");  // header導向、領導、領頭羊
}else{
    header("location:index1.php?status=err");
}

?>