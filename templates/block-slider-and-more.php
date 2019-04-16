<div class="container container_slider-and-more">
    <div class="component">
        <div class="component__list">
            <div class="component__item">
                <!--    слайдер -->
                <div class="slider-main">
                    <? for ($i = 1; $i <= 2; $i++) { ?>
                    <!--    слайд   -->
                    <div>
                        <a href="/" class="slider-main__link">
                            <img src="/img/carousel/main/1.jpg" alt="">
                        </a>
                    </div>
                    <!--    /слайд   -->
                    <? } ?>
                </div>
                <!--    /слайдер -->

            </div>
            <div class="component__item">
                <?php
                include('block-move.html');
            ?>
            </div>
        </div>
    </div>
</div>

