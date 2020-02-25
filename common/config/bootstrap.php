<?php

/**
 * Defines the application name
 */
defined('APP') or define('APP', ((bool)getenv('IS_DOCKER') ? getenv('APP_ID') : 'phycom-template'));
/**
 * Defines the environment prefix used for env variables
 */
defined('ENV') or define('ENV', ((bool)getenv('IS_DOCKER') ? 'APP' : strtoupper(APP)));
