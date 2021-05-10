<?php
    require "func.php";
    $komponen = read("SELECT * FROM komponen");
    $departemen = read("SELECT * FROM departemen");
    $pimpinan = read("
    SELECT * FROM pimpinan ORDER BY dept
    ");
    $staff = read("SELECT * FROM staff");

    $i = $j = 1;
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles/setting.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Setting</title>
    </head>
    <body>
        <header>
            <h1>Setting Data</h1>
        </header>

        <nav id='menu'>
            <a href="index.php"><button>Home</button></a>
            <button class='menu-button'>Komponen</button>
            <button class='menu-button'>Departemen</button>
            <button class='menu-button'>Pimpinan</button>
            <button class='menu-button'>Staff</button>
        </nav>

        <div class='table-data' id='komponen-utama' style='display:none'>
            <p>Komponen</p>
            <div id='visi'>
                <h3>Visi</h3>
                <p>
                    
                </p>
            </div>

            <div id='misi'>
                <h3>Misi</h3>
                <p>

                </p>
            </div>

            <div id='logo'>
                <h3>Logo</h3>
            </div>
        </div>

        <div class='table-data' id='departemen' style='display:none'>
            <p>Departemen</p>
            <a href="Tambah-Data/dept.php"><button>Tambah</button></a>
            <table border="1" cellspacing='0' cellpadding='10'>
                <tr>
                    <th>No</th>
                    <th>Nama Departemen/Biro</th>
                    <th>Logo</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach($departemen as $dept) : ?>
                <tr>
                    <td><?php echo $dept["id_dept"]; ?></td>
                    <td><?php echo $dept["nama"]; ?></td>
                    <td><img src="img/logo/<?php echo $dept["logo"]; ?>" width='50px' height='50px'></td>
                    <!-- <td><?php echo $dept["logo"]; ?></td> -->
                    <td>
                        <a href="edit.php">Edit</a>
                        |
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class='table-data' id='pimpinan' style='display:none'>
            <p>Pimpinan</p>
            <a href="Tambah-Data/pimpinan.php"><button>Tambah</button></a>
            <table border='1' cellspacing='0' cellpadding='10'>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Departemen</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach($pimpinan as $pimpin) : ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $pimpin["npm"]; ?></td>
                    <td><?php echo $pimpin["nama"] ?></td>
                    <td><?php echo $pimpin["dept"] ?></td>
                    <td><img src="img/pengurus/<?php echo $pimpin["foto"]; ?>" width='70px' height='70px'></td>
                    <td>
                        <a href="edit.php">Edit</a>
                        |
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class='table-data' id='staff' style='display:none'>
            <p>Staff</p>
            <a href=""><button>Tambah</button></a>
            <table border='1' cellspacing='0' cellpadding='10'>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Departemen</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach($staff as $stf) : ?>
                <tr>
                    <td><?php echo $j++; ?></td>
                    <td><?php echo $stf["npm"]; ?></td>
                    <td><?php echo $stf["nama"]; ?></td>
                    <td><?php echo $stf["dept"]; ?></td>
                    <td><img src="img/pengurus/<?php echo $stf["foto"] ?>" width='50px' height='50px'></td>
                    <td>
                        <a href="edit.php">Edit</a>
                        |
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>
    <script src='scripts/setting.js'></script>
</html>