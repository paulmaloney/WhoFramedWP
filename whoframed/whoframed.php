<?php
/*
Plugin Name: WhoFramed
Version: 1.0
Plugin URI: https://github.com/paulmaloney/WhoFramed
Description: This plugin will magically make any iframe embeds responsive.
Author: Paul Maloney
Author URI: https://paulmaloney.net
License: GPL2

Copyright 2020 Paul Maloney

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function add_whoframed(){
	wp_register_script( 'whoframed', plugins_url( 'js/whoframed.min.js', __FILE__ ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'whoframed' );
}
add_action( 'wp_enqueue_scripts', 'add_whoframed' );