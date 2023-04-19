<?php

namespace BellwethercoffeeSw\DesignPatterns\Modules;

use cebe\markdown\GithubMarkdown;

/**
 * Parser.
 * 
 * Singleton pattern.
 * @link https://github.com/mrubiosan/facade
 */
class Markdown
{
    /**
    * Singleton instance.
    * @var \cebe\markdown\GithubMarkdown
    */
    protected static $instance;
    /**
     * Returns static | singleton instance.
     * @return null|\cebe\markdown\GithubMarkdown
     */
    public static function instance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new GithubMarkdown;
            static::$instance->html5 = true;
        }
        return static::$instance;
    }
}