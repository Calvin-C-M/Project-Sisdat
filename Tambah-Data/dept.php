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
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Tambah Departemen</h2>
        </header>
        <form id='form' action="dept.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <label for="id_dept">ID Departemen:</label>
                    </td>
                    <td>
                        <input name='id_dept' type="number">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama:</label>
                    </td>
                    <td>
                        <input name='nama' type="text">
                    </td>

                </tr>
                <tr>
                    <td>
                        <label for="singkatan">Singkatan</label>
                    </td>
                    <td>
                        <input name="singkatan" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="logo">Logo:</label>
                    </td>
                    <td>
                        <input name='logo' type="file">
                    </td>
                </tr>
            </table>
            <br>
            <input name='submit' type="submit" value="Submit">
        </form>

        <a href="../setting.php">
            <img id='arrow-back' src="../img/decor/arrow_back_white.png" alt="" width="40" height="40">
        </a>
    </body>
</html>