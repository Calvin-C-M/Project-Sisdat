<?php
    require "func.php";
    $departemen = read("SELECT * FROM departemen");
    // $pimpinan = read("SELECT * FROM pimpinan ORDER BY dept");
    $staff = read("SELECT * FROM staff ORDER BY dept");

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
            <nav id='menu'>
                <a href="index.php"><button>Home</button></a>
                <button class='menu-button'>Komponen</button>
                <button class='menu-button'>Departemen</button>
                <button class='menu-button'>Pimpinan</button>
                <button class='menu-button'>Staff</button>
                <button class='menu-button'>Admin</button>
            </nav>
        </header>

        <div class='table-data' id='komponen-utama' style='display:none'>
            <h3>Komponen</h3>
            <a href="Tambah-Data/komponen.php">
                <button>Edit</button>
            </a>
            <div id='nama-organisasi'>
                <h3>Nama Organisasi/Kabinet</h3>
                <p>
                    <?php echo nl2br($organisasi["nama"]); ?>
                </p>
            </div>
            <div id='visi'>
                <h3>Visi</h3>
                <p>
                    <?php echo nl2br($organisasi["visi"]); ?>
                </p>
            </div>

            <div id='misi'>
                <h3>Misi</h3>
                <p>
                    <?php echo nl2br($organisasi["misi"]); ?>
                </p>
            </div>

            <div id='logo'>
                <h3>Logo</h3>
                <h4>Gambar Logo</h4>
                <img src="img/logo/<?php echo $organisasi["logo"]; ?>" width="100px" height="100px">
                <h4>Makna Logo</h4>
                <p>
                    <?php echo nl2br($organisasi["makna_logo"]); ?>
                </p>
            </div>
        </div>

        <div class='table-data' id='departemen' style='display:none'>
            <h3>Departemen</h3>
            <a href="Tambah-Data/dept.php">
                <button>Tambah</button>
            </a>
            <?php foreach($departemen as $dept) : ?>
                <div class='per-dept' id='id-<?php echo $dept["id_dept"]; ?>'>
                    <img src="img/logo/<?php echo $dept["logo"]; ?>" width="90" height="90">
                    <p><?php echo $dept["nama"]; ?></p>
                    <div class='dept-operasi'>
                        <a href="#">
                            <button>Hapus</button>
                        </a>
                        <a href="Edit-Data/edit_dept.php?id_dept=<?php echo $dept["id_dept"]; ?>">
                            <button>Edit</button>
                        </a>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>

        <div class='table-data' id='pimpinan' style='display:none'>
            <h3>Pimpinan</h3>
            <a href="Tambah-Data/pimpinan.php">
                <button>Tambah</button>
            </a>
            <br>
            <?php foreach($departemen as $dept) : ?>
                <?php
                    $id_dept = $dept["id_dept"];
                    $pimpinan = read("SELECT * FROM pimpinan WHERE dept='$id_dept'");
                ?>
                <button class='show-departemen-pimpinan'><?php echo $dept["nama"]; ?></button>
                <div class='departement-buat-pimpinan' id='pimpin-<?php echo $dept["nama"]; ?>' style='display:none'>
                    <p>
                        <?php echo $dept["nama"]; ?>
                    </p>
                    <?php foreach($pimpinan as $pimpin) : ?>
                        <div class='pimpinan'>
                            <img src="img/pengurus/<?php echo $pimpin["foto"]; ?>" width="90" height="120">
                            <p><?php echo $pimpin["nama"]; ?></p>
                            <div class='operasi-pimpinan'>
                                <a href="#">
                                    <button>Hapus</button>
                                </a>
                                <a href="Edit-Data/edit_pimpin.php?npm=<?php echo $pimpin["npm"]; ?>">
                                    <button>Edit</button>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <br>
            <?php endforeach; ?>
        </div>

        <div class='table-data' id='staff' style='display:none'>
            <h3>Staff</h3>
            <a href="Tambah-Data/staff.php">
                <button>Tambah</button>
            </a>
            <br>
            <?php foreach($departemen as $dept) : ?>
                <?php
                    $id_dept = $dept["id_dept"];
                    $staffDept = read("SELECT * FROM staff WHERE dept='$id_dept'");
                ?>
                <button class='show-departemen-staff'><?php echo $dept["nama"]; ?></button>
                <div class='departement-buat-staff' id='staff-<?php echo $dept["nama"]; ?>' style='display:none'>
                    <p>
                        <?php echo $dept["nama"]; ?>
                    </p>
                    <?php foreach($staffDept as $staff) : ?>
                        <div class='staff'>
                            <img src="img/pengurus/<?php echo $staff["foto"]; ?>" width="90" height="120">
                            <p><?php echo $staff["nama"]; ?></p>
                            <div class='operasi-staff'>
                                <a href="#">
                                    <button>Hapus</button>
                                </a>
                                <a href="Edit-Data/edit_staff.php?npm=<?php echo $staff["npm"]; ?>">
                                    <button>Edit</button>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <br>
            <?php endforeach; ?>
        </div>

        <div class='table-data' id='admin' style='display:none'>
            <p>Hello Admin</p>
            <a href="Tambah-Data/admin.php">
                <button>Tambah Admin</button>
            </a>
        </div>
    </body>
    <script src='scripts/setting.js'></script>
</html>