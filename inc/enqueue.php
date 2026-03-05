<?php
/**
 * Enqueue scripts and styles
 *
 * @package nordevo-theme
 */

if (!defined("ABSPATH")) {
    exit();
}

function nordevo_scripts()
{
    wp_enqueue_style(
        "nordevo-main",
        NORDEVO_URI . "/assets/css/main.css",
        [],
        NORDEVO_VERSION,
    );

    wp_enqueue_style(
        "nordevo-content",
        NORDEVO_URI . "/assets/css/content.css",
        [],
        NORDEVO_VERSION,
    );

    wp_enqueue_script(
        "nordevo-main",
        NORDEVO_URI . "/assets/js/main.js",
        [],
        NORDEVO_VERSION,
        true,
    );
}
add_action("wp_enqueue_scripts", "nordevo_scripts");

add_action("after_setup_theme", function () {
    add_editor_style("assets/css/main.css");
    add_editor_style("assets/css/content-editor.css");
});
