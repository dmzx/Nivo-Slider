<?php
/**
*
* @package phpBB Extension - Nivo Slider
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\nivoslider\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/**
	* Constructor
	*
	* @param \phpbb\config\config				$config
	* @param \phpbb\template\template			$template
	* @param \phpbb\controller\helper			$helper
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'add_template_vars',
		);
	}

	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\controller\helper $helper)
	{
		$this->config = $config;
		$this->template = $template;
		$this->helper = $helper;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/nivoslider',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_template_vars($event)
	{
		$this->template->assign_vars(array(
			'SLIDER_VERSION'			=> (bool) $this->config['slider_version'],
			'U_SLIDER_URL'				=> $this->helper->route('slider_controller'),
			'SLIDER_SETTINGS'			=> $this->helper->route('slider_settings'),
			'SLIDER_SL_SW'				=> (string) $this->config['slider_sl_sw'],
			'SLIDER_SL_MFX'				=> (string) $this->config['slider_sl_mfx'],
			'SLIDER_SL_SLC'				=> (int) $this->config['slider_sl_slc'],
			'SLIDER_SL_BXC'				=> (int) $this->config['slider_sl_bxc'],
			'SLIDER_SL_BXR'				=> (int) $this->config['slider_sl_bxr'],
			'SLIDER_SL_ASPD'			=> (int) $this->config['slider_sl_aspd'],
			'SLIDER_SL_PTM'				=> (int) $this->config['slider_sl_ptm'],
			'SLIDER_SL_DNV_SW'			=> (bool) $this->config['slider_sl_dnv_sw'],
			'SLIDER_SL_CNV_SW'			=> (bool) $this->config['slider_sl_cnv_sw'],
			'SLIDER_SL_POH_SW'			=> (bool) $this->config['slider_sl_poh_sw'],
			'SLIDER_SL1_IMG'			=> (string) $this->config['slider_sl1_img'],
			'SLIDER_SL1_URL'			=> (string) $this->config['slider_sl1_url'],
			'SLIDER_SL1_CAP'			=> (string) $this->config['slider_sl1_cap'],
			'SLIDER_SL2_IMG'			=> (string) $this->config['slider_sl2_img'],
			'SLIDER_SL2_URL'			=> (string) $this->config['slider_sl2_url'],
			'SLIDER_SL2_CAP'			=> (string) $this->config['slider_sl2_cap'],
			'SLIDER_SL3_IMG'			=> (string) $this->config['slider_sl3_img'],
			'SLIDER_SL3_URL'			=> (string) $this->config['slider_sl3_url'],
			'SLIDER_SL3_CAP'			=> (string) $this->config['slider_sl3_cap'],
			'SLIDER_SL4_IMG'			=> (string) $this->config['slider_sl4_img'],
			'SLIDER_SL4_URL'			=> (string) $this->config['slider_sl4_url'],
			'SLIDER_SL4_CAP'			=> (string) $this->config['slider_sl4_cap'],
			'SLIDER_SL5_IMG'			=> (string) $this->config['slider_sl5_img'],
			'SLIDER_SL5_URL'			=> (string) $this->config['slider_sl5_url'],
			'SLIDER_SL5_CAP'			=> (string) $this->config['slider_sl5_cap'],
			'SLIDER_SL6_IMG'			=> (string) $this->config['slider_sl6_img'],
			'SLIDER_SL6_URL'			=> (string) $this->config['slider_sl6_url'],
			'SLIDER_SL6_CAP'			=> (string) $this->config['slider_sl6_cap'],
			'SLIDER_SL7_IMG'			=> (string) $this->config['slider_sl7_img'],
			'SLIDER_SL7_URL'			=> (string) $this->config['slider_sl7_url'],
			'SLIDER_SL7_CAP'			=> (string) $this->config['slider_sl7_cap'],
			'SLIDER_SL8_IMG'			=> (string) $this->config['slider_sl8_img'],
			'SLIDER_SL8_URL'			=> (string) $this->config['slider_sl8_url'],
			'SLIDER_SL8_CAP'			=> (string) $this->config['slider_sl8_cap'],
		));
	}
}
