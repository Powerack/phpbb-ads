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
	// Manage ads
	'AD_SETTINGS'				=> 'Nastavení reklamy',
	'ACTIVE_ADS'				=> 'Aktivní reklamy',
	'EXPIRED_ADS'				=> 'Expirované reklamy',
	'STATUS'					=> 'Stav',
	'AD_NAME'					=> 'Jméno',
	'AD_NAME_EXPLAIN'			=> 'Jméno reklamy je určeno pouze pro vás, abyste reklamu snáze identifikovali.',
	'AD_ENABLED'				=> 'Povoleno',
	'AD_ENABLED_EXPLAIN'		=> 'Pokud je zakázáno, tato reklama se nebude zobrazovat.',
	'AD_NOTE'					=> 'Poznámky',
	'AD_NOTE_EXPLAIN'			=> 'Zadejte jakékoliv poznámky k této reklamě. Tyto poznámky jsou vidět pouze v ACP a jsou volitelné.',
	'AD_CODE'					=> 'Kód',
	'AD_CODE_EXPLAIN'			=> 'Zadejte kód reklamy sem. Veškeré kódy musí být v HTML formátu, BBcodes nejsou podporovány.',
	'ANALYSE_AD_CODE'			=> 'Analyzuj kód reklamy',
	'EVERYTHING_OK'				=> 'Kód vypadá v pořádku.',
	'AD_BANNER'					=> 'Banner reklamy',
	'BANNER'					=> 'Nahrát banner',
	'BANNER_EXPLAIN'			=> 'Můžete nahrát obrázek ve formátu JPG, GIF nebo PNG. Obrázek bude uložen ve složce phpBB <samp>images</samp> a HTML IMG tag pro obrázek bude automaticky vložen do pole s kódem reklamy. ',
	'BANNER_UPLOAD'				=> 'Nahrát banner',
	'AD_PLACEMENT'				=> 'Umístění reklamy',
	'AD_LOCATIONS'				=> 'Umístění',
	'AD_LOCATIONS_EXPLAIN'		=> 'Vyberte, kde chcete aby se reklama zobrazovala. Umístěte myš nad umístění pro zobrazení krátkého popisu umístění reklamy. Pokud více reklam používá stejné umístění, jedna z nich bude náhodně vybrána a zobrazena na této pozici. Použijte CTRL+KLIK (nebo CMD+KLIK na Macu) pro výběr / zrušení výběru více, než jedné pozice.',
	'AD_LOCATIONS_VISUAL_DEMO'	=> 'Ukázat vizuální demo pozic reklam',
	'AD_PRIORITY'				=> 'Priorita',
	'AD_PRIORITY_EXPLAIN'		=> 'Nastavte číslo mezi 1 a 10. Reklamy s vyšším číslem mají vyšší prioritu, pokud máte více reklam, které se dělí o stejnou reklamní plochu.',
	'AD_CONTENT_ONLY'			=> 'Zobrazit pouze na stránkách s obsahem',
	'AD_CONTENT_ONLY_EXPLAIN'	=> 'Tato reklama se zobrazí pouze na stránkách s obsahem. Nebude zobrazena na stránkách přihlášení, registrace, UPC a tak dále. Některé reklamní platformy (např. Google AdSense) vyžadují toto nastavení.',
	'AD_OPTIONS'				=> 'Nastavení reklamy',
	'AD_OWNER'					=> 'Vlastník',
	'AD_OWNER_EXPLAIN'			=> 'Přiřazení vlastníka reklamy umožní tomuto uživateli oprávnění ke zobrazení statistik zobrazení a prokliků v jeho uživatelském panelu. Pokud nechcete přiřadit vlastníka, nechte toto pole prázdné.',
	'AD_VIEWS'					=> 'Zobrazení',
	'AD_VIEWS_LIMIT'			=> 'Limit zobrazení',
	'AD_VIEWS_LIMIT_EXPLAIN'	=> 'Nastavte maximální počet zobrazení této reklamy. Po překročení limitu se reklama přestane zobrazovat. Nastavte 0 pro neomezené zobrazování.',
	'AD_CLICKS'					=> 'Prokliky',
	'AD_CLICKS_LIMIT'			=> 'Limit prokliknutí',
	'AD_CLICKS_LIMIT_EXPLAIN'	=> 'Nastavte maximální počet prokliknutí reklamy. Po překročení tohoto počtu se reklama přestane zobrazovat. NAstavte 0 pro neomezené prokliky.',
	'AD_START_DATE'				=> 'Datum spuštění',
	'AD_START_DATE_EXPLAIN'		=> 'Nastavte datum spuštění reklamy, před kterým se reklama nebude zobrazovat. Nechte toto pole prázdné, pokud chcete, aby se reklama zobrazovala ihned po vložení. Prosím použijte formát data <samp>YYYY-MM-DD</samp>.',
	'AD_END_DATE'				=> 'Datum ukončení',
	'AD_END_DATE_EXPLAIN'		=> 'Nastavte datum expirace reklamy, po kterém se již nebude zobrazovat. Nechte toto pole prázdné, pokud chcete, aby se reklama zobrazovala stále. Prosím použijte formát data <samp>YYYY-MM-DD</samp>.',
	'AD_CENTERING'				=> 'Automaticky vycentrovat tuto reklamu',
	'AD_CENTERING_EXPLAIN'		=> 'Nastavte ano, pokud chcete, aby byla tato reklama automaticky vacentrována. Pokud to vede k nežádoucím výsledkům, použijte k vycentrování CSS přímo v kódu.',

	'AD_PREVIEW'				=> 'Ukázka této reklamy',
	'AD_ENABLE_TITLE'			=> array( // Plural rule doesn't apply here! Just translate the values.
		0 => 'Click to enable',
		1 => 'Click to disable',
	),
	'AD_EXPIRED_EXPLAIN'		=> 'Tato reklama expirovala a je proto vypnutá.',
	'ACP_ADS_EMPTY'				=> 'Žádné reklamy ke zobrazení. Přidejte nějakou pomocí tlačítka níže.',
	'ACP_ADS_ADD'				=> 'Přidat novou reklamu',
	'ACP_ADS_EDIT'				=> 'Editovat reklamu',

	'AD_NAME_REQUIRED'			=> 'Jméno je vyžadováno.',
	'AD_NAME_TOO_LONG'			=> 'Jméno je limitováno %d znaky.',
	'AD_CODE_ILLEGAL_CHARS'		=> 'Kód reklamy obsahuje následující nepodporované znaky: %s',
	'AD_END_DATE_INVALID'		=> 'Datum ukončení je chybné, nebo je již po expiraci.',
	'AD_PRIORITY_INVALID'		=> 'Priorita je nastavena chybně. Prosím použijte číslo mezi 1 a 10.',
	'AD_VIEWS_LIMIT_INVALID'	=> 'Limit zobrazení je chybný. Prosím používejte jen kladná čísla.',
	'AD_CLICKS_LIMIT_INVALID'	=> 'Limit prokliknutí je chybný. Prosím použijte jen kladná čísla.',
	'AD_OWNER_INVALID'			=> 'Majitel reklamy je chybný. Prosím vyberte uživatele pomocí odkazu na vyhledání uživatele.',
	'NO_FILE_SELECTED'			=> 'Soubor nebyl vybrán.',
	'CANNOT_CREATE_DIRECTORY'	=> 'Složka <samp>phpbb_ads</samp> nemohla být vytvořena. Prosím ujistěte se, že složka <samp>/images</samp> je zapisovatelná.',
	'FILE_MOVE_UNSUCCESSFUL'	=> 'Nelze přesunout soubor do složky <samp>images/phpbb_ads</samp>.',
	'ACP_AD_DOES_NOT_EXIST'		=> 'Reklama neexistuje.',
	'ACP_AD_ADD_SUCCESS'		=> 'Reklama byla přidána.',
	'ACP_AD_EDIT_SUCCESS'		=> 'Reklama byla editována.',
	'ACP_AD_DELETE_SUCCESS'		=> 'Reklama byla smazána.',
	'ACP_AD_DELETE_ERRORED'		=> 'Nastala chyba při mazání reklamy.',
	'ACP_AD_ENABLE_SUCCESS'		=> 'Reklama byla zapnuta.',
	'ACP_AD_ENABLE_ERRORED'		=> 'Nastala chyba při zapínání reklamy.',
	'ACP_AD_DISABLE_SUCCESS'	=> 'Reklama byla vypnuta.',
	'ACP_AD_DISABLE_ERRORED'	=> 'Nastala chyba při vypínání reklamy.',

	// Analyser tests
	'UNSECURE_CONNECTION'	=> '<strong>Smíšený obsah</strong><br />Vaše fórum běží na zabezpečeném HTTPS připojení, ale kód odkazuje na nezabezpečené připojení přes HTTP. To může způsobit, že prohlížeče budou generovat chybové hlášky o "Smíšeném obsahu", aby uživatelé věděli, že ztránka je napojena na nezabezpečené zdroje.',
	'SCRIPT_WITHOUT_ASYNC'	=> '<strong>Ne-asynchronní javaskript</strong><br />Tento kód načítá JavaSkript ne-asynchronním způsobem. To znamená, že zablokuje jakýkoliv jiný JavaSkript, než se načte tento. To může mít za následek pomalejší načítání stránek. Použití atributu <samp>async</samp> může urychlit načítání stránky.',
	'ALERT_USAGE'			=> '<strong>Použití funkce <samp>alert()</samp></strong><br />Váš kód používá funkci <samp>alert()</samp>, což není zrovna dobrá praktika a může odradit uživatele. Některé prohlížeče mohou zablokovat stránku a zobrazit varovnou zprávu pro uživatele.',
	'LOCATION_CHANGE'		=> '<strong>Přesměrování</strong><br />Váš kód obsahuje přesměrování na jiný web. Přesměrování může uživatele poslat na nedůvěryhodné, zavirované, nebo jinak nebezpečné stránky. Prosím zkontrolujte, zda kód pro přesměrování vede na správné místo.',

	// Template location categories
	'CAT_TOP_OF_PAGE'		=> 'Nahoře na stránce',
	'CAT_BOTTOM_OF_PAGE'	=> 'Dole na stránce',
	'CAT_IN_POSTS'			=> 'V příspěvcích',
	'CAT_OTHER'				=> 'Jiné',
	'CAT_INTERACTIVE'		=> 'Interaktivní',
	'CAT_SPECIAL'			=> 'Speciální',

	// Settings
	'ADBLOCKER_LEGEND'				=> 'Blokování reklam',
	'ADBLOCKER_MESSAGE'				=> 'Zpráva o blokování reklam',
	'ADBLOCKER_MESSAGE_EXPLAIN'		=> 'Zobrazte zdvořilou zprávu uživatelům blokujícím reklamy, ve které je požádáte o vypnutí blokování reklam na vašem fóru.',
	'CLICKS_VIEWS_LEGEND'			=> 'Statistiky a Sledování',
	'ENABLE_VIEWS'					=> 'Počet zobrazení',
	'ENABLE_VIEWS_EXPLAIN'			=> 'Tato volba zapne počítadlo zobrazení reklamy. Upozornění, tato volba přidá na server další zátěž, takže pokud ji nepotřebujete, vypněte ji.',
	'ENABLE_CLICKS'					=> 'Počet prokliknutí',
	'ENABLE_CLICKS_EXPLAIN'			=> 'Tato volba zapne počítadlo prokliknutí reklamy. Upozornění, tato volba přidá na server další zátěž, takže pokud ji nepotřebujete, vypněte ji.',
	'HIDE_GROUPS'					=> 'Skrýt reklamu pro skupiny',
	'HIDE_GROUPS_EXPLAIN'			=> 'Uživatelům zvolených skupin se nebude reklama zobrazovat. Použijte CTRL+KLIK (nebo CMD+KLIK na Macu) pro výběr více, než jedné skupiny.',

	'ACP_AD_SETTINGS_SAVED'	=> 'Uloženo nastavení správce reklam.',
));
