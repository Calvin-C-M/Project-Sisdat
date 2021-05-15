<?php
    require "../func.php";
    $id = $_GET["id_dept"];
    $dep = read("SELECT * FROM departemen WHERE id_dept=$id")[0];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $dep["nama"]; ?></title>
    </head>
    <body>
        <header>
            <h2>Edit Departemen</h2>
        </header>
        <form action="">
            <label for="">Nama:
                <input type="text" value='<?php echo $dep["nama"]; ?>'>
            </label>
            <br>
            <label for="">Singkatan:
                <input type="text" value='<?php echo $dep["singkatan"]; ?>'>
            </label>
            <br>
            <label for="">Foto:
                <input type="file">
            </label>
            <br>
            <input name='submit' type="submit" value="Submit">
        </form>  
        <a href="../setting.php">
                <button>Back</button>
        </a>
    </body>
</html>