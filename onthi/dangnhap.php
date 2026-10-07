<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php

?>
<body>
    <div class="container">
        <div class="main">
             <nav>
                    <ul>
                    <li><b>Menu</b></li>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                    <li><a href="dangky.php">Đăng ký</a></li>
                    </ul>
            </nav>
            <div class="content">
                <form action="xulydangnhap.php" method="post">
                <table>
                    <h1>TRANG ĐĂNG NHẬP</h1>
                    <tr>
                        <td>Tài khoản</td>
                        <td><input type="text" name="taikhoan"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td><input type="text" name="matkhau"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                    <input type="submit" value="Đăng nhập">
                    </td>
                    </tr>
                </table>
                </form>

            </div>

        </div>
    </div>
    
</body>
</html>