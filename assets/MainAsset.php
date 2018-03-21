<?php

namespace app\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle {

//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $css = [
        'css/main/agency.css',
        'css/main/bootstrap.min.css',
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
//        'yii\web\YiiAsset',
//        'yii\web\JqueryAsset',
//        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
        '\rmrevin\yii\fontawesome\AssetBundle',
    ];

}
