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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Инсталациона Плоча',
	'SELECT_LANG'	=> 'Изаберите језик',

	'STAGE_INSTALL'	=> 'Инсталирање phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Увод',
	'INTRODUCTION_BODY'		=> 'Добродошли на phpBB3!<br /><br />phpBB® је највише коришћен форум отвореног кода у свету. phpBB3 је најновија инсталација у линији пакета почев од 2000. као и његови претходници, phpBB3 је богат-могућностима, пријатељски-кориснику, и у потпуности подржан од phpBB Тима. phpBB3 увелико побољшава оно што је учинило phpBB2 популарним, и додаје обично тражене могућности које нису биле присутне у претходним издањима. Надамо се да ће превазићи ваша очекивања.<br /><br />Овај инсталациони систем ће вас водити кроз инсталирање phpBB3, ажурирање на најновије издање phpBB3 са претходних издања, као и пребацивање на phpBB3 са других различитих типова форума (укључујући phpBB2). За више података, подстичемо вас да прочитате <a href="../docs/INSTALL.html">водич за инсталацију</a>.<br /><br />За читање phpBB3 лиценце или учење о добијању подршке и нашем ставу о томе, молимо одаберите одговарајуће ставке на изборнику са стране. За наставак, молимо одаберите одговарајућу картицу изнад.',

	// Support page
	'SUPPORT_TITLE'		=> 'Подршка',
	'SUPPORT_BODY'		=> 'Пуна подршка ће бити пружена за тренутно стабилно издање phpBB3, бесплатно. Ово укључује:</p><ul><li>инсталација</li><li>конфигурација</li><li>техничка питања</li><li>проблеми са могућим кваровима у програму</li><li>ажурирање са Release Candidate (RC) издања на најновије стабилно издање</li><li>пребацивање са phpBB 2.0.x у phpBB3</li><li>пребацивање разних других програма форума у phpBB3 (молимо погледајте <a href="https://www.phpbb.com/community/viewforum.php?f=486">Форуми Пребацивања</a>)</li></ul><p>Подстичемо кориснике који и даље користе бета издања phpBB3 да замене њихове инсталације са свежом копијом најновијег издања.</p><h2>Екстензије / Стилови</h2><p>За сметње у вези са Екстензијама, молимо пишите у одговарајући <a href="https://www.phpbb.com/community/viewforum.php?f=451">Форум Екстензија</a>.<br />За сметње у вези са стиловима, предлошцима и темама, молимо пишите у одговарајући <a href="https://www.phpbb.com/community/viewforum.php?f=471">Форум Стилови</a>.<br /><br />Ако се ваше питање односи на одређени пакет, молимо пишите непосредно на теми посвећеној том пакету.</p><h2>Добијање Подршке</h2><p><a href="https://www.phpbb.com/support/">Одељак Подршка</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Брзи Потетнички Водич</a><br /><br />Како би остали у току са најновијим вестима и издањима, пратите нас на <a href="https://www.twitter.com/phpbb/">Twitter</a> and <a href="https://www.facebook.com/phpbb/">Facebook</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Добродошли у Инсталацију',
	'INSTALL_INTRO_BODY'	=> 'Са овом могућности, могуће је инсталирати phpBB3 на ваш сервер.</p><p>У настојању да наставите, требаће вам поставке ваше базе. Уколико не знате поставке ваше базе, молимо повежите се са вашим провајдером и тражите их. Нећете бити у могућности да наставите без њих. Требају вам:</p>

	<ul>
		<li>Тип Базе - база коју ћете користити.</li>
		<li>Име Сервера базе или DSN - адреса сервера базе.</li>
		<li>Порт Сервера базе - порт сервера базе (у већини случајева ово није неопходно).</li>
		<li>Име Базе - име базе на серверу.</li>
		<li>Корисничко име Базе и лозинка Базе - подаци пријаве за приступ бази.</li>
	</ul>

	<p><strong>Белешка:</strong> уколико инсталирате користећи SQLite, требало би да унесете пуну стазу до датотеке ваше базе у DSN пољу и оставите празна поља за корисничко име и лозинку. Из безбедносних разлога, требало би да се осигурате да датотека базе није сачувана на месту приступачном са мреже.</p>

	<p>phpBB3 подржава следеће базе:</p>
	<ul>
		<li>MySQL 3.23 или већи (MySQLi подржано)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Сервер 2000 или већи (непосредно или преко ODBC)</li>
		<li>MS SQL Сервер 2005 или већи (native)</li>
		<li>Oracle</li>
	</ul>

	<p>Само оне базе које су подржане на вашем серверу ће бити приказане.',

	'ACP_LINK'	=> 'Води ме до <a href="%1$s">АКП</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB је већ инсталиран.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB још увек није инсталиран.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Датотека не постоји',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Да бисте били у могућности да инсталирате phpBB %1$s датотека треба да постоји.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Препоручљиво је да датотека %1$s постоји због бољег корисничког искуства.',
	'FILE_NOT_WRITABLE'						=> 'Датотека није уписљива',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Да бисте били у могућности да инсталирате phpBB %1$s датотека треба да је уписљива.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Препоручљиво је да датотека %1$s буде уписљива због бољег корисничког искуства.',

	'DIRECTORY_NOT_EXISTS'						=> 'Фасцикла не постоји',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Да бисте били у могућности да инсталирате phpBB фасцикла %1$s треба да постоји.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Препоручљиво је да фасцикла %1$s постоји због бољег корисничког искуства.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Фасцикла није уписљива',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Да бисте били у могућности да инсталирате phpBB фасцикла %1$s треба да буде уписљива.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Препоручљиво је да фасцикла %1$s буде уписљива због бољег корисничког искуства.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP издање',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB захтева PHP издање 5.4.0 или веће.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP getimagesize() функција је потребна',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'У настојању да phpBB ради исправно, getimagesize функција треба да буде доступна.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 подршка',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB неће радити уколико ваша PHP инсталација није подешена са UTF-8 подршком у PCRE екстензији.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON подршка',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'У настојању да phpBB функционише исправно, екстензија PHP JSON треба да буде доступна.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM подршка',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'У настојању да phpBB функционише исправно, екстензија PHP XML/DOM extension треба да буде доступна.',
	'PHP_SUPPORTED_DB'					=> 'Подржане базе',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Морате имати подршку за најмање једну базу одговарајућу унутар PHP. Уколико ниједан модул базе није приказан као доступан треба да се повежете са вашим провајдером или да прегледате одговарајућу PHP инсталацију за савет.',

	'RETEST_REQUIREMENTS'	=> 'Поново тестирај захтеве',

	'STAGE_REQUIREMENTS'	=> 'Провери захтеве',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Морате попунити сва поља у овом блоку.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Инсталер је открио прекид',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Инсталер је открио прекид, можда сте пробали да освежите страницу, што је довело до кварења података. Предлажемо или да повећате ваше прекид поставке или да пробате да користите CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Подесите податке инсталације',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Администратор појединости',

	// Form labels
	'ADMIN_CONFIG'				=> 'Администратор конфигурација',
	'ADMIN_PASSWORD'			=> 'Администратор лозинка',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Потврдите лозинку администратора',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Молимо унесите лозинку између 6 и 30 знакова у дужини.',
	'ADMIN_USERNAME'			=> 'Администратор корисничко име',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Молимо унесите корисничко име између 3 и 20 знакова у дужини.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Унета мејл адреса није ваљана.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Унете лозинке се не поклапају.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Унета лозинка је предугачка. Највећа дужина је 30 знакова.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Унета лозинка је прекратка. Најмања дужина је 6 знакова.',
	'INST_ERR_USER_TOO_LONG'		=> 'Унето корисничко име је предугачко. Највећа дужина је 20 знакова.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Унето корисничко име је прекратко. Најмања дужина је 3 знакова.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Конфигурација форума',
	'DEFAULT_LANGUAGE'	=> 'Подразумевани језик',
	'BOARD_NAME'		=> 'Назив форума',
	'BOARD_DESCRIPTION'	=> 'Кратак опис форума',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Поставке базе',

	// Form labels
	'DB_CONFIG'				=> 'Конфигурација базе',
	'DBMS'					=> 'Тип базе',
	'DB_HOST'				=> 'Име сервера базе или DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN је скраћеница од Data Source Name и одговара само за ODBC инсталације. На PostgreSQL, користите localhost за повезивање на месни сервер преко UNIX domain socket и 127.0.0.1 за повезивање преко TCP. За SQLite, унесите пуну путању до ваше датотеке базе.',
	'DB_PORT'				=> 'Порт сервера базе',
	'DB_PORT_EXPLAIN'		=> 'Оставите ово празно изузев ако знате да сервер ради са не-стандардним портом.',
	'DB_PASSWORD'			=> 'Лозинка базе',
	'DB_NAME'				=> 'Назив базе',
	'DB_USERNAME'			=> 'Корисничко име базе',
	'DATABASE_VERSION'		=> 'Издање базе',
	'TABLE_PREFIX'			=> 'Префикс за табеле у бази',
	'TABLE_PREFIX_EXPLAIN'	=> 'Префикс мора почети са словом и мора да садржи само слова, бројеве и доњу црту.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Сервер 2000+ преко ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Сервер 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL са MySQLi Екстензијом',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Грешка у инсталацији базе',
	'INST_ERR_NO_DB'				=> 'Немогуће је учитати PHP модул за одабрани тип базе.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Префикс који сте унели није ваљан. Мора почети са словом и мора да садржи само слова, бројеве и доње црте.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Префикс који сте назначили је предугачак. Највећа дужина је %d знакова.',
	'INST_ERR_DB_NO_NAME'			=> 'Није назначен назив базе.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Назначена датотека базе је унутар вашег дрвета фасцикли форума. Требало би да поставите ову датотеку на веб-неприступачно место.',
	'INST_ERR_DB_CONNECT'			=> 'Немогуће се повезати до базе, погледајте поруку о грешци испод.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'И база и фасцикла у којој је база морају бити уписљиви.',
	'INST_ERR_DB_NO_ERROR'			=> 'Није дата порука о грешци.',
	'INST_ERR_PREFIX'				=> 'Табеле са назначеним префиксом већ постоје, молимо изаберите други префикс.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Издање MySQL инсталирано на овој машини није ускладљиво са “MySQL са MySQLi Екстензијом” могућношћу коју сте одабрали. Молимо пробајте “MySQL” могућност уместо тога.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Издање SQLite екстензије које сте инсталирали је престаро, па мора бити надограђено на најмање издање 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Издање Oracle инсталирано на овој машини захтева од вас да подесите <var>NLS_CHARACTERSET</var> параметар у <var>UTF8</var>. Или надоградите вашу инсталацију на 9.2+ или промените параметар.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'База коју сте изабрали није направљена у <var>UNICODE</var> односно <var>UTF8</var> енкодингу. Пробајте инсталирање сабазом у <var>UNICODE</var> или <var>UTF8</var> енкодингу.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Шема датотека није уписљива',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail конфигурација',

	// Package info
	'PACKAGE_VERSION'					=> 'Инсталирано издање пакета',
	'UPDATE_INCOMPLETE'				=> 'Ваша phpBB инсталација није исправно ажурирана.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Молимо прочитајте податке испод у настојању да поправите ову грешку.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Непотпуно ажурирање</h1>

		<p>Запазили смо да последње ажурирање ваше phpBB инсталације ниј’е употпуњено. Посетите <a href="%1$s" title="%1$s">database updater</a>, осигурајте да је <em>Ажурирај само базу</em> одабрано и кликните на <strong>Прихвати</strong>. Не заборавите да обришете "install"-фасциклу након што успешно ажурирате базу.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Издање са новим могућностима <strong>%1$s</strong> је доступно. Молимо прочитајте <a href="%2$s" title="%2$s"><strong>саопштење о издању</strong></a> како бисте сазнали о томе шта има да понуди, и како да надоградите.',
	'SERVER_CONFIG'				=> 'Конфигурација сервера',
	'SCRIPT_PATH'				=> 'Путања скрипте',
	'SCRIPT_PATH_EXPLAIN'		=> 'Путања где је смештен phpBB у односу на назив домена, н.пр. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Хвала, Главна Управа',
	'CONFIG_SITE_DESC'				=> 'Кратак текст за опис вашег форума',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> 'Ово је пробна порука у вашој phpBB3 инсталацији. Изгледа да све ради. Можете обрисати ову поруку уколико то желите и наставити са подешавањима вашег форума. Током поступка инсталације вашој првој категорији и вашем првом форуму су додељени одговарајући комплети дозвола за посебне корисничке групе администратора, робота, општих уредника, госта, регистрованих корисника и регистрованих COPPA корисника. Уколико такође изаберете да обришете вашу прву категорију и ваш први форум, немојте заборавити да доделите дозволе свим тим корисничким групама за све нове категорије и форуме које направите. Препоручљиво је да преименујете вашу прву категорију и ваш први форум и умножите дозволе из њих док правите нове категорије и форуме. Пријатно!',

	'FORUMS_FIRST_CATEGORY'			=> 'Ваша прва категорија',
	'FORUMS_TEST_FORUM_DESC'		=> 'Опис вашег првог форума.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Ваш први форум',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Администратор Сајта',
	'REPORT_WAREZ'					=> 'Порука садржи везе до незаконитог или пиратског софтвера.',
	'REPORT_SPAM'					=> 'Пријављена порука има само сврху да рекламира сајт или неки производ.',
	'REPORT_OFF_TOPIC'				=> 'Пријављена порука је промашила тему.',
	'REPORT_OTHER'					=> 'Пријављена порука се не уклапа ни у једну другу категорију, молимо користите поље за више података о њој.',

	'SMILIES_ARROW'					=> 'Стрелица',
	'SMILIES_CONFUSED'				=> 'Збуњен',
	'SMILIES_COOL'					=> 'Олађен',
	'SMILIES_CRYING'				=> 'Плакање или Веома Тужан',
	'SMILIES_EMARRASSED'			=> 'Непријатно',
	'SMILIES_EVIL'					=> 'Зао или Веома Бесан',
	'SMILIES_EXCLAMATION'			=> 'Узвик',
	'SMILIES_GEEK'					=> 'Џибер',
	'SMILIES_IDEA'					=> 'Идеја',
	'SMILIES_LAUGHING'				=> 'Смех',
	'SMILIES_MAD'					=> 'Бесан',
	'SMILIES_MR_GREEN'				=> 'Госп. Зелени',
	'SMILIES_NEUTRAL'				=> 'Неутралан',
	'SMILIES_QUESTION'				=> 'Питање',
	'SMILIES_RAZZ'					=> 'Ругање',
	'SMILIES_ROLLING_EYES'			=> 'Колутање Очима',
	'SMILIES_SAD'					=> 'Тужан',
	'SMILIES_SHOCKED'				=> 'Шокиран',
	'SMILIES_SMILE'					=> 'Осмех',
	'SMILIES_SURPRISED'				=> 'Изненађен',
	'SMILIES_TWISTED_EVIL'			=> 'Скривено Зло',
	'SMILIES_UBER_GEEK'				=> 'Џибер Џибер',
	'SMILIES_VERY_HAPPY'			=> 'Веома Срећан',
	'SMILIES_WINK'					=> 'Намиг',

	'TOPICS_TOPIC_TITLE'			=> 'Добро дошли на phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Преглед',
	'MENU_INTRO'		=> 'Увод',
	'MENU_LICENSE'		=> 'Лиценца',
	'MENU_SUPPORT'		=> 'Подршка',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Прављење конфигурационе датотеке',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Додавање конфигурационих поставки',
	'TASK_ADD_DEFAULT_DATA'				=> 'Додавање подразумеваних поставки бази',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Прављење датотеке шеме базе',
	'TASK_SETUP_DATABASE'				=> 'Постављање базе',
	'TASK_CREATE_TABLES'				=> 'Прављење табела',

	// Install data
	'TASK_ADD_BOTS'				=> 'Регистровање робота',
	'TASK_ADD_LANGUAGES'		=> 'Инсталирање доступних језика',
	'TASK_ADD_MODULES'			=> 'Инсталирање модула',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Прављење индекса претраге',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Инсталирање запакованих екстензија',
	'TASK_NOTIFY_USER'			=> 'Слање e-mail за обавештење',
	'TASK_POPULATE_MIGRATIONS'	=> 'Попуњавање миграција',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Инсталер је успешно завршио',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Модул није пронађен',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Модул не може бити пронађен јер сервис, %s, није одређен.',

	'TASK_NOT_FOUND'				=> 'Задатак није пронађен',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Задатак не може бити пронађен јер сервис, %s, није одређен.',

	'SKIP_MODULE'	=> 'Прескочи “%s” модул',
	'SKIP_TASK'		=> 'Прескочи “%s” задатак',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Сви инсталерови сервиси задатака треба да се покрену са “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Инсталерова дефиниција сервиса задатака није ваљана. Сервис под “%1$s” датим именом, очекивани class namespace је “%2$s” за то. За више података о томе молимо погледајте документацију за task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Инсталерова config датотека није уписљива.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Инсталирај phpBB',
	'CLI_UPDATE_BOARD'				=> 'Ажурирај phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Прикажи конфигурацију која ће бити коришћена',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Провери конфигурациону датотеку',
	'CLI_CONFIG_FILE'				=> 'Config датотека за коришћење',
	'MISSING_FILE'					=> 'Немогуће је приступити датотеци %1$s',
	'MISSING_DATA'					=> 'У config датотеци недостају подаци или можда садржи неваљане поставке.',
	'INVALID_YAML_FILE'				=> 'Не могу да обрадим YAML датотеку %1$s',
	'CONFIGURATION_VALID'			=> 'Конфигурациона датотека је ваљана',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Ажурирај phpBB инсталацију',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Са овом могућности, могуће је ажурирати вашу phpBB инсталацију у најновију верзију.<br />Током овог поступка све ваше датотеке ће бити проверене да ли су ваљане. Можете да прегледате све разлике и датотеке пре ажурирања.<br /><br />Ажурирање датотеке по себи може бити урађено на два начина.</p><h2>Ручно Ажурирање</h2><p>Са оваквим ажурирањем треба да преузмете само ваш лични комплет промењених датотека како бисте били сигурни да нећете изгубити ваше измене у датотекама које сте направили. Након што преузмете тај пакет треба да ручно додате на сервер датотеке на исправна места у вашој phpBB root фасцикли. Кад то урадите, имате могућност да урадите проверу како бисте видели да ли су датотеке на исправним местима на серверу.</p><h2>Аутоматско Ажурирање са FTP</h2><p>Овај начин је сличан претходном али без потребе да преузимате измењене датотеке и сами их додајете. Ово ће бити урађено за вас. У настојању да користите овај начин потребно је да знате ваше податке пријаве преко FTP јер ћете бити питани за њих. Кад завршите бићете преусмерени на проверу датотека поново како бисте се уверили да је све ажурирано исправно.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Обавештење о издању</h1>

		<p>Молимо прочитајте обавештење о издању за најновије издање пре него што наставите поступак ажурирања, јер може садржати корисне информације. Такоже садржи потпуне везе за преузимање као и запис промена.</p>

		<br />

		<h1>Како да журирате вашу инсталацију са Full Package</h1>

		<p>Препоручени начин за ажурирање ваше инсталације је full package. Уколико су датотеке phpBB језгра мењане у вашој инсталацији онда је боље да користите automatic update package у настојању да не изгубите те промене. Такоже сте у могућности да ажурирате вашу инсталацију користећи друге начине који су побројани у INSTALL.html документу. Кораци за phpBB3 ажурирање користећи full package су:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Направите резервну копију свих датотека вашег форума и базе.</strong></li>
			<li>Идите на <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> и преузмите најновију "Full Package" архиву.</li>
			<li>Одпакујте архиву.</li>
			<li>Уклоните (обришите) <code class="inline">config.php</code> датотеку, као и <code class="inline">/images</code>, <code class="inline">/store</code> и <code class="inline">/files</code> фасцикле <em>из пакета</em> (не вашег сајта).</li>
			<li>Идите на АКП, Поставке форума, и проверите да ли је prosilver постављен као подразумевани стил форума. Уколико није, поставите га на prosilver.</li>
			<li>Обришите <code class="inline">/vendor</code> и <code class="inline">/cache</code> фасцикле из root фасцикле форума на вашем серверу.</li>
			<li>Преко FTP или SSH додајте преостале датотеке и фасцикле (односно, преостали САДРЖАЈ phpBB3 фасцикле) у root фасциклу инсталације вашег форума на серверу, преписујући преко постојећих датотека. (Белешка: пазите да не обришете ниједну екстензију у вашој <code class="inline">/ext</code> фасцикли када додајете нови phpBB3 садржај.)</li>
			<li><strong><a href="%1$s" title="%1$s">Сада покрените поступак ажурирања усмеривши у вашем прегледачу на install фасциклу</a>.</strong></li>
			<li>Пратите кораке за ажурирање базе и дозволите да се употпуне до краја.</li>
			<li>Преко FTP или SSH обришите <code class="inline">/install</code> фасциклу из root фасцикле ваше инсталације форума.<br><br></li>
		</ol>
		
		<p>Сада имате ажуриран форум који садржи све ваше кориснике и поруке. Следе задаци:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Ажурирајте ваш језички пакет</li>
			<li>Ажурирајте ваш стил<br><br></li>
		</ul>

		<h1>Како ажурирати вашу инсталацију са Automatic Update Package</h1>

		<p>Овај automatic update package је препоручљив само у случају да су датотеке phpBB језгра измењене у вашој инсталацији. Такође можете да ажурирате вашу инсталацију користећи начине који су побројани у INSTALL.html документу. Кораци за ажурирање phpBB3 користећи automatic update package су:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Идите до <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> и преузмите "Automatic Update Package" архиву.</li>
			<li>Одпакујте архиву.</li>
			<li>Додајте потпуне и несабијене "install" и "vendor" фасцикле у вашу phpBB root фасциклу (где је ваша config.php датотека).<br><br></li>
		</ol>

		<p>Кад их додате ваш форум ће бити затворен за обичне кориснике јер је install фасцикла коју сте сад додали присутна на серверу.<br /><br />
		<strong><a href="%1$s" title="%1$s">Сад покрените поступак ажурирања тако што ћете усмерити на install фасциклу у вашем прегледачу</a>.</strong><br />
		<br />
		Потом ћете бити вођени кроз поступак ажурирања. Бићете обавештени када се ажурирање употпуни.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Тип ажурирања за покретање',

	'UPDATE_TYPE_ALL'		=> 'Ажурирај систем датотека и базу',
	'UPDATE_TYPE_DB_ONLY'	=> 'Ажурирај само базу',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Начини ажурирања датотеке',

	'UPDATE_FILE_METHOD'			=> 'Начин ажурирања датотеке',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Преузмите измењене датотеке у архиви',
	'UPDATE_FILE_METHOD_FTP'		=> 'Ажурирај датотеке преко FTP (Automatic)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Ажурирај датотеке преко непосредног приступа датотекама (Automatic)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Одаберите облик архиве за преузимање',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP поставке',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Није нађена ваљана фасцикла за ажурирање, молимо вас да проверите да ли сте додали све потребне датотеке.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Ваше издање је ажурно. Нема потребе да покрећете алат за ажурирање. Ако хоћете да проверите ваљаност ваших датотека проверите да ли сте додали исправне датотеке за ажурирање.',
	'OLD_UPDATE_FILES'				=> 'Датотеке за ажурирање су застареле. Пронађене су датотеке за ажурирање из phpBB %1$s у phpBB %2$s али најновије издање phpBB је %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Пронађене датотеке за ажурирање нису ускладљиве са вашим инсталираним издањем. Ваше инсталирано издање је %1$s а датотека за ажурирање је за ажурирање phpBB %2$s у %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Ажурирање датотека',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Провера датотека за ажурирање',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Разликовач датотека није отворио %s.',

	'UPDATE_FILE_DIFF'		=> 'Разликовање промењених датотека',
	'ALL_FILES_DIFFED'		=> 'Све измењене датотеке су разликоване.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Ажурирање датотека',

	'DOWNLOAD'							=> 'Преузимање',
	'DOWNLOAD_CONFLICTS'				=> 'Преузимање спаја конфликте у архиву',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Претрага за &lt;&lt;&lt; за конфликте',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Преузимање архиве измењених датотека',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Након што сте преузели сада би требало да отпакујете архиву. Пронаћи ћете измењене датотеке које би требало да додате у вашу phpBB главну фасциклу на серверу. Молимо додајте датотеке на њима одговарајућа места. Након што додате све датотеке, можете наставити са поступком ажурирања.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Датотека је већ ажурирана.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Датотеци није дозвољено да буде разликована.',
	'FILE_USED'						=> 'Подаци коришћени из',			// Single file
	'FILES_CONFLICT'				=> 'Датотеке у сукобу',
	'FILES_CONFLICT_EXPLAIN'		=> 'Следеће датотеке су измењене и не представљају изворне датотеке из старог издања. phpBB је открио да те датотеке изазивају сукоб када покуша да их споји. Молимо вас да истражите сукобе и покушате да их ручно решите или наставите са ажурирањем изабравши начин спајања. Уколико ручно решите сукобе проверите датотеке поново након што сте их изменили. Имате могућност да изаберете начин спајања за сваку датотеку. Први ће довести до тога да добијете датотеку у којој ће бити изгубљени сви сукобљавајући редови из ваше старе датотеке, други ће довести до губитка промена из новије датотеке.',
	'FILES_DELETED'					=> 'Обрисане датотеке',
	'FILES_DELETED_EXPLAIN'			=> 'Следеће датотеке не постоје у новом издању. Ове датотеке морају бити обрисане из ваше инсталације.',
	'FILES_MODIFIED'				=> 'Измењене датотеке',
	'FILES_MODIFIED_EXPLAIN'		=> 'Следеће датотеке су измењене и не представљају изворне датотеке из старог издања. Ажурирана датотека ће бити спој између ваших измена и нове датотеке.',
	'FILES_NEW'						=> 'Нове датотеке',
	'FILES_NEW_EXPLAIN'				=> 'Следеће датотеке не постоје у вашој инсталацији. Ове датотеке ће бити додате у вашу инсталацију.',
	'FILES_NEW_CONFLICT'			=> 'Нове сукобљавајуће датотеке',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Следеће датотеке су унутар најновијег издања али већ постоји датотека са истим именом на истом месту. Ова датотека ће бити прегажена новом датотеком.',
	'FILES_NOT_MODIFIED'			=> 'Неизмењене датотеке',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Следеће датотеке нису измењене и представљају изворне phpBB издања које желите да ажурирате.',
	'FILES_UP_TO_DATE'				=> 'Већ ажуриране датотеке',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Следеће датотеке су већ ажуриране и не треба да буду ажуриране.',
	'FILES_VERSION'					=> 'Издање Датотека',
	'TOGGLE_DISPLAY'				=> 'Види/Сакриј списак датотека',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Ажурирање датотека',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Датотека за ажурирање “%1$s“ није успела. Инсталер ће покушати да врати на “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Датотека за ажурирање није успела. Нема доступних даљих начина да се врати.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Настави поступак ажурирања',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Провери датотеке поново',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Ажурирање базе',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Ажурирање базе је било успешно.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Ажурирање екстензија',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Назначени конвертор не постоји.',
	'DEV_NO_TEST_FILE'			=> 'Није назначена вредност за test_file променљиву у конвертору. Уколико сте ви корисник овог конвертора, не би требало да видите ову грешку, па вас молимо да ову грешку пријавите аутору конвертора. Уколико сте ви аутор конвертора, морате назначити назив датотеке који постоји у изворном форуму како би дозволили да се провери путања до ње.',
	'COULD_NOT_FIND_PATH'		=> 'Немогуће је пронаћи путању до вашег бившег форума. Молимо проверите ваше поставке и пробајте поново.<br />» %s је назначено као изворна путања.',
	'CONFIG_PHPBB_EMPTY'		=> 'Променљива у phpBB3 config за “%s” је празна.',

	'MAKE_FOLDER_WRITABLE'		=> 'Молимо проверите да ли ова фасцикла постоји и да ли је уписљива од сервера па пробајте поново:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Молимо проверите да ли ова фасцикле постоје и да ли су уписљиве од сервера па пробајте поново:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Поново тестирање',

	'NO_TABLES_FOUND'			=> 'Нису нађене табеле.',
	'TABLES_MISSING'			=> 'Немогуће је пронаћи ове табеле<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Молимо проверите префикс ваше табеле и пробајте поново.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Настави пребацивање',
	'CONTINUE_CONVERT_BODY'		=> 'Пронађен је претходни покушај пребацивања. Имате сада могућност да бирате између наставка старог или започињања новог пребацивања.',
	'CONVERT_NEW_CONVERSION'	=> 'Ново пребацивање',
	'CONTINUE_OLD_CONVERSION'	=> 'Наставак претходно започетог пребацивања',

	// Start conversion
	'SUB_INTRO'					=> 'Увод',
	'CONVERT_INTRO'				=> 'Добро дошли на phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Овде, имате могућност да увезете податке из другог (инсталираног) форумског система. Списак испод приказује све модуле за пребацивање који су тренутно доступни. Уколико на списку нема конвертора за форумски софтвер који желите да пребаците, молимо проверите на сајт где други модули за конверзију могу бити доступни за преузимање.',
	'AVAILABLE_CONVERTORS'		=> 'Доступни конвертори',
	'NO_CONVERTORS'				=> 'Нема доступних конвертора за коришћење.',
	'CONVERT_OPTIONS'			=> 'Поставке',
	'SOFTWARE'					=> 'Софтвер форума',
	'VERSION'					=> 'Издање',
	'CONVERT'					=> 'Пребаци',

	// Settings
	'STAGE_SETTINGS'			=> 'Поставке',
	'TABLE_PREFIX_SAME'			=> 'Префикси табеле треба да буду они које користи софтвер форума који желите да пребаците.<br />» Изабрани префикс табеле је био %s.',
	'DEFAULT_PREFIX_IS'			=> 'Конвертор није био у могућности да пронађе табеле са назначеним префиксом. Молимо проверите да ли сте унели исправне појединости за форум кји пребацујете. Подразумевани префикс табеле за %1$s је <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Назначи поставке пребацивања',
	'FORUM_PATH'				=> 'Путања форума',
	'FORUM_PATH_EXPLAIN'		=> 'Ово је <strong>relative</strong> путања на диску до вашег старог форума из <strong>root ове phpBB3 инсталације</strong>.',
	'REFRESH_PAGE'				=> 'Освежи страницу за наставак пребацивања',
	'REFRESH_PAGE_EXPLAIN'		=> 'Уколико је постављено на да, конвертор ће освежити страницу за наставак поступка пребацивања након завршетка неког корака. Уколико је ово ваше прво пребацивање у сврху тестирања и одређивање могућих грешака убудуће, предлажемо да ово подесите на Не.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Пребацивање у току',

	'AUTHOR_NOTES'				=> 'Белешке аутора<br />» %s',
	'STARTING_CONVERT'			=> 'Започињање поступка пребацивања',
	'CONFIG_CONVERT'			=> 'Пребацивање конфигурације',
	'DONE'						=> 'Готово',
	'PREPROCESS_STEP'			=> 'Извршавање пред-обрадних функција/задатака',
	'FILLING_TABLE'				=> 'Попуњавање табеле <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Попуњавање табела',
	'DB_ERR_INSERT'				=> 'Грешка током обрађивања <code>INSERT</code> задатка.',
	'DB_ERR_LAST'				=> 'Грешка током обрађивања <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Грешка током извршавања <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Грешка током извршавања <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Грешка током извршавања <code>SELECT</code> задатка.',
	'STEP_PERCENT_COMPLETED'	=> 'Корак <strong>%d</strong> од <strong>%d</strong>',
	'FINAL_STEP'				=> 'Завршни корак обраде',
	'SYNC_FORUMS'				=> 'Отпочињање синхронизације форума',
	'SYNC_POST_COUNT'			=> 'Синхронизација post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Синхронизација post_counts из <var>entry</var> %1$s у %2$s.',
	'SYNC_TOPICS'				=> 'Отпочињање синхронизације тема',
	'SYNC_TOPIC_ID'				=> 'Синхронизација тема из <var>topic_id</var> %1$s у %2$s.',
	'PROCESS_LAST'					=> 'Обрада последњих саопштења',
	'UPDATE_TOPICS_POSTED'		=> 'Прављење података о послатим темама',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Појавила се грешка током прављења података о послатим темама. Можете поново пробати овај корак у АКП након што се поступак пребацивања заврши.',
	'CONTINUE_LAST'				=> 'Наставак последњих саопштења',
	'CLEAN_VERIFY'				=> 'Чишћење и провера коначне структуре',
	'NOT_UNDERSTAND'			=> 'Немогуће је разумети %s #%d, табела %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Сукоб имена: %s и %s су оба<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Пребацивање завршено',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Сада сте успешно пребацили ваш форум у phpBB 3.3. Сада се можете пријавити и <a href="../">приступити вашем форуму</a>. Молимо проверите да ли су поставке успешно пребачене пре него што омогућите ваш форум брисањем фасцикле install. Имајте у виду да је помоћ за коришћење phpBB доступна преко <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Документације</a> и <a href="https://www.phpbb.com/community/viewforum.php?f=661">форума подршке</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP додавање прилога је омогућено на старом форуму. Молимо онемогућите поставку FTP додавања и проверите да ли је ваљана фасцикла за додавања изабрана, затим умножите све датотеке прилога и убаците их у ову нову веб приступачну фасциклу. Кад ово одрадите, поново покрените конвертор.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Нема доступних конфигурационих података за пребацивање.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Немогуће је добити податке приступа форуму.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Немогуће је добити категорије.',
	'CONV_ERROR_GET_CONFIG'				=> 'Не могу се добити подаци конфигурације вашег форума.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Немогуће је приступити/прочитати “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Немогуће је добити податке потврде групе.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Несклад у табели група је пронађен у add_bots() - морате да додате све посебне групе ако то радите ручно.',
	'CONV_ERROR_INSERT_BOT'				=> 'Немогуће је убацити бота у табелу корисника.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Немогуће је убацити бота у табелу ботова.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Немогуће је убацити корисника у user_group табелу.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Порука parser грешке',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Белешка за развијача: морате назначити $convertor[\'avatar_path\'] за коришћење %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Путања до изворног форума није назначена.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Белешка за развијача: морате назначити $convertor[\'avatar_gallery_path\'] за коришћење %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Група “%1$s” не може бити пронађена у %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Белешка за развијача: морате назначити $convertor[\'ranks_path\'] за коришћење %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Белешка за развијача: морате назначити $convertor[\'smilies_path\'] за коришћење %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Белешка за развијача: морате назначити $convertor[\'upload_path\'] за коришћење %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Немогуће је убацити/ажурирати поставку дозвола.',
	'CONV_ERROR_PM_COUNT'				=> 'Немогуће је одабрати фасциклу пп бројања.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Немогуће је убацити нови форум заменом старе категорије.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Немогуће је убацити нови форум заменом старог форума.',
	'CONV_ERROR_USER_ACCESS'			=> 'Немогуће је добити податке потврде корисника.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Погрешна група “%1$s” је одређена у %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Ова страница сабира податке неопходне за приступ изворном форуму. Унесите појединости базе вашег старог форума; конвертор неће мењати ништа у бази коју дате испод. Изворни форум треба да буде онемогућен да би пребацивање ишло како треба.',
	'CONV_SAVED_MESSAGES'				=> 'Сачуване поруке',

	'PRE_CONVERT_COMPLETE'			=> 'Сви кораци пред-пребацивање су успешно употпуњени. Сад можете покренути поступак пребацивања. Молимо имајте у виду да ћете можда морати да ручно урадите и подесите неке ствари. Након пребацивања, посебно проверите додељене дозволе, поново изградите ваш индекс претраге који није пребачен и такође се уверите да су датотеке умножене и убачене исправно, као на пример грбови и смајлићи.',
));
