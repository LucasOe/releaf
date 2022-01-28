<?php include "components/connection.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Releaf - Für Körper und Seele</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icons/favicon.ico" />

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!--Header-->
    <header>
        <picture>
            <source srcset="img/header_image.jpg" media="(min-width: 700px)">
            <img class="hero" src="img/header_image_mobile.jpg" />
        </picture>

        <!--Blätter-->
        <img class="headerLeaf" src="img/leaf2.png" />
        <img class="headerLeaf" src="img/leaf2.png" />
        <img class="headerLeaf" src="img/leaf.png" />


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
                <p>
                    Bei Releaf sind wir der Meinung, dass jeder sich mal eine Teepause verdient hat. Deswegen haben wir es uns zur Aufgabe gemacht dir Tee aus biologischen und nachhaltigen Anbau anzubieten. Wir arbeiten mit ausgewählten Händlern um eine faire Produktion und die beste Qualität zu gewährleisten. Bei einer Auswahl von über 15 Teesorten wird jeder fündig. <br>
                    Wenn du noch fragen hast lass es uns einfach über das Kontaktformular wissen. <br>
                    <br>
                    Also gönn dir eine Auszeit und entdecke jetzt unser vielseitiges Angebot!
                </p>
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
    </div>

    <!--Main Content-->
    <main id="main">
        <section id="intro-wrapper" class="textured">
            <div class="circleWrap">
                <div class="bubble"></div>
                <div class="circle">
                    <h2>Mehr als nur Tee</h2>
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
            <div class="bubble"></div>
            <div class="bubble"></div>
        </section>
        <section class="green">
            <img class="wave top" src="img/wave_top_green.svg" />
            <h2>Unsere Werte</h2>
            <div class="value-wrapper">
                <div class="value-block">
                    <img src="img/icons/ic_heart.svg" />
                    <h3>
                        Natürlich Bio!
                    </h3>
                    <p>
                        Alle unsere Produkte sind aus biologischem und nachhaltigem Anbau.
                    </p>
                </div>
                <div class="value-block">
                    <img src="img/icons/ic_heart.svg" />
                    <h3>
                        Für deine Gesundheit!
                    </h3>
                    <p>
                        Unsere Tee´s sind nicht nur super lecker, sonder helfen dir auch bei körperlichen Beschwerden. Weil uns deine Gesundheit am Herzen liegt.
                    </p>
                </div>
                <div class="value-block">
                    <img src="img/icons/ic_heart.svg" />
                    <h3>
                        Gib uns eine Bewertung!
                    </h3>
                    <p>
                        Uns ist Transparenz wichtig! Zeig was dir gefällt und lasse eine Bewertung da.
                    </p>
                </div>
            </div>
            <a>
                <button class="button">Mehr erfahren</button>
            </a>
            <!--Leaves-->
            <img src="img/leaf.png" id="leaf" width="auto" height="auto">
            <img src="img/leaf2.png" id="leaf2" width="auto" height="auto">
            <img src="img/leaf2.png" id="leaf3" width="auto" height="auto">
            <img src="img/leaf2.png" id="leaf4" width="auto" height="auto">
            <img src="img/leaf2.png" id="leaf5" width="auto" height="auto">
            <img src="img/leaf2.png" id="leaf6" width="auto" height="auto">
            <img src="img/leaf.png" id="leaf7" width="auto" height="auto">
            <img src="img/leaf2.png" id="leaf8" width="auto" height="auto">
            <img src="img/leaf2.png" id="leaf9" width="auto" height="auto">


            <img class="wave bottom" src="img/wave_bottom_green.svg" />
        </section>
        <section class="white">
            <h2>Entdecke deinen Lieblingstee</h2>
            <?php include "components/slider.php"; ?>
            <img class="wave bottom" src="img/wave_bottom.svg" />
        </section>
        <section class="texturedGreen">
            <div class="testimonial-wrapper">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <img src="img/testimonial.jpg" alt="Jennifer Hoffmann" class="roundedImage" id="imgJenniferHoffmann">
                <div>
                    <img src="img/icons/ic_star_full.svg">
                    <img src="img/icons/ic_star_full.svg">
                    <img src="img/icons/ic_star_full.svg">
                    <img src="img/icons/ic_star_full.svg">
                    <img src="img/icons/ic_star_full.svg">
                    <h3>
                        "Der Grüne Tee war so lecker! Und<br> endlich bin ich meine Magen-<br>schmerzen los!"
                    </h3>
                    <p>
                        -Jennifer Hoffmann
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!--Footer-->
    <?php include "components/footer.php"; ?>

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/header.js"></script>

    <!--Slider-->
    <script src="js/slider.js"></script>
</body>

</html>