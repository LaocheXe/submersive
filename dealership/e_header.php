<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2014 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Related configuration module - News
 *
 *
*/

if (!defined('e107_INIT')) { exit; }


if(deftrue('USER_AREA')) // prevents inclusion of JS/CSS/meta in the admin area.
{
	//e107::js('dealership', 'js/dealership.js');      // loads e107_plugins/dealership/js/dealership.js on every page.
	e107::css('dealership', 'css/dealership.css');    // loads e107_plugins/dealership/css/dealership.css on every page
	e107::meta('keywords', 'dealership,words');   // sets meta keywords on every page.
}



