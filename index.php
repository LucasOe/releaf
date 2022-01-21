<!DOCTYPE html>
<html>

<head>
    <title>Releaf Teas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
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
                <?php
                for ($i = 0; $i <= 3; $i++) {
                    include "./product.php";
                }
                ?>
            </div>
        </div>
    </header>

    <!--Navigation-->
    <?php include "./nav.php"; ?>

    <!--Main Content-->
    <main>
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
    </main>

    <!--Footer-->
    <?php include "./footer.php"; ?>
</body>

</html>