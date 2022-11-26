<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700%7CRoboto:400,400i,700" rel="stylesheet">
{{--        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">--}}
        <!-- CSS Library-->
        {!! Theme::header() !!}
    </head>
    <body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif class="home-01">
        {!! apply_filters(THEME_FRONT_BODY, null) !!}
        <header class="site-header">
            <div class="top-bar clearfix">
                <div class="container">
                    <ul class="list-inline pull-left quick-contact">
                        <li><a href="tel://{!! theme_option('phone') !!}"><i class="fa fa-phone"></i> <span>{!! theme_option('phone') !!}</span></a></li>
                        <li><a href="mailto://{!! theme_option('email') !!}"><i class="fa fa-envelope-o"></i> <span>{!! theme_option('email') !!}</span></a></li>
                    </ul> <!-- .quick-contact -->

                    <ul class="list-inline pull-right top-bar-social">
                        <li><a href="#" class="bvi-open"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#"><i class="fa fa-mobile"></i></a></li>
                        <li><a href="#"><i class="fa fa-flag"></i></a></li>
                        <li><a href="#"><i class="fa fa-sitemap"></i></a></li>
                    </ul>


                    <ul class="list-inline pull-right top-bar-menu">
                        @if (is_plugin_active('language'))
                            {!! Theme::partial('language-switcher', ['color' => $color ?? '']) !!}
                        @endif
                    </ul> <!-- .top-bar-menu -->
                </div> <!-- .container -->
            </div> <!-- .top-bar -->
            <nav class="navbar corporex-navbar navbar-01">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
{{--                        <a class="navbar-brand" href="#"><img src="img/corporex-logo.png" alt="corporex logo"></a>--}}
                    </div> <!-- .navbar-header -->
                    <div class="collapse navbar-collapse navbar-items" id="navbar-items">
                        {!!
                         Menu::renderMenuLocation('main-menu', [
                             'options' => ['class' => 'nav navbar-nav navbar-right'],
                             'view'    => 'main-menu',
                         ])
                     !!}
                    </div> <!-- .collapse navbar-collapse -->
                </div> <!-- .container -->
            </nav> <!-- .navbar -->
        </header> <!-- .site-header -->
        <section class="hero-area" style="display: none">
            <div id="corporex-slider" class="corporex-slider carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#corporex-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#corporex-slider" data-slide-to="1"></li>
                </ol> <!-- .carousel-indicators -->

                <div class="carousel-inner" role="listbox">
                    <div class="item caption-left active">
                        <img class="slider-bg img-responsive" src="http://via.placeholder.com/1920x720" alt="slider image 01">
                        <div class="container">

                            <div class="carousel-caption">
                                <h1 class="h1-extra"><span>The Corporex</span>The Real Corporate Experience</h1>
                                <p class="lead">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <a class="btn btn-main" href="#">learn more</a>
                            </div> <!-- .carousel-caption -->
                        </div> <!-- .container -->
                    </div> <!-- .item -->
                    <div class="item caption-right">
                        <img class="slider-bg img-responsive" src="http://via.placeholder.com/1920x720" alt="slider image 02">
                        <div class="container">

                            <div class="carousel-caption">
                                <h1 class="h1-extra"><span>corporex Theme</span>Discover the Excellence</h1>
                                <p class="lead">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <a class="btn btn-main" href="#">learn more</a>
                            </div> <!-- .carousel-caption -->
                        </div> <!-- .container -->
                    </div> <!-- .item -->
                </div> <!-- .carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#corporex-slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a> <!-- .carousel-control -->

                <a class="right carousel-control" href="#corporex-slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a> <!-- .carousel-control -->

            </div> <!-- .carousel -->
        </section>
        <section class="blog-section section-block" style="display: none">
            <div class="container">
                <div class="title-block">
                    <h2>Latest News</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore mollit anim id est laborum.
                    </p>
                </div> <!-- .title-block -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="post-wrapper post-overlay">
                            <div class="image-wrapper gradient-black">
                                <img class="img-responsive" src="http://via.placeholder.com/570x408" alt="blog image 01">
                            </div> <!-- .image-wrapper -->
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>August 03, 2017</li>
                                    <li><a href="#">Web Design</a></li>
                                </ul>
                                <h3><a href="#">Excepteur sint occaecat cupidatat non proid</a></h3>
                            </div> <!-- .post-content -->
                        </div> <!-- .post-wrapper post-overlay -->
                    </div> <!-- .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="post-wrapper post-split clearfix">
                            <div class="image-wrapper">
                                <img class="img-responsive" src="http://via.placeholder.com/570x408" alt="blog image">
                            </div> <!-- .image-wrapper -->
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>August 03, 2017</li>
                                    <li><a href="#">Web Design</a></li>
                                </ul>
                                <h3><a href="#">Aliquam commodo felis ac lacus imper</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt...
                                </p>
                                <a class="btn-open" href="#">Read More</a>
                            </div> <!-- .post-content -->
                        </div> <!-- .post-wrapper split-post -->

                        <div class="post-wrapper post-split clearfix">
                            <div class="image-wrapper">
                                <img class="img-responsive" src="http://via.placeholder.com/570x408" alt="blog image">
                            </div> <!-- .image-wrapper -->
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>August 03, 2017</li>
                                    <li><a href="#">Web Design</a></li>
                                </ul>
                                <h3><a href="#">Nam quis odio molestie pulvinar nisl</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt...
                                </p>
                                <a class="btn-open" href="#">Read More</a>
                            </div> <!-- .post-content -->
                        </div> <!-- .post-wrapper split-post -->

                    </div> <!-- .col-lg-6 -->
                </div> <!-- .row -->
                <div class="btn-container">
                    <a class="btn btn-narrow" href="#">View All</a>
                </div>

            </div> <!-- .container -->
        </section> <!-- .blog-section -->


