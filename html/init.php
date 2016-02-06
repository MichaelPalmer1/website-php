<?php

namespace MP;

class MP {
    public static function init() {
        define('IN_MP', true);
        define('MP\\ROOT_PATH', __DIR__);

        // Development settings
        if ($_SERVER['SERVER_NAME'] == 'localhost') {
            define('IN_DEV', true);
        } else {
            define('IN_DEV', false);
        }

        if (IN_DEV === true) {
            require_once 'settings/dev_settings.php';
        } else {
            require_once 'settings/prod_settings.php';
        }

        // Set up auto loader
        spl_autoload_register('\MP\MP::autoLoader', true, true);
    }

    public static function autoLoader($className) {
        $parts = explode('\\', ltrim($className, '\\'));

        $companyName = array_shift($parts);

        if ($companyName !== 'MP') {
            return;
        }

        $include = "";
        foreach ($parts as $part) {
            $include .= $part . '/';
        }
        $include = rtrim($include, '/');

        $path = sprintf(ROOT_PATH . "/inc_/classes/%s.php", $include);

        if (!file_exists($path)) {
            $path = substr($path, 0, -4) . substr($path, strrpos($path, '/'));

            if (!file_exists($path)) {
                return;
            }

        }

        require_once($path);
    }
}

// Initialize
MP::init();
