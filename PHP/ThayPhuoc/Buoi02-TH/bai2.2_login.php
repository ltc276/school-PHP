 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="nhanbien2.2.php">
	<p>
		Email: <input type="text" name="txtemail" value="<?php echo $email ?>"/></br>
		Password: <input type="text" name="txtpassword" value="<?php echo $password ?>"/></br>
		<input type="submit" name="sbdangnhap" value="Dang nhap"/>
	</p>
	</form>
</body>
</html>