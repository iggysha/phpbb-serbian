<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Подесите ову поставку уколико се конфигурациона поставка мења пречесто да би била делотворно кеширана.',
	'CLI_CONFIG_CURRENT'				=> 'Тренутна конфигурациона вредност, користите 0 и 1 да одредите вредности прекидача',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успешно обрисан конфиг %s.',
	'CLI_CONFIG_NEW'					=> 'Нова конфигурациона вредност, користите 0 и 1 да одредите вредности прекидача',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Конфиг %s не постоји',
	'CLI_CONFIG_OPTION_NAME'			=> 'Назив конфигурационе поставке',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Подесите ову поставку уколико вредност треба да буде одштампана без нове линије на крају.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Вредност за повећање од',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успешно повећан конфиг %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не може се подесити конфиг %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успешно подешен конфиг %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Штампа списак спремних и неспремних крон послова.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Извршава све спремне крон задатке.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Назив задатка који треба извршити',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Списак свих инсталираних и доступних миграција.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Ажурира базу применом миграција.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Враћа миграцију.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Брише поставку конфигурације',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Онемогућава назначену екстензију.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Омогућава назначену екстензију.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Проналази миграције од којих не зависи горе.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Поправља хијерархијску структуру форума и модула.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Добија вредност конфигурационе поставке',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Повећава вредност конфигурационе интегралне поставке',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Приказује списак свих екстензија у бази и систему датотека.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Назив Окружења.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Ради у Safe Mode (без екстензија).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Покреће шел.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Избацује назначену екстензију.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Даје списак типова текста који могу бити поново обрађени.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Доступни поновни обрађивачи:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Поновно обрађује сачувани текст са тренутним text_formatter сервисима.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Тип текста за поновну обраду. Оставите празно за поновну обраду свега.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Не чува никакве промене; само штампа оно што би се догодило',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Најнижи ID извештаја за обраду',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Највиши ID извештаја за обраду',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Приближан број извештаја за обраду у овом тренутку',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Крени поновну обраду тамо где је последње извршење заустављено',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> 'Поновно израчунава user_email_hash колону у табели корисника.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Поставља конфигурациону вредност поставке само ако се стара поклапа са тренутном вредности',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Поставља конфигурациону вредност поставке',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Брише све постојеће изведене сличице.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Прави све недостајуће изведене сличице.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Поновно прави све изведене сличице.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Проверава да ли је форум ажуран.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Назив прикључка за проверу (уколико сви, проверава све прикључке)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Извршава команду провере са кешом.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Извршава команду бирајући да провери само стабилне или нестабилне верзије.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Ажурира застареле хашеве лозинки са bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" треба да буде подешено на "стабилно" или "нестабилно".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Активира (или деактивира) налог корисника.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Корисничко име налога за активацију.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Деактивира корисников налог',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Корисник је већ активан.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Корисник је већ неактиван.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Додаје новог корисника.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Корисничко име новог корисника',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Лозинка новог корисника',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'E-mail адреса новог корисника',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Шаље мејл за активацију налога новом кориснику (не шаље као подразумевано)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Брише кориснички налог.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Корисничко име корисника за брисање',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Брише све поруке од корисника. Без ове поставке, корисникове поруке ће бити задржане.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Поновно-чисти корисничка имена.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Не могу онемогућити екстензију %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Успешно онемогућена екстензија %s',
	'CLI_EXTENSION_DISABLED'			=> 'Екстензија %s није омогућена',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Не могу омогућити екстензију %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Успешно омогућена екстензија %s',
	'CLI_EXTENSION_ENABLED'				=> 'Екстензија %s је омогућена',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Екстензија %s не постоји',
	'CLI_EXTENSION_NAME'				=> 'Назив екстензије',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Не могу избацити екстензију %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Успешно избачена екстензија %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Немогуће ажурирати екстензију %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Успешно ажурирана екстензија %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Нису пронађене екстензије.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Екстензија %s није омогућљива.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Доступно',
	'CLI_EXTENSIONS_DISABLED'			=> 'Онемогућено',
	'CLI_EXTENSIONS_ENABLED'			=> 'Омогућено',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Успешно поправљена хијерархијска структура форума и модула.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Успешно прерачунате све email hashes.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Успешно ажурирани застарели хашеви лозинки са bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Назив миграције, including the namespace (use forward slashes instead of backslashes to avoid problems).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Доступне миграције',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Инсталиране миграције',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Приказ само доступних миграција',
	'CLI_MIGRATIONS_EMPTY'                  => 'Без миграција.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Поновна обрада %1$s (range %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Поновна обрада %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Поновна обрада успешно завршена',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) обрисано.',
	'CLI_THUMBNAIL_DELETING'	=> 'Брисање изведених сличица',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) избегнуто.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) направљено.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Прављење изведених сличица',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Све изведене сличице су поново направљене.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Све изведене сличице су обрисане.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Нема изведених сличица за прављење.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Нема изведених сличица за брисање.',

	'CLI_USER_ADD_SUCCESS'		=> 'Успешно додат корисник %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Да ли сигурно желите да обришете ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Поновно-чишћење корисничких имена',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Поновно-чишћење употпуњено. Ниједно корисничко име не треба да буде очишћено.',
		1	=> 'Поновно-чишћење употпуњено. %d корисничко име је очишћено.',
		2	=> 'Поновно-чишћење употпуњено. %d корисничка имена су очишћена.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Необавезно можете назначити назив крон задатка за извршавање само назначеног крон задатка.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Активира корисников налог, или деактивира налог користећи <info>--deactivate</info> поставку.
За необавезно слање активационог мејла кориснику, користите <info>--send-email</info> поставку.',
	'CLI_HELP_USER_ADD'			=> 'The <info>%command.name%</info> команда додаје новог корисника:
Уколико ова команда извршава без поставки, бићете обавештени да их унесете.
За необавезно слање мејла новом кориснику, користите <info>--send-email</info> поставку.',
	'CLI_HELP_USER_RECLEAN'		=> 'Поновно-чишћење корисничких имена ће проверити сва сачувана корисничка имена и осигурати да се чувају само чисте верзије. Очишћена корисничка имена су у облику неосетљивом на велика и мала слова, NFC нормализована и преобликована у ASCII.',
));
