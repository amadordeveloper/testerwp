<?php
/*
Plugin Name: Adev Countdown
Description: Plugin to display a countdown timer.
Author: Amadordeveloper 
Version: 1.0
Author URI: http://amadordeveloper.com
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