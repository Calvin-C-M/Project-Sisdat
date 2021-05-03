<?php
    require "func.php";
    $departemen = read("SELECT * FROM departemen");
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="index.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Menu</title>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    Tentang Kami
                    <ul>
                        <li><a href="#">Logo</a></li>
                        <li><a href="#">Visi dan Misi</a></li>
                        <li><a href="#">Ketua dan Wakil Ketua</a></li>
                    </ul>
                </li>
                <li>
                    Departemen
                    <ul>
                        <?php foreach($departemen as $dept) : ?>
                            <?php if($dept["id_dept"] >= 1 && $dept["id_dept"] <= 4) : ?>
                                <li> <a href="#"> Biro <?php echo $dept["nama"]; ?> </a> </li>
                            <?php else : ?>
                                <li> <a href="#"> Departemen <?php echo $dept["nama"]; ?> </a> </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li>
                    <a href="setting.php">Setting</a>
                </li>
            </ul>
        </nav>

        <header>
            <h1>Cipta Cerita</h1>
        </header>

        <section>
            <h3>Tentang Kami</h3>

        </section>

        <footer>
            <p>Created by Kelompok 12 Sistem Database</p>
            <p>2021</p>
        </footer>
    </body>
</html>