<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
	<?php
	$email="";
	$password="";
	$repassword="";
	$hoten="";
	$phone="";
	if(isset($_POST['sbdangky'])){
		$email=$_POST['txtemail'];
		$password=$_POST['txtpassword'];
		$repassword = $_POST['txtrepassword'];
		if ($email == "" || $password == ""){
			echo "Điền thông tin vào !!!";
		}
		else if ($password != $repassword){
			echo "Nhập lại mật khẩu sai !!!";
		}
		else {
			echo "Đăng ký thành công";
		}
	}
?>
</p>

    
</body>
</html>