<?php
/**
 * Plugin Name: Tunkers
 * Plugin URI: https://agencialaf.com
 * Description: Este plugin é parte do ConverteFácil.
 * Version: 2.2.1
 * Author: Ingo Stramm
 * Text Domain: tks
 * License: GPLv2
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define( 'TKS_DIR', plugin_dir_path( __FILE__ ) );
define( 'TKS_URL', plugin_dir_url( __FILE__ ) );

require_once 'tks-functions.php';
require_once 'tks-acf.php';
require_once 'tks-shortcode.php';
require_once 'tks-style.php';
require_once 'tks-scripts.php';