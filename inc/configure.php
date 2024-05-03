<?php
// Disable WordPress Admin Bar for all users but admins. //
show_admin_bar(false);

// Removing unecessary admin menu tabs
function custom_menu_page_removing() {
    remove_menu_page('edit-comments.php');
}

// Showing Menus in Appearance
function register_my_menus() {
    register_nav_menus(
        array(
            'navigation' => __('Navigation'),
            'navigation-footer' => __('Navigation Footer')
        )
    );
}

function custom_setup() {
    // Images
    add_theme_support('post-thumbnails');

    // Title tags
    add_theme_support('title-tag');

    // Languages
    load_theme_textdomain('textdomaintomodify', get_template_directory() . '/languages');

    // HTML 5 - Example : deletes type="*" in scripts and style tags
    add_theme_support('html5', ['script', 'style']);

    // Remove SVG and global styles
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');

    // Remove wp_footer actions which add's global inline styles
    remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

    // Remove render_block filters which adds unnecessary stuff
    remove_filter('render_block', 'wp_render_duotone_support');
    remove_filter('render_block', 'wp_restore_group_inner_container');
    remove_filter('render_block', 'wp_render_layout_support_flag');

    // Remove useless WP image sizes
    remove_image_size('1536x1536');
    remove_image_size('2048x2048');

    // Custom image sizes
    // add_image_size( '424x424', 424, 424, true );
    // add_image_size( '1920', 1920, 9999 );
}
add_action('after_setup_theme', 'custom_setup');

// remove default image sizes to avoid overcharging server - comment line if you need size
function remove_default_image_sizes($sizes) {
    unset($sizes['large']);
    unset($sizes['medium']);
    unset($sizes['medium_large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');

// Move Yoast to bottom
function yoasttobottom() {
    return 'low';
}
add_filter('wpseo_metabox_prio', 'yoasttobottom');

// Remove WP Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');

// delete wp-embed.js from footer
function my_deregister_scripts() {
    wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

// delete jquery migrate
function dequeue_jquery_migrate(&$scripts) {
    if (!is_admin()) {
        $scripts->remove('jquery');
        $scripts->add('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', null, null, true);
    }
}
add_filter('wp_default_scripts', 'dequeue_jquery_migrate');

//disable update emails
add_filter('auto_plugin_update_send_email', '__return_false');
add_filter('auto_theme_update_send_email', '__return_false');
function remove_editor() {
    remove_post_type_support('page', 'editor');
    remove_post_type_support('post', 'editor');
    //remove_post_type_support('retraite', 'editor');
}


// add SVG to allowed file uploads
function add_file_types_to_uploads($mime_types) {
    $mime_types['svg'] = 'image/svg+xml';

    return $mime_types;
}


add_action('upload_mimes', 'add_file_types_to_uploads', 1, 1);
add_action('admin_init', 'remove_editor');
add_filter('use_block_editor_for_post_type', '__return_false');
add_action('admin_menu', 'custom_menu_page_removing');
add_action('init', 'register_my_menus');
add_action('login_enqueue_scripts', 'custom_login_demarrage');
/* Change Gravity Forms' Ajax Spinner into a transparent image */
add_filter('gform_ajax_spinner_url', 'spinner_url', 10, 2);
function spinner_url($image_src, $form) {
    return  'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
}

add_filter('wpseo_opengraph_author_facebook', '__return_false');

add_filter('oembed_response_data', 'disable_embeds_filter_oembed_response_data_');
function disable_embeds_filter_oembed_response_data_($data) {
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}


function wd_gf_update_submit_button($button_input, $form) {

    //save attribute string to $button_match[1]
    preg_match("/<input([^\/>]*)(\s\/)*>/", $button_input, $button_match);

    //remove value attribute (since we aren't using an input)
    $button_atts = str_replace("value='" . $form['button']['text'] . "' ", "", $button_match[1]);

    // create the button element with the button text inside the button element instead of set as the value
    return '<button ' . $button_atts . '><span>' . $form['button']['text'] . '</span></button>';
}
add_filter('gform_submit_button', 'wd_gf_update_submit_button', 10, 2);
