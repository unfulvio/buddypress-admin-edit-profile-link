<?php
/*
Plugin Name: BuddyPress - User Profiles Edit Link for Admins
Plugin URI: https://github.com/kuching/buddypress-edit-profiles-admin/
Description: Provides an edit link to BuddyPress User X Profile in WordPress users administration dashboard page
Tags: buddypress
Version: 1.0
Author: kuching
Author URI: https://github.com/kuching/
License: GPL2

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

*/

/**
 * Make sue BuddyPress is loaded first by hooking into it
 *
 * @link http://codex.buddypress.org/developer/plugin-development/checking-buddypress-is-active/
 */
function bp_apedit_load() {

    require_once( dirname( __FILE__ ) . '/bp_admin_edits.php' );

}
add_action( 'bp_include', 'bp_apedit_load' );