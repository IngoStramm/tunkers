<?php

/**
 * Plugin Name: Tunkers
 * Plugin URI: https://agencialaf.com
 * Description: Este plugin é parte do ConverteFácil.
 * Version: 2.2.2
 * Author: Ingo Stramm
 * Text Domain: tks
 * License: GPLv2
 */

defined('ABSPATH') or die('No script kiddies please!');

define('TKS_DIR', plugin_dir_path(__FILE__));
define('TKS_URL', plugin_dir_url(__FILE__));
define('TKS_VERSION', '2.2.2');

require_once 'tks-functions.php';
require_once 'tks-acf.php';
require_once 'tks-shortcode.php';
require_once 'tks-style.php';
require_once 'tks-scripts.php';

require_once 'plugin-update-checker-4.10/plugin-update-checker.php';
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://raw.githubusercontent.com/IngoStramm/tunkers/refs/heads/main/info.json',
    __FILE__,
    'tunkers'
);
