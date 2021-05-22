<?php
    require "../func.php";

    if(isset($_POST["submit"])){
        $oldData = read("SELECT * FROM komponen")[0];
        if(edit_komponen($_POST, $oldData) > 0){
            $filename = $_FILES["logo"]["name"];
            $tempname = $_FILES["logo"]["tmp_name"];
            $folder = "../img/logo/".$filename;

            echo return_to_setting($tempname, $folder, 'diubah');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Komponen</title>
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Edit Komponen</h2>
        </header> 

        <form id='form' action="#" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <label for="nama">Nama Kabinet:</label>
                    </td>
                    <td>
                        <input name='nama' type="text" value='<?php echo $organisasi["nama"]; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="visi">Visi:</label>
                    </td>
                    <td>
                        <input name='visi' type="text" value='<?php echo nl2br($organisasi["visi"]); ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="misi">Misi:</label>
                    </td>
                    <td>
                        <input name='misi' type="text" value='<?php echo nl2br($organisasi["misi"]); ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="logo">Logo:</label>
                    </td>
                    <td>
                        <input name='logo' type="file" value='../img/logo/<?php echo $organisasi["logo"]; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="makna_logo"></label>
                    </td>
                    <td>
                        <input name='makna_logo' type="text" value='<?php echo nl2br($organisasi["makna_logo"]); ?>'>
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