<?php

use Botble\Base\Facades\BaseHelper;
use Botble\Shortcode\View\View;
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

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme) {
            $version = get_cms_version();
            // $theme->asset()->usePath()->add('ads-main', 'css/adsindia/css/main.css', [], [], $version);
            /*Ads India Start*/
            
       
            $theme->asset()->usePath()->add('ads-bootstrap-min-css', 'css/adsindia/assets/icon/flaticon_real_estate.css');
             
            $theme->asset()->usePath()->add('animate', 'css/adsindia/assets/vendor/bootstrap/bootstrap.min.css');
           $theme->asset()->usePath()->add('splide-css', 'css/adsindia/assets/vendor/splide/splide.min.css');
            $theme->asset()->usePath()->add('nice', 'css/adsindia/assets/vendor/swiper/swiper-bundle.min.css');
            $theme->asset()->usePath()->add('nouislider', 'css/adsindia/assets/vendor/slim-select/slimselect.css');
            $theme->asset()->usePath()->add('magnific', 'css/adsindia/assets/vendor/animate-wow/animate.min.css');
            // $theme->asset()->usePath()->add('ads-odometer', 'css/adsindia/css/vendor/odometer.min.css');
            // $theme->asset()->usePath()->add('ads-fontawesome', 'css/adsindia/css/vendor/fontawesome-pro.css');
            // $theme->asset()->usePath()->add('ads-spacing', 'css/adsindia/css/vendor/spacing.css');
            // $theme->asset()->usePath()->add('ads-remixicon', 'css/adsindia/css/vendor/remixicon.css');
            $theme->asset()->usePath()->add('ads-stylemain-css', 'css/adsindia/assets/css/style.css');
            $theme->asset()->usePath()->add('ads-whatsup', 'css/adsindia/assets/css/whatsup.css');

         

$theme->asset()->container('footer')->usePath()->add('jquery-3.7.1.min', 'css/adsindia/assets/vendor/bootstrap/bootstrap.bundle.min.js');
$theme->asset()->container('footer')->usePath()->add('splide-js', 'css/adsindia/assets/vendor/splide/splide.min.js');
$theme->asset()->container('footer')->usePath()->add('bootstrap.bundle', 'css/adsindia/assets/vendor/splide/splide-extension-auto-scroll.min.js');
$theme->asset()->container('footer')->usePath()->add('meanmenu', 'css/adsindia/assets/vendor/swiper/swiper-bundle.min.js');

$theme->asset()->container('footer')->usePath()->add('swiper', 'css/adsindia/assets/vendor/slim-select/slimselect.min.js');
$theme->asset()->container('footer')->usePath()->add('wow', 'css/adsindia/assets/vendor/animate-wow/wow.min.js');
$theme->asset()->container('footer')->usePath()->add('magnific-popup', 'css/adsindia/assets/vendor/splittype/index.min.js');
$theme->asset()->container('footer')->usePath()->add('isotope', 'css/adsindia/assets/vendor/mixitup/mixitup.min.js');
$theme->asset()->container('footer')->usePath()->add('imagesloaded', 'css/adsindia/assets/vendor/fslightbox/fslightbox.js');
$theme->asset()->container('footer')->usePath()->add('mainnice-select', 'css/adsindia/assets/js/main.js');
$theme->asset()->container('footer')->usePath()->add('jarallax', 'css/adsindia/assets/js/tab.js');
$theme->asset()->container('footer')->usePath()->add('whatsup', 'css/adsindia/assets/js/whatsup.js');




    // <script src="assets/js/main.js"></script>

                /*Ads India JS End*/


            /*Ads India End*/

            if (function_exists('shortcode')) {
                $theme->composer(['page', 'post', 'ecommerce.product'], function (View $view) {
                    $view->withShortcodes();
                });
            }
        },
    ],
];
