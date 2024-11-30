<?php
/**
 * Block Styles
 *
 * @package fse_gym_trainer
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_gym_trainer_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-gym-trainer-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-gym-trainer' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-gym-trainer-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-gym-trainer' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-gym-trainer-button',
				'label'        => esc_html__( 'Plain', 'fse-gym-trainer' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-gym-trainer-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-gym-trainer' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-gym-trainer-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-gym-trainer' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-gym-trainer-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-gym-trainer' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-gym-trainer-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-gym-trainer' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-gym-trainer-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-gym-trainer' ),
			)
		);
	}
	add_action( 'init', 'fse_gym_trainer_register_block_styles' );
}
