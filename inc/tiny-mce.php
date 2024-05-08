<?php
/*------------------------------------*\
    TINY MCE
\*------------------------------------*/

function tiny_stylesheet() {
    // Add custom stylesheet to the TinyMCE editor if needed.
    $theme_dir = get_template_directory() . '/assets/dist/css';

    // Check if the directory exists
    if (file_exists($theme_dir) && is_dir($theme_dir)) {
        var_dump($theme_dir);
        $files = array_diff(scandir($theme_dir), array('..', '.'));
        $latest_file = end($files);
        add_editor_style(get_template_directory_uri() . '/assets/dist/css/' . $latest_file);
    }
}
function enable_style_select($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
function custom_tiny_styles($init_array) {
    // Define the style_formats array
    $style_formats = array(
        array( // LARGE TITLE
            'title' => 'Titre H1',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title-1'
        ),
        array( // REGULAR TITLE
            'title' => 'Titre H2',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title-2'
        ),
        array( // SECTION TITLE
            'title' => 'Titre H3',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title-3'
        ),
        array( // MEDIUM TITLE
            'title' => 'Titre H4',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title-4'
        ),
        array( // MEDIUM TITLE
            'title' => 'Titre H5',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title-5'
        ),
        array( // MEDIUM TITLE
            'title' => 'Titre h6',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title-6'
        ),
        array( // MEDIUM TITLE
            'title' => 'Paragraphe',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'paragraph'
        ),

        array( // MEDIUM TITLE
            'title' => 'Liste',
            'selector' => 'ul,ol',
            'classes' => 'list'
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);
    return $init_array;
}

function enable_more_buttons($buttons) {
    $buttons[] = 'superscript';
    $buttons[] = 'subscript';
    return $buttons;
}



// HOOKS
add_filter("mce_buttons", "enable_more_buttons");
add_filter('mce_buttons_2', 'enable_style_select');
add_filter('tiny_mce_before_init', 'custom_tiny_styles');
add_action('init', 'tiny_stylesheet');
