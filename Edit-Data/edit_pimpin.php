<?php
    require "../func.php";

    $npm = $_GET["npm"];
    $pimpin = read("SELECT * FROM pimpinan WHERE npm='$npm';")[0];

    if(isset($_POST["submit"])){
        $oldData = $pimpin;
        
        if(edit_pimpinan($_POST, $oldData)){
            $filename = $_FILES["foto"]["name"];
            $tempname = $_FILES["foto"]['tmp_name'];
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
        <title><?php echo $pimpin["nama"] ?></title>
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Edit Pimpinan</h2>
        </header>
        <form action="#" method='post' enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <label for="npm">NPM</label>
                    </td>
                    <td>
                        <input name='npm' type="text" value='<?php echo $pimpin["npm"]; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama:</label>
                    </td>
                    <td>
                        <input name='nama' type="text" value='<?php echo $pimpin["nama"]; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dept">Departemen:</label>
                    </td>
                    <td>
                    <select name="dept" id="edit-departemen-pimpinan">
                        <?php foreach($departemen as $dept) : ?>
                            <option value="<?php echo $dept["id_dept"]; ?>"
                                    <?php if($dept["id_dept"] == $pimpin["dept"]) : ?>
                                        selected
                                    <?php endif; ?>
                            >
                                <?php echo $dept["nama"]; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="foto">Foto:</label>
                    </td>
                    <td>
                        <input name='foto' type="file">
                    </td>
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