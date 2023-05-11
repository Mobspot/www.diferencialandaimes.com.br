<?php
/*
 *  Corrige o acesso ao microthemer pelo link do menu no dashboard do wordpress.
 *  Ref.: https://wordpress.stackexchange.com/questions/131199/change-url-of-plugin-admin-menu
 *  Adicionado por Thiago Santos em 08-05-2020
 */
add_action( 'admin_menu', 'my_admin_menu', 100 );
function my_admin_menu()
{
    global $menu, $submenu;
    $parent = 'tvr-microthemer.php';
    if( !isset($submenu[$parent]) )
        return;
        
        foreach( $submenu[$parent] as $k => $d ){
            if( $d['2'] == 'tvr-microthemer.php' )
            {
                $submenu[$parent][$k]['2'] = 'admin.php?page=tvr-microthemer.php&mt_preview_url='.get_site_url().'/&_wpnonce='.wp_create_nonce( 'mt-preview-nonce' ).'';
                break;
            }
        }
}

/*
 *  Corrige a customização do tema quando não existe widgets.
 *  Ref.: https://core.trac.wordpress.org/ticket/27965
 *  Adicionado por Thiago Santos em 08-05-2020
 */
add_filter('sidebars_widgets', 'my_sidebars_widgets', 999);

function my_sidebars_widgets( $array ) {
    if ( !is_array( $array ) ) {
        $array = array();
    }
    return $array;
}
