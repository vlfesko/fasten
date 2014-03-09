<?php
/**
 * Framework initialization script
 *
 * @category  Fasten
 * @package   Fasten_Main
 * @author    Vladimir Fesko <vladimir.fesko@gmail.com>
 * @copyright 2014 Vladimir Fesko
 */
namespace F;

/**
 * Application running constant
 */
define('IS_APPLICATION_RUNNING', true);

/**
 * Shortcut for directory separator
 */
define('DS', DIRECTORY_SEPARATOR);

// Application-related paths

/**
 * Application path
 */
define('APPLICATION_PATH', 'application' . DS);

/**
 * Application webroot path
 */
define('APPLICATION_WEBROOT_PATH', APPLICATION_PATH . 'webroot' . DS);

/**
 * Application configs path
 */
define('APPLICATION_CONFIGS_PATH', APPLICATION_PATH . 'configs' . DS);

/**
 * Application classes path
 */
define('APPLICATION_CLASSES_PATH', APPLICATION_PATH . 'classes' . DS);

/**
 * Application transformers path
 */
define('APPLICATION_TRANSFORMERS_PATH', APPLICATION_PATH . 'transformers' . DS);

/**
 * Application resources path
 */
define('APPLICATION_RESOURCES_PATH', APPLICATION_PATH . 'resources' . DS);

// Application-related paths

/**
 * Framework namespace
 */
define('FRAMEWORK_NAMESPACE', 'F');

/**
 * Framework path
 */
define('FRAMEWORK_PATH', 'framework');

/**
 * Framework classes path
 */
define('FRAMEWORK_CLASSES_PATH', FRAMEWORK_PATH . DS . 'classes');

/**
 * Framework transformers path
 */
define('FRAMEWORK_TRANSFORMERS_PATH', FRAMEWORK_PATH . DS . 'transformers');

require_once FRAMEWORK_CLASSES_PATH . DS . 'Fasten.php';

Fasten::initialize();
RequestRouter::initialize();

Cookies::initialize();
Session::start();
Fasten::initializeExtensions();

Application::initialize();
