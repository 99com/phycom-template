<?php

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('You are not allowed to access this file.');
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

require(__DIR__ . '/../../config.php');
require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../Yii.php');
require(__DIR__ . '/../../vendor/double9/phycom/common/config/bootstrap.php');
require(__DIR__ . '/../../vendor/double9/phycom/backend/config/bootstrap.php');
require(__DIR__ . '/../../common/config/bootstrap.php');

$config = require(__DIR__ . '/../config/test-local.php');

(new BackendApplication($config))->run();
