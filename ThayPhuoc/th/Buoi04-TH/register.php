<?php
session_start();
error_reporting(E_ALL);
include("myclass/clsregister.php");
$p = new register();
$message = '';
if (isset($_POST['sbregister'])) {

    $user = $_POST['txtuser'];
    $pass = $_POST['txtpass'];
    $repass = $_POST['txtrepass'];

    if ($user != '' && $pass != '' && $repass != '') {

        $result = $p->myregister($user, $pass, $repass);

        if ($result == 0) {

            $message = 'Đăng ký thành công';

        } elseif ($result == 1) {

            $message = 'Mật khẩu nhập lại không đúng';

        } elseif ($result == 2) {

            $message = 'Tài khoản đã tồn tại';

        }

    } else {

        $message = 'Vui lòng nhập đầy đủ thông tin';

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <h2>FORM ĐĂNG KÝ</h2>
    <form method="post">
        <table>
            <tr>
                <td>Nhập Username:</td>
                <td>
                    <input type="text" name="txtuser" id="txtuser">
                </td>
            </tr>

            <tr>
                <td>Nhập Password:</td>
                <td>
                    <input type="password" name="txtpass" id="txtpass">
                </td>
            </tr>

            <tr>
                <td>Nhập lại Password:</td>
                <td>
                    <input type="password" name="txtrepass" id="txtrepass">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Đăng ký" name="sbregister">
                </td>
            </tr>

        </table>

    </form>
    <h3>
        <?php echo $message; ?>
    </h3>
</body>
</html>
