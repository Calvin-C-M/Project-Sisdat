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
    </head>
    <body>
        <form action="admin.php" method='post'>
            <label for="username">Username:
                <input name='username' type="text">
            </label>
            <br>
            <label for="password">Password:
                <input name='password' type="text">
            </label>
            <br>
            <a href="../setting.php">
                <button>Kembali</button>
            </a>
            <input name='submit' type="submit" value='Submit'>
        </form>
    </body>
</html>