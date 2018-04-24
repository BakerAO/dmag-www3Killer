<?php
/*
Plugin Name: dmag-www3Killer
Description: Killer of www3.
Version: 1.0.0
Author: Dmagazine
Author URI: https:www.dmagazine.com
License: GPLv2 or later
Text Domain: dmag-www3Killer
*/

if (!defined('ABSPATH')){
    die;
}

class Www3Killer {
    function __construct() {
        add_action('init', array($this, 'custom_post_type'));
    }

    function activate() {
        //create CPT
        //flush rewrite rules
    }

    function deactivate() {
        //flush rewrite rules
    }

    function uninstall() {

    }

    function custom_post_type() {
        register_post_type('book', ['public' => 'true']);
    }
    
}

if(class_exists('Www3Killer')){
    $www3Killer = new Www3Killer();
}

//activation
register_activation_hook(__FILE__, array($www3Killer, 'activate'));

//deactivation
register_deactivation_hook(__FILE__, array($www3Killer, 'deactivate'));

//uninstall
