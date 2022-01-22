<?php include "components/connection.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Releaf - Für Körper und Seele</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icons/favicon.ico" />
</head>

<body>
    <!--Header-->
    <header>
        <img class="hero" src="img/header_image.jpg" />
        <div class="logoWrap">
            <img class="heroLogo" src="img/logo.png" href="index.html" width="300">
            <button>Shop Now</button>
        </div>
        <!--About Us-->
        <div class="header about-wrapper">
            <h2>Das sind wir</h2>
            <div class="textbox">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergre. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invid</p>
            </div>
            <button>Unsere Werte</button>
        </div>

        <!--Products Preview-->
        <div class="header product-wrapper">
            <h2>Tees für Körper und Seele</h2>
            <div class="productContainer">
                <?php foreach (array_slice($result, 0, 4) as $key => $product) : ?>
                    <div class="product">
                        <div class="image-wrapper">
                            <img class="image" src="<?php echo $product->getImage() ?>">
                        </div>
                        <h3><?php echo $product->name; ?></h3>
                        <p><?php echo $product->getPrice(); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <button>Shop now</button>
        </div>
    </header>

    <!--Navigation-->
    <div id="mainMenuBarAnchor"></div>
    <?php include "components/nav.php"; ?>

    <!--Main Content-->
    <main>
        <section class="textured">
            <div class="circle-wrapper">
                <div class="circle">
                    <h3>Mehr als nur Tee</h3>
                    <p>
                        Unsere Tees sind nicht nur lecker, sondern auch gut für Körper und Seele. Ob Stress, Magenbeschwerden oder Halsschmerzen,
                        mit unseren Tees kannst du dir eine Auszeitgönnen.
                        <br>
                        Entdecke jetzt unser vielseitiges Angebot!
                    </p>
                </div>
            </div>
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
    <?php include "components/footer.php"; ?>

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/navbar.js"></script>
</body>


</html>