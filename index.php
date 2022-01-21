<?php include "database/connection.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Releaf - Für Körper und Seele</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icons/favicon.ico"/>
</head>

<body>
    <!--Header-->
    <header>
        <img class="hero" src="img/header_image.jpg" title="HeaderImage" />
        <div class="logoWrap">
            <img class="heroLogo" src="img/logo.png" title="Releaf" href="index.html" width="300">
            <div class="spacerM"></div>
            <button>Shop Now</button>
        </div>

        <!--Products Preview-->
        <div class="headerProducts hiddenS">
            <h2>Tees für Körper und Seele</h2>
            <div class="productContainer">
                <?php foreach ($result as $key => $product) : ?>
                    <?php include "./product.php"; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </header>

    <!--Navigation-->
    <?php include "./nav.php"; ?>

    <!--Main Content-->
    <main>
        <section class="textured">
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
        </section>
        <section class="green">
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
        </section>
        <section>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
        </section>
        <section class="textured green">
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
            <div class="spacerL"></div>
        </section>
    </main>

    <!--Footer-->
    <?php include "./footer.php"; ?>
</body>

</html>