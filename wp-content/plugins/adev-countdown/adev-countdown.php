<?php
/*
Plugin Name: Adev Countdown
Description: Plugin to display a countdown timer.
Author: Amadordeveloper 
Version: 1.0
Author URI: http://amadordeveloper.com
*/


/*
* Enqueue jQuery
*/
function adev_countdown_enqueue_scripts() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'adev_countdown_enqueue_scripts' );



/*
 * Add the countdown to the page
 */

add_action('wp_footer', 'adev_countdown');

function adev_countdown() {
    $date = date('Y/m/d', strtotime('+1 year'));
    $time = date('H:i:s', strtotime('+1 year'));
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#countdown').countdown({
                date: '<?php echo $date; ?> <?php echo $time; ?>',
                format: 'on'
            });
        });
    </script>
    <div id="countdown"></div>
    <?php
}