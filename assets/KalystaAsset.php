<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\assets;

use yii\web\AssetBundle;

class KalystaAsset extends AssetBundle {

    public $css = [
        'css/kalysta/bootstrap/bootstrap.min.css',
        '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        '//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic',
        'css/kalysta/magnific-popup/magnific-popup.css',
        'css/kalysta/creative.css',
    ];
    public $js = [
        'js/kalysta/jquery/jquery.min.js',
        'js/kalysta/bootstrap/bootstrap.bundle.min.js',
        'js/kalysta/jquery-easing/jquery.easing.min.js',
        'js/kalysta/scrollreveal/scrollreveal.min.js',
        'js/kalysta/magnific-popup/jquery.magnific-popup.min.js',
        'js/kalysta/creative.min.js',
    ];
    public $depends = [
        '\rmrevin\yii\fontawesome\AssetBundle',
    ];

}
