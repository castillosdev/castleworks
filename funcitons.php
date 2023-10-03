<?php if  (!class_exists('Timber')){
    add_action('admin_notices', function(){
        echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="'. esc_url(admin_url('plugins.php#timber')).'">'.esc_url(admin_url('plugins.php')).'</a></p></div>';
    });
    return;
}


// Path: functions.php
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_script('alpine', get_template_directory_uri() . '/assets/js/app.js', array(), '0.0.1', true);
});

Timber::$dirname = array('templates', 'views');

?>