<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

// e107::lan('vehicles',true);


class vehicles_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'vehicles_test_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'vehicles_test_exe_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(

		'main/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'main/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),

		// 'main/div0'      => array('divider'=> true),
		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P'),
		
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Ven';
}




				
class vehicles_test_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Ven';
		protected $pluginName		= 'vehicles';
	//	protected $eventName		= 'vehicles-vehicles_test_exe'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'vehicles_test_exe';
		protected $pid				= 'v_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'v_id DESC';
	
		protected $fields 		= array (
			'checkboxes'              => array (  'title' => '',  'type' => null,  'data' => null,  'width' => '5%',  'thclass' => 'center',  'forced' => 'value',  'class' => 'center',  'toggle' => 'e-multiselect',  'readParms' =>  array (),  'writeParms' =>  array (),),
			'v_id'                    => array (  'title' => LAN_ID,  'data' => 'int',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'vt_id'                   => array (  'title' => LAN_ID,  'type' => 'method',  'data' => 'str',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',  'filter' => false,  'batch' => false,),
			'vb_id'                   => array (  'title' => LAN_ID,  'type' => 'method',  'data' => 'str',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',  'filter' => false,  'batch' => false,),
			'ds_id'                   => array (  'title' => LAN_ID,  'type' => 'method',  'data' => 'str',  'width' => '5%',  'validate' => 'value',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',  'filter' => false,  'batch' => false,),
			'media_cat_id'            => array (  'title' => LAN_ID,  'type' => 'textarea',  'data' => 'str',  'width' => '5%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_name'                  => array (  'title' => LAN_TITLE,  'type' => 'text',  'data' => 'safestr',  'width' => 'auto',  'inline' => 'value',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_sef'                   => array (  'title' => 'Sef',  'type' => 'text',  'data' => 'safestr',  'width' => 'auto',  'validate' => 'value',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_fmname'                => array (  'title' => 'Fmname',  'type' => 'text',  'data' => 'safestr',  'width' => 'auto',  'filter' => 'value',  'validate' => 'value',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_topspeed'              => array (  'title' => 'Topspeed',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_gasm'                  => array (  'title' => 'Gasm',  'type' => 'text',  'data' => 'safestr',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_handlingrate'          => array (  'title' => 'Handlingrate',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_stock'                 => array (  'title' => 'Stock',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_description'           => array (  'title' => LAN_DESCRIPTION,  'type' => 'textarea',  'data' => 'str',  'width' => '40%',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_keywords'              => array (  'title' => 'Keywords',  'type' => 'textarea',  'data' => 'str',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_thumb'                 => array (  'title' => LAN_IMAGE,  'type' => 'image',  'data' => 'str',  'width' => 'auto',  'help' => '',  'readParms' => 'thumb=80x80',  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_image'                 => array (  'title' => LAN_IMAGE,  'type' => 'image',  'data' => 'str',  'width' => 'auto',  'help' => '',  'readParms' => 'thumb=80x80',  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_status'                => array (  'title' => 'Status',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'v_stock_ammount'         => array (  'title' => 'Ammount',  'type' => 'boolean',  'data' => 'int',  'width' => 'auto',  'help' => '',  'readParms' =>  array (),  'writeParms' =>  array (),  'class' => 'left',  'thclass' => 'left',),
			'options'                 => array (  'title' => LAN_OPTIONS,  'type' => null,  'data' => null,  'width' => '10%',  'thclass' => 'center last',  'class' => 'center last',  'forced' => 'value',  'readParms' =>  array (),  'writeParms' =>  array (),),
		);		
		
		protected $fieldpref = array('v_name');
		

	//	protected $preftabs        = array('General', 'Other' );
		protected $prefs = array(
		); 

	
		public function init()
		{
			// This code may be removed once plugin development is complete. 
			if(!e107::isInstalled('vehicles'))
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
		

	
	 // Handle batch options as defined in vehicles_test_exe_form_ui::vt_id;  'handle' + action + field + 'Batch'
	 // @important $fields['vt_id']['batch'] must be true for this method to be detected. 
	 // @param $selected
	 // @param $type
	function handleListVtIdBatch($selected, $type)
	{

		$ids = implode(',', $selected);

		switch($type)
		{
			case 'custombatch_1':
				// do something
				e107::getMessage()->addSuccess('Executed custombatch_1');
				break;

			case 'custombatch_2':
				// do something
				e107::getMessage()->addSuccess('Executed custombatch_2');
				break;

		}


	}

	
	 // Handle batch options as defined in vehicles_test_exe_form_ui::vb_id;  'handle' + action + field + 'Batch'
	 // @important $fields['vb_id']['batch'] must be true for this method to be detected. 
	 // @param $selected
	 // @param $type
	function handleListVbIdBatch($selected, $type)
	{

		$ids = implode(',', $selected);

		switch($type)
		{
			case 'custombatch_1':
				// do something
				e107::getMessage()->addSuccess('Executed custombatch_1');
				break;

			case 'custombatch_2':
				// do something
				e107::getMessage()->addSuccess('Executed custombatch_2');
				break;

		}


	}

	
	 // Handle batch options as defined in vehicles_test_exe_form_ui::ds_id;  'handle' + action + field + 'Batch'
	 // @important $fields['ds_id']['batch'] must be true for this method to be detected. 
	 // @param $selected
	 // @param $type
	function handleListDsIdBatch($selected, $type)
	{

		$ids = implode(',', $selected);

		switch($type)
		{
			case 'custombatch_1':
				// do something
				e107::getMessage()->addSuccess('Executed custombatch_1');
				break;

			case 'custombatch_2':
				// do something
				e107::getMessage()->addSuccess('Executed custombatch_2');
				break;

		}


	}

	
	 // Handle filter options as defined in vehicles_test_exe_form_ui::vt_id;  'handle' + action + field + 'Filter'
	 // @important $fields['vt_id']['filter'] must be true for this method to be detected. 
	 // @param $selected
	 // @param $type
	function handleListVtIdFilter($type)
	{

		$this->listOrder = 'vt_id ASC';
	
		switch($type)
		{
			case 'customfilter_1':
				// return ' vt_id != 'something' '; 
				e107::getMessage()->addSuccess('Executed customfilter_1');
				break;

			case 'customfilter_2':
				// return ' vt_id != 'something' '; 
				e107::getMessage()->addSuccess('Executed customfilter_2');
				break;

		}


	}

	
	 // Handle filter options as defined in vehicles_test_exe_form_ui::vb_id;  'handle' + action + field + 'Filter'
	 // @important $fields['vb_id']['filter'] must be true for this method to be detected. 
	 // @param $selected
	 // @param $type
	function handleListVbIdFilter($type)
	{

		$this->listOrder = 'vb_id ASC';
	
		switch($type)
		{
			case 'customfilter_1':
				// return ' vb_id != 'something' '; 
				e107::getMessage()->addSuccess('Executed customfilter_1');
				break;

			case 'customfilter_2':
				// return ' vb_id != 'something' '; 
				e107::getMessage()->addSuccess('Executed customfilter_2');
				break;

		}


	}

	
	 // Handle filter options as defined in vehicles_test_exe_form_ui::ds_id;  'handle' + action + field + 'Filter'
	 // @important $fields['ds_id']['filter'] must be true for this method to be detected. 
	 // @param $selected
	 // @param $type
	function handleListDsIdFilter($type)
	{

		$this->listOrder = 'ds_id ASC';
	
		switch($type)
		{
			case 'customfilter_1':
				// return ' ds_id != 'something' '; 
				e107::getMessage()->addSuccess('Executed customfilter_1');
				break;

			case 'customfilter_2':
				// return ' ds_id != 'something' '; 
				e107::getMessage()->addSuccess('Executed customfilter_2');
				break;

		}


	}
	
		
		
	*/
			
}
				


class vehicles_test_exe_form_ui extends e_admin_form_ui
{

	
	// Custom Method/Function 
	function vt_id($curVal,$mode)
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
	}

	
	// Custom Method/Function 
	function vb_id($curVal,$mode)
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
	}

	
	// Custom Method/Function 
	function ds_id($curVal,$mode)
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
	}

}		
		
		
new vehicles_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

