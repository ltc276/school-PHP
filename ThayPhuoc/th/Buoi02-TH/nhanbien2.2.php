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
	if(isset($_POST['sbdangnhap'])){
		$email=$_POST['txtemail'];
		$password=$_POST['txtpassword'];
		if($email=='abc@gmail.com' && $password=='123456'){ echo 'dang nhap thanh cong';}
		else {echo 'dang nhap khong thanh cong';}
		
	}
?>
</p>

    
</body>
</html>