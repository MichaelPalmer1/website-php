<?php
/**
 * File: prod_settings.php
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/raven/raven/lib/Raven/Autoloader.php';
Raven_Autoloader::register();
$sentryUrl = 'https://3b19024923f0446c9cedf0dc6997740e:e1b1f95ac92a499585ce0a34bb358ad1@app.getsentry.com/65505';
$client = new Raven_Client($sentryUrl);
$error_handler = new Raven_ErrorHandler($client);
$error_handler->registerExceptionHandler();
$error_handler->registerErrorHandler();
$error_handler->registerShutdownFunction();
