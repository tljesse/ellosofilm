<?php
$themename = "christinaElloso";
$attchments_options = array(
    'vimeo_url' => array(
        'label'       => __( 'Vimeo URL', $themename ),
        'input'       => 'text',
        'application' => 'image',
        'exclusions'  => array( 'audio', 'video' ),
    ),
    'director' => array(
        'label'       => __( 'Director\'s name', $themename ),
        'input'       => 'text',
        'application' => 'image',
        'exclusions'  => array( 'audio', 'video' ),
    ),
    'music' => array(
        'label'       => __( 'Music', $themename ),
        'input'       => 'text',
        'application' => 'image',
        'exclusions'  => array( 'audio', 'video' ),
    ),
    'year' => array(
        'label'       => __( 'Year', $themename ),
        'input'       => 'text',
        'application' => 'image',
        'exclusions'  => array( 'audio', 'video' ),
    )
);