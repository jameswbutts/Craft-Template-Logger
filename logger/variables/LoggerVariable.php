<?php
namespace Craft;

/**
 * Logger Variable Class
 *
 * @package Craft
 * @subpackage DateAssist
 * @author Jim Butts <jameswbutts@gmail.com>
 */
class LoggerVariable
{
    /**
     * Log a message from a template
     *
     * Wrapper for Logger's log()
     *
     * @param string $message Message to log
     * @param string $type (optional) Type of log to add
     * @param bool $force (optional) Force the log, even when not in dev mode
     * @return void
     */
    public function log($message = null, $type = null, $force = false)
    {
        return craft()->logger_log->createLog($message, $type, $force);
    }
}