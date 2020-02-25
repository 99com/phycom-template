<?php

/**
 * This constant defines the application installation directory.
 */
defined('ROOT_PATH') or define('ROOT_PATH', __DIR__);
/**
 * This constant defines the phycom installation directory.
 */
defined('PHYCOM_PATH') or define('PHYCOM_PATH', __DIR__ . '/vendor/double9/phycom');


require(__DIR__ . '/vendor/yiisoft/yii2/BaseYii.php');
require(PHYCOM_PATH . '/common/models/traits/ApplicationFactoryTrait.php');

use phycom\common\models\traits\ApplicationFactoryTrait;

/**
 * Yii bootstrap file.
 * Used for enhanced IDE code auto-completion.
 */
class Yii extends \yii\BaseYii
{
    /**
     * @var FrontendApplication|BackendApplication|WebApplication|ConsoleApplication the application instance
     */
    public static $app;
}

spl_autoload_register(['Yii', 'autoload'], true, true);
Yii::$classMap = require(__DIR__ . '/vendor/yiisoft/yii2/classes.php');
Yii::$container = new yii\di\Container();


/**
 * Class WebApplication
 * Include only Web application related components here
 */
class WebApplication extends yii\web\Application
{
    use ApplicationFactoryTrait;
}

/**
 * Class FrontendApplication
 *
 * @property-read \alexandernst\devicedetect\DeviceDetect $deviceDetect
 *
 * @property-read \phycom\common\components\Cart $cart
 * @property-read \phycom\common\components\Cart $wishlist
 * @property-read \phycom\frontend\components\ModelFactory $modelFactory
 */
class FrontendApplication extends WebApplication
{

}

/**
 * Class BackendApplication
 *
 * @property-read \phycom\backend\components\ModelFactory $modelFactory
 */
class BackendApplication extends WebApplication
{

}

/**
 * Class ConsoleApplication
 * Include only Console application related components here
 */
class ConsoleApplication extends yii\console\Application
{
    use ApplicationFactoryTrait;
}