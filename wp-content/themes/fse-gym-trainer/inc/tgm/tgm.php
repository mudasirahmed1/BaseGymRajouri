<?php
/**
 * Recommended plugins.
 */
	
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

function fse_gym_trainer_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'fse-gym-trainer' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	fse_gym_trainer_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'fse_gym_trainer_register_recommended_plugins' );