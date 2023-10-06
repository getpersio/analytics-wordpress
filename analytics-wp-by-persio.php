<?php

/**
 * @link              https://github.com/getpersio/analytics-wp-persio
 * @since             1.0.0
 * @package           Analytics WP by Persio
 *
 * @wordpress-plugin
 * Plugin Name:       Analytics WP by Persio
 * Plugin URI:        https://github.com/getpersio/analytics-wp-persio
 * Description:       Analytics WP by Persio
 * Version:           2.3.5
 * Author:            Persio
 * Author URI:        https://persio.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       analytics-by-persio
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 */
define( 'ANALYTICS_BY_PERSIO_VERSION', '2.3.5' );

/**
 * The code that runs during plugin activation.
 */
function activate_segment_for_wp_by_in8_io()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-segment-for-wp-by-in8-io-activator.php';
    Segment_For_Wp_By_In8_Io_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_segment_for_wp_by_in8_io()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-segment-for-wp-by-in8-io-deactivator.php';
    Segment_For_Wp_By_In8_Io_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_segment_for_wp_by_in8_io');
register_deactivation_hook(__FILE__, 'deactivate_segment_for_wp_by_in8_io');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-segment-for-wp-by-in8-io.php';

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function run_segment_for_wp_by_in8_io()
{

	add_action('segment_4_wp_consumer', 'segment_4_wp_consumer');

    $plugin = new Segment_For_Wp_By_In8_Io();
    $plugin->run();

}


run_segment_for_wp_by_in8_io();
