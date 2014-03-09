<?php
/**
 * Application class
 *
 * @category  Fasten
 * @package   Fasten_Classes
 * @author    Vladimir Fesko <vladimir.fesko@gmail.com>
 * @copyright 2014 Vladimir Fesko
 */
namespace F;

class Application extends GenericObject
{
    /**
     * Application init script name
     *
     * @var string
     */
    public static $applicationInitScriptName = 'init.php';

    /**
     * Name of path main script
     *
     * @var string
     */
    public static $pathScriptName = 'index.php';

    /**
     * Name of "enter path" script
     *
     * @var string
     */
    public static $pathEnterScriptName = 'in.php';

    /**
     * Name of "exit path" script
     *
     * @var string
     */
    public static $pathExitScriptName = 'out.php';

    /**
     * Template file extension
     *
     * @var string
     */
    public static $templateFileExtension = 'tpl';

    /**
     * Application domain
     * Sets by application config
     *
     * @var string
     */
    public static $domain = null;

    /**
     * Developer environment flag
     *
     * @var bool
     */
    public static $isInDevelopmentEnvironment = false;

    /**
     * Initializes application
     *
     * @return null
     */
    public static function initialize()
    {
        $userAppInitFile = APPLICATION_PATH . static::$applicationInitScriptName;
        if (FileSystem::isFileExists($userAppInitFile)) {
            include $userAppInitFile;
        }
    }

    /**
     * Displays web page
     *
     * @return null
     */
    public static function displayWebPage()
    {
        WebPage::begin();
        RequestRouter::visitApplicationPaths();
        WebPage::end();
        WebPage::display();
    }
}
