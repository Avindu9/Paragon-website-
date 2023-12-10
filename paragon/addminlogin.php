<?php

include 'db/confiq.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Css/adminlogin.css">
    <style>
        .loginform{
            width: 35%;
        }
    </style>
</head>

<body>
    <!-- Addminloginform -->
    <div class="loginform">
        <form action="admin_auth.php" method="post">
        <center>
            <h2 style="margin-bottom: 2em;">Addmin use Only</h2>
            <div class="username">
                <label for="">UserName</label>
                <center><input type="text" name="uname" required></center>
            </div>
            <div class="password">
                <label for="">Password</label>
                <center>
                    <input type="password" name="password" required>
                </center>
            </div>
            <h3>Need an Account ? <a href="">click</a></h3>
            <button type="submit">Login</button>
        </center>
        </form>
    </div>
</body>

</html>