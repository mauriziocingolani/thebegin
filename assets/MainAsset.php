<?php

namespace app\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle {

//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $css = [
        'css/main/agency.css',
        'css/main/bootstrap.min.css',
        '//fonts.googleapis.com/css?family=Montserrat:400,700',
        '//fonts.googleapis.com/css?family=Kaushan+Script',
        '//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic',
        '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700',
    ];
    public $js = [
        'js/main/jquery/jquery.min.js',
        'js/main/popper/popper.min.js',
        'js/main/bootstrap/bootstrap.min.js',
        'js/main/jquery-easing/jquery.easing.min.js',
        'js/main/jqBootstrapValidation.js',
        'js/main/contact_me.js',
        'js/main/agency.min.js',
    ];
    public $depends = [
        '\rmrevin\yii\fontawesome\AssetBundle',
    ];

}
