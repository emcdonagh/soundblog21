<?php
/**genral setting start***/ 
$wp_customize->add_section('gen_sec',array(
	'title' => __( 'Genral Options','hotel-galaxy' ),
	'panel'=>'hotel_galaxy_theme_option',
	'capability'=>'edit_theme_options',
	'priority' => 35,			
	));
/**address start***/ 
$wp_customize->add_setting('hotel_galaxy_option[address]',array(
	'type'=>'option',
	'default'=>$hotel_galaxy_option['address'],	
	'sanitize_callback'=>'sanitize_text_field',
	'capability'        => 'edit_theme_options',
	));
$wp_customize->add_control( 'address', array(
	'label'        => __( 'Address', 'hotel-galaxy' ),
	'type'=>'text',
	'section'    => 'gen_sec',
	'settings'   => 'hotel_galaxy_option[address]',
	));
/**address end***/ 

/**Reservation Line start***/ 
$wp_customize->add_setting('hotel_galaxy_option[reservation_line]',array(
	'type'=>'option',
	'default'=>$hotel_galaxy_option['reservation_line'],	
	'sanitize_callback'=>'sanitize_text_field',
	'capability'        => 'edit_theme_options',
	));
$wp_customize->add_control( 'reservation_line', array(
	'label'        => __( 'Reservation Line', 'hotel-galaxy' ),
	'type'=>'text',
	'section'    => 'gen_sec',
	'settings'   => 'hotel_galaxy_option[reservation_line]',
	));
/**Reservation Line end***/ 


/**genral setting end***/ 
?>