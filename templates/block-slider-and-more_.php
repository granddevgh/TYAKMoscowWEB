<div class="container container_slider">
    <div class="row">
        <div class="col-sm-12 col-xl-7 p-0 pr-xl-5">

            <!--    слайдер -->
            <div class="slider-main">
                <? for ($i = 1; $i <= 4; $i++) { ?>
                <!--    слайд   -->
                <div>
                    <a href="/" class="slider-main__link">
                        <img src="/img/carousel/main/1.jpg" alt="">
                        <div class="slider-main__info">
                            <h3 class="slider-main__title">
                                ТЯК «МОСКВА»
                                — время
                                закупать!
                            </h3>
                            <p class="slider-main__text">
                                Детские товары, одежда, обувь, меха, косметика, парфюмерия...
                            </p>
                        </div>
                    </a>
                </div>
                <!--    /слайд   -->
                <? } ?>
            </div>
            <!--    /слайдер -->


        </div>
        <div class="col-sm-12 col-lg-5 d-none d-xl-block">
            <?php
                include('block-move.html');
            ?>
        </div>
    </div>
</div>