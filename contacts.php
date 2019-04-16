<?php
    $titlePage = 'Контакты';
    $showPath = true;
    $namePath = 'Контакты';

    include('templates/header.inc.php');
    include('templates/block-humburger.php');
    include('templates/header.php');

?>

<div class="container container_page-contacts  mb-5">
    <div class="row">
        <div class="col-12 col-sm-6 col-xl-4">
            <div  class="page-contacts__list">
                <div class="page-contacts__item">
                    <div class="symbol symbol_page-contact">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="40" viewBox="0 0 14.763 23.621" class="svg-location" style="margin: 0 0 20px">
                            <defs>
                                <style>
                                    .map-contact {
                                        fill: #fcbf19;
                                        fill-rule: evenodd;
                                    }

                                </style>
                            </defs>
                            <path id="Path_86" data-name="Path 86" class="map-contact" d="M7.382,0A7.384,7.384,0,0,0,0,7.382c0,7.057,7.382,16.24,7.382,16.24s7.382-9.183,7.382-16.24A7.384,7.384,0,0,0,7.382,0m0,11.456A3.986,3.986,0,1,1,11.368,7.47a3.97,3.97,0,0,1-3.986,3.986" transform="translate(0)"></path>
                        </svg>

                    </div>

                    <a href="https://yandex.ru/maps/-/CBFfAWtPCC" class="d-none d-md-block contact-inner__link">
                        Россия, Москва, <br>Тихорецкий б-р, 1
                    </a>

                    <a href="geo:55.673804, 37.781382" class="d-block d-md-none contact-inner__link">
                        Россия, Москва, <br>Тихорецкий б-р, 1
                    </a>
                </div>

                <div class="page-contacts__item">
                    <div class="symbol symbol_page-contact">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 21.331 21.331" class="svg-time" style="margin: 0 0 9px">
                            <defs>
                                <style>
                                    .map-contact {
                                        fill: #fcbf19;
                                        fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <path id="Path_87" data-name="Path 87" class="map-contact" d="M10.665,0A10.665,10.665,0,1,0,21.331,10.665,10.672,10.672,0,0,0,10.665,0Zm4.3,16.177a1.119,1.119,0,0,1-1.565,0L9.475,12.264a1.092,1.092,0,0,1-.323-.782V5.188a1.106,1.106,0,0,1,2.211,0v5.818l3.606,3.606A1.089,1.089,0,0,1,14.969,16.177Z"></path>
                        </svg>

                    </div>

                    <div class="page-contacts__time">
                        c 5:00 до 20:00 <br>
                        <span>
                            (БЕЗ ВЫХОДНЫХ)
                        </span>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-12 col-sm-6 col-xl-4">

            <div class="contact-inner">
                <h5>
                    Приемная
                </h5>

                <a href="tel:+74997887575" class="contact-inner__link">
                    +7 (499) 788-75-75
                </a>

                <a href="mailto:ortc2002@mail.ru">ortc2002@mail.ru</a>

            </div>

            <div class="contact-inner">
                <h5>
                    ИнфоЦентр
                </h5>

                <a href="tel:+74953598988" class="contact-inner__link">
                    +7 (495) 359-89-88
                </a>

                <a href="mailto:infocenter@moscow-trade.ru">infocenter@moscow-trade.ru</a>

            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4">

            <div class="contact-inner">
                <h5>
                    Аренда
                </h5>

                <a href="tel:+74959805889" class="contact-inner__link">
                    +7 (495) 980-58-89
                </a>

                <a href="mailto:arenda-moscow@moscow-trade.ru">arenda-moscow@moscow-trade.ru</a>

            </div>

            <div class="contact-inner">
                <h5>
                    Реклама
                </h5>

                <a href="tel:+74953598020" class="contact-inner__link">
                    +7 (495) 359-80-20
                </a>

                <a href="mailto:adv@moscow-trade.ru">adv@moscow-trade.ru</a>

            </div>
        </div>
    </div>
</div>




<?php
    include('templates/block-form.html');
    include('templates/block-map.html');
?>

<?php
    include('templates/footer.php');
    include('templates/footer.inc.php');
?>