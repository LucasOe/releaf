
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
            <div class='slider-nav'>
                <div class='prev'></div>
                <div class='next'></div>
            </div>
        </div>
    </div>