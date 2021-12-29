<?php
// Version
define('VERSION', '2.3.0.2.4');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

/**
 * Require vendor_autoload
 */
define('DIR_VENDOR', dirname(__DIR__) . '/vendor/');
$composer = DIR_VENDOR . 'autoload.php';

if (is_file($composer)) {
    require_once($composer);
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');