<?php
    require "../func.php";

    if(isset($_POST["submit"])){
        if(tambah_staff($_POST)){
            $filename = $_FILES["foto"]["name"];
            $tempname = $_FILES["foto"]["tmp_name"];
            $folder = "../img/pengurus/".$filename;

            if(move_uploaded_file($tempname, $folder)){
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
                        alert('Data tidak dapat ditambahkan');
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Staff</title>
    </head>
    <body>
        <header>
        <h2>Tambah Staff</h2>
        </header> 
        <form action="staff.php" method='post' enctype="multipart/form-data">
            <label for="nama">Nama:
                <input name='nama' type="text">
            </label>
            <br>
            <label for="npm">NPM:
                <input name='npm' type="text">
            </label>
            <br>
            <label for="dept">Departemen:
                <input name='dept' type="text">
            </label>
            <br>
            <label for="foto">Foto:
                <input name='foto' type="file">
            </label>
            <br>
            <input name='submit' type="submit" value="Submit">
        </form>

        <a href="../setting.php">
            <button>Kembali</button>
        </a>
    </body>
</html>