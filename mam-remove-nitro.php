<?php

/**
 * Plugin Name: Remove NitroPack
 * Plugin URI: https://github.com/Watchout1992/mam-remove-nitro
 * Description: The plugin is to remove nitropack from the website footer, If you like NitroPack please support them by purchasing one of their plans here.
 * Version: 1.0
 * Author: AliSal
 * Author URI: https://github.com/Watchout1992
 * The plugin is to remove nitropack from the website footer.
 *
 * If you like NitroPack please support them by purchasing one of their plans here.
 *
 * Requires jQuery to be installed
 */

add_action('wp_footer', 'mam_remove_nitro_pack');

function mam_remove_nitro_pack()
{
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            setTimeout(function () {
                var tag_new = $("template").last().attr("id");
                $("#" + tag_new).css("display", "none");
                $("#" + tag_new).next().next().css("display", "none");
            }, 100);
        });
    </script>
    <?php
}