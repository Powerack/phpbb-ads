<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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

$lang = array_merge($lang, array(
	'AD_NAME'		=> 'Jméno',
	'AD_END_DATE'	=> 'Datum ukonèení',
	'AD_VIEWS'		=> 'Zobrazení',
	'AD_CLICKS'		=> 'Prokliknutí',
	'AD_STATUS'		=> 'Stav',
	'EXPIRED'		=> 'Expirované',
	'ACTIVE_ADS'	=> 'Aktivní reklamy',
	'EXPIRED_ADS'	=> 'Expirované reklamy',
	'NO_ADS'		=> '<strong>Na tomto webu se nezobrazují žádné reklamy.</strong>',
));
