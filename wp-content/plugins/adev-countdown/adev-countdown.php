<?php
/*
Plugin Name: Adev Countdown
Description: Plugin to display a countdown timer.
Author: Amadordeveloper 
Version: 1.0
Author URI: http://amadordeveloper.com
*/


/*
 * Add the countdown to the page
 */

add_action('wp_footer', 'adev_countdown');

function adev_countdown() {
    $date = date('Y/m/d', strtotime('+1 year'));
    $time = date('H:i:s', strtotime('+1 year'));
    ?>
    <script type="text/javascript">
        

        // Implements countdown date and hour function for the countdown element

        function countdown () {
            var now = new Date();
            var eventDate = new Date(<?php echo $date; ?>);
            var currentTime = now.getTime();
            var eventTime = eventDate.getTime();
            var remTime = eventTime - currentTime;
            var s = Math.floor(remTime / 1000);
            var m = Math.floor(s / 60);
            var h = Math.floor(m / 60);
            var d = Math.floor(h / 24);
            h %= 24;
            m %= 60;
            s %= 60;
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;
            document.getElementById("days").textContent = d;
            document.getElementById("hours").textContent = h;
            document.getElementById("minutes").textContent = m;
            document.getElementById("seconds").textContent = s;
        }
      
        // Calls the countdown function every second
        setInterval(countdown, 1000);
        

    </script>
    <div id="days"></div>
    <div id="hours"></div>
    <div id="minutes"></div>
    <div id="seconds"></div>
    <?php
}