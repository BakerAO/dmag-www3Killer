<?php
/*
Plugin Name: dmag-www3Killer
Description: Killer of www3. Saver of $1400.
Version: 1.0.0
Author: Dmagazine
Author URI: https:www.dmagazine.com
License: GPLv2 or later
Text Domain: dmag-www3Killer
*/

if (!defined('ABSPATH')){
    die;
}
var_dump(wp_get_theme());
class Www3Killer {
    function __construct() {
    }

    function register() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    function activate() {
        flush_rewrite_rules();
    }

    function deactivate() {
        flush_rewrite_rules();
    }
    
    // Interactive
    // bobby2.dmagazine.com/content/assets/styles/blog.css
    // bobby2.dmagazine.com/sidebars/bestsuburbs?external=true
    // bobby2.dmagazine.com/external/footer
    // bobby2.dmagazine.com/external/headincludes
    // bobby2.dmagazine.com/external/Morelikethis?id=blog:interactive . $post->id

    function enqueue() {
        //if(wp_get_theme()) {
            // Healthcare
            // themes/healthcare-bootstrap/header.php
            wp_enqueue_style('font-awesome', plugins_url('/styles/font-awesome.min.css', __FILE__));
            // themes/healthcare-bootstrap/header.php
            wp_enqueue_script('dmag', plugins_url('/scripts/dmag.js', __FILE__));
            // themes/healthcare-bootstrap/functions.php
            wp_enqueue_script('jquery.cookie', plugins_url('/scripts/jquery.cookie.js', __FILE__));
            wp_enqueue_script('jquery.DefaultText', plugins_url('/scripts/jquery.DefaultText.js', __FILE__));
        //}
    }
}

if(class_exists('Www3Killer')){
    $www3Killer = new Www3Killer();
    $www3Killer->register();
}

//activation
register_activation_hook(__FILE__, array($www3Killer, 'activate'));

//deactivation
register_deactivation_hook(__FILE__, array($www3Killer, 'deactivate'));

