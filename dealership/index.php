<?php
/*************************************/
//       www.defiantz.org            // 
//          index.php               //
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
//e107::lan('dealership', true, true);
//e107::css('dealership', 'roster.css'); 
e107::meta('keywords', 'body types, vehicle types, dealership, brands, vehicle search');
require_once(HEADERF);

// First thing first, show 
if(USERID || !USERID) // MIGHT NEED TO CHANGE THIS IF STATEMENT
{
	new showBrandOrBodyTypeList; // What should we show?
}

class showBrandOrBodyTypeList
{
	function __construct()
	{
		$mes = e107::getMessage();
		$sql  = e107::getDB();
		if(!$sql->count('vehicle_type_exe') || !$sql->count('vehicle_brands_exe')) // Could as Dealers to this if we add more dealers in the future?
		{
		  //$text = "The database could not locate either Vehicle Body Types, and/or Vehicle Brands.";
		  e107::getRender()->tablerender(LAN_DS_VEHICLES_PNAME, LAN_DS_MISSING_DATA);
		  require_once(FOOTERF);
		  exit;
		}
		else
		{
			$this->bodyTypes_Brands();
		}
		
		echo $mes->render();
	}
	
	function bodyTypes_Brands()
	{	
		$sql  = e107::getDB();
		//$tp = e107::getParser();
		$ns = e107::getRender();
		//$text .= '';
		
		// Make a table that list some stats (Count Vehicles, Brands, and Body Types tables) - Dealerships will be added later?
		$brandCount = $sql->count("vehicle_brands_exe", "(*)");
		$bodyCount = $sql->count("vehicle_type_exe", "(*)");
		$vehiclesCount = $sql->count("vehicles_exe", "(*)");
		
		// Make this into a template in the future?
		$text .= "<div>
					<table>
						<tr>
							<th>".$brandCount." ".LAN_DS_TH_BRANDS."</th>
						</tr>
						<tr>
							<th>".$bodyCount." ".LAN_DS_TH_BODYTYPES."</th>
						</tr>
						<tr>
							<th>".$vehiclesCount." ".LAN_DS_TH_VEHICLES."</th>
						</tr>
					</table>
				</div><br />";
		
		$text .= "<div>
					Please select a type of vehicle body, or brand to view the catalog.
				</div>";
				
			// Images might require a style='float:left/right'	
		$text .= "<div>
					<a href='".e_PLUGIN."dealership/body_types.php'><img src='".e_PLUGIN_ABS."/dealership/images/BodyTypes-Link-Button.png' alt='".LAN_DS_BODYTYPES."' width='350' height='250' title=".LAN_DS_BODYTYPES." /></a>&#160;&#160;&#160;&#160;&#160;&#160;<a href='#'><img src='".e_PLUGIN_ABS."/dealership/images/Brands-Link-Button.png' alt='".LAN_DS_BRANDS."' width='350' height='250' title=".LAN_DS_BRANDS." /></a>
				</div>";
		// Make two buttons (three later on if more dealerships are added)
		$ns->tablerender(LAN_DS_VEHICLES_PNAME, $text);
	}
}
require_once(FOOTERF);
exit;
?>