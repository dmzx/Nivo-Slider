<?php
/**
*
* @package phpBB Extension - Nivo Slider
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\nivoslider\controller;

class main
{
	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \dmzx\nivoslider\controller\settings */
	protected $settings;

	/**
	* Constructor
	*
	* @param \phpbb\auth\auth					$auth
	* @param \phpbb\controller\helper			$helper
	* @param string								$settings
	*/
	public function __construct(\phpbb\auth\auth $auth, \phpbb\controller\helper $helper, \dmzx\nivoslider\controller\settings $settings)
	{
		$this->auth 		= $auth;
		$this->helper 		= $helper;
		$this->settings 	= $settings;
	}

	public function base()
	{
		if (!$this->auth->acl_get('a_'))
		{
			return $this->settings->finish('SLIDER_INVALID_LOGIN', 400, 4, 'slider_home');
		}

		$this->slider_settings();
		return $this->helper->render('nivoslider.html', 'Options Panel');
	}

	protected function slider_settings()
	{
		add_form_key('slider_settings');
	}
}
