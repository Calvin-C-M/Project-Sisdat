<?php 
    require "func.php";
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
        <form id='login' action="setting.php" method='post'>
            <header>
                Login Admin
            </header>

            <label for="username">Username:
                <input name='username' type="text">
            </label>
            <br>
            <label for="password">Password:
                <input name='password' type="password">
            </label>
            <br>
            <button type='submit' name='submit'>Submit</button>
        </form>
    </body>
</html>