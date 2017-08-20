<?php
/*
Plugin name: Data plugin
Version: 1
Author: Coders@Codesphere
*/

//menu items
add_action('admin_menu', 'data_modifymenu');
function data_modifymenu(){
    //this is the main item for menu
    add_menu_page('data', 
        'data',
        'manage_options',
        'data_list',
        data_list)
    ;

    add_submenu_page('data_list',
        'Add New data',
        'Add New',
        'manage_options',
        'data_create',
        'data_create'
    );

    add_submenu_page(null,
        'Update data',
        'Update',
        'manage_options',
        'data_update',
        'data_update'
    );
}

$plugin_dir = ABSPATH . 'wp-content/plugins/data/';
require_once($plugin_dir . 'data-list.php');
require_once($plugin_dir . 'data-create.php');
require_once($plugin_dir . 'data-update.php');

?>