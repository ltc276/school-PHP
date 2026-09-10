<?php
include("myclass/clsontap.php");
$p= new ontap();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tải file</title>
</head>

<body>

<form action="" method="post" enctype="multipart/form-data">

    Chọn file
    <input type="file" name="myfile" id="myfile" />
    <input type="submit" name="nut" id="nut" value="Tải lên" />

<?php

if(isset($_POST['nut']))
{
    switch($_POST['nut'])
    {
        case 'Tải lên':
        {
            $name = $_FILES['myfile']['name'];
            $tmp_name = $_FILES['myfile']['tmp_name'];
            $size=$_FILES['myfile']['size'];
            if($name!=''&& $size>0){

            
            if($p->uploadfile($name, $tmp_name, "dulieu")==1){
              echo 'Upload file thành công';

            }
            else {
              echo 'Upload file thất bại ';
            }
            }
            else {
              echo 'Vui lòng chọn file khác';
            }


            break;
        }
    }
}

?>

</form>

</body>
</html>