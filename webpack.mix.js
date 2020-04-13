let mix = require('laravel-mix');

// Add near top of file
let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;
let CopyWebpackPlugin = require( 'copy-webpack-plugin' );

mix.webpackConfig( {
    plugins: [
    	new CopyWebpackPlugin([{
	      	from: 'resources/images/',
	      	to: 'images/min'
	    }]),
        new ImageminPlugin( {
//            disable: process.env.NODE_ENV !== 'production', // Disable during development
            pngquant: {
                quality: '15-20',
            },
            test: /\.(jpe?g|png|gif|svg)$/i,
        } ),
    ],
} )

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/dist')
	.sass('resources/sass/app.scss', 'public/css/dist')
    // .copy('resources/assets/fonts', 'public/fonts', false)
	// .copy('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css', 'public/css/jquery.fancybox.min.css')
	// .copy('node_modules/animate.css/animate.min.css', 'public/css/plugins/animate.css/animate.min.css');
