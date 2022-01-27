<?php include "connection.php" ?>

<?php foreach ($_POST["data"] as $key => $id) : ?>
    <?php $product = getProduct($id); ?>
    <h1><?php echo $product->name ?></h1>
<?php endforeach; ?>