<?php
namespace Craft;

/**
 * Logger Log Service Class
 *
 * @package Craft
 * @subpackage Logger
 * @author Jim Butts <jameswbutts@gmail.com>
 */
class Logger_LogService extends BaseApplicationComponent
{
    /**
     * Log a message to this plugin's log file.
     *
     * @param string $message Message to log
     * @param string $type (optional) Type of log to add
     * @param bool $force (optional) Force the log, even when not in dev mode
     * @return void
     */
    public function createLog($message = null, $type = null, $force = false)
    {
        if (empty($message)) {
            return;
        }

        $logMessage = 'Logger Plugin: ' . $message . ' -- ' . craft()->request->requestUri;
        $forceLog   = filter_var($force, FILTER_VALIDATE_BOOLEAN);

        switch (strtolower($type)) {
            case 'error':
                LoggerPlugin::log($logMessage, LogLevel::Error, $forceLog);
                break;

            case 'warning':
                LoggerPlugin::log($logMessage, LogLevel::Warning, $forceLog);
                break;

            case 'info':
                LoggerPlugin::log($logMessage, LogLevel::Info, $forceLog);
                break;

            case 'profile':
                LoggerPlugin::log($logMessage, LogLevel::Profile, $forceLog);
                break;

            default:
                LoggerPlugin::log($logMessage, LogLevel::Info, $forceLog);
                break;
        }

    }
}