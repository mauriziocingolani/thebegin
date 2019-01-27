<?php

require './constants.php';

if (OFFLINE_SW)
    die('Sito in manutenzione. Si prega di riprovare più tardi.');

if (YII_DEBUG) :
    error_reporting(E_ALL);
    ini_set('display_errors', true);
endif;

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
