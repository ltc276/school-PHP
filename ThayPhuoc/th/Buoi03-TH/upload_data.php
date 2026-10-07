<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" enctype="multipart/form-data">
  <label for="textfield">File cần tải lên:</label>
  <input type="file" name="file" id="upload" multiple>
  <input type="submit" name="sbupload" id="up" value="upload">
</form>
<?php
include("myclass/file.php");
$p=new uploadfile();
?>

<?php
if(isset($_POST['sbupload']))
{
    switch($_POST['sbupload'])
    {
        case 'upload':
        {
            $name = $_FILES['file']['name'];
            $name = time() . "_" . $name;

            $tmp_name = $_FILES['file']['tmp_name'];

            if($p->upfile($name, $tmp_name, "data") == 1)
            {
                echo 'Upload file thanh cong';
            }
            else 
            {
                echo 'Khong thanh cong';
            }

            break;
        }
    }
}
?>
</body>
</html>
