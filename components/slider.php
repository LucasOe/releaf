<div class='categorySlider'>
    <div class='prev'>
        <img src="img/icons/ic_arrow_grey.svg">
    </div>
    <div class='slider'>
        <ul>
            <?php foreach (getCategories() as $key => $category) : ?>
                <li>
                    <form action="./shop.php">
                        <button type="submit" name="category" value="<?php echo $category->id ?>">
                            <img class="image" src="<?php echo $category->getImage() ?>">
                            <h3><?php echo $category->name; ?></h3>
                        </button>
                    </form>
                </li>
            <?php endforeach; ?>
            <?php foreach (getCategories() as $key => $category) : ?>
                <li>
                    <form action="./shop.php">
                        <button type="submit" name="category" value="<?php echo $category->id ?>">
                            <img class="image" src="<?php echo $category->getImage() ?>">
                            <h3><?php echo $category->name; ?></h3>
                        </button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class='next'>
        <img src="img/icons/ic_arrow_grey.svg">
    </div>
</div>