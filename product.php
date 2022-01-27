<?php include "components/connection.php" ?>
<?php $product = getProduct($_GET["id"]); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Releaf - Für Körper und Seele</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icons/favicon.ico" />
</head>

<body>
    <!--Navigation-->
    <div id="nav" class="sticky">
        <?php include "components/nav.php"; ?>
    </div>

    <!--Main Content-->
    <main class="productSite">
        <div class="product-wrapper">
            <div class="productImage">
                <h1 class="productName"> </h1>
                <div class="image-wrapper">
                    <img class="image" src="<?php echo $product->getImage() ?>">
                </div>
            </div>
            <div class="productDescription">
                <h1 class="productName"> <?php echo $product->name; ?> </h1>
                <div class="productBody">
                    <h3>Beschreibung:</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut fugiat ad illo, placeat accusamus corrupti ipsa nisi adipisci, veniam voluptatum provident! Quae beatae facilis corporis esse ipsum quis veniam saepe!</p>
                </div>
            </div>
        </div>
    </main>

    <!--Footer-->
    <?php include "components/footer.php"; ?>
</body>

</html>