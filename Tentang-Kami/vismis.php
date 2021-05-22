<?php
    require "../func.php";
    $organisasi = read("SELECT * FROM komponen")[0];
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="../styles/vismis.css">
    <link rel="stylesheet" href="../styles/navigation.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Visi Misi</title>
    </head>
    <body style="background-color: rgb(0,26,59)">
    <div id='options-nav'>
            <button class='options-button' id='open-button'>
                <img id='logo-open-button' src="../img/decor/open_button_white.png" width="40px" height="40px">
            </button>

            <button class='options-button' id='setting-button' onclick="location.href='../verif.php'">
                <img src="../img/decor/admin_panel_white.png" width="40px" height="40px">
            </button>
        </div>        
        <nav id='navbar' style='display: none'>
            <button id='close-button'><img src="../img/decor/close_button_white.png" width="40px" height="40px"></button>
            <div id='title-nav'>
                <a id='home' href="../index.php">
                    <img src="../img/logo/<?php echo $organisasi["logo"]; ?>" width="80px" height='80px'>
                </a>
                <?php echo $organisasi["nama"]; ?>
            </div>
            <div id='menus'>
                <ul>
                    <li>
                    <a href="">Tentang Kami</a>
                        <ul>
                            <li><a href="logo.php">Logo</a></li>
                            <li><a href="vismis.php">Visi dan Misi</a></li>
                            <li><a href="ketua.php">Ketua dan Wakil Ketua</a></li>
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
                                    <a href="../departemen.php?id_dept=<?php echo $dept["id_dept"]; ?>">
                                        <?php echo $dept["nama"] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
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
            
            <div id='row'>
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
            </div>
        </main>

        <script src='../scripts/navigation.js'></script>
    </body>
</html>