<?php

if (!defined("ABSPATH")) {
    exit();
}
/**
 * Plugin Name: Sama Payment Gateway
 * Author: سامانه معاملات امن ایران (سما)
 * Description: این افزونه درگاه پرداخت تضمین شده سما را به ووکامرس اضافه می کند.
 * Version: 1.0.6
 * Author URI: https://www.sama.ir
 * Author Email: info@sama.ir
 * Requires at least: 6.0.0
 * Requires PHP: 7.4
 * WC requires at least: 7.3
 * WC tested up to: 7.3
 */

define("WOO_GSAMA_GATEWAY_DIR", trailingslashit(plugin_dir_path(__FILE__)));

require_once WOO_GSAMA_GATEWAY_DIR . "action.php";
