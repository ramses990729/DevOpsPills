<?php

function devOps_customize_register($wp_customize){

$wp_customize->add_section('showcase', array(
    'title' => __('Showcase', 'DevOpsLook'),
    'description' => sprintf(__('Options for showcase', 'DevOpsLook')),
    'priority' => 130

));

$wp_customize->add_setting('showcase_heading', array(
    'default' => _x('DevOps Pills', 'DevOpsLook'),
    'type' => 'theme_mod'
));

$wp_customize->add_control('showcase_heading', array(
    'label' => __('Heading', 'DevOpsLook'),
    'section' => 'jumbo',
    'priority' => 1
));


$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_control', array(
    'label' => __( 'Accent Color', 'theme_textdomain' ),
    'section' => 'media',
  ) ) );

}
add_action('customize_register', 'devOps_customize_register');