<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    session_start();
    $email=$_POST["email"];
    $password=$_POST["password"];
    $anh=$_POST["anh"];
    $hoten=$_POST["hoten"];
    $dienthoai=$_POST["dienthoai"];
    $gioitinh=$_POST["gioitinh"];
    if(isset($_POST["sothich"])){
        $sothich=$_POST["sothich"];
    }
    else{
        $sothich=array();

    }
    //cau7
    if($_SERVER["REQUEST_METHOD"] != "POST"){
        header("location: dangky.php");
        exit();

    }
    //ghi chu
    $_SESSION["email"]=$email;
    $_SESSION["password"]=$password;
    $_SESSION["anh"]=$anh;
    $_SESSION["hoten"]=$hoten;
    $_SESSION["dienthoai"]=$dienthoai;
    $_SESSION["gioitinh"]=$gioitinh;
    $_SESSION["sothich"]=$sothich;
    //
    setcookie("email",$email,time()+3600*24*10);
    setcookie("password",$password,time()+3600*24*10);
    setcookie("anh",$anh,time()+3600*24*10);
    setcookie("hoten",$hoten,time()+3600*24*10);
    setcookie("dienthoai",$dienthoai,time()+3600*24*10);
    setcookie("gioitinh",$gioitinh,time()+3600*24*10);
    setcookie("sothich",implode(",",$sothich),time()+3600*24*10);
    //

    ?>
    <div class="container">
        <div class="main">
            <div class="content">
                <div>
                    <h1>THÔNG TIN KHÁCH HÀNG</h1>
                    <table>
                        <tr>
                            <td>Email: </td>
                            <td><?php echo $email ?></td>
                        </tr>
                         <tr>
                            <td>Password:</td>
                            <td><?php echo $password ?></td>
                        </tr>
                         <tr>
                            <td>Họ tên: </td>
                            <td><?php echo $hoten ?></td>
                        </tr>
                         <tr>
                            <td>Điện thoại: </td>
                            <td><?php echo $dienthoai ?></td>
                        </tr>
                         <tr>
                            <td>Giới tính: </td>
                            <td><?php echo $gioitinh ?></td>
                        </tr>
                         <tr>
                            <td>Sở thích: </td>
                            <td><?php foreach($sothich as $st){echo $st;} ?></td>
                        </tr>
                    </table>
                </div>
                   <div>
                    <h1>SESSION</h1>
                    <table>
                        <tr>
                            <td>Email: </td>
                            <td><?php echo $_SESSION["email"]; ?></td>
                        </tr>
                         <tr>
                            <td>Password:</td>
                            <td><?php echo $_SESSION["password"]; ?></td>
                        </tr>
                         <tr>
                            <td>Họ tên: </td>
                            <td><?php echo $_SESSION["hoten"]; ?></td>
                        </tr>
                         <tr>
                            <td>Điện thoại: </td>
                            <td><?php echo $_SESSION["dienthoai"]; ?></td>
                        </tr>
                         <tr>
                            <td>Giới tính: </td>
                            <td><?php echo $_SESSION["gioitinh"]; ?></td>
                        </tr>
                         <tr>
                            <td>Sở thích: </td>
                            <td><?php foreach($_SESSION["sothich"] as $st1){echo $st1;} ?></td>
                        </tr>
                    </table>
                </div>
                 <div>
                    <h1>COOKIE</h1>
                    <table>
                        <tr>
                            <td>Email: </td>
                            <td><?php echo $_COOKIE["email"]; ?></td>
                        </tr>
                         <tr>
                            <td>Password:</td>
                            <td><?php echo $_COOKIE["password"]; ?></td>
                        </tr>
                         <tr>
                            <td>Họ tên: </td>
                            <td><?php echo $_COOKIE["hoten"]; ?></td>
                        </tr>
                         <tr>
                            <td>Điện thoại: </td>
                            <td><?php echo $_COOKIE["dienthoai"]; ?></td>
                        </tr>
                         <tr>
                            <td>Giới tính: </td>
                            <td><?php echo $_COOKIE["gioitinh"]; ?></td>
                        </tr>
                         <tr>
                            <td>Sở thích: </td>
                            <td><?php foreach(explode(",",$_COOKIE["sothich"]) as $st2){echo $st2;} ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>