<?php
// cutomizing footer copyright
function customTheme_footer_copyright($wp_customize) {
	$wp_customize->add_section('customTheme-footer-copyright-section', array(
		'title' => 'Footer Copyright'
	));


	$wp_customize->add_setting('customTheme-footer-copyright-frontline', array(
		'default' => 'Site content copyright &copy; 2021 Allowed Text'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intern-footer-copyright-frontline-control', array(
			'label' => 'Copyright Text',
			'section' => 'customTheme-footer-copyright-section',
			'settings' => 'customTheme-footer-copyright-frontline'
		)));

	$wp_customize->add_setting('customTheme-footer-copyright-domain', array(
		'default' => ''
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intern-footer-copyright-domain-control', array(
			'label' => 'Domain',
			'section' => 'customTheme-footer-copyright-section',
			'settings' => 'customTheme-footer-copyright-domain'
		)));

}


add_action('customize_register', 'customTheme_footer_copyright');

?>