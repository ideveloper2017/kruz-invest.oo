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
    <body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif class="home-01 home-header-2">
        {!! apply_filters(THEME_FRONT_BODY, null) !!}

        <header class="site-header header-02">
            <div class="top-bar clearfix">
                <div class="container">
                    <ul class="list-inline pull-left quick-contact">
                        <li><a href="#"><i class="fa fa-phone"></i> <span>+88 01679 252595</span></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> <span>hello@corporex.com</span></a></li>
                    </ul> <!-- .quick-contact -->

                    <ul class="list-inline pull-right top-bar-menu">
                        <li><a href="#">Welcome</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul> <!-- .top-bar-menu -->
                </div> <!-- .container -->
            </div> <!-- .top-bar -->
            <nav class="navbar corporex-navbar navbar-02">
                <!-- <div class="container"> -->
                <div class="navbar-header">
                    <div class="container">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>

                        <ul class="list-inline pull-right header-social">
                            <li class="facebook-link"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter-link"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google-plus-link"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin-link"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul> <!-- .top-bar-menu -->

                        <a class="navbar-brand" href="#"><img src="img/corporex-logo.png" alt="corporex logo"></a>
                    </div> <!-- .container -->
                </div> <!-- .navbar-header -->

                <div class="collapse navbar-collapse navbar-items" id="navbar-items">
                    <div class="container">
                        {!!
                     Menu::renderMenuLocation('main-menu', [
                         'options' => ['class' => 'nav navbar-nav navbar-right'],
                         'view'    => 'main-menu',
                     ])
                 !!}
                        <ul class="nav navbar-nav" style="display:none;">
                            <li class="dropdown menu-large">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                <ul class="dropdown-menu megamenu row">

                                    <li class="col-sm-3">
                                        <ul>
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index_02.html">Home 02</a></li>
                                            <li><a href="index_03.html">Home 03</a></li>

                                        </ul>
                                    </li>

                                    <li class="col-sm-3">
                                        <ul>
                                            <li><a href="index_04.html">Home 04</a></li>
                                            <li><a href="index_05.html">Home 05</a></li>
                                            <li><a href="index_06.html">Home 06</a></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3">
                                        <ul>
                                            <li><a href="index_07.html">Home 07</a></li>
                                            <li><a href="index_08.html">Home 08</a></li>
                                            <li><a href="index_09.html">Home 09</a></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3">
                                        <ul>
                                            <li><a href="index_10.html">Home 10</a></li>
                                            <li><a href="index_11.html">Home 11</a></li>
                                            <li><a href="index_12.html">Home 12</a></li>
                                        </ul>
                                    </li>

                                </ul> <!-- .dropdown-menu megamenu row -->
                            </li>
                            <li class="active dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features</a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Headers</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">Header 01</a></li>
                                            <li><a href="index_header_02.html">Header 02</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Footers</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">Footer 01</a></li>
                                            <li><a href="index_footer_02.html">Footer 02</a></li>
                                        </ul> <!-- .dropdown-menu -->

                                    </li>
                                </ul> <!-- .dropdown-menu -->

                            </li> <!-- .dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about_02.html">About 02</a></li>
                                            <li><a href="about_03.html">About 03</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="service.html">Service 01</a></li>
                                            <li><a href="service_02.html">Service 02</a></li>
                                            <li><a href="service_03.html">Service 03</a></li>
                                            <li><a href="service_04.html">Service 04</a></li>
                                            <li><a href="service_details.html">Service Details</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Faq</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="faq.html">Faq 01</a></li>
                                            <li><a href="faq_02.html">Faq 02</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team Members</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="team_members.html">Team Members 01</a></li>
                                            <li><a href="team_members_02.html">Team Members 02</a></li>
                                            <li><a href="member_details.html">Member Details 01</a></li>
                                            <li><a href="member_details_02.html">Member Details 02</a></li>
                                            <li><a href="member_details_03.html">Member Details 03</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                </ul> <!-- .dropdown-menu -->
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">2 Column</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_2column.html">Normal</a></li>
                                            <li><a href="portfolio_2column_fullwidth.html">Fullwidth</a></li>
                                            <li><a href="portfolio_2column_nogap.html">No Gap</a></li>
                                            <li><a href="portfolio_2column_nogap_fullwidth.html">No Gap Fullwidth</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">3 Column</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_3column.html">Normal</a></li>
                                            <li><a href="portfolio_3column_fullwidth.html">Fullwidth</a></li>
                                            <li><a href="portfolio_3column_nogap.html">No Gap</a></li>
                                            <li><a href="portfolio_3column_nogap_fullwidth.html">No Gap Fullwidth</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">4 Column</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_4column.html">Normal</a></li>
                                            <li><a href="portfolio_4column_fullwidth.html">Fullwidth</a></li>
                                            <li><a href="portfolio_4column_nogap.html">No Gap</a></li>
                                            <li><a href="portfolio_4column_nogap_fullwidth.html">No Gap Fullwidth</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li><a href="portfolio-details.html">Portfolio Details 01</a></li>
                                    <li><a href="portfolio-details_02.html">Portfolio Details 02</a></li>
                                    <li><a href="portfolio-details_03.html">Portfolio Details 03</a></li>
                                    <li><a href="portfolio-details_04.html">Portfolio Details 04</a></li>
                                </ul> <!-- .dropdown-menu -->
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Grid</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_grid_3column.html">3 Column</a></li>
                                            <li><a href="blog_grid_4column.html">4 Column</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Grid Fullwidth</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_grid_3column_fullwidth.html">3 Column</a></li>
                                            <li><a href="blog_grid_4column_fullwidth.html">4 Column</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Overlay</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_overlay_3column.html">3 Column</a></li>
                                            <li><a href="blog_overlay_4column.html">4 Column</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Overlay Fullwidth</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_overlay_3column_fullwidth.html">3 Column</a></li>
                                            <li><a href="blog_overlay_4column_fullwidth.html">4 Column</a></li>
                                        </ul> <!-- .dropdown-menu -->
                                    </li>
                                    <li><a href="blog_01.html">Blog Simple</a></li>
                                    <li><a href="blog_02.html">Blog Classic</a></li>
                                    <li><a href="blog_03.html">Blog Classic Alt</a></li>
                                    <li><a href="blog_04.html">Blog Grid with Sidebar</a></li>
                                    <li><a href="blog_05.html">Blog Modern 01</a></li>
                                    <li><a href="blog_06.html">Blog Modern 02</a></li>
                                </ul> <!-- .dropdown-menu -->
                            </li>
                            <li class="dropdown menu-large">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shortcodes</a>
                                <ul class="dropdown-menu megamenu row">

                                    <li class="col-sm-3">
                                        <ul>
                                            <li><a href="shortcode_accordion.html">accordion</a></li>
                                            <li><a href="shortcode_alerts.html">Alerts</a></li>
                                            <li><a href="shortcode_button.html">Buttons</a></li>
                                            <li><a href="shortcode_columns.html">Columns</a></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3">
                                        <ul>
                                            <li><a href="shortcode_divider.html">Divider</a></li>
                                            <li><a href="shortcode_dropcaps.html">Dropcaps</a></li>
                                            <li><a href="shortcode_heading.html">Heading</a></li>
                                            <li><a href="shortcode_modals.html">Modals</a></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3">
                                        <ul>
                                            <li><a href="shortcode_popover.html">Popover</a></li>
                                            <li><a href="shortcode_pricetable.html">Price Table</a></li>
                                            <li><a href="shortcode_progressbar.html">Progressbar</a></li>
                                            <li><a href="shortcode_progresscircle.html">Progress Circle</a></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3">
                                        <ul>
                                            <li><a href="shortcode_tables.html">Tables</a></li>
                                            <li><a href="shortcode_tabs.html">Tabs</a></li>
                                            <li><a href="shortcode_timeline.html">Timeline</a></li>
                                            <li><a href="shortcode_tooltip.html">Tooltip</a></li>
                                        </ul>
                                    </li>

                                </ul> <!-- .dropdown-menu megamenu row -->
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul> <!-- .nav navbar-nav -->
                    </div> <!-- .container -->
                </div> <!-- .collapse navbar-collapse -->
            </nav> <!-- .navbar -->
        </header> <!-- .site-header -->

        <header class="site-header" style="display: none">
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


