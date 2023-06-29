<?php
/*************************************/
//       www.defiantz.org            // 
//        body_types.php            //
//		  For Dealership           //
//		   created by             //
//          LaocheXe             //
/********************************/

if (!defined('e107_INIT'))
{
	require_once("../../class2.php");
}

if(!e107::isInstalled('dealership'))
{
	header('location:'.e_BASE.'index.php');
	exit;	
}

// TODO: Lans later, hard code now - template it later?
// Because e107::lan() doesn't like us.
e107::includeLan(e_PLUGIN."dealership/languages/".e_LANGUAGE."/".e_LANGUAGE."_front.php");

define('PAGE_NAME', LAN_DS_VEHICLES_PNAME);
//e107::lan('dealership', true);
//e107::css('dealership', 'roster.css'); 
e107::meta('keywords', 'body types, vehicle types, dealership, vehicle search');
require_once(HEADERF);

if(USERID || !USERID) // MIGHT NEED TO CHANGE THIS IF STATEMENT
{
	new showBodyTypesList;
}

class showBodyTypesList
{
	function __construct()
	{
		// Generate the list of Body Types, with their Icons here
		$mes = e107::getMessage();
		$sql  = e107::getDB();
		if(!$sql->count('vehicle_type_exe')) // Lets count to make sure there is body types listed.
		{
		  e107::getRender()->tablerender(LAN_DS_VEHICLES_PNAME, LAN_DS_MISSING_DATA);
		  require_once(FOOTERF);
		  exit;
		}
		// Then make them into links
	}
	
	// Selected the Body Type
	function bodyType()
	{	
		// Stuff goes here
	}
}
require_once(FOOTERF);
exit;
?>