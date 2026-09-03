
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" enctype="multipart/form-data">
  <label for="textfield">File cần tải lên:</label>
  <input type="file" name="file[]" id="upload" multiple>
  <input type="submit" name="sbupload" id="up" value="upload">
</form>
<?php
include("myclass/file.php");
?>
<?php
if(isset($_REQUEST["sbupload"])){
	 var_dump($_FILES['file']);
	}


?>
</body>
</html>