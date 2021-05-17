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
        <link rel="stylesheet" href="../styles/tambah_komp.css">
    </head>
    <body>
        <header>
            <h2>Edit Komponen</h2>
        </header> 

        <form action="#" method="post" enctype="multipart/form-data">
            <label for="nama">Nama Kabinet:
                <input name='nama' type="text" value='<?php echo $organisasi["nama"]; ?>'>
            </label>
            <br>
            <label for="visi">Visi:
                <input name='visi' type="text" value='<?php echo nl2br($organisasi["visi"]); ?>'>
            </label>
            <br>
            <label for="misi">Misi:
                <input name='misi' type="text" value='<?php echo nl2br($organisasi["misi"]); ?>'>
            </label>
            <br>
            <label for="logo">Logo:
                <input name='logo' type="file" value='../img/logo/<?php echo $organisasi["logo"]; ?>'>
            </label>
            <br>
            <label for="makna_logo">Makna Logo:
                <input name='makna_logo' type="text" value='<?php echo nl2br($organisasi["makna_logo"]); ?>'>
            </label>
            <br>
            <input name='submit' type="submit" value="Submit">
        </form>
        
        <a href="../setting.php">
            <button>Kembali</button>
        </a>
    </body>
</html> 