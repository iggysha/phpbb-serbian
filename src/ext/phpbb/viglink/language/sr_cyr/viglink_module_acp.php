<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink поставке',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink је сервис треће-стране који дискретно монетизује линкове послате од стране коринсика вашег форума без да утиче на корисничко искуство. Када корисници кликну на ваше одлазне линкове до производа или услуга и купе нешто, трговци плаћају VigLink, од чега се један део донира phpBB пројекту. Одабиром да омогућите VigLink и донације за phpBB пројекат, подржавате нашу open source организацију и осигуравате нашу финансијску сигурност.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Можете променити ове поставке било када у “<a href="%1$s">VigLink поставке</a>” panel.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Више нећете бити преусмеравани на ову страницу након што одредите шта желите испод, кликом на Прихвати дугме.',
	'ACP_VIGLINK_ENABLE'			=> 'Омогући VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Омогућава коришћење VigLink услуга.',
	'ACP_VIGLINK_EARNINGS'			=> 'Захтевајте вашу сопствену зараду (опционално)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Можете захтевати вашу сопствену зараду регистровањем за VigLink Convert налог.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink услуге су онемогућене од phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Захтевајте вашу зараду',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Можете захтевати зараду вашег форум’а од VigLink монетизованих линкова, уместо донирања зараде phpBB пројекту. За управљање поставкама вашег налога, региструјте “VigLink Convert” налог кликом на “Пребаци налог”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Пребаци налог',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink пребаци налог линк не може бити поново извађен.',
));
