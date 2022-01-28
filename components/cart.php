<?php include "connection.php" ?>

<h1 class="title">Warenkorb</h1>
<?php if (!empty($_POST["data"])) : ?>
    <div class="fullCart">
        <?php foreach ($_POST["data"] as $key => $element) : ?>
            <?php $product = getProduct($element["id"]); ?>
            <?php $amount = $element["amount"] ?>
            <h1><?php echo $product->name ?></h1>
            <h1><?php echo $amount ?></h1>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <div class="emptyCart">
        <div class="text-wrapper">
            <p class="opensans">Du hast noch keine Produkte in deinem Warenkorb.</p>
            <p class="opensans">Entdecke jetzt unser vielseitiges Angebot:</p>
            <button class="button">Shop</button>
        </div>
    </div>
<?php endif; ?>