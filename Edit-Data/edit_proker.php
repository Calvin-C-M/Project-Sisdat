<?php
    require "../func.php";

    $namaProker = $_GET["nama"];
    $dept = $_GET["id"];

    if(isset($_POST["submit"])){
        $oldData = [
            "nama" => $namaProker,
            "dept" => $dept
        ];

        // var_dump($oldData);

        // var_dump(edit_proker($_POST, $oldData));

        if(edit_proker($_POST, $oldData) > 0){
            echo success("diubah");
        }
        else{
            echo fail('diubah');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $namaProker; ?></title>
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
        <header>
            <h2>Edit Proker</h2>
        </header>
        <form action="#" method='post'>
            <table>
                <tr>
                    <td>
                        <label for="nama">Nama Proker:</label>
                    </td>
                    <td>
                        <input name='nama' type="text" value='<?php echo $namaProker ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dept">Departemen:</label>
                    </td>
                    <td>
                    <select name="dept" id="edit-departemen-proker">
                        <?php foreach($departemen as $dep) : ?>
                            <option value="<?php echo $dep["id_dept"] ?>"
                                    <?php if($dep["id_dept"] == $dept) : ?>
                                        selected
                                    <?php endif; ?>
                            >
                                <?php echo $dep["nama"]; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
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