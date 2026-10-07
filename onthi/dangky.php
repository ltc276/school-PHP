<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>BANNER WEBSITE</h1>
        </div>
        <div class="main">
            
                <nav>
                    <ul>
                    <li><b>Menu</b></li>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                    <li><a href="dangky.php">Đăng ký</a></li>
                    </ul>
                </nav>
            <div class="content">
                <h1>THÔNG TIN KHÁCH HÀNG</h1>
                <form action="xuly.php" method="post">
                <table>
                    <tr>
                        <td>Thông tin tài khoản</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" id="" class="email" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="password" id="" class="password" required></td>
                    </tr>
                    <tr>
                        <td>Thông tin cá nhân</td>
                    </tr>
                     <tr>
                        <td>Họ tên:</td>
                        <td><input type="text" name="hoten" id="" class="hoten" required></td>
                    </tr>
                    <tr>
                        <td>Ảnh đại diện:</td>
                        <td><input type="file" name="anh" id="" class=""></td>
                    </tr>
                      <tr>
                        <td>Quê quán:</td>
                        <td>
                        <select name="quequan" id="">
                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Thanh Hoá">Thanh Hoá</option>
                        </select>
                    </td>
                    </tr>
                          <tr>
                        <td>Điện thoại:</td>
                        <td><input type="text" name="dienthoai" id="" class="" required></td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td><input type="radio" name="gioitinh" id="" value="Nam">Nam</td>
                        <td><input type="radio" name="gioitinh" id="" value="Nữ">Nữ</td>
                    </tr>
                     <tr>
                        <td>Sở thích</td>
                        <td><input type="checkbox" name="sothich[]" id="" value="Thể Thao">Thể Thao</td>
                        <td><input type="checkbox" name="sothich[]" id="" value="Âm nhạc">Âm nhạc</td>
                        <td><input type="checkbox" name="sothich[]" id="" value="Hội hoạ">Hội hoạ</td>
                        <td><input type="checkbox" name="sothich[]" id="" value="Khác">Khác</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Đăng ký"></td>
                    </tr>
                </table>
                </form>

            </div>
        </div>
    </div>
</body>
</html>