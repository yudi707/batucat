const mix = require('laravel-mix');
const assets = "public/assets/";
const original_style = "css/original/";
const original_script = "js/original/";

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

// mix.combine([
//     style + original + "shortcodes.css",
// ], style + original + 'mix-style.min.css')
mix.styles([
	assets + original_style + 'common.css',
	assets + original_style + 'slick.css',
	assets + original_style + 'index.css',
	assets + original_style + 'font.css',
	assets + 'wp-content/themes/uhuru/styleb578.css',
], assets + 'css/mix-home.min.css')

.scripts([
	assets + original_script + 'jquery-1.9.1.min.js',
	assets + original_script + 'TweenMax.min.js',
	assets + original_script + 'jquery.mobile.custom.min.js',
	assets + original_script + 'background-check.min.js',
	assets + original_script + 'jquery.cookie.js',
	assets + original_script + 'jquery.lazyload.min.js',
	assets + original_script + 'common.js',
	assets + original_script + 'lazysizes.min.js',
	assets + original_script + 'slick.js',
	assets + original_script + 'jquery.shuffleLetters.js',
	assets + original_script + 'index.js',
	assets + original_script + 'desvg.js',
	assets + 'wp-content/themes/uhuru/script.js',
    // assets + 'plugins/vanta/vendor/three.r92.min.js',
    // assets + 'plugins/vanta/dist/vanta.net.min.js',
    assets + 'plugins/vanta/vendor/three.r95.min.js',
    assets + 'plugins/vanta/dist/vanta.birds.min.js'
], assets + 'js/mix-home.min.js');



mix.styles([
	assets + original_style + 'common.css',
	assets + original_style + 'font.css',
	assets + original_style + 'about.css',
	assets + 'wp-content/themes/uhuru/styleb578.css',
], assets + 'css/mix-about.min.css')


.scripts([
	assets + original_script + 'jquery-1.9.1.min.js',
	assets + original_script + 'TweenMax.min.js',
	assets + original_script + 'jquery.mobile.custom.min.js',
	assets + original_script + 'background-check.min.js',
	assets + original_script + 'jquery.cookie.js',
	assets + original_script + 'jquery.lazyload.min.js',
	assets + original_script + 'common.js',
	assets + original_script + 'about.js',
	assets + original_script + 'jquery.matchHeight.js',
	assets + 'wp-content/themes/uhuru/script.js',
	// script + minified + 'slider.min.js',

    assets + original_script + 'jscolor.min.js',
    assets + original_script + 'frc.min.js',
    assets + original_script + 'ntc.min.js',
    assets + original_script + 'building-coloring.min.js',
    // assets + 'plugins/vanta/vendor/three.r92.min.js',
    // assets + 'plugins/vanta/dist/vanta.net.min.js',
    // assets + 'plugins/vanta/vendor/three.r95.min.js',
    // assets + 'plugins/vanta/dist/vanta.birds.min.js'
], assets + 'js/mix-about.min.js');



mix.styles([
	// assets + original_style + 'font.min.css',
	assets + original_style + 'common.css',
	assets + original_style + 'slick.css',
	assets + original_style + 'font.css',
	assets + original_style + 'deco.css',
	assets + original_style + 'service.css',
	assets + original_style + 'custom.css',
	assets + original_style + 'wp-content/themes/uhuru/styleb578.css',
	// assets + original_style + 'fontawesome/css/all.min.css',
], assets + 'css/mix-product.min.css')
.scripts([
	assets + original_script + 'jquery-1.9.1.min.js',
	assets + original_script + 'TweenMax.min.js',
	assets + original_script + 'jquery.mobile.custom.min.js',
	assets + original_script + 'background-check.min.js',
	assets + original_script + 'jquery.cookie.js',
	assets + original_script + 'jquery.lazyload.min.js',
	assets + original_script + 'common.js',
	assets + original_script + 'lazysizes.min.js',
	assets + original_script + 'slick.js',
	assets + original_script + 'piklor.js',
	assets + original_script + 'product-slide.js',
	assets + original_script + 'service.js',
	assets + original_script + 'service_detail.js',
	assets + original_script + 'wp-content/themes/uhuru/script.js',
	assets + original_script + 'plugins/vanta/vendor/three.r95.min.js',
	assets + original_script + 'plugins/vanta/dist/vanta.net.min.js',
], assets + 'js/mix-product.min.js');



