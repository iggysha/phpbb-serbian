<?php
/**
*
* acp_styles [Serbian]
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

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Комплети слика садрже слике за сву дугмад, форуме, фасцикле, итд. и друге невезане за-стил слике коришћене од форума. Овде можете учитати, извести или обрисати постојеће комплете слика и увести или активирати нове комплете.',
	'ACP_STYLES_EXPLAIN'	=> 'Овде можете управљати доступним стиловима на Вашем форуму. Стил садржи предложак, тему и комплет слика. Можете мењати постојеће стилове, обрисати, деактивирати, реактивирати, направити или увести нове. Можете такође видети како ће стил да изгледа користећи функцију прегледа. Тренутни задати стил је обележен присуством звездице (*). Такође је приказан списак укупног броја корисника за сваки стил, молимо знајте да преписивање преко корисниковог стила неће бити одражено овде.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Комплет предложака садржи сва обележја коришћена да се изведе изглед Вашег форума. Овде можете учитавати, брисати, извозити, увозити и прегледати постојеће комплете предложака. Можете такође изменити код предлошка коришћен за извођење ББКода.',
	'ACP_THEMES_EXPLAIN'	=> 'Одавде можете правити, инсталирати, учитати, обрисати и извести теме. Тема је комбинација боја и слика која се примењује на Ваше предлошке да одреде основни изглед Вашег форума. Опсег поставки које су Вам отворене зависи од конфигурације Вашег сервера и phpBB инсталације, погледајте упутство за више појединости. Молимо знајте да када правите нове теме можете по избору користити постојеће као основу.',
	'ADD_IMAGESET'			=> 'Направи комплет слика',
	'ADD_IMAGESET_EXPLAIN'	=> 'Овде можете направити нови комплет слика. У зависности од конфигурације Вашег сервера и дозвола датотека можете имати додатне могућности овде. На пример можете бити у могућности да овај комплет слика оснујете на постојећем. Можете такође бити у могућности да додате или увезете (из store фасцикле) архиву комплета слика. Уколико додате или увезете архиву назив комплета слика може бити по избору узет из имена архиве (да бисте ово урадили оставите празно за назив комплета слика).',
	'ADD_STYLE'				=> 'Направи стил',
	'ADD_STYLE_EXPLAIN'		=> 'Овде можете направити нови стил. У зависности од конфигурације Вашег сервера и дозвола датотека можете имати додатне могућности овде. На пример можете бити у могућности да овај стил оснујете на постојећем. Такође можете бити у могућности да додате или увезете (из store фасцикле) архиву стила. Уколико додате или увезете архиву назив стила ће бити одређен аутоматски.',
	'ADD_TEMPLATE'			=> 'Направи предложак',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Овде можете додати нови предложак. У зависности од конфигурације Вашег сервера и дозвола датотека можете имати додатне могућности овде. На пример можете бити у могућности да овај комплет предложака оснујете на постојећем. Такође можете бити у могућности да додате или увезете (из store фасцикле) архиву предложака. Уколико додате или увезете архиву назив предлошка може бити по избору узет из имена архиве (да бисте ово урадили оставите празно за назив предлошка).',
	'ADD_THEME'				=> 'Направи тему',
	'ADD_THEME_EXPLAIN'		=> 'Овде можете додати нову тему. У зависности од конфигурације Вашег сервера и дозвола датотека можете имати додатне могућности овде. На пример можете бити у могућности да ову тему оснујете на постојећој. Такође можете бити у могућности да додате или увезете (из store фасцикле) архиву теме. Уколико додате или увезете архиву назив теме може бити по избору узет из имена архиве (да бисте ово урадили оставите празно за назив теме).',
	'ARCHIVE_FORMAT'		=> 'Тип датотеке архиве',
	'AUTOMATIC_EXPLAIN'		=> 'Оставите празно за покушај аутоматског проналажења.',

	'BACKGROUND'			=> 'Позадина',
	'BACKGROUND_COLOUR'		=> 'Боја позадине',
	'BACKGROUND_IMAGE'		=> 'Слика позадине',
	'BACKGROUND_REPEAT'		=> 'Понављање позадине',
	'BOLD'					=> 'Задебљано',

	'CACHE'							=> 'Кеш',
	'CACHE_CACHED'					=> 'Кеширано',
	'CACHE_FILENAME'				=> 'Датотека предлошка',
	'CACHE_FILESIZE'				=> 'Величина датотеке',
	'CACHE_MODIFIED'				=> 'Измењено',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Да ли сигурно желите да освежите све податке комплета слика? Поставке из конфигурационе датотеке комплета слика ће преписати преко свих измена на комплету слика које су направљене са уређивачем комплета слика.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Да ли сигурно желите да обришете све кеширане верзије Ваших датотека предложака?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Да ли сигурно желите да освежите све податке предлошка сачуване у бази са садржајем датотека предлошка у систему датотека? Ово ће преписати преко свих измена које су направљене са уређивачем предложака док је предложак био сачуван у бази.',
	'CONFIRM_THEME_REFRESH'			=> 'Да ли сигурно желите да освежите податке теме сачуване у бази са садржајем теме у систему датотека? Ово ће преписати преко свих измена које су направљене са уређивачем теме док је тема била сачувана у бази.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Направи нови комплет слика',
	'CREATE_STYLE'					=> 'Направи нови стил',
	'CREATE_TEMPLATE'				=> 'Направи нови комплет предложака',
	'CREATE_THEME'					=> 'Направи нову тему',
	'CURRENT_IMAGE'					=> 'Тренутна слика',

	'DEACTIVATE_DEFAULT'		=> 'Не можете деактивирати задати стил.',
	'DELETE_FROM_FS'			=> 'Обриши из система датотека',
	'DELETE_IMAGESET'			=> 'Обриши комплет слика',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Овде можете уклонити изабрани комплет слика из базе. Додатно, уколико имате дозволу можете изабрати да уклоните комплет из система датотека. Молимо знајте да нема могућности повратка. Када је комплет слика обрисан заувек је нестао. Препоручљиво је да претходно прво извезете Ваш комплет због могуће будуће употребе.',
	'DELETE_STYLE'				=> 'Обриши стил',
	'DELETE_STYLE_EXPLAIN'		=> 'Овде можете уклонити изабрани стил. Не можете уклонити све елементе стила одавде. Они морају бити уклоњени појединачно преко њихових одговарајућих образаца. Пазите када бришете стилове јер немате могућност да их повратите.',
	'DELETE_TEMPLATE'			=> 'Обриши предложак',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Овде можете уклонити изабрани комплет предложака из базе. Додатно, уколико имате дозволу можете изабрати да уклоните комплет из система датотека. Молимо знајте да нема могућности повратка. Када су предлошци обрисани заувек су нестали. Препоручљиво је да претходно прво извезете Ваш комплет због могуће будуће употребе.',
	'DELETE_THEME'				=> 'Обриши тему',
	'DELETE_THEME_EXPLAIN'		=> 'Овде можете уклонити изабрану тему из базе. Додатно, уколико имате дозволу можете изабрати да уклоните тему из система датотека. Молимо знајте да нема могућности повратка. Када је тема обрисана заувек је нестала. Препоручљиво је да претходно прво извезете Вашу тему због могуће будуће употребе.',
	'DETAILS'					=> 'Појединости',
	'DIMENSIONS_EXPLAIN'		=> 'Одабиром да овде биће укључени ширина/висина параметри.',


	'EDIT_DETAILS_IMAGESET'				=> 'Учитај појединости комплета слика',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Овде можете да учитате одређене појединости комплета слика као и његово име.',
	'EDIT_DETAILS_STYLE'				=> 'Учитај стил',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Користећи образац испод можете изменити овај постојећи стил. Можете изменити комбинацију предложака, теме и комплета слика што само по себи одређује стил. Можете такође подесити тај стил као задати.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Учитај појединости предлошка',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Овде можете да учитате одређене појединости предлошка као што је његово име. Можете такође имати могућност да пребаците складиштење stylesheet из система датотека у базу и обратно. Ова могућност зависи од Ваше PHP конфигурације и да ли је Ваш комплет предложака уписљив од веб сервера.',
	'EDIT_DETAILS_THEME'				=> 'Учитај појединости теме',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Овде можете да учитате одређене појединости теме као што је њено име. Можете такође имати могућност да пребаците складиштење stylesheet из система датотека у базу и обратно. Ова могућност зависи од Ваше PHP конфигурације и да ли је Ваш stylesheet уписљив од веб сервера.',
	'EDIT_IMAGESET'						=> 'Учитај комплет слика',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Овде можете учитати појединачне слике које одређују комплет слика. Можете такође назначити димензије слике. Димензије су по избору, одређивање димензија може решити одређене сметње у излагању код неких прегледача. Уколико не одредите димензије незнатно смањујете величину базе.',
	'EDIT_TEMPLATE'						=> 'Учитај предложак',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Овде можете учитати Ваш комплет предложака непосредно. Молимо знајте да су ове измене трајне и да се не могу повратити када се једном прихвате. Уколико PHP може да уписује у датотеке предложака у Вашој styles фасцикли било какве измене ће бити уписане непосредно у те датотеке. Уколико PHP не може да уписује у те датотеке оне ће бити копиране у базу и све измене ће се одражавати само тамо. Молимо Вас да будете опрезни када учитавате Ваш комплет предложака, не заборавите да затворите све променљиве {XXXX} и саопштења.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Датотека предлошка није уписљива тако да је комплет предложака сада сачуван у бази и садржи измењену датотеку.',
	'EDIT_THEME'						=> 'Учитај тему',
	'EDIT_THEME_EXPLAIN'				=> 'Овде можете да учитате изабрану тему, мењате боје, слике, итд.',
	'EDIT_THEME_STORED_DB'				=> 'Датотека stylesheet није уписљива тако да је stylesheet сада сачуван у бази и садржи Вашу измену.',
	'EDIT_THEME_STORE_PARSED'			=> 'Тема захтева да њен stylesheet буде прослеђен. Ово је могуће само уколико је сачуван у бази.',
	'EDITOR_DISABLED'					=> 'Уређивач предложака је онемогућен.',
	'EXPORT'							=> 'Извоз',

	'FOREGROUND'			=> 'Предња страна',
	'FONT_COLOUR'			=> 'Боја слова',
	'FONT_FACE'				=> 'Лик слова',
	'FONT_FACE_EXPLAIN'		=> 'Moжете одредити вишеструке облике слова одвојене зарезом. Ако корисник нема први облик слова инсталиран први следећи облик слова који ради ће бити изабран.',
	'FONT_SIZE'				=> 'Величина слова',

	'GLOBAL_IMAGES'			=> 'Глобално',

	'HIDE_CSS'				=> 'Сакриј сирови CSS',

	'IMAGE_WIDTH'				=> 'Ширина слике',
	'IMAGE_HEIGHT'				=> 'Висина слике',
	'IMAGE'						=> 'Слика',
	'IMAGE_NAME'				=> 'Назив слике',
	'IMAGE_PARAMETER'			=> 'Параметар',
	'IMAGE_VALUE'				=> 'Вредност',
	'IMAGESET_ADDED'			=> 'Нови комплет слика је додат у систем датотека.',
	'IMAGESET_ADDED_DB'			=> 'Нови комплет слика је додат у базу.',
	'IMAGESET_DELETED'			=> 'Комплет слика је успешно обрисан.',
	'IMAGESET_DELETED_FS'		=> 'Комплет слика је уклоњен из базе али неке датотеке су можда заостале у систему датотека.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Појединости комплета слика су успешно ажуриране.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Молимо Вас да изаберете начин архивирања.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Copyright не може да буде дужи од 60 знакова.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Назив комплета слика може да садржи само алфанумеричке знакове, -, +, _ и размак.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Комплет слика са тим називом већ постоји.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Назив комплета слика не може бити дужи од 30 знакова.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Архива коју сте изабрали не садржи исправан комплет слика.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Морате унети назив за овај комплет слика.',
	'IMAGESET_EXPORT'			=> 'Извези комплет слика',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Овде можете извести комплет слика у облику архиве. Ова архива ће садржати све податке потребне да се комплет слика инсталира на неком другом форуму. Можете изабрати да ли ћете преузети датотеку непосредно или да је сместите у store фасциклу за касније преузимање или преко FTP.',
	'IMAGESET_EXPORTED'			=> 'Комплет слика је успешно извезен и сачуван у %s.',
	'IMAGESET_NAME'				=> 'Назив комплета слика',
	'IMAGESET_REFRESHED'		=> 'Комплет слика је успешно освежен.',
	'IMAGESET_UPDATED'			=> 'Комплет слика је успешно ажуриран.',
	'ITALIC'					=> 'Искошено',

	'IMG_CAT_BUTTONS'		=> 'Локализована дугмад',
	'IMG_CAT_CUSTOM'		=> 'Властите слике',
	'IMG_CAT_FOLDERS'		=> 'Иконице тема',
	'IMG_CAT_FORUMS'		=> 'Иконице форума',
	'IMG_CAT_ICONS'			=> 'Опште иконице',
	'IMG_CAT_LOGOS'			=> 'Логои',
	'IMG_CAT_POLLS'			=> 'Слике за гласања',
	'IMG_CAT_UI'			=> 'Општи елементи корисничког окружења',
	'IMG_CAT_USER'			=> 'Додатне слике',

	'IMG_SITE_LOGO'			=> 'Главни лого',
	'IMG_UPLOAD_BAR'		=> 'Показивач додавања',
	'IMG_POLL_LEFT'			=> 'Леви завршетак гласања',
	'IMG_POLL_CENTER'		=> 'Центар гласања',
	'IMG_POLL_RIGHT'		=> 'Десни завршетак гласања',
	'IMG_ICON_FRIEND'		=> 'Додај као пријатеља',
	'IMG_ICON_FOE'			=> 'Додај за игнорисање',

	'IMG_FORUM_LINK'			=> 'Веза форума',
	'IMG_FORUM_READ'			=> 'Форум',
	'IMG_FORUM_READ_LOCKED'		=> 'Закључан форум',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Подфорум',
	'IMG_FORUM_UNREAD'			=> 'Нове поруке на форуму',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Закључане нове поруке форума',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Нове поруке подфорума',
	'IMG_SUBFORUM_READ'			=> 'Легенда подфорума',
	'IMG_SUBFORUM_UNREAD'		=> 'Нове поруке у легенди подфорума',

	'IMG_TOPIC_MOVED'			=> 'Померена тема',

	'IMG_TOPIC_READ'				=> 'Тема',
	'IMG_TOPIC_READ_MINE'			=> 'Послата тема',
	'IMG_TOPIC_READ_HOT'			=> 'Популарна тема',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Послата популарна тема',
	'IMG_TOPIC_READ_LOCKED'			=> 'Закључана тама',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Послата закључана тема',

	'IMG_TOPIC_UNREAD'				=> 'Нове поруке у теми',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Послата нова тема',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Нове поруке у популарној теми',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Послата нова популарна тема',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Закључана нова тема',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Послата нова закључана тема',

	'IMG_STICKY_READ'				=> 'Лепљива тема',
	'IMG_STICKY_READ_MINE'			=> 'Послата лепљива тема',
	'IMG_STICKY_READ_LOCKED'		=> 'Закључана лепљива тема',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Послата лепљива закључана тема',
	'IMG_STICKY_UNREAD'				=> 'Нове поруке у лепљивој теми',
	'IMG_STICKY_UNREAD_MINE'		=> 'Нова лепљива тема',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Закључане нове поруке у лепљивој теми',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Послата нова закључана лепљива тема',

	'IMG_ANNOUNCE_READ'					=> 'Саопштење',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Послато саопштење',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Закључано саопштење',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Послато закључано саопштење',
	'IMG_ANNOUNCE_UNREAD'				=> 'Нове поруке саопштења',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Послато ново саопштење',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Нове поруке у закључаном саопштењу',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Послато ново закључано саопштење',

	'IMG_GLOBAL_READ'					=> 'Глобално',
	'IMG_GLOBAL_READ_MINE'				=> 'Послато глобално',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Закључано глобално',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Послато закључано глобално',
	'IMG_GLOBAL_UNREAD'					=> 'Нове поруке у глобално',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Послато ново глобално',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Нове поруке у глобално закључано',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Послато у ново закључано глобално',

	'IMG_PM_READ'		=> 'Прочитане приватне поруке',
	'IMG_PM_UNREAD'		=> 'Непрочитане приватне поруке',

	'IMG_ICON_BACK_TOP'		=> 'Врх',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Пошаљи e-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Пошаљи поруку',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Веб страница',

	'IMG_ICON_POST_DELETE'			=> 'Обриши поруку',
	'IMG_ICON_POST_EDIT'			=> 'Учитај поруку',
	'IMG_ICON_POST_INFO'			=> 'Прикажи појединости поруке',
	'IMG_ICON_POST_QUOTE'			=> 'Цитирај поруку',
	'IMG_ICON_POST_REPORT'			=> 'Пријави поруку',
	'IMG_ICON_POST_TARGET'			=> 'Минипост',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Нови минипост',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Прилог',
	'IMG_ICON_TOPIC_LATEST'			=> 'Задња порука',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Последња непрочитана порука',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Порука пријављена',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Порука није одобрена',

	'IMG_ICON_USER_ONLINE'		=> 'Корисник је На вези',
	'IMG_ICON_USER_OFFLINE'		=> 'Корисник није На вези',
	'IMG_ICON_USER_PROFILE'		=> 'Прикажи профил',
	'IMG_ICON_USER_SEARCH'		=> 'Претражи поруке',
	'IMG_ICON_USER_WARN'		=> 'Опомени корисника',

	'IMG_BUTTON_PM_FORWARD'		=> 'Проследи приватну поруку',
	'IMG_BUTTON_PM_NEW'			=> 'Нова приватна порука',
	'IMG_BUTTON_PM_REPLY'		=> 'Одговор на приватну поруку',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Закључана тема',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Нова тема',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Одговор на тему',

	'IMG_USER_ICON1'		=> 'Кориснички одређена слика 1',
	'IMG_USER_ICON2'		=> 'Кориснички одређена слика 2',
	'IMG_USER_ICON3'		=> 'Кориснички одређена слика 3',
	'IMG_USER_ICON4'		=> 'Кориснички одређена слика 4',
	'IMG_USER_ICON5'		=> 'Кориснички одређена слика 5',
	'IMG_USER_ICON6'		=> 'Кориснички одређена слика 6',
	'IMG_USER_ICON7'		=> 'Кориснички одређена слика 7',
	'IMG_USER_ICON8'		=> 'Кориснички одређена слика 8',
	'IMG_USER_ICON9'		=> 'Кориснички одређена слика 9',
	'IMG_USER_ICON10'		=> 'Кориснички одређена слика 10',

	'INCLUDE_DIMENSIONS'		=> 'Укључи димензије',
	'INCLUDE_IMAGESET'			=> 'Укључи комплет слика',
	'INCLUDE_TEMPLATE'			=> 'Укључи предложак',
	'INCLUDE_THEME'				=> 'Укључи тему',
	'INHERITING_FROM'			=> 'Наслеђује од',
	'INSTALL_IMAGESET'			=> 'Инсталирај комплет слика',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Овде можете инсталирати Ваш изабрани комплет слика. Можете учитати одређене појединости уколико желите или да користите задато инсталацијом.',
	'INSTALL_STYLE'				=> 'Инсталирај стил',
	'INSTALL_STYLE_EXPLAIN'		=> 'Овде можете инсталирати нови стил а уколико постоје и одговарајуће елементе стила. Уколико већ имате одговарајуће елементе стила инсталиране преко њих неће бити преписано. Неким стиловима су потребни инсталирани постојећи елементи стила. Уколико покушате да инсталирате такав стил и немате потребне елементе бићете обавештени.',
	'INSTALL_TEMPLATE'			=> 'Инсталирај предложак',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Овде можете инсталирати нови комплет предложака. У зависности од конфигурације Вашег сервера можете имати неколико могућности овде.',
	'INSTALL_THEME'				=> 'Инсталирај тему',
	'INSTALL_THEME_EXPLAIN'		=> 'Овде можете инсталирати Вашу изабрану тему. Можете учитати одређене појединости уколико желите или да користите задато инсталацијом.',
	'INSTALLED_IMAGESET'		=> 'Инсталирани комплети слика',
	'INSTALLED_STYLE'			=> 'Инсталирани стилови',
	'INSTALLED_TEMPLATE'		=> 'Инсталирани предлошци',
	'INSTALLED_THEME'			=> 'Инсталиране теме',

	'LINE_SPACING'				=> 'Размак између редова',
	'LOCALISED_IMAGES'			=> 'Локализовано',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Ова поставка је наслеђена и не може бити промењена.',


	'NO_CLASS'					=> 'Не могу да пронађем класу у stylesheet.',
	'NO_IMAGESET'				=> 'Не могу да пронађем комплет слика у систему датотека.',
	'NO_IMAGE'					=> 'Нема слике',
	'NO_IMAGE_ERROR'			=> 'Не могу да пронађем слику у систему датотека.',
	'NO_STYLE'					=> 'Не могу да пронађем стил у систему датотека.',
	'NO_TEMPLATE'				=> 'Не могу да пронађем предложак у систему датотека.',
	'NO_THEME'					=> 'Не могу да пронађем тему у систему датотека.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Нису откривени деинсталирани комплети слика.',
	'NO_UNINSTALLED_STYLE'		=> 'Нису откривени деинсталирани стилови.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Нису откривени деинсталирани предлошци.',
	'NO_UNINSTALLED_THEME'		=> 'Нису откривене деинсталиране теме.',
	'NO_UNIT'					=> 'Ништа',

	'ONLY_IMAGESET'			=> 'Ово је једини преостали комплет слика, не можете га обрисати.',
	'ONLY_STYLE'			=> 'Ово је једини преостали стил, не можете га обрисати.',
	'ONLY_TEMPLATE'			=> 'Ово је једини преостали комплет предложака, не можете га обрисати.',
	'ONLY_THEME'			=> 'Ово је једина преостала тема, не можете је обрисати.',
	'OPTIONAL_BASIS'		=> 'Основе по избору',

	'REFRESH'					=> 'Освежи',
	'REPEAT_NO'					=> 'Ништа',
	'REPEAT_X'					=> 'Само водоравно',
	'REPEAT_Y'					=> 'Само усправно',
	'REPEAT_ALL'				=> 'Оба смера',
	'REPLACE_IMAGESET'			=> 'Замени комплет слика са',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Овај комплет слика ће заменити онај који бришете у свим стиловима који га користе.',
	'REPLACE_STYLE'				=> 'Замени стил са',
	'REPLACE_STYLE_EXPLAIN'		=> 'Овај стил ће заменити обрисани за све чланове који га користе.',
	'REPLACE_TEMPLATE'			=> 'Замени предложак са',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Овај комплет предложака ће заменити онај који бришете у свим стиловима који га користе.',
	'REPLACE_THEME'				=> 'Замени тему са',
	'REPLACE_THEME_EXPLAIN'		=> 'Ова тема ће заменити ону коју бришете у свим стиловима који је користе.',
	'REQUIRES_IMAGESET'			=> 'Овом стилу треба %s комплет слика да буде инсталиран.',
	'REQUIRES_TEMPLATE'			=> 'Овом стилу треба %s комплет предложака да буде инсталиран.',
	'REQUIRES_THEME'			=> 'Овом стилу треба %s тема да буде инсталирана.',

	'SELECT_IMAGE'				=> 'Изабери слику',
	'SELECT_TEMPLATE'			=> 'Изабери датотеку предлошка',
	'SELECT_THEME'				=> 'Изабери датотеку теме',
	'SELECTED_IMAGE'			=> 'Одабрана слика',
	'SELECTED_IMAGESET'			=> 'Одабран комплет слика',
	'SELECTED_TEMPLATE'			=> 'Одабран предложак',
	'SELECTED_TEMPLATE_FILE'	=> 'Одабрана датотека предлошка',
	'SELECTED_THEME'			=> 'Одабрана тема',
	'SELECTED_THEME_FILE'		=> 'Одабрана датотека теме',
	'STORE_DATABASE'			=> 'База',
	'STORE_FILESYSTEM'			=> 'Систем датотека',
	'STYLE_ACTIVATE'			=> 'Активирајте',
	'STYLE_ACTIVE'				=> 'Активно',
	'STYLE_ADDED'				=> 'Стил је успешно додат.',
	'STYLE_DEACTIVATE'			=> 'Деактивирај',
	'STYLE_DEFAULT'				=> 'Постави као задати стил',
	'STYLE_DELETED'				=> 'Стил је успешно обрисан.',
	'STYLE_DETAILS_UPDATED'		=> 'Стил је успешно ажуриран.',
	'STYLE_ERR_ARCHIVE'			=> 'Молимо изаберите начин архивирања.',
	'STYLE_ERR_COPY_LONG'		=> 'Copyright не може бити дужи од 60 знакова.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Морате изабрати најмање један елемент стила.',
	'STYLE_ERR_NAME_CHARS'		=> 'Назив стила може да садржи само алфанумеричке знакове, -, +, _ и размак.',
	'STYLE_ERR_NAME_EXIST'		=> 'Стил са тим називом већ постоји.',
	'STYLE_ERR_NAME_LONG'		=> 'Назив стила не може бити дужи од 30 знакова.',
	'STYLE_ERR_NO_IDS'			=> 'Морате изабрати предложак, тему и комплет слика за овај стил.',
	'STYLE_ERR_NOT_STYLE'		=> 'Увезена или додата датотека не садржи исправну архиву стила.',
	'STYLE_ERR_STYLE_NAME'		=> 'Морате унети назив за овај стил.',
	'STYLE_EXPORT'				=> 'Извези стил',
	'STYLE_EXPORT_EXPLAIN'		=> 'Овде можете извести стил у облику архиве. Стил не мора да садржи све елементе али мора да садржи бар један. На пример уколико сте направили нову тему и комплет слика за обично коришћен предложак можете једноставно извести тему и комплет слика а изоставити предложак. Можете да изаберете да преузмете датотеку непосредно или да је ставите у store фасциклу за касније преузимање или преко FTP.',
	'STYLE_EXPORTED'			=> 'Стил је успешно извезен и сачуван у %s.',
	'STYLE_IMAGESET'			=> 'Комплети слика',
	'STYLE_NAME'				=> 'Назив стила',
	'STYLE_TEMPLATE'			=> 'Предложак',
	'STYLE_THEME'				=> 'Тема',
	'STYLE_USED_BY'				=> 'Коришћено од (укључујући роботе)',

	'TEMPLATE_ADDED'			=> 'Комплет предложака додат и сачуван у систему датотека.',
	'TEMPLATE_ADDED_DB'			=> 'Комплет предложака додат и сачуван у бази.',
	'TEMPLATE_CACHE'			=> 'Кеш предложака',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'По задатом phpBB кешира састављену верзију предложака. Ово смањује оптерећење сервера сваки пут када се страница прегледа и према томе може да смањи време извођења странице. Овде можете прегледати статус кеша сваке датотеке и обрисати појединачне датотеке или кеш у потпуности.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Кеш предложака је успешно обрисан.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Нема кешираних предложака.',
	'TEMPLATE_DELETED'			=> 'Комплет предложака је успешно обрисан.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Комплет предложака не може бити обрисан пошто има један или више других комплета предложака који наслеђују од њега:',
	'TEMPLATE_DELETED_FS'		=> 'Комплет предложака је уклоњен из базе али су неке датотеке можда заостале у систему датотека.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Појединости предлошка су успешно ажуриране.',
	'TEMPLATE_EDITOR'			=> 'Сирови HTML уређивач предложака',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Висина уређивача предложака',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Молимо Вас да изаберете начин архивирања.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Кеш фасцикла коришћена за чување кеширане верзије датотека предложака не може бити отворена.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Copyright не може бити дужи од 60 знакова.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Назив предлошка може да садржи само алфанумеричке знакове, -, +, _ и размак.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Комплет предложака са тим називом већ постоји.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Назив предлошка не може бити дужи од 30 знакова.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Архива коју сте изабрали не садржи исправан комплет предложака.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Нови комплет предложака тражи да предложак %s буде инсталиран и не наслеђује самог себе.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Морате унети име за овај предложак.',
	'TEMPLATE_EXPORT'			=> 'Извези предлошке',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Овде можете извести комплет предложака у облику архиве. Ова архива ће садржати све датотеке потребне за инсталацију предложака на други форум. Можете изабрати да непосредно преузмете датотеку или да je сачувате у Вашу store фасциклу за касније преузимање или преко FTP.',
	'TEMPLATE_EXPORTED'			=> 'Предлошци су успешно извезени и сачувани у %s.',
	'TEMPLATE_FILE'				=> 'Датотека предлошка',
	'TEMPLATE_FILE_UPDATED'		=> 'Датотека предлошка је успешно ажурирана.',
	'TEMPLATE_INHERITS'			=> 'Овај комплет предложака наслеђује од %s и зато не може имати различиту поставку чувања од његовог вишег предлошка.',
	'TEMPLATE_LOCATION'			=> 'Сачувај предлошке у',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Слике су увек похрањене у систему датотека.',
	'TEMPLATE_NAME'				=> 'Назив предлошка',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Немогућ је упис у датотеку предлошка %s. Молимо проверите дозволе за фасциклу и датотеке.',
	'TEMPLATE_REFRESHED'		=> 'Предложак је успешно освежен.',

	'THEME_ADDED'				=> 'Нова тема је додата у систем датотека.',
	'THEME_ADDED_DB'			=> 'Нова тема је додата у базу.',
	'THEME_CLASS_ADDED'			=> 'Властита класа је успешно додата.',
	'THEME_DELETED'				=> 'Тема је успешно обрисана.',
	'THEME_DELETED_FS'			=> 'Тема је уклоњена из базе али су датотеке заостале у систему датотека.',
	'THEME_DETAILS_UPDATED'		=> 'Појединости теме су успешно ажуриране.',
	'THEME_EDITOR'				=> 'Уређивач теме',
	'THEME_EDITOR_HEIGHT'		=> 'Висина уређивача теме',
	'THEME_ERR_ARCHIVE'			=> 'Молимо изаберите начин архивирања.',
	'THEME_ERR_CLASS_CHARS'		=> 'Само алфанумерички знакови плус ., :, -, _ и # су исправни у називима класа.',
	'THEME_ERR_COPY_LONG'		=> 'Copyright не може бити дужи од 60 знакова.',
	'THEME_ERR_NAME_CHARS'		=> 'Назив теме може да садржи само алфанумеричке знакове, -, +, _ и размак.',
	'THEME_ERR_NAME_EXIST'		=> 'Тема са тим називом већ постоји.',
	'THEME_ERR_NAME_LONG'		=> 'Назив теме не може бити дужи од 30 знакова.',
	'THEME_ERR_NOT_THEME'		=> 'Архива коју сте изабрали не садржи исправну тему.',
	'THEME_ERR_REFRESH_FS'		=> 'Ова тема је сачувана у систему датотека тако да нема потребе да је освежавате.',
	'THEME_ERR_STYLE_NAME'		=> 'Морате унети назив за ову тему.',
	'THEME_FILE'				=> 'Датотека теме',
	'THEME_EXPORT'				=> 'Извези тему',
	'THEME_EXPORT_EXPLAIN'		=> 'Овде можете извести тему у облику архиве. Ова архива ће садржати све податке потребне да се тема инсталира на други форум. Можете изабрати да непосредно преузмете датотеку или да je сачувате у Вашу store фасциклу за касније преузимање или преко FTP.',
	'THEME_EXPORTED'			=> 'Тема је успешно извезена и сачувана у %s.',
	'THEME_LOCATION'			=> 'Сачувај stylesheet у',
	'THEME_LOCATION_EXPLAIN'	=> 'Слике су увек похрањене у систему датотека.',
	'THEME_NAME'				=> 'Назив теме',
	'THEME_REFRESHED'			=> 'Тема је успешно освежена.',
	'THEME_UPDATED'				=> 'Тема је успешно ажурирана.',

	'UNDERLINE'				=> 'Подвучено',
	'UNINSTALLED_IMAGESET'	=> 'Деинсталирани комплети слика',
	'UNINSTALLED_STYLE'		=> 'Деинсталирани стилови',
	'UNINSTALLED_TEMPLATE'	=> 'Деинсталирани предлошци',
	'UNINSTALLED_THEME'		=> 'Деинсталиране теме',
	'UNSET'					=> 'Неодређено',

));

?>