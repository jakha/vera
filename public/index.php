<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VERA &mdash; Ателье </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content="ателье, пошив платьев, пошив на заказ"/>
    <meta name="author" content="FREEHTML5.CO & Jahangir Ereshov"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet'
          type='text/css'>
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>

    <![endif]-->

</head>

<body>

<div id="fh5co-header">
    <div class="container">
        <!-- Mobile Toggle Menu Button -->
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <div id="fh5co-logo">
            <a href="index.html">VERA<span>.</span></a>
        </div>
        <nav id="fh5co-main-nav">
            <ul>
                <li><a href="#" data-nav-section="home">Главная</a></li>
                <li><a href="#" data-nav-section="review">Отзывы</a></li>
                <li><a href="#" data-nav-section="contact">Контакты</a></li>
            </ul>
        </nav>
    </div>
</div>
<div id="fh5co-main">
    <div class="fh5co-overlay-mobile"></div>
    <div id="fh5co-home" class="js-fullheight" data-section="home">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5">
                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-text">
                        <div class="container">
                            <div class="row text-center">
                                <h1 class="animate-box">Доверьте нам свой гардероб</h1>
                                <div class="fh5co-go animate-box">
                                    <a href="#" class="js-fh5co-next">
                                        хочу доверить
                                        <span><i class="icon-arrow-down2"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5">
                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-text">
                        <div class="container">
                            <div class="row text-center">
                                <h1 class="animate-box">Покупайте меньше, выбирайте лучше, и делайте это
                                    самостоятельно.</h1>
                                <div class="fh5co-go animate-box">
                                    <a href="#" class="js-fh5co-next">
                                        хочу лучшее
                                        <span><i class="icon-arrow-down2"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">
                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-text">
                        <div class="container">
                            <div class="row text-center">
                                <h1 class="animate-box">Мы не создаем одежду, мы воплощаем мечты.</h1>
                                <div class="fh5co-go animate-box">
                                    <a href="#" class="js-fh5co-next">
                                        хочу воплотить
                                        <span><i class="icon-arrow-down2"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

    <div id="fh5co-portfolio" data-section="review">
        <div class="container">
            <div class="row r-pb">
                <div class="col-md-8 col-md-offset-2 text-center section-heading">
                    <h2 class="fh5co-section-title animate-box">ОТЗЫВЫ</h2>
                    <p class="fh5co-lead animate-box">Вводный текст</p>
                </div>
            </div>
            <div id="gallery" class="row">
                <?php for($i = 1; $i<13; $i++):?>
                    <div class="gallery-item col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
                        <div class="img-grid">
                            <img src="images/pic_<?php echo $i?>.jpg" alt="" class="img-responsive">
                            <a href="#" class="transition">
                                <div>
                                    <span class="fh5co-meta"><?php echo $i?> картина</span>
                                    <h2 class="fh5co-title">отзыв</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endfor;?>
            </div>
        </div>

        <div id="fh5co-contact" data-section="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center section-heading">
                        <h2 class="fh5co-section-title animate-box">КОНТАКТЫ</h2>
                        <p class="fh5co-lead animate-box"> Какие-то контакты </p>
                        <p class="animate-box"> </p>
                        <p class="animate-box"><a href="" target="" class="btn btn-primary btn-lg">Заказать звонок</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="fh5co-footer-widget">
                            <p>Created by Jahangir Ereshov</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="fh5co-footer-widget">
                            <ul class="fh5co-social pull-right">
                                <li>
                                    <a href="https://www.vk.com/id166415916"><i class="icon-vk"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/atelierno1_astana/?hl=ru"><i class="icon-instagram"></i></a>
                                </li>
                            </ul>
                            <div class="fh5co-footer-widget">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- END fh5co-page -->

    <script src="js/jquery.min.js"></script>

    <script src="js/main.js"></script>

    <script type="text/javascript">

    </script>


    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Adaptive gallery -->
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Main JS -->

</body>
</html>

