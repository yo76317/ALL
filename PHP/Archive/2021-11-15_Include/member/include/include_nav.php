<?php
if(isset($_SESSION['user'])){
?>
  
  <style>
    .del{
            background:grey;
            color:#EEE;
            float:right;
    }

  </style>


<nav>
        <a href="index.php">回首頁</a>
        <a href="content.phpaction=dashboard">會員中心</a>
        <a href="chang_pw.php">修改密碼</a>
        <a href="content.phpaction=edit_user">編輯會員資料</a>
        <a href="logout.php">登出</a>
        <a class="del" href="./del_alert.php">刪除帳號</a>
</nav>
<?php  }else{  ?>
<nav>
        <a href="index.php">回首頁</a>
        <a href="content.php?action=forgot">忘記密碼</a>
        <a href="content.php?action=reg.php"><button>註冊新會員</button></a>    
</nav>
<?php }  ?>