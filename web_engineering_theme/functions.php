<?php

add_action( 'admin_menu', 'setup_theme_admin_menu' );
add_theme_support('post-thumbnails');

function setup_theme_admin_menu() {
	add_theme_page('Options', 'Options', 'edit_theme_options', 'theme-options', 'change_settings' );
}

function change_settings() {

	global $select_options, $radio_options;
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false; ?>

	<div class="wrap">
		<?php screen_icon('themes');?> <h2>Theme Settings</h2>

		<form method="POST" action="">
			<input type="hidden" name="update_settings" value="Y" />
			<table class="form-table">
				<tr>
					<th><label for="custom_title">Page title:</label></th>
					<td>
						<input type="text" name="custom_title"
							   value="<?php print get_option("custom_title");?>"
							   size="25"/>
					</td>
				</tr>

				<tr>
					<th><label for="custom_description">Page description:</label></th>
					<td>
						<input type="text" name="custom_description"
							   value="<?php print get_option("custom_description");?>"
							   size="25"/>
					</td>
				</tr>

				<tr>
					<th><label for="custom_background">Page background color:</label></th>
					<td>
						<input type="text" name="custom_background"
							   value="<?php print get_option("custom_background");?>"
							   size="25"/>
					</td>
				</tr>

			</table>
			<p>
				<input type="submit" value="Save settings" class="button-primary"/>
			</p>
		</form>
	</div>

	<?php
	if(isset($_POST["update_settings"])){
		$custom_title=esc_attr($_POST["custom_title"]);
		update_option("custom_title",$custom_title);
		$custom_description=esc_attr($_POST["custom_description"]);
		update_option("custom_description",$custom_description);
		$custom_background=esc_attr($_POST["custom_background"]);
		update_option("custom_background",$custom_background);
		?>
		<div id="message" class="updated">Settings saved</div>
	<?php }
}



function custom_post_portfolio() {
	$labels = array (
		'name'               => _x( 'Portfolio Items', 'post type general name' ),
		'singular_name'      => _x( 'Portfolio Item', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Portfolio Item' ),
		'edit_item'          => __( 'Edit Portfolio Item' ),
		'new_item'           => __( 'New Portfolio Item' ),
		'all_items'          => __( 'All Portfolio Items' ),
		'view_item'          => __( 'View Portfolio Item' ),
		'search_items'       => __( 'Search Portfolio Items' ),
		'not_found'          => __( 'No Portfolio Items found' ),
		'not_found_in_trash' => __( 'No Portfolio Items found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Portfolio Items'
	);

	$args = array(
		'labels' => $labels,
		'description' => 'Holds portfolio specific items',
		'public' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail'),
		'has_archive' => true,
	);

	register_post_type('portfolio_item', $args);
}

add_action( 'customize_register', 'change_skills' );

function change_skills($wp_customize) {

	$wp_customize->add_section('technical_skills_section', array('title' => 'Technical Skills Settings',
			'description' => 'Techincal settings customization.', 'priority' => 1,)
	);

	$wp_customize->add_setting('html_skills', array('default' => '0',));
	$wp_customize->add_control('html_skills', array('label' => 'HTML Skills', 'section' => 'technical_skills_section', 'type' => 'text',));

	$wp_customize->add_setting('css_skills', array('default' => '0',));
	$wp_customize->add_control('css_skills', array('label' => 'CSS Skills', 'section' => 'technical_skills_section', 'type' => 'text',));

	$wp_customize->add_setting('js_skills', array('default' => '0',));
	$wp_customize->add_control('js_skills', array('label' => 'JavaScript Skills', 'section' => 'technical_skills_section', 'type' => 'text',));

	$wp_customize->add_setting('wp_skills', array('default' => '0',));
	$wp_customize->add_control('wp_skills', array('label' => 'WordPress Skills', 'section' => 'technical_skills_section', 'type' => 'text',));

}

add_action('init','custom_post_portfolio');

add_action( 'wp_head', 'change_css');

function change_css(){
	?>
        <style type="text/css">
			#skills .blue { height: <?php echo get_theme_mod('html_skills', '0'); ?>%}
			#skills .red { height: <?php echo get_theme_mod('css_skills', '0'); ?>%}
			#skills .brown { height: <?php echo get_theme_mod('js_skills', '0'); ?>%}
			#skills .gray { height: <?php echo get_theme_mod('wp_skills', '0'); ?>%}
		</style>
    <?php
}

add_action( 'customize_register', 'change_contact' );

function change_contact($wp_customize) {
	
	$wp_customize->add_section('contact_section', array('title' => 'Contact Settings',
            'description' => 'Modify contact information.', 'priority' => 1,));
	
	$wp_customize->add_setting('address', array('default' => '',));
	$wp_customize->add_control('address', array('label' => 'Address', 'section' => 'contact_section', 'type' => 'text',));
	
	$wp_customize->add_setting('phone1', array('default' => '',));
	$wp_customize->add_control('phone1', array('label' => 'Phone 1', 'section' => 'contact_section', 'type' => 'text',));
	
	$wp_customize->add_setting('phone2', array('default' => '',));
	$wp_customize->add_control('phone2', array('label' => 'Phone 2', 'section' => 'contact_section', 'type' => 'text',));
	
	$wp_customize->add_setting('mail1', array('default' => '',));
	$wp_customize->add_control('mail1', array('label' => 'Email 1', 'section' => 'contact_section', 'type' => 'text',));
	
	$wp_customize->add_setting('mail2', array('default' => '',));
	$wp_customize->add_control('mail2', array('label' => 'Email 2', 'section' => 'contact_section', 'type' => 'text',));
	
	$wp_customize->add_setting('company', array('default' => '',));
	$wp_customize->add_control('company', array('label' => 'Company Name', 'section' => 'contact_section', 'type' => 'text',));
	
}

add_action( 'wp_ajax_wps_get_posts', 'wps_get_posts' );
add_action( 'wp_ajax_nopriv_wps_get_posts', 'wps_get_posts' );

function wps_get_posts() {


	$id = $_POST['id'];
	$post = get_post($id);
	
	echo json_encode($post);
	die();
}

?>