<?php
    require "func.php";
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navigation.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Menu</title>
    </head>
    <body>
        <button id='open-button'>
            <img src="img/decor/open_button.png" width="40px" height="40px">
        </button>
        <nav id='navbar' style='display: none'>
            <button id='close-button'>
                <img src="img/decor/close_button.png" width="40px" height="40px">
            </button>
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
                        <a href="menu_departemen.php">
                            Departemen
                        </a>
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

        <main id='main-section' style='margin-left: 65px;'>
            <header>
                <h1>
                    <?php echo $organisasi["nama"]; ?>
                </h1>
            </header>

            <div class='main-nav' id='tentang-kami-div'>
                <a href="menu_tentang_kami.php">
                    <button>Tentang Kami</button>
                </a>
            </div>

            <div class='main-nav' id='departemen-nav'>
                <a href="menu_departemen.php">
                    <button>Departemen</button>
                </a>
            </div>

            <img id='logo-main-section' src="img/logo/<?php echo $organisasi["logo"]; ?>" alt="Logo <?php echo $organisasi["nama"]; ?>" width="100" height="100">
        </main>

        <footer>
                <p>Created by Kelompok 10 Sistem Database</p>
                <p>2021</p>
        </footer>
        <script src='scripts/navigation.js'></script>
    </body>
</html>