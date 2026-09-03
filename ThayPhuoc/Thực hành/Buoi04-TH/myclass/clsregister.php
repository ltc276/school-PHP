<?php

class register
{
    public function myregister($user, $pass, $repass)
    {
        // Kiểm tra password và nhập lại password
        if ($pass != $repass) {
            return 1;
        }

        // Kiểm tra tài khoản mẫu
        if ($user == 'abc@gmail.com') {
            return 2;
        }

        // Đăng ký thành công
        return 0;
    }
}

?>
