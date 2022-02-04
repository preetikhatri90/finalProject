<?php

function customTheme_footerLinks($wp_customize){
    $wp_customize->add_section('customTheme-footerLinks-section', array(
        'title' => 'customizing footer Links '
    ));


    $wp_customize->add_setting('customTheme-footerLinks-AboutsusFirstLink');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'customTheme-footerLinks-AboutsusFirstLink-control',array(
        'label'=>'link',
        'section'=>'customTheme-footerLinks-section',
        'settings'=>'customTheme-footerLinks-AboutsusFirstLink', 
        'type'=> 'dropdown-pages',
        
    
    )));

}

function customTheme_footerImage($wp_customize){

    $wp_customize->add_section('customTheme-footerImage', array(
        'title' => 'footer Image '
    ));
    $wp_customize->add_setting('customTheme-footerImage-logo', array(
        'default' => ' '
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'customTheme-footerImage-logo-control',array(
        'label'=>'image',
        'section'=>'customTheme-footerImage',
        'settings'=>'customTheme-footerImage-logo',
       )));   



}

add_action('customize_register', 'customTheme_footerImage');
add_action('customize_register', 'customTheme_footerLinks');

?>