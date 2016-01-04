<?php
/**
*
* @package phpBB Extension - Nivo Slider
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'SLIDER_ADD_SLIDE'						=> 'Add Slide',
	'SLIDER_ANIMATION_PREV_NEXT'			=> 'Prev and Next Buttons',
	'SLIDER_ANIMATION_PREV_NEXT_EXPLAIN'	=> 'Set on to display Prev and Next direction navigation buttons.',
	'SLIDER_ANIMATION_SPEED'				=> 'Animation Speed',
	'SLIDER_ANIMATION_SPEED_EXPLAIN'		=> 'The time in milliseconds taken to perform a transition.<br>Default number is 500.',
	'SLIDER_APPEARANCE'						=> 'Slider Appearance',
	'SLIDER_APPEARANCE_EXPLAIN'				=> 'Choose where you want your slider to be visible.',
	'SLIDER_APPEARANCE_NO_SLIDER'			=> 'no slider',
	'SLIDER_APPEARANCE_HOME_PAGE'			=> 'home page only',
	'SLIDER_APPEARANCE_HOME_TOPIC'			=> 'home and topics pages',
	'SLIDER_APPEARANCE_HOME_TOPIC_POST'		=> 'home, topics and posts pages',
	'SLIDER_BOX_COLS'						=> 'Box Cols',
	'SLIDER_BOX_COLS_EXPLAIN'				=> 'Number of columns when using a box effect.<br>Default number is 8.',
	'SLIDER_BOX_ROWS'						=> 'Box Rows',
	'SLIDER_BOX_ROWS_EXPLAIN'				=> 'Number of columns when using a box effect.<br>Default number is 4.',
	'SLIDER_CONTROL_NAVIGATION'				=> 'Control Navigation',
	'SLIDER_CONTROL_NAVIGATION_EXPLAIN'		=> 'Set on to display control navigation.',
	'SLIDER_PLACEHOLDER'					=> 'Ex: myimage.png',
	'SLIDER_PLACEHOLDER_CAPTION'			=> 'Ex: Example caption',
	'SLIDER_PLACEHOLDER_CAPTION_TITLE'		=> 'Used to display the captions on images. Leave it empty if you don\'t want any caption on current slide.',
	'SLIDER_PLACEHOLDER_URL'				=> 'Ex: http://www.example.com/',
	'SLIDER_PLACEHOLDER_URL_TITLE'			=> 'Enter the link for the image or leave empty if you don\'t want your image to be wrapped in a link.',
	'SLIDER_PAUSE_ON_HOVER'					=> 'Pause on Hover',
	'SLIDER_PAUSE_ON_HOVER_EXPLAIN'			=> 'Set on to display control navigation.',
	'SLIDER_PAUSE_TIME'						=> 'Pause Time',
	'SLIDER_PAUSE_TIME_EXPLAIN'				=> 'The pause time between transitions in milliseconds.<br>Default number is 3000.',
	'SLIDER_REMOVE_SLIDE'					=> 'Remove Slide',
	'SLIDER_SETTINGS'						=> 'Nivo Slider Settings',
	'SLIDER_SETTINGS_SAVED'					=> 'The settings have been saved successfully.',
	'SLIDER_SLICES'							=> 'Slices',
	'SLIDER_SLICES_EXPLAIN'					=> 'Number of vertical slices when using a slice effect.<br>Default number is 15.',
	'SLIDER_SLIDE1'							=> 'Slide #1',
	'SLIDER_SLIDE2'							=> 'Slide #2',
	'SLIDER_SLIDE3'							=> 'Slide #3',
	'SLIDER_SLIDE4'							=> 'Slide #4',
	'SLIDER_SLIDE5'							=> 'Slide #5',
	'SLIDER_SLIDE6'							=> 'Slide #6',
	'SLIDER_SLIDE7'							=> 'Slide #7',
	'SLIDER_SLIDE8'							=> 'Slide #8',
	'SLIDER_TITLE'							=> 'Nivo Slider',
	'SLIDER_TITLE_IMAGE'					=> 'Enter the image name located in ext/dmzx/nivoslider/images',
	'SLIDER_TRANSITION'						=> 'Transition Effects',
	'SLIDER_TRANSITION_EXPLAIN'				=> 'Transition effects applied generally.<br>Choose random or any one of the 15 stunning transition effects.',
	'SLIDER_TRANSITION_RANDOM'				=> 'random',
	'SLIDER_TRANSITION_FADE'				=> 'fade',
	'SLIDER_TRANSITION_SLICEDOWN'			=> 'sliceDown',
	'SLIDER_TRANSITION_SLICEDOWNLEFT'		=> 'sliceDownLeft',
	'SLIDER_TRANSITION_SLICEUP'				=> 'sliceUp',
	'SLIDER_TRANSITION_SLICEUPLEFT'			=> 'sliceUpLeft',
	'SLIDER_TRANSITION_SLICEUPDOWN'			=> 'sliceUpDown',
	'SLIDER_TRANSITION_SLICEUPDOWNLEFT'		=> 'sliceUpDownLeft',
	'SLIDER_TRANSITION_FOLD'				=> 'fold',
	'SLIDER_TRANSITION_SILDEINRIGHT'		=> 'slideInRight',
	'SLIDER_TRANSITION_SILDEINLEFT'			=> 'slideInLeft',
	'SLIDER_TRANSITION_BOXRANDOM'			=> 'boxRandom',
	'SLIDER_TRANSITION_BOXRAIN'				=> 'boxRain',
	'SLIDER_TRANSITION_BOXRAINREVERSE'		=> 'boxRainReverse',
	'SLIDER_TRANSITION_BOXRAINGROW'			=> 'boxRainGrow',
	'SLIDER_TRANSITION_BOXRAINGROWREVERSE'	=> 'boxRainGrowReverse',
	'SLIDER_INVALID_LOGIN'					=> 'Sorry..<br>You must be logged in as Administrator to access the Options Panel.',
	'SLIDER_INVALID_FORM'					=> 'Invalid form data.',
));
