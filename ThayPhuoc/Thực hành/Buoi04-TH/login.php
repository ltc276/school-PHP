<!DOCTYPE html>
<?php
include("myclass/clslogin.php");
$p = new login();
?>
<?php
session_start();
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session trong PHP</title>
</head>

<body>
<form method="post">
<table>
    <tr>
    <td>Nhập Username:</td>
    <td><input type="text" name="txtuser" id="txtuser"></td>
     <td>Nhập Password:</td>
    <td><input type="text" name="txtpass" id="txtpass"></td>
    <td><input type="submit" value="Gán" name="sbgan"></td>
    </tr>

</table>
</form> 
<h3>
   <?php
switch($_POST['sbgan']){
    case 'Gán':
        {
            $user=$_REQUEST['txtuser'];
            $pass=$_REQUEST['txtpass'];
            if($user!='' && $pass!=''){
                if($p->mylogin($user,$pass)==0)
                {
                    echo 'Đăng nhập không thành công vui lòng xem lại tài khoản hoặc mật khẩu';
                }
                else
                {
                    echo 'Vui lòng nhập đủ thông tin';
                }
                break;

            }
        }

}
?>
</h3>   
</body>
</html>