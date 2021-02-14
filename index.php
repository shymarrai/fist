<?php
    include "includes/header.php";
?>


    <!-- Conteúdo do site -->
<div id="modalblur">
    <section id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <div class="row">
                            <div class="container">
                                <div class="col-md-3 text-right">
                                    <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="img/r1.png" width="100%" height="auto">
                                </div>
                                <div class="col-md-9 text-left">
                                    <h3 data-animation="animated bounceInDown">VANDARMIER 1800</h3>
                                    <h4 data-animation="animated bounceInUp">ACCIAIO</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="item slide2">
                        <div class="row">
                            <div class="container">
                                <div class="col-md-7 text-left">
                                    <h3 data-animation="animated bounceInDown"> LUMINOR MARINA 1950</h3>
                                    <h4 data-animation="animated bounceInUp">GOLD EDITION</h4>
                                </div>
                                <div class="col-md-5 text-right">
                                    <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="img/r2.png" width="100%" height="auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="item slide3">
                        <div class="row">
                            <div class="container">
                                <div class="col-md-7 text-left">
                                    <h3 data-animation="animated bounceInDown">LUMINOR 1943</h3>
                                    <h4 data-animation="animated bounceInUp">DIAMONDS</h4>
                                </div>
                                <div class="col-md-5 text-right">
                                    <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="img/r3.png" width="100%" height="auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="item slide4">
                        <div class="row">
                            <div class="container">
                                <div class="col-md-7 text-left">
                                    <h3 data-animation="animated bounceInDown">ROSSO CHRONO NO BATTERY EDITION</h3>
                                    <h4 data-animation="animated bounceInUp">EDIÇÃO LIMITADA</h4>
                                </div>
                                <div class="col-md-5 text-right">
                                    <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="img/r4.png" width="100%" height="auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Item 4 -->

                </div>
                <!-- End Wrapper for slides-->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left hidden-xs"></i><span class="sr-only">Anterior</span>
        </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right hidden-xs"></i><span class="sr-only">Próximo</span>
        </a>
            </div>
        </div>
    </section>
    <!-- FIM SLIDER -->



    <section id="comprar-carrocel">
        <div class="fullwidth">

            <div class="gallery">

                <figure class="item">
                    <div class="img-wrap"><img src="img/cl-01.png" alt="" /></div>
                    <figcaption class="caption">
                        <h3>Luminor Marina 1950<br/>3 days automatic ACCIAIO</h3>
                        <a class="btn-buy" href="#">Comprar</a>
                        <a class="btn-details" href="#">Ver Produto</a>
                    </figcaption>
                </figure>

                <figure class="item">
                    <div class="img-wrap"><img src="img/cl-02.png" alt="" /></div>
                    <figcaption class="caption">
                        <h3>Radiomir 1940 Acciaio</h3>
                        <a class="btn-buy" href="#">Comprar</a>
                        <a class="btn-details" href="#">Ver Produto</a>
                    </figcaption>
                </figure>

                <figure class="item">
                    <div class="img-wrap"><img src="img/cl-03.png" alt="" /></div>
                    <figcaption class="caption">
                        <h3>L'egiziano</h3>
                        <a class="btn-buy" href="#">Comprar</a>
                        <a class="btn-details" href="#">Ver Produto</a>
                    </figcaption>
                </figure>

                <figure class="item">
                    <div class="img-wrap"><img src="img/cl-04.png" alt="" /></div>
                    <figcaption class="caption">
                        <h3>Luminor Chrono 2000</h3>
                        <a class="btn-buy" href="#">Comprar</a>
                        <a class="btn-details" href="#">Ver Produto</a>
                    </figcaption>
                </figure>

                <figure class="item">
                    <div class="img-wrap"><img src="img/cl-05.png" alt="" /></div>
                    <figcaption class="caption">
                        <h3>Radiomir 1940<br/>Chronograph Oro Rosso</h3>
                        <a class="btn-buy" href="#">Comprar</a>
                        <a class="btn-details" href="#">Ver Produto</a>
                    </figcaption>
                </figure>

            </div>

        </div>
    </section>
</div>
    <?php include "includes/footer.php" ?>
