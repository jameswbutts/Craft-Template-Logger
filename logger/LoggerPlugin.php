<?php
namespace Craft;

/**
 * Logger Plugin
 *
 * Enable Craft logging from templates
 *
 * @package Craft
 * @subpackage Logger
 * @author Jim Butts <jameswbutts@gmail.com>
 */

class LoggerPlugin extends BasePlugin
{
    /**
     * Plugin slug (matches folder name)
     *
     * @var string $name
     */
    private $pluginSlug = 'logger';

    /**
     * Getter for config's pluginName
     *
     * @return string
     */
    public function getName()
    {
        return Craft::t(craft()->config->get('pluginName', $this->pluginSlug));
    }

    /**
     * Getter for config's pluginVersion
     *
     * @return string
     */
    public function getVersion()
    {
        return Craft::t(craft()->config->get('pluginVersion', $this->pluginSlug));
    }

    /**
     * Getter for config's pluginDeveloper
     *
     * @return string
     */
    public function getDeveloper()
    {
        return Craft::t(craft()->config->get('pluginDeveloper', $this->pluginSlug));
    }

    /**
     * Getter for config's pluginDeveloperUrl
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return Craft::t(craft()->config->get('pluginDeveloperUrl', $this->pluginSlug));
    }
}