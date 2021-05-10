<?php
    require "../func.php";
    $organisasi = read("SELECT * FROM komponen")[0];
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="../styles/navigation.css">
    <link rel="stylesheet" href="../styles/logo.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logo <?php echo $organisasi["nama"]; ?> </title>
    </head>
    <body>
    <button id='open-button'><img src="../img/decor/open_button.jpg" width="40px" height="40px"></button>
        <nav id='navbar' style='display: none'>
            <button id='close-button'><img src="../img/decor/close_button.png" width="30px" height="30px"></button>
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
                                    <a href="departemen.php?id_dept=<?php echo $dept["id_dept"]; ?>">
                                        <?php echo $dept["nama"] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li>
                        <a id='setting' href="../verif.php">Setting</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main id='main-section' style="margin-left: 65px;">
            <header>
                <h1>
                    <?php echo $organisasi["nama"]; ?>
                </h1>
            </header>
            <h3>Logo</h3>
            <img id='logo' src="../img/logo/<?php echo $organisasi["logo"]; ?>" width="500px" height="500px">
            <div id='penjelasan'>
                <h3>Makna Logo:</h3>
                <p>
                    <?php echo nl2br($organisasi["makna_logo"]); ?>
                </p>
            </div>
        </main>
    </body>
    <script src='../scripts/navigation.js'></script>
</html>