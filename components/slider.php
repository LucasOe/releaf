<div class='categorySlider'>
    <div class='slider'>
        <ul>
            <?php foreach (getCategories() as $key => $category) : ?>
                <li>
                    <img class="image" src="<?php echo $category->getImage() ?>">
                    <h3><?php echo $category->name; ?></h3>
                </li>
            <?php endforeach; ?>
            <?php foreach (getCategories() as $key => $category) : ?>
                <li>
                    <img class="image" src="<?php echo $category->getImage() ?>">
                    <h3><?php echo $category->name; ?></h3>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class='slider-nav'>
        <div class='prev'>
            <img src="img/icons/ic_arrow_grey.svg">
        </div>
        <div class='next'>
            <img src="img/icons/ic_arrow_grey.svg">
        </div>
    </div>
</div>
<?php include "components/svg_icons.php" ?>