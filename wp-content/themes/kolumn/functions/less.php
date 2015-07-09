<?php 

if(is_user_logged_in()) {
    add_action('init', 'autoCompileLess');
}

function autoCompileLess() {
    require_once( get_template_directory().'/less/lessc.inc.php' );

    // input and output location
    $inputFile = get_template_directory().'/less/main.less';
    $outputFile = get_template_directory().'/css/main.css';

    $less = new lessc;
    $less->setVariables(array(
        "accent" => get_theme_mod('accent_color', '#4A90E2'),
    ));
    $less->setFormatter("compressed");


    // create a new cache object, and compile
    $newCache = $less->cachedCompile($inputFile);
    file_put_contents($outputFile, $newCache['compiled']);
}