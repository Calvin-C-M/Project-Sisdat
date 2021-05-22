<?php
    require "../func.php";

    $id = $_GET["id"];
    $dept = read("SELECT * FROM departemen WHERE id_dept='$id'")[0];

    if(isset($_POST["submit"])){
        if(tambah_proker($_POST) > 0){
            echo success("ditambah");
        }
        else{
            echo fail("ditambah");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Proker</title>
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Proker <?= $dept["nama"] ?></h2>
        </header>
        <form id='form' action="#" method="post">
            <table>
                <tr>
                    <td>
                        <label for="nama">Nama Proker:</label>
                    </td>
                    <td>
                        <input name='nama' type="text">
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