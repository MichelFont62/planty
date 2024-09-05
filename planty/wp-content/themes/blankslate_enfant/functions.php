<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

function add_admin_link($items, $args) {
    // Vérifiez si l'utilisateur est connecté et si c'est le bon menu
    if (is_user_logged_in() && $args->theme_location == 'main-menu') {
        // Créez le lien "Admin"
        $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        
        // Placez le lien en deuxième position dans le menu
        // Convertit les éléments en tableau
        $menu_items = explode('</li>', $items);
        
        // Insérez le lien "Admin" en deuxième position (après le premier élément du menu)
        array_splice($menu_items, 1, 0, $admin_link);
        
        // Recombine les éléments en une chaîne de caractères
        $items = implode('</li>', $menu_items);
    }

    return $items; // Retourne les éléments du menu modifiés
}
