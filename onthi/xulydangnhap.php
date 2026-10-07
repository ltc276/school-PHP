<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $taikhoan="abc@gmail.com";
    $matkhau="123";
    $tk=$_POST["taikhoan"];
    $mk=$_POST["matkhau"];
    if($tk==$taikhoan && $mk==$matkhau){
        echo "Bạn đã đăng nhập thành công, chức mừng";

    }
    else{
        echo "Sai tài khoản hoặc mật khẩu";
    }
    ?>

    
</body>
</html>