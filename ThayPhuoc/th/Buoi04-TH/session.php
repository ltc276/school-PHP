<?php

session_start();
error_reporting(E_ALL);

if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {

    include("myclass/clslogin.php");

    $p = new login();

    $p->confrimlogin($_SESSION['user'], $_SESSION['pass']);

} else {

    header('Location: login.php');
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>WELCOME TO THE LAND</h3>

</body>

</html>