<?php
    require "func.php";
    $staff = read("SELECT * FROM staff ORDER BY dept");
    $admin = read("SELECT * FROM admin");
    $pimpinan = read("SELECT * FROM pimpinan ORDER BY dept");
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
            <h1 style="color: whitesmoke;">Setting Data</h1>
            <nav id='menu'>
                <a href="index.php">
                    <img id='home-button' src="img/decor/home_button_white.png" alt="" width="40" height="40">
                </a>
                <button class='menu-button'>Komponen</button>
                <button class='menu-button'>Departemen</button>
                <button class='menu-button'>Pimpinan</button>
                <button class='menu-button'>Staff</button>
                <button class='menu-button'>Proker</button>
                <button class='menu-button'>Admin</button>
            </nav>
        </header>

        <div class='table-data' id='komponen-utama' style='display:none'>
            <h3>Komponen</h3>
            <a href="Edit-Data/edit_komponen.php">
                <img class='add-button' src="img/decor/add_logo.png" alt="">
            </a>
            <div id='nama-organisasi'>
                <h4>Nama Organisasi/Kabinet</h4>
                <p>
                    <?php echo nl2br($organisasi["nama"]); ?>
                </p>
            </div>
            <div id='visi'>
                <h4>Visi</h4>
                <p>
                    <?php echo nl2br($organisasi["visi"]); ?>
                </p>
            </div>

            <div id='misi'>
                <h4>Misi</h4>
                <p>
                    <?php echo nl2br($organisasi["misi"]); ?>
                </p>
            </div>

            <div id='logo'>
                <h4>Logo</h4>
                <h5>Gambar Logo</h5>
                <img src="img/logo/<?php echo $organisasi["logo"]; ?>" width="100px" height="100px">
                <h5>Makna Logo</h5>
                <p>
                    <?php echo nl2br($organisasi["makna_logo"]); ?>
                </p>
            </div>
        </div>

        <div class='table-data' id='departemen' style='display:none'>
            <h3>Departemen</h3>
            <a href="Tambah-Data/dept.php">
                <img class='add-button' src="img/decor/add_logo.png" alt="">
            </a>
            <?php foreach($departemen as $dept) : ?>
                <div class='per-dept' id='id-<?php echo $dept["id_dept"]; ?>'>
                    <img src="img/logo/<?php echo $dept["logo"]; ?>" width="90" height="90">
                    <p><?php echo $dept["nama"]; ?></p>
                    <div id='dept-operasi'>
                        <a href="Edit-Data/hapus_data.php?pk=id_dept&key=<?php echo $dept["id_dept"]; ?>&table=departemen">
                            <button class='hapus'>Hapus</button>
                        </a>
                        <a href="Edit-Data/edit_dept.php?id_dept=<?php echo $dept["id_dept"]; ?>">
                            <button class='edit'>Edit</button>
                        </a>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>

        <div class='table-data' id='pimpinan' style='display:none'>
            <h3>Pimpinan</h3>
            <a href="Tambah-Data/pimpinan.php">
                <img class='add-button' src="img/decor/add_logo.png" alt="">
            </a>
            <br>
            <?php foreach($pimpinan as $pimpin) : ?>
                <div class='pimpinan'>
                    <img src="img/pengurus/<?php echo $pimpin["foto"]; ?>" width="90" height="120">
                    <p><?php echo $pimpin["nama"]; ?></p>
                    <?php
                        $id = $pimpin["dept"];
                        $dep = read("SELECT * FROM departemen WHERE id_dept='$id'")[0];
                    ?>
                    <p><?= $dep["nama"]; ?> </p>
                    <div id='operasi-pimpinan'>
                        <a href="Edit-Data/hapus_data.php?pk=npm&key=<?php echo $pimpin["npm"]; ?>&table=pimpinan">
                            <button class='hapus'>Hapus</button>
                        </a>
                        <a href="Edit-Data/edit_pimpin.php?npm=<?php echo $pimpin["npm"]; ?>">
                            <button class='edit'>Edit</button>
                        </a>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>

        <div class='table-data' id='staff' style='display:none'>
            <h3>Staff</h3>
            <a href="Tambah-Data/staff.php">
                <img class='add-button' src="img/decor/add_logo.png" alt="">
            </a>
            <br>
            <?php foreach($departemen as $dept) : ?>
                <?php
                    $id_dept = $dept["id_dept"];
                    $staffDept = read("SELECT * FROM staff WHERE dept='$id_dept'");
                ?>
                <button class='show-departemen-staff'><?php echo $dept["nama"]; ?></button>
                <br>
                <div class='departement-buat-staff' id='staff-<?php echo $dept["nama"]; ?>' style='display:none'>
                    <p>
                        <?php echo $dept["nama"]; ?>
                    </p>
                    <?php foreach($staffDept as $staff) : ?>
                        <div class='staff'>
                            <img src="img/pengurus/<?php echo $staff["foto"]; ?>" width="90" height="120">
                            <p><?php echo $staff["nama"]; ?></p>
                            <div id='operasi-staff'>
                                <a href="Edit-Data/hapus_data.php?pk=npm&key=<?php echo $staff["npm"]; ?>&table=staff">
                                    <button class='hapus'>Hapus</button>
                                </a>
                                <a href="Edit-Data/edit_staff.php?npm=<?php echo $staff["npm"]; ?>">
                                    <button class='edit'>Edit</button>
                                </a>
                            </div>
                        </div>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
            <?php endforeach; ?>
        </div>

        <div class='table-data' id='proker' style='display:none'>
            <h3>Proker</h3>
            <br>
            <?php foreach($departemen as $dept) : ?>
                <?php
                    $id_dept = $dept["id_dept"];
                    $prokerDept = read("SELECT * FROM proker WHERE dept='$id_dept';");
                ?>
                <button class='show-departemen-proker'>
                    <?php echo $dept["nama"]; ?>
                </button>
                <br>
                <div class='departement-buat-proker' id='proker-<?php echo $dept["nama"] ?>' style='display: none;'>
                    <p>
                        <?php echo $dept["nama"]; ?>
                    </p>
                    <a href="Tambah-Data/proker.php?id=<?php echo $dept["id_dept"]; ?>">
                        <img class='add-button' src="img/decor/add_logo.png" alt="">
                    </a>
                    <?php foreach($prokerDept as $proker) : ?>
                        <div class='proker'>
                            <p><?php echo $proker["nama"]; ?></p>
                            <div class='operasi-proker'>    
                                <a href="Edit-Data/hapus_data.php?pk=nama&key=<?php echo $proker['nama']; ?>&table=proker">
                                    <button class='hapus'>Hapus</button>
                                </a>
                                <a href="Edit-Data/edit_proker.php?nama=<?php echo $proker["nama"]; ?>&id=<?php echo $proker["dept"]; ?>">
                                    <button class='edit'>Edit</button>
                                </a>
                            </div>
                        </div>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
            <?php endforeach; ?>
        </div>

        <div class='table-data' id='admin' style='display:none'>
            <h3>
                Admin
            </h3>
            <a href="Tambah-Data/admin.php">
                <img class='add-button' src="img/decor/add_logo.png" alt="">
            </a>
            <?php foreach($admin as $adm) : ?>
                <div class='admin'>
                    <p>
                        <?php echo $adm["username"]; ?>
                    </p>
                    <div id='operasi-admin'>
                        <a href="Edit-Data/hapus_data.php?pk=username&key=<?php echo $adm['username']; ?>&table=admin">
                            <button class='hapus'>Hapus</button>
                        </a>
                        <a href="Edit-Data/edit_admin.php?username=<?php echo $adm["username"]; ?>">
                            <button class='edit'>Edit</button>
                        </a>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>
    </body>
    <script src='scripts/setting.js'></script>
</html>