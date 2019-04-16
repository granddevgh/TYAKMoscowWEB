


<div class="headerbar">

    <div class="headerbar__list">
        <div class="headerbar__item">
            <div class="header__logo">
                <a href="/">
                    <img src="/img/logo-header.png" alt="Торгово-ярмарочный комплекс «Москва» в Люблино"
                         title="Торгово-ярмарочный комплекс «Москва» в Люблино" class="header__logoimg">
                </a>
            </div>
        </div>
        <div class="headerbar__item">

            <div class="container container_header">

                <div class="row">
                    <div class="header-line__list">
                        <div class="header-line__item">
                            <div class="symbol symbol_mobile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 21.331 21.331"
                                     class="svg-time">
                                    <path id="Path_87" data-name="Path 87" class="time"
                                          d="M10.665,0A10.665,10.665,0,1,0,21.331,10.665,10.672,10.672,0,0,0,10.665,0Zm4.3,16.177a1.119,1.119,0,0,1-1.565,0L9.475,12.264a1.092,1.092,0,0,1-.323-.782V5.188a1.106,1.106,0,0,1,2.211,0v5.818l3.606,3.606A1.089,1.089,0,0,1,14.969,16.177Z"></path>
                                </svg>
                                <span>
                    Время работы комплекса: <br>
                    5:00-20:00

                </span>
                            </div>
                        </div>
                        <div class="header-line__item">
                            <a href="#" class="header-line__btn">
                                как добраться
                            </a>
                        </div>
                        <div class="header-line__item">
                            <?php
                        include('block-lang-select.php');
                    ?>
                        </div>
                        <div class="header-line__item">
                            <!--    social  -->
                            <?php
                        include('block-social.html');
                    ?>
                            <!--    social  -->
                        </div>
                        <div class="header-line__item">
                            <a href="/">
                                <img src="/img/logo-header.png" alt="Торгово-ярмарочный комплекс «Москва» в Люблино"
                                     title="Торгово-ярмарочный комплекс «Москва» в Люблино" class="header__logoimg">
                            </a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 p-0">
                        <ul class="menu-main menu-main_header">
                            <?php
                        include('block-menu.php');
                    ?>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!--<div style="width: 460px; background-color: #c3e6cb">dgdf</div>-->

</div>


<header class="header">



    <!--    для мобильной версии    -->
    <div class="container-fluid container_mobile-location">

        <div class="row  mobile-location__list">
            <div class="col-6  mobile-location__item">
                <div class="symbol symbol_mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" viewBox="0 0 14.763 23.621"
                         class="svg-location">
                        <path id="Path_86" data-name="Path 86" class="map-header"
                              d="M7.382,0A7.384,7.384,0,0,0,0,7.382c0,7.057,7.382,16.24,7.382,16.24s7.382-9.183,7.382-16.24A7.384,7.384,0,0,0,7.382,0m0,11.456A3.986,3.986,0,1,1,11.368,7.47a3.97,3.97,0,0,1-3.986,3.986"
                              transform="translate(0)"></path>
                    </svg>
                    <a href="https://yandex.ru/maps/-/CBFfAWtPCC" class="d-none d-md-block">
                        как добраться
                    </a>

                    <a href="geo:55.673804, 37.781382"
                       class="d-block d-md-none">
                        как добраться
                    </a>
                </div>
            </div>
            <div class="col-6  mobile-location__item">
                <div class="symbol symbol_mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 21.331 21.331"
                         class="svg-time">
                        <path id="Path_87" data-name="Path 87" class="time"
                              d="M10.665,0A10.665,10.665,0,1,0,21.331,10.665,10.672,10.672,0,0,0,10.665,0Zm4.3,16.177a1.119,1.119,0,0,1-1.565,0L9.475,12.264a1.092,1.092,0,0,1-.323-.782V5.188a1.106,1.106,0,0,1,2.211,0v5.818l3.606,3.606A1.089,1.089,0,0,1,14.969,16.177Z"></path>
                    </svg>
                    <span>
                    Время работы: <br>
                    5:00-20:00

                </span>
                </div>
            </div>
        </div>

    </div>
    <!--    /для мобильной версии    -->

</header>


<? if($showPath) {?>
<div class="container-fluid">
    <!--    заголовок   -->
    <div class="row">
        <div class="col p-0">
            <h1 class="title-page">
                <?=$titlePage?>
            </h1>
        </div>
    </div>
    <!--    /заголовок   -->
</div>


<div class="container">
    <!--    строка пути -->
    <div class="row">
        <div class="col px-md-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$namePath?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!--    /строка пути -->
</div>
<? } ?>