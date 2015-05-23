<?php
/*
Plugin Name: VR Easy Fancybox Shortcodes
Plugin URI: https://journalxtra.com/wordpress/plugins-wordpress/wordpress-easy-fancybox-shortcodes-plugin/
Description: Adds shortcodes for the Easy Fancybox plugin to make inline popup box creation a little easier.
Version: 1.0.1
Author: Lee Hodson, VR51
Author URI: http://vizred.com/

---------------------------------------------------------------------------

Copyright 2013  Lee Hodson  (email : leehodson@vizred.com)

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

---------------------------------------------------------------------------

*/
?>
<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Do Easy Fancybox Shortcode ( vr_easyfbox() )

  function vr_easyfbox($atts, $content=null) {

			extract(shortcode_atts(array(
				// Popup Box
				'box' => '0', // popup box number
				'width' => '0', // width of pop box
				'height' => '0', // height of popup box
				'unitw' => 'px', // Measurement unit for width (px, em, rem or %)
				'unith' => 'px', // Measurement unit for height (px, em, rem or %)
				'class' => '', // fancybox class
			), $atts));

			$box_num = intval($box);
			$class = esc_html($class);
			$fancybox = 'fancyboxID-'.$box_num;
			$width = intval($width);
			$height = intval($height);
			if ($unitw == 'px' || $unitw == '%' || $unitw == 'rem' || $unitw == 'em') {
			  $unitw = $unitw;
			} else { $unitw = 'px'; }
			if ($unith == 'px' || $unith == '%' || $unith == 'rem' || $unith == 'em') {
			  $unith = $unith;
			} else { $unith = 'px'; }
			if ($width != '0') {
			  $width = 'width:'.$width.$unitw.';';
			}
			if ($height != '0') {
			  $height = 'height:'.$height.$unith.';';
			}
			if ($height != '0' && $width != '0') {
			  $style = 'style="'.$width.$height.'"';
			} else {
			  $style='';
			}

			$data='
			<div style="display:none" class="fancybox-hidden">
			  <div id="'.$fancybox.'" class="'.$class.'" '.$style.'>
			<!-- START Content -->
			  '.do_shortcode($content).'
			<!-- END Content -->
			  </div>
			</div>';
			
			return $data;
}

add_shortcode('easyfbox', 'vr_easyfbox');

// End CSSPopUp

// Do Easy Popper Shortcode

  function vr_easypopper($atts, $content=null) {

			extract(shortcode_atts(array(
				'box' => '', // popup box number
			), $atts));

			$box_num = (int)$box;

			$data='
			  <a href="#fancyboxID-'.$box.'" class="fancybox-inline">
			  <!-- END Trigger -->
			    '.do_shortcode($content).'
			    </a>
			  <!-- END Trigger -->';
			  
			  return $data;
		}


  add_shortcode('easypopper', 'vr_easypopper');

// End EasyPopper


?>