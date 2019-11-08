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
	'AD_NAME'		=> 'Jm�no',
	'AD_END_DATE'	=> 'Datum ukon�en�',
	'AD_VIEWS'		=> 'Zobrazen�',
	'AD_CLICKS'		=> 'Prokliknut�',
	'AD_STATUS'		=> 'Stav',
	'EXPIRED'		=> 'Expirovan�',
	'ACTIVE_ADS'	=> 'Aktivn� reklamy',
	'EXPIRED_ADS'	=> 'Expirovan� reklamy',
	'NO_ADS'		=> '<strong>Na tomto webu se nezobrazuj� ��dn� reklamy.</strong>',
));
