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
        <picture>
            <source srcset="img/header_image.jpg" media="(min-width: 700px)">
            <img class="hero" src="img/header_image_mobile.jpg" />
        </picture>

        <!--Blätter-->
        <img class="leaf" src="img/leaf2.png" />
        <img class="leaf" src="img/leaf2.png" />
        <img class="leaf" src="img/leaf.png" />


        <div class="logoWrap">
            <img class="heroLogo" src="img/logo.png" href="index.html" width="300">
            <form action="./shop.php">
                <button class="button">Shop now</button>
            </form>
        </div>
        <!--About Us-->
        <div class="header about-wrapper">
            <h2 class="amatic text-shadow">Das sind wir</h2>
            <div class="textbox">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergre. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invid</p>
            </div>
            <form action="./unsere-werte.php">
                <button class="button">Unsere Werte</button>
            </form>
        </div>

        <!--Products Preview-->
        <div class="header product-wrapper">
            <h2 class="amatic text-shadow">Tees für Körper und Seele</h2>
            <div class="productContainer">
                <?php foreach (array_slice(getProducts($_GET["category"] ?? null, null), 0, 4) as $key => $product) : ?>
                    <form action="./product.php">
                        <button type="submit" name="id" value="<?php echo $product->id ?>">
                            <div class="product">
                                <div class="image-wrapper">
                                    <img class="image" src="<?php echo $product->getImage() ?>">
                                </div>
                                <h3 class="opensans text-shadow"><?php echo $product->name; ?></h3>
                                <p class="amatic text-shadow"><?php echo $product->getPrice(); ?></p>
                            </div>
                        </button>
                    </form>
                <?php endforeach; ?>
            </div>
            <form action="./shop.php">
                <button class="button">Unsere Empfehlungen</button>
            </form>
        </div>

        <!--Scrolldown button-->
        <a href="#main" class="scrollDown"></a>
    </header>

    <!--Navigation-->
    <div id="mainMenuBarAnchor"></div>
    <div id="nav">
        <img class="wave top" src="img/wave_top.svg" />
        <?php include "components/nav.php"; ?>
        <img class="wave bottom" src="img/wave_bottom.svg" />
    </div>

    <!--Main Content-->
    <main id="main">
        <section class="textured">
            <div class="circleWrap">
                <div class="bubble"></div>
                <div class="circle">
                    <h3>Mehr als nur Tee</h3>
                    <p>
                        Unsere Tees sind nicht nur lecker, sondern auch gut für Körper und Seele. Ob Stress, Magenbeschwerden oder Halsschmerzen,
                        mit unseren Tees kannst du dir eine Auszeitgönnen.
                    </p>
                    <p>
                        Entdecke jetzt unser vielseitiges Angebot!
                    </p>
                    <form action="./shop.php">
                        <button class="button">Shop Now</button>
                    </form>
                </div>
                <img src="img/woman_drinking_tea.jpg" alt="Frau trinkt Tee" class="roundedImage" id="imgDrinkingTea" />
            </div>
            <div class="bubble green"></div>
            <div class="bubble green"></div>
        </section>
        <section class="green">
            <img class="wave top" src="img/wave_top_green.svg" />
            <h1>Unsere Werte</h1>
            <img class="wave bottom" src="img/wave_bottom_green.svg" />
        </section>
        <section class="white">
            <h1>Entdecke deinen Lieblingstee</h1>
    <?php include "components/slider.php"; ?>
            <img class="wave bottom" src="img/wave_bottom.svg" />
        </section>
        <section class="texturedGreen">
            <p>Der Grüne Tee war so lecker! Und endlich bin ich meine Magenschmerzen los! 5/5</p>
        </section>
    </main>

    <!--Footer-->
    <?php include "components/footer.php"; ?>

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/header.js"></script>

    <!--Slider-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.js"></script>
    <script src="js/slider.js"></script>
</body>


</html>