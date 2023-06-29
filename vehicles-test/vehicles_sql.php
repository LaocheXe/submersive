<?php exit;?>

CREATE TABLE IF NOT EXISTS `vehicles_exe` (
  `v_id` int(10) NOT NULL AUTO_INCREMENT,
  `vt_id` text,
  `vb_id` text,
  `ds_id` text,
  `media_cat_id` text,
  `v_name` varchar(250) NOT NULL DEFAULT '',
  `v_sef` varchar(200) NOT NULL,
  `v_fmname` varchar(250) NOT NULL DEFAULT '',
  `v_topspeed` int(10) NOT NULL DEFAULT '0',
  `v_gasm` varchar(250) NOT NULL,
  `v_handlingrate` int(10) UNSIGNED NOT NULL '1',
  `v_stock` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `v_description` text NOT NULL,
  `v_keywords` text NOT NULL,
  `v_thumb` text NOT NULL,
  `v_image` text NOT NULL,
  `v_status` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `v_stock_ammount` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;