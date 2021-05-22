<?php
    require "func.php";

    if(isset($_POST["submit"])){
        if(admin()){
            echo "
                <script>
                    document.location.href = 'setting.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Username/Password salah!');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles/verif.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verifikasi</title>
    </head>
    <body>
        <div id='login-form'>
            <header id='form-header'>
                Login Admin
            </header>

            <form id='login' action="verif.php" method='post'>
                <label for="username">Username:
                    <input class='login-input' name='username' type="text">
                </label>
                <br>
                <label for="password">Password  :
                    <input class='login-input' name='password' type="password">
                </label>
                <br>
                <button id='submit-button' type='submit' name='submit'>Login</button>
            </form>

            <a href="index.php">
                <img id='back-button' src="img/decor/arrow_back.png" alt="" width="30" height="30">
            </a>
        </div>
    </body>
</html>