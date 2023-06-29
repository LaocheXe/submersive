<?php exit;?>

CREATE TABLE IF NOT EXISTS `dealerships_exe` (
  `ds_id` int(10) NOT NULL AUTO_INCREMENT,
  `ds_name` varchar(250) NOT NULL DEFAULT '',
  `ds_logo` varchar(255) NOT NULL,
  `ds_zipcodes` int(10) NOT NULL,
  PRIMARY KEY (`ds_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `vehicle_brands_exe` (
  `vb_id` int(10) NOT NULL AUTO_INCREMENT,
  `vb_name` varchar(250) NOT NULL DEFAULT '',
  `vb_logo` varchar(255) NOT NULL,
  PRIMARY KEY (`vb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `vehicle_type_exe` (
  `vt_id` int(10) NOT NULL AUTO_INCREMENT,
  `vt_name` varchar(250) NOT NULL DEFAULT '',
  `vt_icon` varchar(255) NOT NULL,
  PRIMARY KEY (`vt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `vehicle_holds_exe` (
  `vh_id` int(10) NOT NULL AUTO_INCREMENT,
  `vh_rname` varchar(250) NOT NULL DEFAULT '',
  `vh_date` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `v_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`vh_id`),
  KEY `v_id` (`v_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `vehicle_rate_exe` (
  `vr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vr_table` varchar(100) NOT NULL DEFAULT '',
  `vr_itemid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `vr_rating` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `vr_votes` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `vr_voters` text NOT NULL,
  `vr_rate_up` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `vr_rate_down` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`vr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `vehicles_exe` (
  `v_id` int(10) NOT NULL AUTO_INCREMENT,
  `vt_id` text,
  `vb_id` text,
  `ds_id` text,
  `v_name` varchar(250) NOT NULL DEFAULT '',
  `v_sef` varchar(200) NOT NULL,
  `v_fmname` varchar(250) NOT NULL DEFAULT '',
  `v_topspeed` int(10) NOT NULL DEFAULT '0',
  `v_gasm` varchar(250) NOT NULL,
  `v_handlingrate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `v_description` text NOT NULL,
  `v_keywords` text NOT NULL,
  `v_thumb` text NOT NULL,
  `v_media` json NOT NULL,
  `v_status` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `v_stock_ammount` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `v_asking_price` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `v_spawn_price` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;