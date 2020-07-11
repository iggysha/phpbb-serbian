<?php
/**
*
* acp_profile [Serbian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Властито поље профила је успешно додато.',
	'ALPHA_ONLY'			=> 'Само алфанумерички',
	'ALPHA_SPACERS'			=> 'Алфанумерички и размаци',
	'ALWAYS_TODAY'			=> 'Увек тренутни датум',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Унесите сада Ваше поставке',
	'BOOL_TYPE_EXPLAIN'		=> 'Одредите тип, било кућице било дугмета. Кућица ће бити приказана само уколико је означена за датог корисника. У том случају <strong>друге</strong> језичке поставке ће бити коришћене. Дугмад ће бити приказана без обзира на њихове вредности.',

	'CHANGED_PROFILE_FIELD'		=> 'Поље профила је успешно промењено.',
	'CHARS_ANY'					=> 'Било који знак',
	'CHECKBOX'					=> 'Кућица',
	'COLUMNS'					=> 'Колоне',
	'CP_LANG_DEFAULT_VALUE'		=> 'Задата вредност',
	'CP_LANG_EXPLAIN'			=> 'Опис поља',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Објашњење за ово поље које се представља кориснику.',
	'CP_LANG_NAME'				=> 'Назив поља/поља које се представља кориснику',
	'CP_LANG_OPTIONS'			=> 'Поставке',
	'CREATE_NEW_FIELD'			=> 'Направи ново поље',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Најмање једно властито поље још није преведено. Молимо Вас да унесете потребне податке кликом на везу “Преведи”.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Задати језик [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Језички уноси за задати језик нису попуњени за ово поље профила.',
	'DEFAULT_VALUE'					=> 'Задата вредност',
	'DELETE_PROFILE_FIELD'			=> 'Уклони поље профила',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Да ли сигурно желите да обришете ово поље профила?',
	'DISPLAY_AT_PROFILE'			=> 'Прикажи у Корисничкој Контролној Плочи',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Корисник може да промени ово поље профила у Корисничкој Контролној Плочи.',
	'DISPLAY_AT_REGISTER'			=> 'Прикажи на екрану за регистрацију',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Уколико је ова поставка омогућена, поље ће бити приказано при регистрацији.',
	'DISPLAY_ON_VT'					=> 'Приказ на страници прегледа тема',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Уколико је ова поставка омогућена, поље ће бити приказано у мини-профилу на страници теме.',
	'DISPLAY_PROFILE_FIELD'			=> 'Јавно прикажи поље профила',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Поље профила ће бити приказано на свим местима дозвољеним у поставкама учитавања. Постављање овога на “Не” ће сакрити поље на страницама прегледа тема, профила и списка чланова.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Унесите сада Ваше поставке, свака поставка у новом реду.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Молимо знајте да можете да промените текст Ваших поставки као и да додајете нове поставке на крају. Није препоручљиво да додајете нове поставке између постојећих - ово може довести до погрешних поставки додељених Вашим корисницима. Ово се такође дешава уколико уклоните поставке из-међу. Уклањањем поставки са краја доводи до тога да се корисници који имају додељену ову могућност сада враћају назад на задате вредности.',
	'EMPTY_FIELD_IDENT'				=> 'Препознавање празног поља',
	'EMPTY_USER_FIELD_NAME'			=> 'Молимо Вас да унесете име/назив поља',
	'ENTRIES'						=> 'Уноси',
	'EVERYTHING_OK'					=> 'Све је у реду',

	'FIELD_BOOL'				=> 'Прекидач (Да/Не)',
	'FIELD_DATE'				=> 'Датум',
	'FIELD_DESCRIPTION'			=> 'Опис поља',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Објашњење за ово поље које се представља кориснику.',
	'FIELD_DROPDOWN'			=> 'Падајући списак',
	'FIELD_IDENT'				=> 'Препознавање поља',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Одабрано препознавање поља већ постоји. Молимо изаберите друго име.',
	'FIELD_IDENT_EXPLAIN'		=> 'Препознавање поља је име за препознавање поља профила у бази и предлошцима.',
	'FIELD_INT'					=> 'Бројеви',
	'FIELD_LENGTH'				=> 'Дужина поља за унос',
	'FIELD_NOT_FOUND'			=> 'Поље профила није пронађено.',
	'FIELD_STRING'				=> 'Једноставно текстуално поље',
	'FIELD_TEXT'				=> 'Текстуално поље',
	'FIELD_TYPE'				=> 'Тип поља',
	'FIELD_TYPE_EXPLAIN'		=> 'Не можете касније да промените тип поља.',
	'FIELD_VALIDATION'			=> 'Потврда поља',
	'FIRST_OPTION'				=> 'Прва поставка',

	'HIDE_PROFILE_FIELD'			=> 'Сакриј поље профила',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Сакриј поље профила од свих других корисника осим самог корисника лично, администратора и уредника који могу и даље да виде ово поље профила. Уколико је поставка Приказа у Корисничкој Контролној Плочи онемогућена, корисник неће моћи да види нити да промени ово поље профила а поље може бити промењено само од администратора.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Препознавање поља може да садржи само мала слова a-z и _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Препознавање поља може бити само 17 знакова дугачко',
	'ISO_LANGUAGE'				=> 'Језик [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Посебне поставке језика [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Највећи број знакова',
	'MAX_FIELD_NUMBER'		=> 'Највиши дозвољени број',
	'MIN_FIELD_CHARS'		=> 'Најмањи број знакова',
	'MIN_FIELD_NUMBER'		=> 'Најнижи дозвољени број',

	'NO_FIELD_ENTRIES'			=> 'Нема одређених уноса',
	'NO_FIELD_ID'				=> 'id поља није одређен.',
	'NO_FIELD_TYPE'				=> 'Није изабран тип поља.',
	'NO_VALUE_OPTION'			=> 'Поставка једнака неунетој вредности',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Вредност за не-унети унос. Уколико је поље обавезно, корисник добија грешку уколико изабере поставку изабрану овде.',
	'NUMBERS_ONLY'				=> 'Само бројеви (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Основне поставке',
	'PROFILE_FIELD_ACTIVATED'	=> 'Поље профила је успешно активирано.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Поље профила је успешно деактивирано.',
	'PROFILE_LANG_OPTIONS'		=> 'Посебне поставке језика',
	'PROFILE_TYPE_OPTIONS'		=> 'Посебне поставке типа профила',

	'RADIO_BUTTONS'				=> 'Дугмад',
	'REMOVED_PROFILE_FIELD'		=> 'Поље профила је успешно уклоњено.',
	'REQUIRED_FIELD'			=> 'Обавезно поље',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Форсирање поља профила да буде попуњено или назначено од стране корисника или администратора. Уколико је поставка Прикажи на екрану за регистрацију онемогућена, поље ће бити тражено само онда када корисник мења свој профил.',
	'ROWS'						=> 'Редови',

	'SAVE'							=> 'Сачувај',
	'SECOND_OPTION'					=> 'Друга поставка',
	'STEP_1_EXPLAIN_CREATE'			=> 'Овде можете унети прве основне параметре Вашег новог поља профила. Овај податак је потребан за други корак где ћете моћи да подесите преостале поставке и даље дотерати Ваше поље профила.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Овде можете променити основне параметре Вашег поља профила. Одговарајуће поставке су пре-рачунате у другом кораку.',
	'STEP_1_TITLE_CREATE'			=> 'Додај поље профила',
	'STEP_1_TITLE_EDIT'				=> 'Учитај поље профила',
	'STEP_2_EXPLAIN_CREATE'			=> 'Овде можете да одредите неке уобичајене поставке које можда желите да подесите.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Овде можете да промените неке уобичајене поставке.<br /><strong>Молимо знајте да промене у пољима профила неће утицати на постојећа поља профила унета од Ваших корисника.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Посебне поставке типа профила',
	'STEP_2_TITLE_EDIT'				=> 'Посебне поставке типа профила',
	'STEP_3_EXPLAIN_CREATE'			=> 'Пошто имате више од једног језика инсталирано на форуму, мораћете такође да попуните преостале ставке језика. Поље профила ће радити са омогућеним задатим језиком, такође можете да попуните преостале језичке ставке касније.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Пошто имате више од једног језика инсталирано на форуму, сада такође можете да промените или додате преостале језичке ставке. Поље профила ће радити са омогућеним задатим језиком.',
	'STEP_3_TITLE_CREATE'			=> 'Преостале језичке одреднице',
	'STEP_3_TITLE_EDIT'				=> 'Језичке одреднице',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Унесите задати израз који ће бити приказан, задату вредност. Оставите празно уколико желите да га прикажете као празно на првом месту.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Унесите задати текст који ће бити приказан, задату вредност. Оставите празно уколико желите да га прикажете као празно на првом месту.',
	'TRANSLATE'						=> 'Преведи',

	'USER_FIELD_NAME'	=> 'Назив поља/поља представљен кориснику',

	'VISIBILITY_OPTION'				=> 'Поставке видљивости',
));

?>