<?php
    require "func.php";
    $departemen = read("SELECT * FROM departemen");
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="styles/main.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Menu</title>
    </head>
    <body>
        <button id='open-button'><img src="img/decor/open_button.jpg" width="40px" height="40px"></button>
        <nav id='navbar' style='display: none'>
            <button id='close-button'><img src="img/decor/close_button.png" width="30px" height="30px"></button>
            <ul>
                <li>
                <a href="">Tentang Kami</a>
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
                    <!-- <button id='setting'>Setting</button> -->
                    <a id='setting' href="verif.php">Setting</a>
                </li>
            </ul>
        </nav>

        <main id='main-section'>
            <header>
                <h1>Cipta Cerita</h1>
            </header>

            <article>
                <h3>Tentang Kami</h3>
            </article>
        </main>

        <footer>
                <p>Created by Kelompok 12 Sistem Database</p>
                <p>2021</p>
        </footer>
        <script src='scripts/main.js'></script>
    </body>
</html>