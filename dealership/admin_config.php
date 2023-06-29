<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

// Load the admin language file?
e107::lan('dealership',true,true);


class dealership_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'dealerships'	=> array(
			'controller' 	=> 'dealerships_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'dealerships_exe_form_ui',
			'uipath' 		=> null
		),
		

		'brands'	=> array(
			'controller' 	=> 'vehicle_brands_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'vehicle_brands_exe_form_ui',
			'uipath' 		=> null
		),
		

		'bodytypes'	=> array(
			'controller' 	=> 'vehicle_type_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'vehicle_type_exe_form_ui',
			'uipath' 		=> null
		),
		

		'other2'	=> array(
			'controller' 	=> 'vehicle_holds_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'vehicle_holds_exe_form_ui',
			'uipath' 		=> null
		),
		

		'other3'	=> array(
			'controller' 	=> 'vehicle_rate_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'vehicle_rate_exe_form_ui',
			'uipath' 		=> null
		),
		

		'vehicles'	=> array(
			'controller' 	=> 'vehicles_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'vehicles_exe_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(

		'dealerships/list'			=> array('caption'=> LAN_MANAGE_DEALERSHIPS, 'perm' => 'P'),
		//'dealerships/create'		=> array('caption'=> LAN_CREATE_DEALERSHIP, 'perm' => 'P'),
		
		'opt1'				=> array('divider'=> true),
		
		'brands/list'			=> array('caption'=> LAN_MANAGE_BRANDS, 'perm' => 'P'),
		//'cat/create'		=> array('caption'=> LAN_CREATE_BRAND, 'perm' => 'P'),

		'bodytypes/list'			=> array('caption'=> LAN_MANAGE_VEHICLE_TYPES, 'perm' => 'P'),
		//'other1/create'		=> array('caption'=> LAN_CREATE_VEHICLE_TYPE, 'perm' => 'P'),
		
		'vehicles/list'			=> array('caption'=> LAN_MANAGE_VEHICLES, 'perm' => 'P'),
		//'vehicles/create'		=> array('caption'=> LAN_CREATE_VEHICLES, 'perm' => 'P'),

		'opt2'				=> array('divider'=> true),

		'other2/list'			=> array('caption'=> LAN_MANAGE_HOLDS, 'perm' => 'P'),
	//	'other2/create'		=> array('caption'=> LAN_CREATE_HOLD, 'perm' => 'P'), // Should use the front end for this, unless one needs to edit it, or delete it.

		'other3/list'			=> array('caption'=> LAN_MANAGE_RATES, 'perm' => 'P'),
	//	'other3/create'		=> array('caption'=> LAN_CREATE_RATE, 'perm' => 'P'), // Don't need to create any rates, come on

	//	'other4/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
	//	'other4/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),

		// 'main/div0'      => array('divider'=> true),
		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P'),
		
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Dealership';
}




				
class dealerships_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= LAN_PLUGIN_NAME;
		protected $pluginName		= 'dealership';
	//	protected $eventName		= 'dealership-dealerships_exe'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'dealerships_exe';
		protected $pid				= 'ds_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'ds_id DESC';
	
		protected $fields 		= array (
			'checkboxes'              => array (  'title' => '',  'type' => null,  'data' => null,  'width' => '5%',  'thclass' => 'center',  'forced' => 'value',  'class' => 'center',  'toggle' => 'e-multiselect',  'readParms' =>  array (),  'writeParms' =>  array (),),
			'ds_id'                   => array (  'title' => LAN_ID,  'data' => 'int',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'ds_name'                 => array (  'title' => LAN_DEALERSHIP_NAME,  'type' => 'text',  'data' => 'safestr',  'width' => 'auto',  'inline' => true, 'validate' => true, 'help' => LAN_DS_HELP_NAME,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'ds_logo'                 => array (  'title' => LAN_DEALERSHIP_LOGO,  'type' => 'image',  'data' => 'safestr',  'width' => 'auto',  'help' => LAN_DS_HELP_LOGO,  'readParms' => 'thumb=80x80',  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'ds_zipcodes'             => array (  'title' => LAN_DEALERSHIP_ZIPCODE,  'type' => 'number',  'data' => 'int',  'width' => 'auto',  'help' => LAN_DS_HELP_ZIP,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'options'                 => array (  'title' => LAN_OPTIONS,  'type' => null,  'data' => null,  'width' => '10%',  'thclass' => 'center last',  'class' => 'center last',  'forced' => 'value',  'readParms' =>  array (),  'writeParms' =>  array (),),
		);		
		
		protected $fieldpref = array('ds_name', 'ds_logo', 'ds_zipcodes');
		

	//	protected $preftabs        = array('General', 'Other' );
		protected $prefs = array(
		); 

	
		public function init()
		{
			// This code may be removed once plugin development is complete. 
			if(!e107::isInstalled('dealership'))
			{
				e107::getMessage()->addWarning("This plugin is not yet installed. Saving and loading of preference or table data will fail.");
			}
			
			// For custom button I believe
			$this->postFilterMarkup = $this->AddButton();
			
			// Set drop-down values (if any). 
	
		}
		
		// ------- Custom Add Button -------
		public function AddButton()
		{
			// This put's the button on top, but under the search area
			$text  = "</fieldset></form><div class='e-container'>
						<table id='.$this->id.' style='".ADMIN_WIDTH."' class='table adminlist table-striped'>";
			$text .=  
						'<a href="admin_config.php?mode=dealerships&action=create"  
						class="btn batch e-hide-if-js create btn-success" style="float: right;"><span>'.LAN_CREATE_DEALERSHIP.'</span></a>';
			$text .= "</td></tr></table></div><form><fieldset>";
			return $text;
		}
		// ---------------------------------
		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		// left-panel help menu area. (replaces e_help.php used in old plugins)
		public function renderHelp()
		{
			$caption = LAN_HELP;
			$text = 'Some help text';

			return array('caption'=>$caption,'text'=> $text);

		}
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}	
		
	*/
			
}
				


class dealerships_exe_form_ui extends e_admin_form_ui
{

}		
		

				
class vehicle_brands_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= LAN_BRAND_TITLE;
		protected $pluginName		= 'dealership';
	//	protected $eventName		= 'dealership-vehicle_brands_exe'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'vehicle_brands_exe';
		protected $pid				= 'vb_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'vb_id DESC';
	
		protected $fields 		= array (
			'checkboxes'              => array (  'title' => '',  'type' => null,  'data' => null,  'width' => '5%',  'thclass' => 'center',  'forced' => 'value',  'class' => 'center',  'toggle' => 'e-multiselect',  'readParms' =>  array (),  'writeParms' =>  array (),),
			'vb_id'                   => array (  'title' => LAN_ID,  'data' => 'int',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vb_name'                 => array (  'title' => LAN_BRAND_NAME,  'type' => 'text',  'data' => 'safestr',  'width' => 'auto',  'inline' => true, 'validate' => true, 'help' => LAN_VB_HELP_NAME,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vb_logo'                 => array (  'title' => LAN_BRAND_LOGO,  'type' => 'image',  'data' => 'safestr',  'width' => 'auto',  'help' => LAN_VB_HELP_LOGO,  'readParms' => 'thumb=80x80',  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'options'                 => array (  'title' => LAN_OPTIONS,  'type' => null,  'data' => null,  'width' => '10%',  'thclass' => 'center last',  'class' => 'center last',  'forced' => 'value',  'readParms' =>  array (),  'writeParms' =>  array (),),
		);		
		
		protected $fieldpref = array('vb_name', 'vb_logo');
		
	
		public function init()
		{
			// This code may be removed once plugin development is complete. 
			if(!e107::isInstalled('dealership'))
			{
				e107::getMessage()->addWarning("This plugin is not yet installed. Saving and loading of preference or table data will fail.");
			}
			
			// For custom button I believe
			$this->postFilterMarkup = $this->AddButton();
			
			// Set drop-down values (if any). 
	
		}
		
		// ------- Custom Add Button -------
		public function AddButton()
		{
			// This put's the button on top, but under the search area
			$text  = "</fieldset></form><div class='e-container'>
						<table id='.$this->id.' style='".ADMIN_WIDTH."' class='table adminlist table-striped'>";
			$text .=  
						'<a href="admin_config.php?mode=brands&action=create"  
						class="btn batch e-hide-if-js create btn-success" style="float: right;"><span>'.LAN_CREATE_BRAND.'</span></a>';
			$text .= "</td></tr></table></div><form><fieldset>";
			return $text;
		}
		// ---------------------------------
		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		// left-panel help menu area. (replaces e_help.php used in old plugins)
		public function renderHelp()
		{
			$caption = LAN_HELP;
			$text = 'Some help text';

			return array('caption'=>$caption,'text'=> $text);

		}
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
		
	
		
		
	*/
			
}
				


class vehicle_brands_exe_form_ui extends e_admin_form_ui
{

}		
		

				
class vehicle_type_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= LAN_VEHICLE_BODY;
		protected $pluginName		= 'dealership';
	//	protected $eventName		= 'dealership-vehicle_type_exe'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'vehicle_type_exe';
		protected $pid				= 'vt_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'vt_id DESC';
	
		protected $fields 		= array (
			'checkboxes'              => array (  'title' => '',  'type' => null,  'data' => null,  'width' => '5%',  'thclass' => 'center',  'forced' => 'value',  'class' => 'center',  'toggle' => 'e-multiselect',  'readParms' =>  array (),  'writeParms' =>  array (),),
			'vt_id'                   => array (  'title' => LAN_ID,  'data' => 'int',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vt_name'                 => array (  'title' => LAN_VT_NAME,  'type' => 'text',  'data' => 'safestr',  'width' => 'auto',  'inline' => true, 'validate' => true, 'help' => LAN_VT_HELP_NAME,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vt_icon'                 => array (  'title' => LAN_VT_ICON,  'type' => 'icon',  'data' => 'safestr',  'width' => 'auto',  'help' => LAN_VT_HELP_ICON,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'options'                 => array (  'title' => LAN_OPTIONS,  'type' => null,  'data' => null,  'width' => '10%',  'thclass' => 'center last',  'class' => 'center last',  'forced' => 'value',  'readParms' =>  array (),  'writeParms' =>  array (),),
		);		
		
		protected $fieldpref = array('vt_name', 'vt_icon');
		
	
		public function init()
		{
			// This code may be removed once plugin development is complete. 
			if(!e107::isInstalled('dealership'))
			{
				e107::getMessage()->addWarning("This plugin is not yet installed. Saving and loading of preference or table data will fail.");
			}
			
			// For custom button I believe
			$this->postFilterMarkup = $this->AddButton();
			
			// Set drop-down values (if any). 
	
		}
		
		// ------- Custom Add Button -------
		public function AddButton()
		{
			// This put's the button on top, but under the search area
			$text  = "</fieldset></form><div class='e-container'>
						<table id='.$this->id.' style='".ADMIN_WIDTH."' class='table adminlist table-striped'>";
			$text .=  
						'<a href="admin_config.php?mode=bodytypes&action=create"  
						class="btn batch e-hide-if-js create btn-success" style="float: right;"><span>'.LAN_CREATE_VEHICLE_TYPE.'</span></a>';
			$text .= "</td></tr></table></div><form><fieldset>";
			return $text;
		}
		// ---------------------------------
		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		// left-panel help menu area. (replaces e_help.php used in old plugins)
		public function renderHelp()
		{
			$caption = LAN_HELP;
			$text = 'Some help text';

			return array('caption'=>$caption,'text'=> $text);

		}
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
		
	
		
		
	*/
			
}
				


class vehicle_type_exe_form_ui extends e_admin_form_ui
{

}		
		

				
class vehicle_holds_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= LAN_HOLDS;
		protected $pluginName		= 'dealership';
	//	protected $eventName		= 'dealership-vehicle_holds_exe'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'vehicle_holds_exe';
		protected $pid				= 'vh_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'vh_id DESC';
	// TODO: LAN's at some point?
		protected $fields 		= array (
			'checkboxes'              => array (  'title' => '',  'type' => null,  'data' => null,  'width' => '5%',  'thclass' => 'center',  'forced' => 'value',  'class' => 'center',  'toggle' => 'e-multiselect',  'readParms' =>  array (),  'writeParms' =>  array (),),
			'vh_id'                   => array (  'title' => LAN_ID,  'data' => 'int',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vh_rname'                => array (  'title' => 'Rname',  'type' => 'text',  'data' => 'safestr',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vh_date'                 => array (  'title' => LAN_DATESTAMP,  'type' => 'datestamp',  'data' => 'int',  'width' => 'auto',  'filter' => 'value',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_id'                    => array (  'title' => LAN_ID,  'type' => 'dropdown',  'data' => 'int',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',  'filter' => false,  'batch' => false,),
			'options'                 => array (  'title' => LAN_OPTIONS,  'type' => null,  'data' => null,  'width' => '10%',  'thclass' => 'center last',  'class' => 'center last',  'forced' => 'value',  'readParms' =>  array (),  'writeParms' =>  array (),),
		);		
		
		protected $fieldpref = array('vh_rname', 'vh_date', 'v_id');
		
	
		public function init()
		{
			// This code may be removed once plugin development is complete. 
			if(!e107::isInstalled('dealership'))
			{
				e107::getMessage()->addWarning("This plugin is not yet installed. Saving and loading of preference or table data will fail.");
			}
			
			// Set drop-down values (if any). 
			$this->fields['v_id']['writeParms']['optArray'] = array('v_id_0','v_id_1', 'v_id_2'); // Example Drop-down array. 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		// left-panel help menu area. (replaces e_help.php used in old plugins)
		public function renderHelp()
		{
			$caption = LAN_HELP;
			$text = 'Some help text';

			return array('caption'=>$caption,'text'=> $text);

		}
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
		
	
		
		
	*/
			
}
				


class vehicle_holds_exe_form_ui extends e_admin_form_ui
{

}		
		

				
class vehicle_rate_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= LAN_VEHICLE_RATE;
		protected $pluginName		= 'dealership';
	//	protected $eventName		= 'dealership-vehicle_rate_exe'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'vehicle_rate_exe';
		protected $pid				= 'vr_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'vr_id DESC';
	// TODO: LAN's at some point?
		protected $fields 		= array (
			'checkboxes'              => array (  'title' => '',  'type' => null,  'data' => null,  'width' => '5%',  'thclass' => 'center',  'forced' => 'value',  'class' => 'center',  'toggle' => 'e-multiselect',  'readParms' =>  array (),  'writeParms' =>  array (),),
			'vr_id'                   => array (  'title' => LAN_ID,  'data' => 'int',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vr_table'                => array (  'title' => 'Table',  'type' => 'text',  'data' => 'safestr',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vr_itemid'               => array (  'title' => 'Itemid',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vr_rating'               => array (  'title' => 'Rating',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vr_votes'                => array (  'title' => 'Votes',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vr_voters'               => array (  'title' => 'Voters',  'type' => 'textarea',  'data' => 'str',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vr_rate_up'              => array (  'title' => 'Up',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vr_rate_down'            => array (  'title' => 'Down',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'options'                 => array (  'title' => LAN_OPTIONS,  'type' => null,  'data' => null,  'width' => '10%',  'thclass' => 'center last',  'class' => 'center last',  'forced' => 'value',  'readParms' =>  array (),  'writeParms' =>  array (),),
		);		
		
		protected $fieldpref = array('vr_table', 'vr_itemid', 'vr_rating', 'vr_votes', 'vr_voters', 'vr_rate_up', 'vr_rate_down');
		
	
		public function init()
		{
			// This code may be removed once plugin development is complete. 
			if(!e107::isInstalled('dealership'))
			{
				e107::getMessage()->addWarning("This plugin is not yet installed. Saving and loading of preference or table data will fail.");
			}
			
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		// left-panel help menu area. (replaces e_help.php used in old plugins)
		public function renderHelp()
		{
			$caption = LAN_HELP;
			$text = 'Some help text';

			return array('caption'=>$caption,'text'=> $text);

		}
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
		
	
		
		
	*/
			
}
				


class vehicle_rate_exe_form_ui extends e_admin_form_ui
{

}		
		

				
class vehicles_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= LAN_VEHICLES_TITLE;
		protected $pluginName		= 'dealership';
	//	protected $eventName		= 'dealership-vehicles_exe'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'vehicles_exe';
		protected $pid				= 'v_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

		protected $tabs				= array(LAN_TAB_GENERAL,LAN_TAB_SPECS,LAN_TAB_IMAGES); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'v_id DESC';
	
		protected $fields 		= array (
			'checkboxes'              => array (  'title' => '',  'type' => null,  'data' => null,  'width' => '5%',  'thclass' => 'center',  'forced' => 'value',  'class' => 'center',  'toggle' => 'e-multiselect',  'readParms' =>  array (),  'writeParms' =>  array (),),
			'v_id'                    => array (  'title' => LAN_ID,  'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
			'vb_id'                   => array (  'title' => LAN_BRAND_N,  'type' => 'dropdown', 'tab' => 1, 'data' => 'str',  'width' => '10%', 'validate' => true, 'help' => LAN_V_HELP_BRAND,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vt_id'                   => array (  'title' => LAN_TYPE_V,  'type' => 'dropdown', 'tab' => 1, 'data' => 'str',  'width' => '10%', 'validate' => true, 'help' => LAN_V_HELP_BODYTYPE,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'ds_id'                   => array (  'title' => LAN_DEALERSHIP_N,  'type' => 'dropdown', 'tab' => 0, 'data' => 'str', 'inline' => true, 'validate' => true, 'width' => '10%', 'help' => LAN_V_HELP_DEALER,  'readParms' =>  array ('type'=>'checkboxes'), 'class' => 'left',  'thclass' => 'left', 'nosort' => false,),
			'v_name'                  => array (  'title' => LAN_NAME_V,  'type' => 'text', 'tab' => 0, 'data' => 'safestr',  'width' => 'auto',  'inline' => true, 'validate' => true, 'help' => LAN_V_HELP_NAME,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_fmname'                => array (  'title' => LAN_FMN_V,  'type' => 'text', 'tab' => 0, 'data' => 'safestr',  'width' => 'auto',  'help' => LAN_V_HELP_FIVEMN, 'validate' => true, 'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_sef'                   => array (  'title' => LAN_SEF_V,  'type' => 'text', 'tab' => 0, 'inline' => true, 'data' => 'str',  'width' => 'auto', 'batch' => TRUE, 'filter'=> TRUE, 'writeParms' => 'sef=v_name', 'help' => LAN_V_HELP_SEF,  'readParms' =>  array (),),
			'v_topspeed'              => array (  'title' => LAN_TOPSPEED_V,  'type' => 'number', 'tab' => 1, 'data' => 'int',  'width' => 'auto',  'help' => LAN_V_HELP_TOPSPEED,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_gasm'                  => array (  'title' => LAN_GASMILAGE_V,  'type' => 'number', 'tab' => 1, 'data' => 'safestr',  'width' => 'auto',  'help' => LAN_V_HELP_GASM,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_handlingrate'          => array (  'title' => LAN_HANDLING_V,  'type' => 'number', 'tab' => 1, 'data' => 'int',  'width' => 'auto',  'help' => LAN_V_HELP_HANDLING,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_stock_ammount'         => array (  'title' => LAN_STOCK_AMMOUNT,  'type' => 'number', 'tab' => 0, 'data' => 'int',  'width' => 'auto',  'help' => LAN_V_HELP_STOCK,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_description'           => array (  'title' => LAN_DESCRIPTION,  'type' => 'bbarea', 'tab' => 1, 'data' => 'str',  'width' => '40%',  'help' => LAN_V_HELP_DESCRIPTION,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_keywords'              => array (  'title' => LAN_KEYWORDS,  'type' => 'tags', 'tab' => 0, 'data' => 'str',  'width' => 'auto',  'help' => LAN_V_HELP_KEYWORDS,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_thumb'                 => array (  'title' => LAN_THUMB_V,  'type' => 'image', 'tab' => 2, 'data' => 'str',  'width' => 'auto',  'help' => LAN_V_HELP_THUMB,  'readParms' => 'thumb=80x80',  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_media'                 => array (  'title' => LAN_IMAGE_V,  'type' => 'media', 'tab' => 2, 'data' => 'json',  'width' => 'auto',  'help' => LAN_V_HELP_IMAGES,  'readParms' => 'thumb=80x80',  'writeParms' =>  array ('path' => 'plugin',),  'class' => 'left',  'thclass' => 'left',),
			'v_status'                => array (  'title' => LAN_STATUS_V,  'type' => 'boolean', 'tab' => 0, 'data' => 'int',  'width' => 'auto',  'help' => LAN_V_HELP_STATUS,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_asking_price'         => array (  'title' => LAN_ASKING_PRICE,  'type' => 'number', 'tab' => 0, 'data' => 'int',  'width' => '35%',  'help' => LAN_V_HELP_ASKINGPRICE,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_spawn_price'         => array (  'title' => LAN_SPAWN_PRICE,  'type' => 'number', 'tab' => 0, 'data' => 'int',  'width' => '35%',  'help' => LAN_V_HELP_SPAWNPRICE,  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'options'                 => array (  'title' => LAN_OPTIONS,  'type' => null,  'data' => null,  'width' => '10%',  'thclass' => 'center last',  'class' => 'center last',  'forced' => 'value',  'readParms' =>  array (),  'writeParms' =>  array (),),
		);	
		
		protected $fieldpref = array('v_name');
		
	
		public function init()
		{
			// This code may be removed once plugin development is complete. 
			if(!e107::isInstalled('dealership'))
			{
				e107::getMessage()->addWarning("This plugin is not yet installed. Saving and loading of preference or table data will fail.");
			}
			
			e107::getMessage()->addWarning("Make sure to check the tabs to fill in all the fields for the vehicle.");
			
			// For custom button I believe
			$this->postFilterMarkup = $this->AddButton();
			
			// Set drop-down values (if any).
			// dealership
			$sql_ds = e107::getDb()->retrieve("dealerships_exe", "*", true, true);
			foreach($sql_ds as $dss)
			{
				$this->ds_id[$dss['ds_id']] = $dss['ds_name'];
			}
			$this->fields['ds_id']['writeParms']['optArray'] = $this->ds_id;
			$this->fields['ds_id']['writeParms']['multiple'] = 1;
			
			// vehicle types
			$sql_vt = e107::getDb();
			$this->vt_id[0] = LAN_BODYTYPE_SELECTION;
			if($sql_vt->select("vehicle_type_exe", "*"))
			{
				while ($row = $sql_vt->fetch())
				{
					// Might Add vt_icon next to vt_name, or just remove vt_name for vt_icon
					$this->vt_id[$row['vt_id']] = $row['vt_name'];
				}
			} 
        	$this->fields['vt_id']['writeParms'] = $this->vt_id;
			
			// vehicle brand
			$sql_vb = e107::getDb();
			$this->vb_id[0] = LAN_BRAND_SELECTION;
			if($sql_vb->select("vehicle_brands_exe", "*"))
			{
				while ($row = $sql_vb->fetch())
				{
					// Might Add vt_icon next to vt_name, or just remove vt_name for vt_icon
					$this->vb_id[$row['vb_id']] = $row['vb_name'];
				}
			} 
        	$this->fields['vb_id']['writeParms'] = $this->vb_id;
	
		}
		
		// ------- Custom Add Button -------
		public function AddButton()
		{
			// This put's the button on top, but under the search area
			$text  = "</fieldset></form><div class='e-container'>
						<table id='.$this->id.' style='".ADMIN_WIDTH."' class='table adminlist table-striped'>";
			/*$text .=  
						'<a href="admin_config.php?mode=other4&action=create"  
						class="btn batch e-hide-if-js btn-primary"><span>Add Vehicle</span></a>';
			*/
			$text .=  
						'<a href="admin_config.php?mode=vehicles&action=create"  
						class="btn batch e-hide-if-js create btn-success" style="float: right;"><span>'.LAN_CREATE_VEHICLES.'</span></a>';
			$text .= "</td></tr></table></div><form><fieldset>";
			return $text;
		}
		// ---------------------------------

		// ------- Customize Create --------		
		public function beforeCreate($new_data, $old_data)
		{
			// Make sure the FiveM name isn't already there.
			$fivem_name = $new_data['v_fmname'];
			
			$sql = e107::getDb();
			
			$check_fivem_name = $sql->count('vehicles_exe', 'v_fmname', 'v_fmname = '.$fivem_name.'');

			if(empty($new_data['ds_id']))
			{
				e107::getMessage()->addWarning(LAN_DEALERSHIP_MISSING_ERROR);
			}
			if(empty($new_data['vt_id']) || $new_data['vt_id'] == 0)
			{
				e107::getMessage()->addWarning('Please select a body type.');
			}
			if(empty($new_data['vb_id']) || $new_data['vb_id'] == 0)
			{
				e107::getMessage()->addWarning('Please select a brand.');
			}
			
/*			if($check_fivem_name > 0)
			{
				//print_a(LAN_FIVEM_NAME_ERROR);
				$errMsg = LAN_FIVEM_NAME_ERROR;
				return $errMsg;
			}
			else
			{
				return $new_data;
			}*/
			//return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			// Make sure the FiveM name isn't already there.
			$fivem_name = $new_data['v_fmname'];
			// Make sure dealership has an id selected.
			$dealer_ships = $new_data['ds_id'];
			
			$sql = e107::getDb();
			
			$check_fivem_name = $sql->count('vehicles_exe', 'v_fmname', 'v_fmname = '.$fivem_name.'');
			//$check_dealer_ships = $sql->count('vehicles_exe', 'ds_id', 'ds_id = '.$dealer_ships.'');
			
			/*if($dealer_ships == null)
			{
				// Error Message
				$errMsg = LAN_DEALERSHIP_MISSING_ERROR;
				return $errMsg;
			}*/
			if($check_fivem_name > 0)
			{
				$errMsg = LAN_FIVEM_NAME_ERROR;
				return $errMsg;
			}
			else
			{
				return $new_data;
			}
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		// left-panel help menu area. (replaces e_help.php used in old plugins)
		public function renderHelp()
		{
			$caption = LAN_HELP;
			$text = 'Some help text';

			return array('caption'=>$caption,'text'=> $text);

		}
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
		
	
		
		
	*/
}
				


class vehicles_exe_form_ui extends e_admin_form_ui
{

	
	// Custom Method/Function 
	
	
	/*function vt_id($curVal,$mode)
	{

		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $this->text('vt_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
				return array('customfilter_1' => 'Custom Filter 1', 'customfilter_2' => 'Custom Filter 2');
			break;
			
			case 'batch':
				return array('custombatch_1' => 'Custom Batch 1', 'custombatch_2' => 'Custom Batch 2');
			break;
		}
		
		return null;
	}*/

	
	// Custom Method/Function 
	/*function vb_id($curVal,$mode)
	{

		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $this->text('vb_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
				return array('customfilter_1' => 'Custom Filter 1', 'customfilter_2' => 'Custom Filter 2');
			break;
			
			case 'batch':
				return array('custombatch_1' => 'Custom Batch 1', 'custombatch_2' => 'Custom Batch 2');
			break;
		}
		
		return null;
	}*/

	
	// Custom Method/Function 
	/*function ds_id($curVal,$mode)
	{

		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $this->text('ds_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
				return array('customfilter_1' => 'Custom Filter 1', 'customfilter_2' => 'Custom Filter 2');
			break;
			
			case 'batch':
				return array('custombatch_1' => 'Custom Batch 1', 'custombatch_2' => 'Custom Batch 2');
			break;
		}
		
		return null;
	}*/

}		
		
		
new dealership_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

