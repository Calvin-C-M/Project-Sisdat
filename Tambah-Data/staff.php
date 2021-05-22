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
                        alert('Foto tidak dapat ditambahkan');
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
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Tambah Staff</h2>
        </header> 
        <form id='form' action="staff.php" method='post' enctype="multipart/form-data">
            <table>
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
                        <label for="npm">NPM:</label>
                    </td>
                    <td>
                        <input name='npm' type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dept">Departemen:</label>
                    </td>
                    <td>
                        <select name="dept" id="">
                            <?php foreach($departemen as $dept) : ?>
                                <option value="<?php echo $dept['id_dept']; ?>">
                                    <?php echo $dept["nama"]; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="foto">Foto:</label>
                    </td>
                    <td>
                        <input name='foto' type="file">
                    </td>
                </tr>
            </table>
            <br>
            <input name='submit' type="submit" value="Submit">

            <br>
            <input name='submit' type="submit" value="Submit">
        </form>

        <a href="../setting.php">
            <img id='arrow-back' src="../img/decor/arrow_back_white.png" alt="" width="40" height="40">
        </a>
    </body>
</html>