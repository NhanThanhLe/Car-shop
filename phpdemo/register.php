<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang ky</title>
</head>
<body align ="center">
    <h1>Đăng ký thành viên</h1>
    <p><?php if(isset($_SESSION["thongbao"])){
        echo $_SESSION["thongbao"];
        unset($_SESSION['thongbao']);
        }?></p>
    <form action="register_submit.php" method="POST">
        <table align ="center">
            <tr>
                <td><input type="text" placeholder="Tên đăng nhập" name="username"></td>    
            </tr>
            <tr>
                <td><input type="password" placeholder="Mật khẩu" name="password"></td>
            </tr>
            <tr>
                <td><input type="password" placeholder="Xác nhận mật khẩu" name="repassword"></td>
            </tr>
        </table>
            <tr colspan="2">
                <td></td>
                <td><button type="submit" name="submit">Đăng ký</button></td>
            </tr>
    </form> 
</body>
</html>