<?php
class login {
    public function mylogin($user,$pass) {
        if($user=='abc@gmail.com' && $pass=='123456'){
            session_start();
            $_SESSION['user']=$user;
            $_SESSION['pass']=$pass;
            header('location:session.php');
        }
        else
        {
            return 0;

        }
   
    } 
      public function confrimlogin($user, $pass)
    {
        if ($user != 'abc@gmail.com' || $pass != '123456') {

            header('Location: login.php');
            exit();

        }
    }
}
?>