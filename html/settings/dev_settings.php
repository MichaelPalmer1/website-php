<?php
/**
 * File: dev_settings.php
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
