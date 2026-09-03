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
	$name = htmlspecialchars($_POST['ten']);
	echo 'Xuat thong tin <br/>';
	echo 'Xin chao sinh vien';
	echo $name;
?>
</p>

    
</body>
</html>