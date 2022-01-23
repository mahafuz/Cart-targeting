<?php
/**
 * Plugin Name:     DiscountX
 * Plugin URI:      http://wpdiscountx.com/
 * Description:     Best Woocommerce coupon apply popup plugin.
 * Author:          Mahafuz<m.mahfuz.me@gmail.com>
 * Author URI:      http://wpdiscountx.com/about
 * Text Domain:     discountx
 * Domain Path:     /languages
 * Version:         1.0.1
 *
 * @package         DiscountX
 */

// if direct access than exit the file.
defined('ABSPATH') || exit;

/**
 * Defining constants
 */
define( 'DISCOUNTX_VERSION', '1.0.1' );
define( 'DISCOUNTX_MENU_POSITION', 32 );
define( 'DISCOUNTX_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'DISCOUNTX_PLUGIN_URI', plugins_url( '', __FILE__ ) );
define( 'DISCOUNTX_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Activation redirects and default settings.
 *
 * @since 1.0.0
 */
register_activation_hook( __FILE__, function () {
    add_option( 'discountx_activation_redirect', true );
    discountx()->db->migration();
});

require_once DISCOUNTX_PLUGIN_DIR . 'app/DISCOUNTX.php';
discountx();

// TODO: Let's save and update the all others settings from the settings page. see>create.svelte