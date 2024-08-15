const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix

    .styles([
        __dirname + '/Modules/Theme/resources/css/bootstrap.css',
        __dirname + '/Modules/Theme/resources/css/style.css',
        __dirname + '/Modules/Theme/resources/css/global.css',
        __dirname + '/Modules/Theme/resources/css/header.css',
        __dirname + '/Modules/Theme/resources/css/footer.css',
        __dirname + '/Modules/Theme/resources/css/icofont.css',
        __dirname + '/Modules/Theme/resources/css/font-awesome.css',
        __dirname + '/Modules/Theme/resources/css/flaticon.css',
        __dirname + '/Modules/Theme/resources/css/animate.css',
        __dirname + '/Modules/Theme/resources/css/owl.css',
        __dirname + '/Modules/Theme/resources/css/sidebar.css',
        __dirname + '/Modules/Theme/resources/css/preloader.css',
        __dirname + '/Modules/Theme/resources/css/custom-animate.css',
        __dirname + '/Modules/Theme/resources/css/responsive.css',
        __dirname + '/Modules/Theme/resources/css/photoswipe-dynamic-caption-plugin.css',
        __dirname + '/Modules/Theme/resources/css/photoswipe.css',
        __dirname + '/Modules/Theme/resources/css/swiper.min.css',
        __dirname + '/Modules/Theme/resources/css/slick.css',
        __dirname + '/Modules/Theme/resources/css/slick-theme.css',
    ], 'public/css/styles.min.css')

    .styles([
        __dirname + '/Modules/Theme/resources/css/fonts.css',
    ], 'public/css/fonts.min.css')

    .scripts([
        __dirname + '/Modules/Theme/resources/js/jquery.js',
        __dirname + '/Modules/Theme/resources/js/popper.min.js',
        __dirname + '/Modules/Theme/resources/js/bootstrap.min.js',
        __dirname + '/Modules/Theme/resources/js/owl.js',
        __dirname + '/Modules/Theme/resources/js/wow.js',
        __dirname + '/Modules/Theme/resources/js/swiper.min.js',
        __dirname + '/Modules/Theme/resources/js/mixitup.js',
        __dirname + '/Modules/Theme/resources/js/nav-tool.js',
        __dirname + '/Modules/Theme/resources/js/sweetalert.js',
        __dirname + '/Modules/Theme/resources/js/photoswipe.umd.min.js',
        __dirname + '/Modules/Theme/resources/js/photoswipe-lightbox.umd.min.js',
        __dirname + '/Modules/Theme/resources/js/photoswipe-dynamic-caption-plugin.umd.min.js',
        __dirname + '/Modules/Theme/resources/js/slick.js',
        __dirname + '/Modules/Theme/resources/js/script.js',
    ], 'public/js/scripts.min.js')


    .styles([
        __dirname + '/Modules/Standard/resources/assets/standard.css',
        __dirname + '/Modules/Gallery/resources/assets/css/gallery.css',
    ], 'public/css/modules.min.css')

    .styles([
        __dirname + '/Modules/Tutorial/resources/assets/css/tutorial.css',
    ], 'public/css/tutorial.min.css')

    .scripts([
        __dirname + '/Modules/Standard/resources/assets/standard.js',
        __dirname + '/Modules/Gallery/resources/assets/js/gallery.js',
        __dirname + '/Modules/Ecommerce/resources/assets/js/ecommerce.js',
    ], 'public/js/modules.min.js')

    .scripts([
        __dirname + '/Modules/Tutorial/resources/assets/js/tutorial.js',
    ], 'public/js/tutorial.min.js')

if (mix.inProduction()) {
    mix.version();
}
