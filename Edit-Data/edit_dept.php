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
    </head>
    <body>
        <header>
            <h2>Edit Departemen</h2>
        </header>
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="id_dept">ID:
                <input name='id_dept' type="number" value='<?php echo $dep["id_dept"]; ?>'>
            </label>
            <br>
            <label for="nama">Nama:
                <input name='nama' type="text" value='<?php echo $dep["nama"]; ?>'>
            </label>
            <br>
            <label for="singkatan">Singkatan:
                <input name='singkatan' type="text" value='<?php echo $dep["singkatan"]; ?>'>
            </label>
            <br>
            <label for="logo">Logo:
                <input name='logo' type="file">
            </label>
            <br>
            <input name='submit' type="submit" value="Submit">
        </form>  
        <a href="../setting.php">
            <button>Back</button>
        </a>
    </body>
</html>