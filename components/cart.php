<?php include "connection.php" ?>

<h1 class="title">Warenkorb</h1>
<?php if (!empty($_POST["data"])) : ?>
    <div class="fullCart">
        <?php foreach ($_POST["data"] as $key => $element) : ?>
            <?php $product = getProduct($element["id"]); ?>
            <?php $amount = $element["amount"] ?>
            <div class="product">
                <div class="left">
                    <div class="image-wrapper">
                        <img class="image" src="<?php echo $product->getImage() ?>">
                    </div>
                    <h1 class="name"><?php echo $product->name ?></h1>
                </div>
                <div class="right">
                    <form action="./cart.php" type="submit">
                        <div class="amount">
                            <button type="button" class="plusminus" onclick="handleMinus(<?php echo $key ?>)">-</button>
                            <input class="num" id="<?php echo $key ?>" value="<?php echo $amount ?>" min="0" max="99" required />
                            <button type="button" class="plusminus" onclick="handlePlus(<?php echo $key ?>)">+</button>
                        </div>
                        <button class="remove opensans" title="Entfernen" onclick="handleRemove(<?php echo $key ?>)">
                            <p>-</p>
                        </button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <div class="emptyCart">
        <div class="text-wrapper">
            <p class="opensans">Du hast noch keine Produkte in deinem Warenkorb.</p>
            <p class="opensans">Entdecke jetzt unser vielseitiges Angebot:</p>
            <a class="button" href="./shop.php">Shop</a>
        </div>
    </div>
<?php endif; ?>