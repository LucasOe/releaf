<?php include "connection.php" ?>

<div class="cartContainer">
    <h1 class="title">Warenkorb</h1>
    <?php foreach ($_POST["data"] as $key => $id) : ?>
        <?php $product = getProduct($id); ?>
        <h1><?php echo $product->name ?></h1>
    <?php endforeach; ?>
</div>