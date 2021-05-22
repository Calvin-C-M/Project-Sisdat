<?php
    require "../func.php";

    $username = $_GET["username"];
    $data = read("SELECT * FROM admin WHERE username='$username'")[0];

    if(isset($_POST["submit"])){
        $oldData = $data["username"];
        if(edit_admin($_POST, $oldData) > 0){
            echo success('diubah');
        }
        else{
            echo fail('diubah');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin <?php echo $data['username']; ?></title>
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Edit Komponen</h2>
        </header>
        <form id='form' action="#" method='post'>
            <table>
                <tr>
                    <td>
                        <label for="username">Username:</label>
                    </td>
                    <td>
                        <input name='username' type="text" value='<?= $data["username"]; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password:</label>
                    </td>
                    <td>
                        <input name='password' type="text" value='<?= $data["password"]; ?>'>
                    </td>
                </tr>
            </table>
            <br>
            <input name='submit' type="submit" value='Submit'>
        </form>
        <a href="../setting.php">
            <img id='arrow-back' src="../img/decor/arrow_back_white.png" alt="" width="40" height="40">
        </a>
    </body>
</html>