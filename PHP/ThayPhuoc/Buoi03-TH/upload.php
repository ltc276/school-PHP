<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
<p>
Chọn file cần upload: </br>
</p>
<input type="file" id="myfile" name="myfile" /></br>
<input type="submit" name="sbupload" value="upload"/>
</form>
<?php
if(isset($_POST["sbupload"])){
	echo '<pre>'.var_dump($_FILES["myfile"]).'</pre>'.'</br>';
	
}

?>

    
</body>
</html>