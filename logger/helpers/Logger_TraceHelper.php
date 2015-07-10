<?php
namespace Craft;

/**
 * Logger Trace Helper
 *
 * @package Craft
 * @subpackage Logger
 * @author Jim Butts <jameswbutts@gmail.com>
 */
class Logger_TraceHelper
{
    /**
     * Get the Twig template that is making the current call
     *
     * @return string|null
     */
    public static function getCallingTemplateName()
    {
        foreach (debug_backtrace() as $trace) {
            if (isset($trace['object']) && isset($trace['class'])
                && false !== strpos($trace['class'], 'TwigTemplate')
            ) {
                $template = $trace['object'];

                if (null !== $template) {
                    return $template->getTemplateName();
                }
            }
        }

        return null;
    }
}