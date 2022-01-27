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
    <script src="js/small_page.js"></script>
</head>

<body>
    <!--Navigation-->
    <div id="nav" class="sticky">
        <?php include "components/nav.php"; ?>
    </div>

    <!--Main Content-->
    <main id="shop">
        <form class="search" action="./shop.php">
            <input class="opensans" id="search" name="search" type="text" placeholder="Suche...">
            <button class="button opensans">Suche</button>
        </form>

        <div class="categoryContainer">
            <form action="./shop.php" <?php echo isSelected(0) ?>>
                <button type="submit" name="category" value="0">
                    <div class="category">
                        <div class="image-wrapper">
                            <img class="image" src="img/products/tee_000.jpg">
                        </div>
                        <h3 class="amatic">Gesamtes Sortiment</h3>
                    </div>
                </button>
            </form>
            <?php foreach (getCategories() as $key => $category) : ?>
                <form action="./shop.php" <?php echo isSelected($category->id) ?>>
                    <button type="submit" name="category" value="<?php echo $category->id ?>">
                        <div class="category">
                            <div class="image-wrapper">
                                <img class="image" src="<?php echo $category->getImage() ?>">
                            </div>
                            <h3 class="amatic"><?php echo $category->name; ?></h3>
                        </div>
                    </button>
                </form>
            <?php endforeach; ?>
        </div>
        <h1 class="currentCategory">Unser <?php echo getCategory($_GET["category"] ?? null)->name ?></h1>

        <div class="productsContainer">
            <?php foreach (getProducts($_GET["category"] ?? null, $_GET["search"] ?? null) as $key => $product) : ?>
                <form action="./product.php">
                    <button type="submit" name="id" value="<?php echo $product->id ?>">
                        <div class="product">
                            <div class="image-wrapper">
                                <img class="image" src="<?php echo $product->getImage() ?>">
                            </div>
                            <h3 class="amatic"><?php echo $product->name; ?></h3>
                            <div class="stars">
                                <hr>
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <?php if ($product->rating >= $i) : ?>
                                        <img src="img/icons/ic_star_full.svg">
                                    <?php else : ?>
                                        <img src="img/icons/ic_star_hollow.svg">
                                    <?php endif ?>
                                <?php endfor; ?>
                                <hr>
                            </div>
                            <p class="amatic"><?php echo $product->getPrice(); ?></p>
                        </div>
                    </button>
                </form>
            <?php endforeach; ?>
        </div>
    </main>

    <!--Footer-->
    <?php include "components/footer.php"; ?>
</body>

</html>