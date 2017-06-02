<?php
/**
 * Plugin Name: ssl-enable
 * Plugin URI: http://www.stennmedia.nl/
 * Description: Force SSL detection, useful for when wordpress is used behind a load balancer
 * Version: 1.0
 * Author: Stenn Kool
 * Author URI: https://github.com/stennkool
 * Requires at least: 4.4
 * Tested up to: 4.7
 *
 * @package ssl-enable
 * @category Core
 * @author Stenn Kool
 */

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
    $_SERVER['HTTPS']='on';

    