<?php include "connection.php" ?>

<div class="cartContainer">
    <h1 class="title">Warenkorb</h1>
    <?php if (!empty($_POST["data"])) : ?>
        <?php foreach ($_POST["data"] as $key => $element) : ?>
            <?php $product = getProduct($element["id"]); ?>
            <?php $amount = $element["amount"] ?>
            <h1><?php echo $product->name ?></h1>
            <h1><?php echo $amount ?></h1>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Keine Produkte auf der Liste</p>
    <?php endif; ?>
</div>