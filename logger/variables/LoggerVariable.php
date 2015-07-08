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
     * Log a message from a template (alias of info)
     *
     * Wrapper for Logger's log()
     *
     * @param string $message Message to log
     * @param bool $force (optional) Force the log, even when not in dev mode
     * @return void
     */
    public function log($message = null, $force = false)
    {
        return $this->info($message, $force);
    }

    /**
     * Log an error message from a template
     *
     * Wrapper for Logger's log()
     *
     * @param string $message Message to log
     * @param bool $force (optional) Force the log, even when not in dev mode
     * @return void
     */
    public function error($message = null, $force = false)
    {
        return craft()->logger_log->createLog($message, 'error', $force);
    }

    /**
     * Log a warning message from a template
     *
     * Wrapper for Logger's log()
     *
     * @param string $message Message to log
     * @param bool $force (optional) Force the log, even when not in dev mode
     * @return void
     */
    public function warning($message = null, $force = false)
    {
        return craft()->logger_log->createLog($message, 'warning', $force);
    }

    /**
     * Log an info message from a template
     *
     * Wrapper for Logger's log()
     *
     * @param string $message Message to log
     * @param bool $force (optional) Force the log, even when not in dev mode
     * @return void
     */
    public function info($message = null, $force = false)
    {
        return craft()->logger_log->createLog($message, 'info', $force);
    }

    /**
     * Log a profile message from a template
     *
     * Wrapper for Logger's log()
     *
     * @param string $message Message to log
     * @param bool $force (optional) Force the log, even when not in dev mode
     * @return void
     */
    public function profile($message = null, $force = false)
    {
        return craft()->logger_log->createLog($message, 'profile', $force);
    }
}