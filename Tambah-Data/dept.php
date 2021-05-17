<?php
    require "../func.php";

    if(isset($_POST["submit"])){
        if(tambah_departemen($_POST) > 0){
            $filename = $_FILES["logo"]["name"];
            $tempname = $_FILES["logo"]["tmp_name"];
            $folder = "../img/logo/".$filename;
            
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
        <title>Tambah Departemen</title>
        <link rel="stylesheet" href="../styles/tambah_dept.css">
    </head>
    <body>
        <header>
            <h2>Tambah Departemen</h2>
        </header>
        <form  id='tambah-form' action="dept.php" method="POST" enctype="multipart/form-data">
            <label for="id_dept">ID Departemen:
                <input name='id_dept' type="number">
            </label>
            <br>
            <label for="nama">Nama:
                <input name='nama' type="text">
            </label>
            <br>
            <label for="singkatan">Singkatan:
                <input name="singkatan" type="text">
            </label>
            <br>
            <label for="logo">Logo:
                <input name='logo' type="file">
            </label>
            <br>
            <input name='submit' type="submit" value="Submit">
        </form>

        <a href="../setting.php">
            <button>Kembali</button>
        </a>
    </body>
</html>