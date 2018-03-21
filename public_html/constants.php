<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
defined('OFFLINE') or define('OFFLINE', false); 
defined('OFFLINE_SW') or define('OFFLINE_SW', false && $_SERVER['REMOTE_ADDR']!='93.71.250.216'); 
