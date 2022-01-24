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
    <!--Navigation-->
    <div id="nav">
        <?php include "components/nav.php"; ?>
    </div>

    <!--Main Content-->
    <main>
        <?php $product = getProduct($_GET["id"]); ?>
        <h1> <?php echo $product->name; ?> </h1>
    </main>
</body>

</html>