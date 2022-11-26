<?php

use Botble\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these events can be overridden by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });

            // You may use this event to set up your assets.
            $theme->asset()->usePath()->add('font-awesome.min', 'css/font-awesome.min.css');
            $theme->asset()->usePath()->add('pe-icon-7-stroke', 'css/pe-icon-7-stroke.css');
            $theme->asset()->usePath()->add('slick', 'css/slick.css');
            $theme->asset()->usePath()->add('slick-theme', 'css/slick-theme.css');
            $theme->asset()->usePath()->add('magnific-popup', 'css/magnific-popup.css');
            $theme->asset()->usePath()->add('bootstrap.min', 'css/bootstrap.min.css');
            $theme->asset()->usePath()->add('style', 'css/style.css');
            $theme->asset()->usePath()->add('bvi.min', 'css/bvi.min.css');
            $theme->asset()->container('footer')->add('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
            $theme->asset()->container('footer')->usePath()->add('bootstrap.min', 'js/bootstrap.min.js');
            $theme->asset()->container('footer')->usePath()->add('slick.min', 'js/slick.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery.magnific-popup.min', 'js/jquery.magnific-popup.min.js');
            $theme->asset()->container('footer')->usePath()->add('mixitup.min', 'js/mixitup.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery.easypiechart.min', 'js/jquery.easypiechart.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery.waypoints.min', 'js/jquery.waypoints.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery.counterup.min', '/js/jquery.counterup.min.js');
            $theme->asset()->container('footer')->usePath()->add('bvi.min', 'js/bvi.min.js');
            $theme->asset()->container('footer')->usePath()->add('script', 'js/script.js');

            if (function_exists('shortcode')) {
                $theme->composer(['page', 'post'], function (\Botble\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
