<div class="product">
    <div class="imageWrap">
        <img class="productImage" src="<?php echo $product->getImage() ?>" height="auto" width="100">
    </div>
    <h3><?php echo $product->name; ?></h3>
    <p><?php echo $product->getPrice(); ?></p>
</div>