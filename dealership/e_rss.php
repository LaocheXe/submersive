<?php

if (!defined('e107_INIT')) { exit; }


// v2.x Standard

class dealership_rss // plugin-folder + '_rss'
{
	/**
	 * Admin RSS Configuration
	 */
	function config()
	{
		$config = array();

		$config[] = array(
			'name'			=> 'Feed Name',
			'url'			=> 'dealership',
			'topic_id'		=> '',
			'description'	=> 'this is the rss feed for the dealership plugin', // that's 'description' not 'text'
			'class'			=> e_UC_MEMBER,
			'limit'			=> '9'
		);

		return $config;
	}

	/**
	 * Compile RSS Data
	 * @param array $parms
	 * @param string $parms['url']
	 * @param int $parms['limit']
	 * @param int $parms['id']
	 * @return array
	 */
	function data($parms=array())
	{
		$sql = e107::getDb();

		$rss = array();
		$i=0;

		if($items = $sql->select('dealership', "*", "dealership_field = 1 LIMIT 0,".$parms['limit']))
		{

			while($row = $sql->fetch())
			{

				$rss[$i]['author']			= $row['dealership_user_id'];
				$rss[$i]['author_email']	= $row['dealership_user_email'];
				$rss[$i]['link']			= "dealership/dealership.php?";
				$rss[$i]['linkid']			= $row['dealership_id'];
				$rss[$i]['title']			= $row['dealership_title'];
				$rss[$i]['description']		= $row['dealership_message'];
				$rss[$i]['category_name']	= '';
				$rss[$i]['category_link']	= '';
				$rss[$i]['datestamp']		= $row['dealership_datestamp'];
				$rss[$i]['enc_url']			= "";
				$rss[$i]['enc_leng']		= "";
				$rss[$i]['enc_type']		= "";
				$i++;
			}

		}

		return $rss;
	}



}
