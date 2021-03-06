<?php
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require(__DIR__ . '/../../config.php');
require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../Yii.php');
require(__DIR__ . '/../../vendor/double9/phycom/common/config/bootstrap.php');
require(__DIR__ . '/../../vendor/double9/phycom/backend/config/bootstrap.php');
require(__DIR__ . '/../../common/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../vendor/double9/phycom/common/config/main.php'),
    require(__DIR__ . '/../../vendor/double9/phycom/backend/config/main.php'),
	require(__DIR__ . '/../../common/config/main.php'),
	require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../../backend/config/main.php'),
	require(__DIR__ . '/../../backend/config/main-local.php')
);

(new BackendApplication($config))->run();
