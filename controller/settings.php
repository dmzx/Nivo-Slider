<?php
/**
*
* @package phpBB Extension - Nivo Slider
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\nivoslider\controller;

class settings
{

	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/**
	* Constructor
	*
	* @param \phpbb\auth\auth					$auth
	* @param \phpbb\config\config				$config
	* @param \phpbb\request\request				$request
	* @param \phpbb\user						$user
	* @param \phpbb\controller\helper			$helper
	*/
	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\request\request $request, \phpbb\user $user, \phpbb\controller\helper $helper)
	{
		$this->auth = $auth;
		$this->config = $config;
		$this->request = $request;
		$this->user = $user;
		$this->helper = $helper;
	}

	public function manage()
	{
		if (!$this->auth->acl_get('a_'))
		{
			return $this->finish('SLIDER_INVALID_LOGIN', 403);
		}

		if (!check_form_key('slider_settings'))
		{
			return $this->finish('SLIDER_INVALID_FORM', 400);
		}

		if($this->request->is_set_post('submit_sl_op'))
		{
			$this->config->set('slider_sl_sw',	$this->request->variable('slider_sl_sw', '0'));
			$this->config->set('slider_sl_mfx',	$this->request->variable('slider_sl_mfx', '0'));
			$this->config->set('slider_sl_slc',	max(1, $this->request->variable('slider_sl_slc', 0)));
			$this->config->set('slider_sl_bxc',	max(1, $this->request->variable('slider_sl_bxc', 0)));
			$this->config->set('slider_sl_bxr',	max(1, $this->request->variable('slider_sl_bxr', 0)));
			$this->config->set('slider_sl_aspd',	max(1, $this->request->variable('slider_sl_aspd', 0)));
			$this->config->set('slider_sl_ptm',	max(1, $this->request->variable('slider_sl_ptm', 0)));
			$this->config->set('slider_sl_dnv_sw',	$this->request->variable('slider_sl_dnv_sw', '0'));
			$this->config->set('slider_sl_cnv_sw',	$this->request->variable('slider_sl_cnv_sw', '0'));
			$this->config->set('slider_sl_poh_sw',	$this->request->variable('slider_sl_poh_sw', '0'));
			$this->config->set('slider_sl1_img',	$this->request->variable('slider_sl1_img', '',true));
			$this->config->set('slider_sl1_url',	$this->request->variable('slider_sl1_url', '',true));
			$this->config->set('slider_sl1_cap',	$this->request->variable('slider_sl1_cap', '',true));
			$this->config->set('slider_sl2_img',	$this->request->variable('slider_sl2_img', '',true));
			$this->config->set('slider_sl2_url',	$this->request->variable('slider_sl2_url', '',true));
			$this->config->set('slider_sl2_cap',	$this->request->variable('slider_sl2_cap', '',true));
			$this->config->set('slider_sl3_img',	$this->request->variable('slider_sl3_img', '',true));
			$this->config->set('slider_sl3_url',	$this->request->variable('slider_sl3_url', '',true));
			$this->config->set('slider_sl3_cap',	$this->request->variable('slider_sl3_cap', '',true));
			$this->config->set('slider_sl4_img',	$this->request->variable('slider_sl4_img', '',true));
			$this->config->set('slider_sl4_url',	$this->request->variable('slider_sl4_url', '',true));
			$this->config->set('slider_sl4_cap',	$this->request->variable('slider_sl4_cap', '',true));
			$this->config->set('slider_sl5_img',	$this->request->variable('slider_sl5_img', '',true));
			$this->config->set('slider_sl5_url',	$this->request->variable('slider_sl5_url', '',true));
			$this->config->set('slider_sl5_cap',	$this->request->variable('slider_sl5_cap', '',true));
			$this->config->set('slider_sl6_img',	$this->request->variable('slider_sl6_img', '',true));
			$this->config->set('slider_sl6_url',	$this->request->variable('slider_sl6_url', '',true));
			$this->config->set('slider_sl6_cap',	$this->request->variable('slider_sl6_cap', '',true));
			$this->config->set('slider_sl7_img',	$this->request->variable('slider_sl7_img', '',true));
			$this->config->set('slider_sl7_url',	$this->request->variable('slider_sl7_url', '',true));
			$this->config->set('slider_sl7_cap',	$this->request->variable('slider_sl7_cap', '',true));
			$this->config->set('slider_sl8_img',	$this->request->variable('slider_sl8_img', '',true));
			$this->config->set('slider_sl8_url',	$this->request->variable('slider_sl8_url', '',true));
			$this->config->set('slider_sl8_cap',	$this->request->variable('slider_sl8_cap', '',true));
		}

		return $this->finish('SLIDER_SETTINGS_SAVED', 200, 3);
	}

	public function finish($message, $status_code, $redirect_time = 5, $route = 'slider_controller')
	{
		$this->meta_refresh($redirect_time, $route);
		return $this->helper->error($this->user->lang($message), $status_code);
	}

	public function meta_refresh($redirect_time, $route)
	{
		meta_refresh($redirect_time, $this->helper->route($route));
	}
}
