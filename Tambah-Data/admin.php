<?php
    require "../func.php";
    if(isset($_POST["submit"])){
        if(tambah_admin($_POST) > 0){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = '../setting.php';
            </script>
            ";
        }
        else{
            echo "
            <script>
                alert('Data tidak berhasil ditambahkan');
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Admin</title>
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Tambah Admin</h2>
        </header>
        <form id='form' action="admin.php" method='post'>
            <table>
                <tr>
                    <td>
                        <label for="username">Username:</label>
                    </td>
                    <td>
                        <input name='username' type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password:</label>
                    </td>
                    <td>
                        <input name='password' type="text">
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