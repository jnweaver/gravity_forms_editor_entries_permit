<?php 
/*
  Plugin Name: Gravity Forms Editor Entries Permit
  Description: Allows the Wordpress editor role to view, edit and delete Gravity Forms entries
  Version: 1.0.0
  Author: Nick Weaver
  Author URI: https://github.com/jnweaver
 */

/**
 * Adds Gravity Forms entry capabilities to Editor role.
 * 
 * @return void
 */
function activate_gravity_forms_editor() {
  $role = get_role( 'editor' );
  $role->add_cap( 'gravityforms_view_entries' );
  $role->add_cap( 'gravityforms_edit_entries' );
  $role->add_cap( 'gravityforms_delete_entries' );
  $role->add_cap( 'gravityforms_export_entries' );
  $role->add_cap( 'gravityforms_view_entry_notes' );
  $role->add_cap( 'gravityforms_edit_entry_notes' );
}
register_activation_hook( __FILE__, 'activate_gravity_forms_editor' );

/**
 * Removes Gravity Forms entry capabilities from Editor role.
 * 
 * @return void
 */
function deactivate_gravity_forms_editor() {
  $role = get_role( 'editor' );
  $role->remove_cap( 'gravityforms_view_entries' );
  $role->remove_cap( 'gravityforms_edit_entries' );
  $role->remove_cap( 'gravityforms_delete_entries' );
  $role->remove_cap( 'gravityforms_export_entries' );
  $role->remove_cap( 'gravityforms_view_entry_notes' );
  $role->remove_cap( 'gravityforms_edit_entry_notes' );
}
register_deactivation_hook( __FILE__, 'deactivate_gravity_forms_editor' );