<div id="mainMenuBarAnchor" />
<div id="nav">
    <img class="wave top" src="img/wave_top.svg" />
    <img class="logo" src="img/logo.png" title="Releaf" href="index.html">
    <ul class="navigation">
        <li>
            <a href="/shop" title="Zum Shop">Shop</a>
        </li>
        <li>
            <a href="/zubehoer" title="Zubehör">Zubehör</a>
        </li>
        <li>
            <a href="/unsere-werte" title="Zubehör">Unsere Werte</a>
        </li>
    </ul>
    <ul class="icons">
        <li>
            <img src="img/icons/ic_search.svg">
        </li>
        <li>
            <img src="img/icons/ic_heart.svg">
        </li>
        <li>
            <img src="img/icons/ic_head.svg">
        </li>
        <li>
            <img src="img/icons/ic_shopping_cart.svg">
        </li>
    </ul>
    <img class="wave bottom" src="img/wave_bottom.svg" />
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var $window = $(window);
        var $mainMenuBar = $('#nav');
        var $mainMenuBarAnchor = $('#mainMenuBarAnchor');

        // Run this on scroll events.
        $window.scroll(function() {
            var windowTop = $window.scrollTop();
            var divTop = $mainMenuBarAnchor.offset().top;
            var animationSpeed = 5; // the bigger, the slower

            if (windowTop > divTop) {
                // Make the div sticky.
                $mainMenuBar.addClass('sticky');
            } else {
                // Unstick the div.
                $mainMenuBar.removeClass('sticky');
            }

            // Clamp number between two values
            const clamp = (num, min, max) => Math.min(Math.max(num, min), max);
            animationAmount = clamp(100 - (windowTop - divTop) / animationSpeed, 0, 100);

            $("#nav > .wave.bottom").css("transform", "scaleY(" + animationAmount + "%)");
        });
    });
</script>