<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman utama</title>
    <link rel="stylesheet" href="./style.css">
</head>


<body>
    <div class="container">
        <header>HEADER</header>
        <div class="row">
            <div class="col">
                <nav>
                    <ul>
                        <a href="?page=home">
                            <li>HOME</li>
                        </a>
                        <a href="?page=about">
                            <li>ABOUT</li>
                        </a>
                        <a href="?page=contact">
                            <li>CONTACT</li>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="content">
            <main>
                <?php include "./content.php" ?>
            </main>
            <aside>
                SIDEBAR
            </aside>
        </div>

        <footer> FOOTER </footer>
    </div>
</body>

</html>