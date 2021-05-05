<?php
    require "func.php";

    $akunAdmin = read("SELECT * FROM admin");
    
    function admin(){
        global $akunAdmin;
        foreach($akunAdmin as $akun){
            if(
                $_POST['username'] === $akun['username']
                &&
                $_POST['password'] === $akun['password']
            ){
                return true;
            }
        }
        return false;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Setting</title>
    </head>
    <body>
        <?php if(admin()) : ?>
            <p>Anda Admin</p>
            <a href="verif.php"><button>Kembali</button></a>
        <?php else : ?>
            <p>Anda bukan Admin</p>
            <a href="verif.php"><button>Kembali</button></a>
        <?php endif; ?>
    </body>
    <script src='setting.js'></script>
</html>