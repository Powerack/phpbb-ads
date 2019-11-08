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
	'ADBLOCKER_TITLE'	=> 'Blokování reklam detekováno.',
	'ADBLOCKER_MESSAGE'	=> 'Tyto stránky jsou živé pouze z příjmů z reklam zobrazených našimi návštěvníky. Prosím podpořte nás tím, že na těchto stránkách vypnete blokování reklam. Děkujeme.',

	'ADVERTISEMENT'		=> 'Reklama',
	'HIDE_AD'			=> 'Skrýt reklamu',

	'VISUAL_DEMO'			=> 'Demonstrace zobrazení reklamy',
	'DISABLE_VISUAL_DEMO'	=> 'Klikněte pro zavření demonstrace reklamy.',
	'DISABLE_VISUAL_DEMO_ERROR'	=> 'Nastal problém při zpracování vaší žádosti. Prosím zkuste vypnout demonstraci znovu.',

	// Template locations
	'AD_ABOVE_HEADER'				=> 'Nad hlavičkou',
	'AD_ABOVE_HEADER_DESC'			=> 'Zobrazí se na všech stránkách před hlavičkou fóra.',
	'AD_BELOW_HEADER'				=> 'Pod hlavičkou',
	'AD_BELOW_HEADER_DESC'			=> 'Zobrazí se na všech stránkách za hlavičkou fóra (ale před navigačnním menu).',
	'AD_BEFORE_POSTS'				=> 'Před příspěvky',
	'AD_BEFORE_POSTS_DESC'			=> 'Zobrazí se na stránce tématu před prvním příspěvkem.',
	'AD_AFTER_POSTS'				=> 'Po příspěvcích',
	'AD_AFTER_POSTS_DESC'			=> 'Zobrazí se na stránce tématu za posledním příspěvkem.',
	'AD_BELOW_FOOTER'				=> 'Pod patičkou',
	'AD_BELOW_FOOTER_DESC'			=> 'Zobrazí se na všech stránkách za patičkou.',
	'AD_ABOVE_FOOTER'				=> 'Nad patičkou',
	'AD_ABOVE_FOOTER_DESC'			=> 'Zobrazí se na všech stránkách před patičkou.',
	'AD_AFTER_FIRST_POST'			=> 'Za prvním příspěvkem',
	'AD_AFTER_FIRST_POST_DESC'		=> 'Zobrazí se na stránce tématu za prvním příspěvkem.',
	'AD_AFTER_NOT_FIRST_POST'		=> 'Za každým příspěvkem krom prvního',
	'AD_AFTER_NOT_FIRST_POST_DESC'	=> 'Zobrazí se na stránce tématu za každým příspěvkem, kromě prvního.',
	'AD_BEFORE_PROFILE'				=> 'Před uživatelským profilem',
	'AD_BEFORE_PROFILE_DESC'		=> 'Zobrazí se před obsahem uživatelského profilu.',
	'AD_AFTER_PROFILE'				=> 'Za uživatelským profilem',
	'AD_AFTER_PROFILE_DESC'			=> 'Zobrazí se za obsahem uživatelského porfilu.',
	'AD_AFTER_HEADER_NAVBAR'		=> 'Za navigací hlavičky',
	'AD_AFTER_HEADER_NAVBAR_DESC'	=> 'Zobrazí se na všech stránkách za navigačním menu pod hlavičkou.',
	'AD_AFTER_FOOTER_NAVBAR'		=> 'Za navigací patičky',
	'AD_AFTER_FOOTER_NAVBAR_DESC'	=> 'Zobrazí se na všech stránkách za navigačním menu pod patičkou.',
	'AD_POP_UP'						=> 'Vyskakovací',
	'AD_POP_UP_DESC'				=> 'Zobrazí se jednou za den, když uživatel zobrazí poprvé fórum. Uživatel musí zavřít box s reklamou, aby mohl pokračovat k obsahu. Prosím uvědomte si, že tento druh reklamy může mnoho návštěvníků odradit!',
	'AD_SLIDE_UP'					=> 'Vysouvací',
	'AD_SLIDE_UP_DESC'				=> 'Zobrazí se na všech stránkách, pokud uživatel doroluje až dolů. Vysune se ze spodního okraje.',
	'AD_SCRIPTS'					=> 'Skripty',
	'AD_SCRIPTS_DESC'				=> 'Toto umístění je vhodné pro specializované kódy Javaskriptu, jako jsou reklamy AdSense, různé sledovací skripty a podobně. Zde zadaný skript bude vložen do tagu HEAD stránky a není určen pro vkládání reklamy, ale pouze pro pomocné skripty.',
));
