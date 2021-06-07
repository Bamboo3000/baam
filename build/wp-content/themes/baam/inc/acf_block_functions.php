<?php
add_action('acf/init', 'baam_acf_init');
function baam_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'baamtwocolumncontent',
			'title'				=> __('Two Column Content'),
			'description'		=> __('Split content into two columns on large screens.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamclientslider',
			'title'				=> __('Client Slider'),
			'description'		=> __('Generate a slider.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamfullwidthvideo',
			'title'				=> __('Full Width Video'),
			'description'		=> __('Add a full width video.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamgrid',
			'title'				=> __('BAAM Grid'),
			'description'		=> __('Add a grid layout.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamhero',
			'title'				=> __('BAAM Hero'),
			'description'		=> __('Add a hero image.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamservices',
			'title'				=> __('BAAM Services'),
			'description'		=> __('Add the services.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamteam',
			'title'				=> __('BAAM Team'),
			'description'		=> __('Add team.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamassociates',
			'title'				=> __('BAAM Associates'),
			'description'		=> __('Add associates.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));
		acf_register_block(array(
			'name'				=> 'baamtitleblock',
			'title'				=> __('BAAM Title Block'),
			'description'		=> __('Add title block.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));
		acf_register_block(array(
			'name'				=> 'baamdiscoverybutton',
			'title'				=> __('BAAM Discovery Meeting Button'),
			'description'		=> __('Add Discovery Meeting Button.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));
		acf_register_block(array(
			'name'				=> 'baamkeyprojects',
			'title'				=> __('BAAM Key projects and services'),
			'description'		=> __('Add key projects and services.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));
		acf_register_block(array(
			'name'				=> 'baamtools',
			'title'				=> __('BAAM Tools'),
			'description'		=> __('Add tools.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamlandingheader',
			'title'				=> __('BAAM Landing Header'),
			'description'		=> __('Add landing page header.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamlandingtwocolumnimageright',
			'title'				=> __('BAAM Two Column Image Right'),
			'description'		=> __('Add landing page header.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamstepslist',
			'title'				=> __('BAAM Steps list'),
			'description'		=> __('Add a list of steps.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamlandingproof',
			'title'				=> __('BAAM Landing Proof'),
			'description'		=> __('Add proof.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamlandingproofv2',
			'title'				=> __('BAAM Landing Proof v2'),
			'description'		=> __('Add proof.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baambrandingform',
			'title'				=> __('BAAM Branding Form'),
			'description'		=> __('Add branding form.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));

		acf_register_block(array(
			'name'				=> 'baamhomev2hero',
			'title'				=> __('BAAM Home v2 Hero'),
			'description'		=> __('Add Home Hero block.'),
			'render_callback'	=> 'baam_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'column', 'content' ),
		));
	}
}

function baam_acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}

?>
