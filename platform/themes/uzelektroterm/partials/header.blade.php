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
                        <li><a href="tel://{!! theme_option('phone') !!}"><i class="fa fa-phone"></i> <span>{!! theme_option('phone') !!}</span></a></li>
                        <li><a href="mailto://{!! theme_option('email') !!}"><i class="fa fa-envelope-o"></i> <span>{!! theme_option('email') !!}</span></a></li>
                    </ul> <!-- .quick-contact -->

                    <ul class="list-inline pull-right top-bar-social">
                        <li><a href="#" class="bvi-open"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" class="is_mobile"><i class="fa fa-mobile"></i></a></li>
                        <li><a href="https://uzelektroterm.uz/davlat-ramzlari"><i class="fa fa-flag"></i></a></li>
                        <li><a href="#"><i class="fa fa-sitemap"></i></a></li>
                    </ul>

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


{{--                        <ul class="list-inline pull-right header-social">--}}
{{--                            @for ($i = 1; $i <= 5; $i++)--}}
{{--                                @if (theme_option('social_' . $i . '_url') && theme_option('social_' . $i . '_name'))--}}
{{--                                    <li><a style="background: {{ theme_option('social_' . $i . '_color') }}" href="{{ theme_option('social_' . $i . '_url') }}" target="_blank" title="{{ theme_option('social_' . $i . '_name') }}"><i class="elegant-icon {{ theme_option('social_' . $i . '_icon') }}"></i></a></li>--}}
{{--                                @endif--}}
{{--                            @endfor--}}
{{--                        </ul> <!-- .top-bar-menu -->--}}
                        <a class="navbar-brand" href="#"><img src="img/corporex-logo.png" alt="corporex logo"></a>
                        <div class="single-widget widget-search">

                            <form action="#" class="widget-search-form">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

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

                    </div>
                </div>
            </nav>
        </header>

        <header class="site-header" style="display: none">
            <div class="top-bar clearfix">
                <div class="container">
                    <ul class="list-inline pull-left quick-contact">
                        <li><a href="tel://{!! theme_option('phone') !!}"><i class="fa fa-phone"></i> <span>{!! theme_option('phone') !!}</span></a></li>
                        <li><a href="mailto://{!! theme_option('email') !!}"><i class="fa fa-envelope-o"></i> <span>{!! theme_option('email') !!}</span></a></li>
                    </ul> <!-- .quick-contact -->

                    <ul class="list-inline pull-right top-bar-social">
                        <li><a href="#" class="bvi-open"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" class="is_mobile"><i class="fa fa-mobile"></i></a></li>
                        <li><a href="#"><i class="fa fa-flag"></i></a></li>
                        <li><a href="#"><i class="fa fa-sitemap"></i></a></li>
                    </ul>
                    <ul class="list-inline pull-right top-bar-menu">
                        @if (is_plugin_active('language'))
                            {!! Theme::partial('language-switcher', ['color' => $color ?? '']) !!}
                        @endif
                    </ul>
                </div>
            </div>
            <nav class="navbar corporex-navbar navbar-01">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
{{--                        <a class="navbar-brand" href="#"><img src="img/corporex-logo.png" alt="corporex logo"></a>--}}
                    </div>
                    <div class="collapse navbar-collapse navbar-items" id="navbar-items">
                        {!!
                         Menu::renderMenuLocation('main-menu', [
                             'options' => ['class' => 'nav navbar-nav navbar-right'],
                             'view'    => 'main-menu',
                         ])
                     !!}
                    </div>
                </div>
            </nav>
        </header>
