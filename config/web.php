<?php

include '../vendor/mauriziocingolani/yii2-fmwk-php/Config.php';

use mauriziocingolani\yii2fmwkphp\Config;

$config = new Config('a66f8563ab0fe73bb2feda3de1e1a6561d68de3e', dirname(__DIR__), 'files');
//$config->addCacheComponent('YiiCache');
//$config->addDbComponent();
//$config->addMailComponent();
$config->addUserComponent();
//$config->addSessionComponent(['sessionTable' => 'YiiSessions', 'timeout' => 60 * 60 * 8]);
//$config->addGoogleAnalyticsModule();
$config->addUserModule();
//if (true || ($_SERVER['REMOTE_ADDR'] != '93.66.217.147' && $_SERVER['REMOTE_ADDR'] != '151.0.134.82'))
//    $config->catchAll = ['site/comingsoon'];
$config->version = '1.0';
$config->debugIps = require '../config/files/ips.php';
//$config->setHttps();
return $config->getConfig();
