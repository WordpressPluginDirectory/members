<?php
/**
 * Callback functions for outputting help tabs in the admin.
 *
 * @package    Members
 * @subpackage Admin
 * @author     The MemberPress Team 
 * @copyright  Copyright (c) 2009 - 2018, The MemberPress Team
 * @link       https://members-plugin.com/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Help sidebar for all of the help tabs.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function members_get_help_sidebar_text() {

	// Get docs and help links.
	$docs_link = sprintf( '<li><a href="https://members-plugin.com/docs/">%s</a></li>', esc_html__( 'Documentation',  'members' ) );
	$help_link = sprintf( '<li><a href="https://wordpress.org/support/plugin/members/">%s</a></li>', esc_html__( 'Support Forums', 'members' ) );

	// Return the text.
	return sprintf(
		'<p><strong>%s</strong></p><ul>%s%s</ul>',
		esc_html__( 'For more information:', 'members' ),
		$docs_link,
		$help_link
	);
}

/**
 * Edit role overview help tab args.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function members_get_edit_role_help_overview_args() {

	return array(
		'id'       => 'overview',
		'title'    => esc_html__( 'Overview', 'members' ),
		'callback' => 'members_edit_role_help_overview_cb'
	);
}

/**
 * Edit role name help tab args.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function members_get_edit_role_help_role_name_args() {

	return array(
		'id'       => 'role-name',
		'title'    => esc_html__( 'Role Name', 'members' ),
		'callback' => 'members_edit_role_help_role_name_cb'
	);
}

/**
 * Edit role edit caps help tab args.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function members_get_edit_role_help_edit_caps_args() {

	return array(
		'id'       => 'edit-capabilities',
		'title'    => esc_html__( 'Edit Capabilities', 'members' ),
		'callback' => 'members_edit_role_help_edit_caps_cb'
	);
}

/**
 * Edit role custom cap help tab args.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function members_get_edit_role_help_custom_cap_args() {

	return array(
		'id'       => 'custom-capability',
		'title'    => esc_html__( 'Custom Capability', 'members' ),
		'callback' => 'members_edit_role_help_custom_cap_cb'
	);
}

/**
 * Edit role overview help tab callback function.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function members_edit_role_help_overview_cb() { ?>

	<p>
		<?php esc_html_e( 'This screen allows you to edit an individual role and its capabilities.', 'members' ); ?>
	<p>

	<p>
		<?php printf(
			esc_html__( 'Visit the %s page in the WordPress Codex to see a complete list of roles, capabilities, and their definitions.', 'members' ),
			'<a href="https://codex.wordpress.org/Roles_and_Capabilities">' . esc_html__( 'Roles and Capabilities', 'members' ) . '</a>'
		); ?>
	</p>
<?php }

/**
 * Edit role name help tab callback function.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function members_edit_role_help_role_name_cb() { ?>

	<p>
		<?php esc_html_e( 'The role name field allows you to enter a human-readable name for your role.', 'members' ); ?>
	</p>

	<p>
		<?php esc_html_e( 'The machine-readable version of the role appears below the name field, which you can edit. This can only have lowercase letters, numbers, or underscores.', 'members' ); ?>
	</p>
<?php }

/**
 * Edit role edit caps help tab callback function.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function members_edit_role_help_edit_caps_cb() { ?>

	<p>
		<?php esc_html_e( 'The capabilities edit box is made up of tabs that separate capabilities into groups. You may take the following actions for each capability:', 'members' ); ?>
	</p>

	<ul>
		<li><?php _e( '<strong>Grant</strong> allows you to grant the role a capability.', 'members' ); ?></li>
		<li><?php _e( '<strong>Deny</strong> allows you to explicitly deny the role a capability.', 'members' ); ?></li>
		<li><?php esc_html_e( 'You may also opt to neither grant nor deny the role a capability.', 'members' ); ?></li>
	</ul>
<?php }

/**
 * Edit role custom cap help tab callback function.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function members_edit_role_help_custom_cap_cb() { ?>

	<p>
		<?php esc_html_e( 'The custom capability box allows you to create a custom capability for the role. After hitting the Add New button, it will add the capability to the Custom tab in the Edit Capabilities box.', 'members' ); ?>
	</p>
<?php }

/**
 * Displays info for upgrading to MemberPress
 *
 * @since  2.3.0
 * @access public
 * @param  string $link Link for button
 * @return void
 */
function members_memberpress_upgrade( $link = 'https://memberpress.com/plans/pricing' ) { ?>

	<div class="mepr-upgrade">
		<div class="mepr-upgrade-wrap">
			<div class="mepr-upgrade-content">
				<h2>Charge Members for Your Protected Content</h2>
				<h4>Members Lite cannot access payments.</h4>
				<p>Once you add MemberPress, you'll be able to charge your members for access to your content.</p>
				<ul class="features">
					<li>Charge for Access to Content</li>
					<li>Create Memberships, Courses, and Coaching Programs</li>
					<li>Manage Members</li>
					<li>Advanced Reports</li>
					<li>Recurring Payments</li>
					<li>Pro-rated Upgrades</li>
					<li>Centralized Protected Content Management</li>
					<li>Email Marketing Integrations</li>
				</ul>
			</div>
			<div class="mepr-upgrade-cta">
				<a href="<?php echo esc_url( $link ); ?>" id="mepr_cta_upgrade_link" class="mepr-cta-button">Add MemberPress Now</a>
				and start charging for access!
			</div>
		</div>
	</div>

	<?php
}
