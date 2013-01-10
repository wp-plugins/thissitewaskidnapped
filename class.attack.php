
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * get_locale()
 */

/**
 * Description of class
 *
 * @author vinicius
 */
Class kkk {

    function __construct() {
        
    }

    function attack() {
        add_action('wp_head', array($this, 'attackScripts'));
        add_action('admin_print_scripts', array($this, 'attackScripts'));
}
    static function attackScripts() {
        wp_register_script("jquery.attack.custom", plugins_url('attack.js', __FILE__), null, null);
        wp_enqueue_script('jquery.attack.custom');
    }

    function attackLayouts() {
        wp_register_style('custom_attack_layout_css', plugins_url('attack.css', __FILE__), false, '1.0.0');
        wp_enqueue_style('custom_attack_layout_css');
    }

}

?>
