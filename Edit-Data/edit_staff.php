<?php
    require "../func.php";

    $npm = $_GET["npm"];
    $staff = read("SELECT * FROM staff WHERE npm='$npm';")[0];

    if(isset($_POST["submit"])){
        $oldData = $staff;

        if(edit_staff($_POST, $oldData)){
            $filename = $_FILES["foto"]["name"];
            $tempname = $_FILES["foto"]["tmp_name"];
            $folder = "../img/pengurus/".$filename;

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
        <title><?php echo $staff["nama"]; ?></title>
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Edit Staff</h2>
        </header> 
        <form action="#" method='post' enctype="multipart/form-data">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
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