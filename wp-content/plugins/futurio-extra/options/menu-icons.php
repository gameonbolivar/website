<?php

if ( !class_exists( 'Kirki' ) ) {
	return;
}

Kirki::add_section( 'main_menu_icons', array(
	'title'		 => esc_attr__( 'Main menu', 'futurio-extra' ),
	'priority'	 => 10,
) );

Kirki::add_field( 'futurio_extra', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'main_menu_content_width',
	'label'		 => esc_attr__( 'Main menu layout', 'futurio-extra' ),
	'section'	 => 'main_menu_icons',
	'default'	 => 'container',
	'priority'	 => 8,
	'choices'	 => array(
		'container'	 => esc_attr__( 'Boxed', 'futurio-extra' ),
		'container-fluid'	 => esc_attr__( 'Full Width', 'futurio-extra' ),
	),
) );

Kirki::add_field( 'futurio_extra', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'main_menu_float',
	'label'		 => esc_attr__( 'Menu float', 'futurio-extra' ),
	'section'	 => 'main_menu_icons',
	'default'	 => 'left',
	'priority'	 => 8,
	'choices'	 => array(
		'left'	 => esc_attr__( 'Left', 'futurio-extra' ),
    'center'	 => esc_attr__( 'Center', 'futurio-extra' ),
		'right'	 => esc_attr__( 'Right', 'futurio-extra' ),
	),
) );

function futurio_extra_menu_icons() {

  $icons = array();
  $icons['search'] = esc_attr__( 'Search', 'futurio-extra' );
  $icons['widget'] = esc_attr__( 'Off canvas widget area', 'futurio-extra' );
  $icons['button'] = esc_attr__( 'Custom button', 'futurio-extra' );
  
  if( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    $icons['woo_cart'] = esc_attr__( 'WooCommerce Cart', 'futurio-extra' );
    $icons['woo_account'] = esc_attr__( 'WooCommerce Account', 'futurio-extra' );
  }
  
  return $icons;
}

Kirki::add_field( 'futurio_extra', array(
  'type'		 => 'sortable',
  'settings'	 => 'main_menu_sort',
  'label'		 => __( 'Top bar fields', 'futurio-extra' ),
  'section'	 => 'main_menu_icons',
  'priority'			 => 9,
  'default'	 => array(),
  'choices'	 => futurio_extra_menu_icons(),
  'priority'	 => 10,
) );

Kirki::add_field( 'futurio_extra', array(
	'type'				 => 'text',
	'settings'			 => 'menu_button_text',
	'label'				 => __( 'Button text', 'futurio-extra' ),
	'section'			 => 'main_menu_icons',
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'main_menu_sort',
			'operator'	 => 'in',
			'value'		 => 'button',
		),
	),
) );
Kirki::add_field( 'futurio_extra', array(
	'type'				 => 'link',
	'settings'			 => 'menu_button_url',
	'label'				 => __( 'Button link', 'futurio-extra' ),
	'section'			 => 'main_menu_icons',
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'main_menu_sort',
			'operator'	 => 'in',
			'value'		 => 'button',
		),
	),
) );

Kirki::add_field( 'futurio_extra', array(
	'type'		 => 'multicolor',
	'settings'	 => 'menu_button_colors',
	'label'		 => esc_attr__( 'Button color', 'futurio-extra' ),
	'section'	 => 'main_menu_icons',
	'priority'	 => 10,
	'transport'	 => 'auto',
	'choices'	 => array(
		'text'	 => esc_attr__( 'Text', 'futurio-extra' ),
		'bg'	 => esc_attr__( 'Background', 'futurio-extra' ),
    'border'	 => esc_attr__( 'Border', 'futurio-extra' ),
	),
	'default'	 => array(
		'link'	 => '',
		'hover'	 => '',
	),
	'output'	 => array(
		array(
			'choice'	 => 'text',
			'element'	 => '#site-navigation .navbar-nav .menu-button a.btn-default',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'bg',
			'element'	 => '#site-navigation .navbar-nav .menu-button a.btn-default',
			'property'	 => 'background-color',
		),
    array(
			'choice'	 => 'border',
			'element'	 => '#site-navigation .navbar-nav .menu-button a.btn-default',
			'property'	 => 'border-color',
		),
	),
  'active_callback'	 => array(
		array(
			'setting'	 => 'main_menu_sort',
			'operator'	 => 'in',
			'value'		 => 'button',
		),
	),
) );

Kirki::add_field( 'futurio_extra', array(
	'type'		 => 'multicolor',
	'settings'	 => 'menu_button_colors_hover',
	'label'		 => esc_attr__( 'Button color on hover', 'futurio-extra' ),
	'section'	 => 'main_menu_icons',
	'priority'	 => 10,
	'transport'	 => 'auto',
	'choices'	 => array(
		'text'	 => esc_attr__( 'Text', 'futurio-extra' ),
		'bg'	 => esc_attr__( 'Background', 'futurio-extra' ),
    'border'	 => esc_attr__( 'Border', 'futurio-extra' ),
	),
	'default'	 => array(
		'link'	 => '',
		'hover'	 => '',
	),
	'output'	 => array(
		array(
			'choice'	 => 'text',
			'element'	 => '.navbar-nav .menu-button a.btn-default:hover',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'bg',
			'element'	 => '.navbar-nav .menu-button a.btn-default:hover',
			'property'	 => 'background-color',
		),
    array(
			'choice'	 => 'border',
			'element'	 => '.navbar-nav .menu-button a.btn-default:hover',
			'property'	 => 'border-color',
		),
	),
  'active_callback'	 => array(
		array(
			'setting'	 => 'main_menu_sort',
			'operator'	 => 'in',
			'value'		 => 'button',
		),
	),
) );

Kirki::add_field( 'futurio_extra', array(
	'type'        => 'dimensions',
	'settings'    => 'menu_items_spacing',
	'label'       => esc_attr__( 'Menu items spacing', 'futurio-extra' ),
	'section'     => 'main_menu_icons',
	'default'     => array(
		'top'    => '30px',
		'right'  => '10px',
		'bottom' => '30px',
		'left'   => '10px',
	),
	
	'transport'   => 'auto',
	'output'      => array(
		array(
			'property' => 'padding',
			'element'  => '.navbar-nav > li > a, .menu-cart, .menu-account, .top-search-icon, .menu-button, .offcanvas-sidebar-toggle',
      'media_query'	 => '@media (min-width: 768px)',
		),
	),
) );
Kirki::add_field( 'futurio_extra', array(
	'type'        => 'dimensions',
	'settings'    => 'floating_menu_items_spacing',
	'label'       => esc_attr__( 'Floating menu items spacing', 'futurio-extra' ),
	'section'     => 'main_menu_icons',
	'default'     => array(
		'top'    => '15px',
		'right'  => '10px',
		'bottom' => '15px',
		'left'   => '10px',
	),
	
	'transport'   => 'auto',
	'output'      => array(
		array(
			'property' => 'padding',
			'element'  => '.shrink .navbar-nav > li > a, .shrink .top-search-icon, .shrink .menu-cart, .shrink .menu-account, .shrink .menu-button, .shrink .offcanvas-sidebar-toggle',
      'media_query'	 => '@media (min-width: 768px)',
		),
	),
) );