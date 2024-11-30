<?php
/**
 * Block Patterns
 *
 * @package fse_gym_trainer
 * @since 1.0
 */

function fse_gym_trainer_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-gym-trainer' => array( 'label' => esc_html__( 'FSE Gym Trainer', 'fse-gym-trainer' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-gym-trainer' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_gym_trainer_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_gym_trainer_register_block_patterns', 9 );