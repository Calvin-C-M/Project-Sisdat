<?php
    require "../func.php";

    $npm = $_GET["npm"];
    $pimpin = read("SELECT * FROM pimpinan WHERE npm='$npm';")[0];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pimpin["nama"] ?></title>
    </head>
    <body>
        <header>
            <h2>Edit Pimpinan</h2>
        </header>
        <form action="">
            <label for="">Nama:
                <input type="text" value='<?php echo $pimpin["nama"]; ?>'>
            </label>
            <br>
            <label for="">Departemen:
                <input type="text">
            </label>
            <br>
            <label for="">Foto:
                <input type="file">
            </label>
            <br>
            <input name='submit' type="submit" value='Submit'>
        </form>
    </body>
</html>