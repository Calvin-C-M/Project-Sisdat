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
    </head>
    <body>
        <header>
            <h2>Edit Staff</h2>
        </header> 
        <form action="#" method='post' enctype="multipart/form-data">
            <label for="npm">NPM:
                <input name='npm' type="text" value='<?php echo $staff["npm"]; ?>'>
            </label>
            <br>
            <label for="nama">Nama:
                <input name='nama' type="text" value='<?php echo $staff["nama"]; ?>'>
            </label>
            <br>
            <label for="dept">Departemen:
                <select name="dept" id="edit-departemen-staff">
                    <?php foreach($departemen as $dept) : ?>
                        <option value="<?php echo $dept["id_dept"]; ?>"
                                <?php if($dept["id_dept"] == $staff["dept"]) : ?>
                                    selected
                                <?php endif; ?>
                        >
                            <?php echo $dept["nama"]; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>
            <br>
            <label for="foto">Foto:
                <input name='foto' type="file">
            </label>
            <br>
            <input name='submit' type="submit" value='Submit'>
        </form>
        <a href="../setting.php">
            <button>Kembali</button>
        </a>
    </body>
</html>