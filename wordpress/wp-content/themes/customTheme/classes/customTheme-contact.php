<?php

function customTheme_imageSection($wp_customize) {

    $wp_customize->add_section('customTheme-imageSection-section', array(
        'title' => 'Contactus text and heading '
    ));


    $wp_customize->add_setting('customTheme-imageSection-heading', array(
        'default' => 'Contact US '
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'customTheme-imageSection-heading-control',array(
        'label'=>'heading',
        'section'=>'customTheme-imageSection-section',
        'settings'=>'customTheme-imageSection-heading', 
        
    
    )));


    $wp_customize->add_setting('customTheme-imageSection-body', array(
        'default' => ' Ut posuere ullamcorper euismod. Donec a justo pulvinar diam dictum lobortis vulputate non nisi. Vestibulum pellentesque eget lorem ultrices lobortis.
        '
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'customTheme-imageSection-body-control',array(
        'label'=>'body',
        'section'=>'customTheme-imageSection-section',
        'settings'=>'customTheme-imageSection-body', 
        'type'=>'textarea'
    
    )));
}

add_action('customize_register', 'customTheme_imageSection');
?>








