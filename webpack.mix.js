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
    .scripts( [
        'resources/library/js/jquery.min.js',
        'resources/library/js/parallax.js',
        'resources/library/js/tether.min.js',
        'resources/library/js/bootstrap.min.js',
        'resources/library/js/animsition.js',

        'resources/js/app.js',
        ] ,'public/js/app.js'
    );

mix
    .scripts( [
            'resources/library/js/owl.carousel.min.js',
            'resources/library/js/owl.carousel2.thumbs.js',
            'resources/library/rev-slider/js/jquery.themepunch.tools.min.js',
            'resources/library/rev-slider/js/jquery.themepunch.revolution.min.js',
            'resources/library/js/rev-slider-initials.js',
            'resources/library/rev-slider/js/extensions/revolution.extension.actions.min.js',
            'resources/library/rev-slider/js/extensions/revolution.extension.carousel.min.js',
            'resources/library/rev-slider/js/extensions/revolution.extension.kenburn.min.js',
            'resources/library/rev-slider/js/extensions/revolution.extension.layeranimation.min.js',
            'resources/library/rev-slider/js/extensions/revolution.extension.migration.min.js',
            'resources/library/rev-slider/js/extensions/revolution.extension.navigation.min.js',
            'resources/library/rev-slider/js/extensions/revolution.extension.parallax.min.js',
            'resources/library/rev-slider/js/extensions/revolution.extension.slideanims.min.js',
            'resources/library/rev-slider/js/extensions/revolution.extension.video.min.js',
            // 'resources/library/js/jquery-easing.js',
            'resources/js/home.js',
        ]
        ,'public/js/home.js'
    );

mix
    .scripts( [
            'resources/library/js/equalize.min.js',
            'resources/library/js/waypoints.js',
            'resources/library/js/countto.js',
            'resources/library/js/owl.carousel.min.js',
            'resources/library/js/images-loaded.js',
            'resources/js/about.js',
        ]
        ,'public/js/about.js'
    );

mix
    .scripts( [
            'resources/library/js/gmap3.min.js',
            'resources/library/js/google-map.js',
            'resources/js/contact.js',
        ]
        ,'public/js/contact.js'
    );

mix
    .scripts( [
            'resources/library/js/jquery.isotope.min.js',
            'resources/library/js/owl.carousel.min.js',
            'resources/library/js/images-loaded.js',
            'resources/js/product.js',
        ]
        ,'public/js/product.js'
    );

mix
    .scripts( [
            'resources/library/js/jquery.isotope.min.js',
            'resources/library/js/owl.carousel.min.js',
            'resources/library/js/owl.carousel2.thumbs.js',
            'resources/library/js/images-loaded.js',
            'resources/js/project.js',
        ]
        ,'public/js/project.js'
    );

mix
    .scripts( [
            'resources/js/service.js',
            'resources/library/js/jquery.isotope.min.js',
            'resources/library/js/images-loaded.js',
        ]
        ,'public/js/service.js'
    );


mix
    .scripts( [
            'resources/js/blog.js',
        ]
        ,'public/js/blog.js'
    );


mix
    .scripts( [
            'resources/library/js/jquery.isotope.min.js',
            'resources/library/js/owl.carousel.min.js',
            'resources/library/js/owl.carousel2.thumbs.js',
            'resources/library/js/images-loaded.js',
            'resources/js/resource.js'
        ]
        ,'public/js/resource.js'
    );




//////// Styles /////////
mix.postCss( 'resources/css/dashboard.css', 'public/css/dashboard.css',[
    require("tailwindcss"),
]);


mix.styles([
    'resources/library/css/bootstrap.css',
    'resources/library/css/shortcodes.css',
    'resources/library/css/main.css',
    'resources/library/css/animsition.css',
    'resources/library/css/animate.css',
    'resources/library/css/autora-icons.css',
    'resources/library/css/font-awesome.css',
    'resources/library/css/ionicons.css',
    'resources/css/app.css',
], 'public/css/app.css' );

mix.styles([
    'resources/library/rev-slider/css/settings.css',
    'resources/library/rev-slider/css/layers.css',
    'resources/library/rev-slider/css/navigation.css',
    'resources/library/css/owl.carousel.css',
    'resources/css/home.css',
], 'public/css/home.css' );


mix.styles([
    'resources/library/css/owl.carousel.css',
    'resources/library/css/autora-icons.css',
    'resources/library/css/ionicons.css',
    'resources/css/product.css',
], 'public/css/product.css' );

mix.styles([
    'resources/library/css/owl.carousel.css',
    'resources/library/css/ionicons.css',
    'resources/css/project.css',
], 'public/css/project.css' );

mix.styles([
    'resources/library/css/ionicons.css',
    'resources/css/service.css',
], 'public/css/service.css' );

mix.styles([
    'resources/library/css/ionicons.css',
    'resources/css/blog.css',
], 'public/css/blog.css' );

mix.styles([
    'resources/library/css/ionicons.css',
    'resources/library/css/owl.carousel.css',
    'resources/css/blog.css',
], 'public/css/about.css' );

mix.styles([
    'resources/library/css/font-etline.css',
    'resources/css/contact.css',
], 'public/css/contact.css' );

mix.styles([
    'resources/library/css/owl.carousel.css',
    'resources/css/resource.css',
], 'public/css/resource.css' );





mix.version();






