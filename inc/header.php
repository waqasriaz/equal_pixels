<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Equal Pixels - Digital Agency in the Netherlands | Web Design, Mobile Apps, Online Marketing, Content </title>
        <meta name="Equal Pixels" content="We are a full-service digital agency based in the Netherlands. We offer a range of design, development, content and marketing services for websites, mobile apps, desktop software and other digital media.">
        <!-- JQUERY --> 
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
        <!-- DIRECTIONAL HOVER -->
        <script src="js/jquery.directional-hover.min.js"></script>
        <!-- BOOTSTRAP -->
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
              rel="stylesheet" type="text/css">
        <!-- FONTS -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
              rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://fast.fonts.net/jsapi/cf2ab097-0fb4-48af-8eb3-5876adc9a5f6.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <!--Video -->
        <script type="text/javascript" src="js/FWDEVPlayer.js"></script>
        <script type="text/javascript" src="js/video_parameters.js"></script>
        <!-- CUSTOM CSS -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/responsive.css" rel="stylesheet" type="text/css">
        <!-- Google Analytics -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-68378290-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body data-spy="scroll" data-target=".nav-container" data-offset="78">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container nav-container">
                <ul class="top-nav nav nav-justified  nav-pills clearfix">
                    <li class="btn navbar-btn">
                        <a href="#services">Services</a>
                    </li>
                    <li class="btn navbar-btn">
                        <a href="#bio">About</a>
                    </li>
                    <li class="logo">
                        <a href="#header"><img src="img/logo_black.png"></a>
                        <span class="top-phone">Design &middot; Development &middot; Content &middot; Marketing</span>
                    </li>
                    <li class="btn navbar-btn">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="btn navbar-btn">
                        <a class="contact-trigger"> Contact</a>
                    </li>
                    <li class="pull-right" id="menu-holder">
                        <button class="menu-button pull-right"><i class="fa fa-bars fa-3"></i></button>

                    </li>
                </ul>

            </div>

            <div class="drop-down-menu">
                <ul class="dd-list">
                    <li>
                        <a  class="dd-link" href="#services">Services</a>
                    </li>
                    <li>
                        <a  class="dd-link" href="#bio">About</a>
                    </li>
                    <li >
                        <a class="dd-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <button class="dd-link dd-contact contact-trigger"> Contact</button>
                    </li>
                </ul>
            </div>

            <?php include( 'inc/contact.php' ); ?>

        </nav>