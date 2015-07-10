<?php
/* 
Plugin Name: Coming Soon / Maintenance Mode From Acurax
Plugin URI: http://www.acurax.com/Products/
Description: Simple and the best Coming Soon or Maintenance Mode Plugin Which Supports Practically Unlimited Responsive Designs.
Author: Acurax 
Version: 1.0
Author URI: http://www.acurax.com 
License: GPLv2 or later
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/ 
?>
<?php
/*************** Admin function ***************/
define("ACX_CSMA_TOTAL_THEMES",5);
define("ACX_CSMA_BASE_LOCATION",plugin_dir_url( __FILE__ ));
include_once('function.php');
include_once('includes/hooks.php');
include_once('includes/hook_functions.php');
	function acx_csma_admin() 
	{
		include('includes/acx_csma_admin.php');
	}
	function acx_csma_subscribers() 
	{
		include('includes/acx_csma_subscribers.php');
	}

	function acx_csma_misc() 
	{
		include('includes/acx_csma_misc.php');
	}
	function acx_csma_help() 
	{
		include('includes/acx_csma_help.php');
	}

	function acx_csma_expert_support() 
	{
		include('includes/acx_csma_expert_support.php');
	}

	$acx_csma_hide_expert_support_menu = get_option('acx_csma_hide_expert_support_menu');
	if ($acx_csma_hide_expert_support_menu == "") {	$acx_csma_hide_expert_support_menu = "no"; }
	function acx_csma_admin_actions()
	{
		global $acx_csma_hide_expert_support_menu;
		add_menu_page(  'Maintenance Mode / Coming Soon Configuration', 'Maintenance Mode', 'manage_options', 'Acurax-Coming-Soon-Maintenance-Mode-Settings','acx_csma_admin',plugin_dir_url( __FILE__ ).'/images/admin.png' ); // manage_options for admin
		add_submenu_page('Acurax-Coming-Soon-Maintenance-Mode-Settings', 'Coming Soon/Maintenance From Acurax Subscribers List', 'View All Subscribers', 'manage_options', 'Acurax-Coming-Soon-Maintenance-Mode-Subscribers' ,'acx_csma_subscribers');
		add_submenu_page('Acurax-Coming-Soon-Maintenance-Mode-Settings', 'Coming Soon/Maintenance From Acurax Misc Settings', 'Misc', 'manage_options', 'Acurax-Coming-Soon-Maintenance-Mode-Misc' ,'acx_csma_misc');
		
		if($acx_csma_hide_expert_support_menu == "no") {
		add_submenu_page('Acurax-Coming-Soon-Maintenance-Mode-Settings', 'Acurax Expert Support', 'Expert Support', 'manage_options', 'Acurax-Coming-Soon-Maintenance-Mode-Expert-Support' ,'acx_csma_expert_support');
		}
		add_submenu_page('Acurax-Coming-Soon-Maintenance-Mode-Settings', 'Coming Soon/Maintenance From Acurax Help and Support', 'Help', 'manage_options', 'Acurax-Coming-Soon-Maintenance-Mode-Help' ,'acx_csma_help');
	}
	if ( is_admin() )
	{
		add_action('admin_menu', 'acx_csma_admin_actions');
	}
?>