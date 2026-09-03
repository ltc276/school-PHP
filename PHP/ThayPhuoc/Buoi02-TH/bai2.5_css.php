<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài 2.5</title>
    </head>
	<style type="text/css">
	.container{
		margin:0px auto;
		height:auto;
		width:1000px;
		border: 1px solid #999;
	}
	header {
		height:100px;
		width:100%;
		background:#7df791;
		border-bottom: 1px solid #999;
		text-align: center;
	}
	.main {
		display: flex;
		min-height: 400px;
	}
	nav {
		flex-grow:1;
		border-right: 1px solid #999;
		padding: 10px;
	}
	.content {
		flex-grow: 4;
		padding: 10px;
	}
	</style>
  <body>
    <div class="container">

        <header>
            <h2>ĐĂNG KÝ TÀI KHOẢN</h2>
        </header>

        <div class="main">

            <nav>
                <p>Trang chủ</p>
                <p>Đăng nhập</p>
                <p>Đăng ký</p>
            </nav>

            <div class="content">
                <form method="post" action="nhanbien2.5.php">
                    <p>
                        Email:
                        <input type="text" name="txtemail"
                               value="<?php echo $email ?>"><br>

                        Password:
                        <input type="text" name="txtpassword"
                               value="<?php echo $password ?>"><br>

                        Re-password:
                        <input type="password" name="txtrepassword"
                               value="<?php echo $repassword ?>"><br>

                        Họ tên:
                        <input type="text" name="txthoten"
                               value="<?php echo $hoten ?>"><br>

                        SĐT:
                        <input type="text" name="txtphone"
                               value="<?php echo $phone ?>"><br>

                        <input type="submit"
                               name="sbdangky"
                               value="Dang ky">
                    </p>
                </form>
            </div>

        </div>

    </div>
</body>
</html>