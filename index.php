<?php include "database/connection.php" ?>

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
        <div class="headerProducts">
            <h2>Tees für Körper und Seele</h2>
            <div class="productContainer">
                <?php foreach ($result as $key => $product) : ?>
                    <div class="product">
                        <div class="image-wrapper">
                            <img class="image" src="<?php echo $product->getImage() ?>">
                        </div>
                        <h3><?php echo $product->name; ?></h3>
                        <p><?php echo $product->getPrice(); ?></p>
                    </div>
                <?php endforeach; ?>
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