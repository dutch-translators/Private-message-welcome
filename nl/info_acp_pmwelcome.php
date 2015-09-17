<?php

/**
*
* @package PM Welcome [Dutch]
* @copyright BB3.MOBi (c) 2015 Anvar http://apwa.ru
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
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
	'ACP_PMWELCOME'					=> 'Welkomstbericht',
	'ACP_PMWELCOME_EXPLAIN'			=> 'Je kan hier een persoonlijkbericht samenstellen, die wordt verstuurd als er een nieuwe registratie is.',
	'ACP_PMWELCOME_SETTINGS'		=> 'Instellingen welkomstbericht.',
	'ACP_PMWELCOME_USER'			=> 'Afzender',
	'ACP_PMWELCOME_USER_EXPLAIN'	=> 'Gebruikers-ID, van de gebruiker namens wie het welkomstbericht wordt verstuurd.',
	'ACP_PMWELCOME_SUBJECT'			=> 'Onderwerp bericht',
	'ACP_PMWELCOME_TEXT'			=> 'Tekst van het welkomstbericht',
	'ACP_PMWELCOME_TEXT_EXPLAIN'	=> 'Je kan BBcodes en samilies gebruiken en de variabel {USERNAME}, die automatische wordt vervangen door de naam van de nieuwe geregistreerdegebruiker.',
));
