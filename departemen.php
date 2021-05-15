<?php
    require "func.php";
    $id= $_GET["id_dept"];
    $dep = read("SELECT * FROM departemen WHERE id_dept=$id")[0];
    $mimpinDep = read("SELECT * FROM pimpinan WHERE dept=$id")[0];
    $staffDep = read("SELECT * FROM staff WHERE dept=$id");
    $prokerDep = read("SELECT * FROM proker WHERE dept=$id");
    $i = 1;
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/dept.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $dep["nama"]; ?></title>
    </head>
    <body>
        <button id='open-button'>
            <img src="img/decor/open_button.png" width="40px" height="40px">
        </button>
        <nav id='navbar' style='display: none'>
            <button id='close-button'><img src="img/decor/close_button.png" width="30px" height="30px"></button>
            <div id='title-nav'>
                <a id='home' href="index.php">
                    <img src="img/logo/<?php echo $organisasi["logo"]; ?>" width="80px" height='80px'>
                </a>
                <?php echo $organisasi["nama"]; ?>
            </div>
            <div id='menus'>
                <ul>
                    <li>
                    <a href="menu_tentang_kami.php">Tentang Kami</a>
                        <ul>
                            <li><a href="Tentang-Kami/logo.php">Logo</a></li>
                            <li><a href="Tentang-Kami/vismis.php">Visi dan Misi</a></li>
                            <li><a href="Tentang-Kami/ketua.php">Ketua dan Wakil Ketua</a></li>
                        </ul>
                    </li>
                    <li>
                        Departemen
                        <ul>
                            <?php foreach($departemen as $dept) : ?>
                                <?php
                                    if($dept["id_dept"] <= 0){
                                        continue;
                                    }
                                ?>
                                <li>
                                    <a href="departemen.php?id_dept=<?php echo $dept["id_dept"]; ?>">
                                        <?php echo $dept["nama"] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li>
                        <a id='setting' href="verif.php">Setting</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main id='main-section' style='margin-left: 65px'>
            <header>
                <h1>
                    <?php echo $organisasi["nama"]; ?>
                </h1>
                <h2>
                    <?php echo $dep["nama"]; ?>
                </h2>
            </header>

            <section id='pimpinan'>
                <h4>
                    <?php echo $mimpinDep["jabatan"]; ?>
                </h4>
                <div id=''>
                    <img src="img/pengurus/<?php echo $mimpinDep["foto"]; ?>" width="180" height="240">
                    <p><?php echo $mimpinDep["nama"]; ?></p>
                    <p><?php echo $mimpinDep["npm"]; ?></p>
                </div>
            </section>

            <section id='list-staff'>
                <h4>Staff</h4>
                <?php foreach($staffDep as $staff) : ?>
                    <div class='staffs' id='staff-<?php echo $i++; ?>'>
                        <img src="img/pengurus/<?php echo $staff["foto"]; ?>" width="180" height="240">
                        <p><?php echo $staff["nama"]; ?></p>
                        <p><?php echo $staff["npm"]; ?></p>
                    </div>
                <?php endforeach; ?>
            </section>

            <section id='proker'>
                <h4>Program Kerja</h4>
                <ol>
                    <?php foreach($prokerDep as $proker) : ?>
                        <li><?php echo $proker["nama"]; ?></li>
                    <?php endforeach; ?>
                </ol>
            </section>

            <!-- <?php 
                var_dump($mimpinDep);
                var_dump($staffDep);
            ?> -->
        </main>
        <script src="scripts/navigation.js"></script>
    </body>
</html>