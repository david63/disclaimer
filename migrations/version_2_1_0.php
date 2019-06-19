<?php
/**
*
* @package Disclaimer Extension
* @copyright (c) 2014 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\disclaimer\migrations;

class version_2_1_0 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\david63\disclaimer\migrations\version_1_0_0');
	}

	public function update_data()
	{
		return array(
			array('config.remove', array('disclaimer_version')),
			array('config.remove', array('show_disclaimer')),
		);
	}
}
