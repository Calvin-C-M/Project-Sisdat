<?php
    require "func.php";
    $id= $_GET["id_dept"];
    $dept = read("SELECT * FROM departemen WHERE id_dept=$id")[0];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Departemen</title>
    </head>
    <body>
       <header>
            <?php echo $dept["nama"]; ?>
       </header> 
    </body>
</html>