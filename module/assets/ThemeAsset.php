<?php

namespace app\web\theme\module\assets;
use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot/theme/dist';
    public $baseUrl = '@web/theme/dist';
    public $css = [
	'css/preview.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/jquery-ui.css',
        'css/meanmenu.min.css',
        'css/animate.css',
        'css/style.css',
        'css/responsive.css'
        
    ];
    public $js = [
        'js/bootstrap.min.js',   
        'js/wow.min.js',		
        'js/jquery.meanmenu.js',		
        'js/owl.carousel.min.js',	
        'js/jquery-price-slider.js',		
        'js/jquery.scrollUp.min.js',
        'js/jquery.countdown.min.js',		
        'js/jquery.sticky.js',		
        'js/jquery.elevateZoom-3.0.8.min.js',
        'js/plugins.js',		
        'js/main.js',
    ];
    public $depends = [
        //'app\assets\AppAsset',
    ];
}
