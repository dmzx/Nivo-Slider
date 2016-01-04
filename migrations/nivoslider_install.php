<?php
/**
*
* @package phpBB Extension - Nivo Slider
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\nivoslider\migrations;

class nivoslider_install extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['slider_version']) && version_compare($this->config['slider_version'], '1.0.0', '>=');
	}
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v311');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('slider_version', '1.0.0')),
			array('config.add', array('slider_sl_sw', '')),
			array('config.add', array('slider_sl_mfx', 'random')),
			array('config.add', array('slider_sl_slc', '15')),
			array('config.add', array('slider_sl_bxc', '8')),
			array('config.add', array('slider_sl_bxr', '4')),
			array('config.add', array('slider_sl_aspd', '500')),
			array('config.add', array('slider_sl_ptm', '3000')),
			array('config.add', array('slider_sl_dnv_sw', '1')),
			array('config.add', array('slider_sl_cnv_sw', '1')),
			array('config.add', array('slider_sl_poh_sw', '1')),
			array('config.add', array('slider_sl1_img', '1.png')),
			array('config.add', array('slider_sl1_url', '')),
			array('config.add', array('slider_sl1_cap', 'Caption text example')),
			array('config.add', array('slider_sl2_img', '2.png')),
			array('config.add', array('slider_sl2_url', '')),
			array('config.add', array('slider_sl2_cap', '')),
			array('config.add', array('slider_sl3_img', '')),
			array('config.add', array('slider_sl3_url', '')),
			array('config.add', array('slider_sl3_cap', '')),
			array('config.add', array('slider_sl4_img', '')),
			array('config.add', array('slider_sl4_url', '')),
			array('config.add', array('slider_sl4_cap', '')),
			array('config.add', array('slider_sl5_img', '')),
			array('config.add', array('slider_sl5_url', '')),
			array('config.add', array('slider_sl5_cap', '')),
			array('config.add', array('slider_sl6_img', '')),
			array('config.add', array('slider_sl6_url', '')),
			array('config.add', array('slider_sl6_cap', '')),
			array('config.add', array('slider_sl7_img', '')),
			array('config.add', array('slider_sl7_url', '')),
			array('config.add', array('slider_sl7_cap', '')),
			array('config.add', array('slider_sl8_img', '')),
			array('config.add', array('slider_sl8_url', '')),
			array('config.add', array('slider_sl8_cap', '')),
		);
	}
}
