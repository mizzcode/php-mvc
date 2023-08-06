<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_SESSION['login'] == true) {
            header('Location: /home');
            exit();
        }
    }

    if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['username'] == 'mizz' && $_POST['password'] == 'mizz') {
            $_SESSION['login'] = true;
            header('Location: /home');
            exit();
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>LOGIN</h1>

    <form action="login" method="post">
        <label> Username :
            <input type="text" name="username" id="username">
        </label>
        <br>
        <label> Password :
            <input type="password" name="password" id="username">
        </label>
        <br>
        <input type="submit" name="login" id="login" value="login">
    </form>
</body>

</html>