<?php
    require "../func.php";
    $id = $_GET["id_dept"];
    $dep = read("SELECT * FROM departemen WHERE id_dept=$id")[0];

    if(isset($_POST["submit"])){
        $oldData = $dep;

        if(edit_departemen($_POST, $oldData) > 0){
            $filename = $_FILES["logo"]['name'];
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
        <title><?php echo $dep["nama"]; ?></title>
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Edit Departemen</h2>
        </header>
        <form id='form' action="#" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <label for="id_dept">ID Departemen:</label>
                    </td>
                    <td>
                        <input name='id_dept' type="number" value='<?php echo $dep["id_dept"]; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama:</label>
                    </td>
                    <td>
                        <input name='nama' type="text" value='<?php echo $dep["nama"]; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="singkatan">Singakatan:</label>
                    </td>
                    <td>
                        <input name='singkatan' type="text" value='<?php echo $dep["singkatan"]; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="logo">Logo: </label>
                    </td>
                    <td>
                        <input name='logo' type="file">
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