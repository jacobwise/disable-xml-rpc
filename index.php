<?php
/*
Plugin Name: Disable XML-RPC & Unset X-Pingback
Plugin URI: http://www.swellfire.com/plugins/
Description: This plugin disables XML-RPC API in WordPress 3.5+, which is enabled by default. It also unsets the X-Pingback header.
Version: 1.0
Author: Jacob Wise
Author URI: http://www.swellfire.com
License: GPLv2
*/

/*  Copyright 2014  Jacob Wise  (http://swellfire.com)

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

add_filter( 'xmlrpc_enabled', '__return_false' );

add_filter( 'wp_headers', 'jw_remove_x_pingback' );
function jw_remove_x_pingback( $headers )
{
    unset( $headers['X-Pingback'] );
    return $headers;
}

?>
