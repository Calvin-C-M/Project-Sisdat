<?php
    require "func.php";

    $npm = $_GET["npm"];
    $staff = read("SELECT * FROM staff WHERE npm='$npm';")[0];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $staff["nama"]; ?></title>
    </head>
    <body>
        <header>
            <h2>Edit Staff</h2>
        </header> 
        <form action="">
            <label for="">Nama:
                <input type="text" value='<?php echo $staff["nama"]; ?>'>
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