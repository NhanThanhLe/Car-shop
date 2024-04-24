<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
</head>
<body align ="center">
    <h1>Đăng nhập</h1>
    <p><?php if(isset($_SESSION["thongbao"])){
        echo $_SESSION["thongbao"];
        unset($_SESSION['thongbao']);
        }?></p>
    <form action="login_submit.php" method="POST">
        <table align ="center">
            <tr>
                <td><input type="text" placeholder="Tên đăng nhập" name="username"></td>
            </tr>
            <tr>
                <td><input type="password" placeholder="Mật khẩu" name="password"></td>
            </tr>
        </table>
            <tr colspan ="2">
                <td></td>
                <td>
                    <button type="submit" name="submit">Đăng nhập</button>
                    <button><a href="register.php"style="text-decoration: none" >Đăng ký</a></button>
                </td>
            </tr>
    </form>
</body>
</html>