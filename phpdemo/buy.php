<?php
session_start();
    if(!isset($_SESSION["user"])){
        header('location:login.php');
    }
    else
        header('location:cart.php')
?>
<center><strong>Xin hãy đăng nhập để có thể mua hàng</strong></center>