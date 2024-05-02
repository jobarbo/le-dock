<?php
/*------------------------------------*\
    CUSTOM POST TYPES
\*------------------------------------*/

function create_post_type() {


    // RETAILERS
    register_post_type(
        'projet',
        array(
            'labels' => array(
                'name' => 'Projet',
                'singular_name' => 'Projet',
                'add_new' => 'Ajouter un projet',
                'add_new_item' => 'Ajouter un projet',
                'edit' => 'Modifier le projet',
                'edit_item' => 'Modifier le projet',
                'new_item' => 'Ajouter un nouveau projet',
                'view' => 'Voir le projet',
                'view_item' => 'Voir le projet',
                'search_items' => 'Chercher un projet',
                'not_found' => 'Aucun résultat',
                'not_found_in_trash' => 'Aucun résultat dans la corbeille'
            ),
            'public' => true,
            'has_archive' => false,
            'menu_position' => 21,
            'menu_icon' => 'dashicons-format-video',
            'supports' => array(
                'title',
                'editor'
            ),
            'rewrite' => array(
                'slug' => 'projet'
            ),
            'can_export' => true,
            'taxonomies' => array('projet', 'category'),
        )
    );
}

//
//
// ACTION HOOK
add_action('init', 'create_post_type');
