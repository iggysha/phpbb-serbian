<?php
/**
*
* posting [Serbian]
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
	'ADD_ATTACHMENT'			=> 'Додај прилог',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ако желите да додате један или више прилога унесите појединости испод.',
	'ADD_FILE'					=> 'Додај датотеку',
	'ADD_POLL'					=> 'Додај гласање',
	'ADD_POLL_EXPLAIN'			=> 'Ако не желите да додате гласање у вашу тему оставите поља празна.',
	'ALREADY_DELETED'			=> 'Жао нам је али ова порука је већ обрисана.',
	'ATTACH_DISK_FULL'			=> 'Нема довољно места на диску за слање овог прилога.',
	'ATTACH_QUOTA_REACHED'		=> 'Жао нам је, али достигнуто је ограничење форума за прилоге.',
	'ATTACH_SIG'				=> 'Додај потпис (потписи се могу мењати преко ККП)',

	'BBCODE_A_HELP'				=> 'Линијски додат прилог: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Задебљан текст: [b]текст[/b]',
	'BBCODE_C_HELP'				=> 'Приказ кода: [code]код[/code]',
	'BBCODE_D_HELP'				=> 'Флеш: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Величина слова: [size=85]мали текст[/size]',
	'BBCODE_IS_OFF'				=> '%sББКод%s је <em>ИСКЉУЧЕН</em>',
	'BBCODE_IS_ON'				=> '%sББКод%s је <em>УКЉУЧЕН</em>',
	'BBCODE_I_HELP'				=> 'Искошен текст: [i]текст[/i]',
	'BBCODE_L_HELP'				=> 'Списак: [list][*]текст[/list]', 
	'BBCODE_LISTITEM_HELP'		=> 'Ставка списка: [*]текст',
	'BBCODE_O_HELP'				=> 'Уређени списак: e.g. [list=1][*]Приказ под један[/list] или [list=a][*]Приказ под а[/list]',
	'BBCODE_P_HELP'				=> 'Убаци слику: [img]http://url_слике[/img]',
	'BBCODE_Q_HELP'				=> 'Цитирај текст: [quote]текст[/quote]',
	'BBCODE_S_HELP'				=> 'Боја слова: [color=red]текст[/color]  Савет: можете такође користити color=#FF0000',
	'BBCODE_U_HELP'				=> 'Подвучен текст: [u]текст[/u]',
	'BBCODE_W_HELP'				=> 'Убаци URL: [url]http://url[/url] или [url=http://url]URL текст[/url]',
	'BBCODE_Y_HELP'				=> 'Списак: Додај ставку списка',
	'BUMP_ERROR'				=> 'Не можете погурати ову тему тако брзо после задње поруке.',

	'CANNOT_DELETE_REPLIED'		=> 'Жао нам је али можете брисати само поруке на које није одговорено.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Ова порука је закључана. Не можете више учитавати ту поруку.',
	'CANNOT_EDIT_TIME'			=> 'Не можете више учитавати или брисати ту поруку.',
	'CANNOT_POST_ANNOUNCE'		=> 'Жао нам је али не можете слати саопштења.',
	'CANNOT_POST_STICKY'		=> 'Жао нам је али не можете слати лепљиве теме.',
	'CHANGE_TOPIC_TO'			=> 'Промени тип теме у',
	'CLOSE_TAGS'				=> 'Затвори тагове',
	'CURRENT_TOPIC'				=> 'Тренутна тема',

	'DELETE_FILE'				=> 'Обриши датотеку',
	'DELETE_MESSAGE'			=> 'Обриши поруку',
	'DELETE_MESSAGE_CONFIRM'	=> 'Да ли сигурно желите да обришете ову поруку?',
	'DELETE_OWN_POSTS'			=> 'Жао нам је али можете брисати само ваше сопствене поруке.',
	'DELETE_POST_CONFIRM'		=> 'Да ли сигурно желите да обришете ову поруку?',
	'DELETE_POST_WARN'			=> 'Једном обрисана порука не може бити враћена',
	'DISABLE_BBCODE'			=> 'Онемогући ББКод',
	'DISABLE_MAGIC_URL'			=> 'Немој аутоматски прослеђивати URL',
	'DISABLE_SMILIES'			=> 'Онемогући смајлиће',
	'DISALLOWED_CONTENT'		=> 'Додавање је одбијено јер је додата датотека препозната као могући покушај напада.',
	'DISALLOWED_EXTENSION'		=> 'Екстензија %s није дозвољена.',
	'DRAFT_LOADED'				=> 'Нацрт је учитан у образац за писање, можда желите да сада завршите вашу поруку.<br />Ваш нацрт ће бити обрисан после слања ове поруке.',
	'DRAFT_LOADED_PM'			=> 'Нацрт је учитан у образац за писање, можда желите да сада завршите вашу приватну поруку.<br />Ваш нацрт ће бити обрисан после слања ове приватне поруке.',
	'DRAFT_SAVED'				=> 'Нацрт је успешно сачуван.',
	'DRAFT_TITLE'				=> 'Наслов нацрта',

	'EDIT_REASON'				=> 'Разлог за учитавање ове поруке',
	'EMPTY_FILEUPLOAD'			=> 'Додата датотека је празна.',
	'EMPTY_MESSAGE'				=> 'Морате унети поруку када је шаљете.',
	'EMPTY_REMOTE_DATA'			=> 'Датотека не може бити додата, молимо вас да покушате да додате датотеку ручно.',

	'FLASH_IS_OFF'				=> '[flash] је <em>ИСКЉУЧЕН</em>',
	'FLASH_IS_ON'				=> '[flash] је <em>УКЉУЧЕН</em>',
	'FLOOD_ERROR'				=> 'Не можете послати нову поруку тако брзо после ваше последње поруке.',
	'FONT_COLOR'				=> 'Боја слова',
	'FONT_COLOR_HIDE'			=> 'Сакриј боју слова',
	'FONT_HUGE'					=> 'Огромна',
	'FONT_LARGE'				=> 'Велика',
	'FONT_NORMAL'				=> 'Обична',
	'FONT_SIZE'					=> 'Величина слова',
	'FONT_SMALL'				=> 'Мала',
	'FONT_TINY'					=> 'Сићушна',

	'GENERAL_UPLOAD_ERROR'		=> 'Не могу да додам прилог у %s.',

	'IMAGES_ARE_OFF'			=> '[img] је <em>ИСКЉУЧЕН</em>',
	'IMAGES_ARE_ON'				=> '[img] је <em>УКЉУЧЕН</em>',
	'INVALID_FILENAME'			=> '%s је неисправно име датотеке.',

	'LOAD'						=> 'Учитај',
	'LOAD_DRAFT'				=> 'Учитај нацрт',
	'LOAD_DRAFT_EXPLAIN'		=> 'Овде можете да изаберете нацрт који желите да довршите. Ваша тренутна порука ће бити отказана, и сав тренутни садржај поруке ће бити обрисан. Прегледајте, учитавајте и бришите нацрте из ваше Корисничке Контролне Плоче.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Треба да се пријавите како бисте погурали теме у овом форуму.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Треба да се пријавите како бисте брисали поруке у овом форуму.',
	'LOGIN_EXPLAIN_POST'		=> 'Треба да се пријавите како бисте писали у овом форуму.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Треба да се пријавите како бисте цитирали поруке у овом форуму.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Треба да се пријавите како бисте одговарали на теме у овом форуму.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Можете користити слова највише до величине %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Ваше flash датотеке могу бити највише до %1$d пиксела високе.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Ваше flash датотеке могу бити највише до %1$d пиксела широке.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Ваше слике могу бити највише до %1$d пиксела високе.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Ваше слике могу бити највише до %1$d пиксела широке.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Унесите вашу поруку овде, порука може садржати не више од <strong>%d</strong> знакова.',
	'MESSAGE_DELETED'			=> 'Ова порука је успешно обрисана.',
	'MORE_SMILIES'				=> 'Преглед још смајлића',

	'NOTIFY_REPLY'				=> 'Обавести ме када одговор буде био послат',
	'NOT_UPLOADED'				=> 'Датотека се не може додати.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Не можете обрисати постојеће понуде гласања.',
	'NO_PM_ICON'				=> 'Без ПП иконице',
	'NO_POLL_TITLE'				=> 'Морате унети наслов гласања.',
	'NO_POST'					=> 'Тражена порука не постоји.',
	'NO_POST_MODE'				=> 'Нисте изабрали мод слања.',

	'PARTIAL_UPLOAD'			=> 'Додата датотека је само делимично додата.',
	'PHP_SIZE_NA'				=> 'Величина датотеке прилога је превелика.<br />Не могу да утврдим највећу величину одређену од PHP у php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Величина датотеке прилога је превелика, највећа величина датотеке за додавање је %1$d %2$s.<br />Молимо знајте да је ово подешено у php.ini и да се не може заобићи.',
	'PLACE_INLINE'				=> 'Постави линијски',
	'POLL_DELETE'				=> 'Обриши гласање',
	'POLL_FOR'					=> 'Покрени гласање за',
	'POLL_FOR_EXPLAIN'			=> 'Унесите 0 или оставите празно да се гласање никада не заврши.',
	'POLL_MAX_OPTIONS'			=> 'Понуда по кориснику',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Ово је број понуда које сваки корисник може да изабере када гласа.',
	'POLL_OPTIONS'				=> 'Понуде гласања',
	'POLL_OPTIONS_EXPLAIN'		=> 'Поставите сваку понуду у нови ред. Можете унети до <strong>%d</strong> понуда.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Поставите сваку понуду у нови ред. Можете унети до <strong>%d</strong> понуда. Уколико уклањате или додајете понуде сви претходни гласови ће бити обрисани.',
	'POLL_QUESTION'				=> 'Питање за гласање',
	'POLL_TITLE_TOO_LONG'		=> 'Наслов гласања мора садржати мање од 100 знакова.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Прослеђена величина наслова вашег гласања је превелика, размислите о уклањању ББКодова или смајлића.',
	'POLL_VOTE_CHANGE'			=> 'Дозволи поновно-гласање',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ако је омогућено корисници су у могућности да промене њихове гласове.',
	'POSTED_ATTACHMENTS'		=> 'Послати прилози',
	'POST_APPROVAL_NOTIFY'		=> 'Бићете обавештени када ваша порука буде одобрена.',
	'POST_CONFIRMATION'			=> 'Потврда слања',
	'POST_CONFIRM_EXPLAIN'		=> 'Да бисмо спречили аутоматске поруке форум захтева да унесете код за потврду. Овај код је приказан у слици коју би требало да видите испод. Ако не можете да прочитате код или сте на било који други начин онемогућени да разазнате текст кода молимо вас да се повежете са %sАдминистратором Форума%s.',
	'POST_DELETED'				=> 'Ова порука је успешно обрисана.',
	'POST_EDITED'				=> 'Ова порука је успешно учитана.',
	'POST_EDITED_MOD'			=> 'Ова порука је успешно учитана, али треба да буде одобрена од уредника пре него што постане јавно видљива.',
	'POST_GLOBAL'				=> 'Глобално',
	'POST_ICON'					=> 'Иконица поруке',
	'POST_NORMAL'				=> 'Обично',
	'POST_REVIEW'				=> 'Преглед поруке',
	'POST_REVIEW_EDIT'			=> 'Преглед поруке',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Ова порука је промењена од другог корисника док сте је ви учитавали. Можда желите да видите тренутну верзију ове поруке и прилагодите ваше измене.',
	'POST_REVIEW_EXPLAIN'		=> 'Најмање једна нова порука је послата у овој теми. Можда бисте волели да прегледате вашу поруку у светлу тога.',
	'POST_STORED'				=> 'Ова порука је успешно послата.',
	'POST_STORED_MOD'			=> 'Ова порука је успешно послата, али треба да буде одобрена од уредника пре него што постане јавно видљива.',
	'POST_TOPIC_AS'				=> 'Пошаљи тему као',
	'PROGRESS_BAR'				=> 'Показивач тока',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Можете уградити само %1$d цитата један у други.',

	'SAVE'						=> 'Сачувај',
	'SAVE_DATE'					=> 'Сачувано у',
	'SAVE_DRAFT'				=> 'Сачувај нацрт',
	'SAVE_DRAFT_CONFIRM'		=> 'Молимо знајте да сачувани нацрти садрже само наслов и текст поруке, док ће сви остали елементи бити уклоњени. Да ли сада желите да сачувате ваш нацрт?',
	'SMILIES'					=> 'Смајлићи',
	'SMILIES_ARE_OFF'			=> 'Смајлићи су <em>ИСКЉУЧЕНИ</em>',
	'SMILIES_ARE_ON'			=> 'Смајлићи су <em>УКЉУЧЕНИ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Лепљива/Саопштење временско ограничење',
	'STICK_TOPIC_FOR'			=> 'Љепљива тема за',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Унесите 0 или оставите празно за Лепљиву/Саопштење које се никада не завршава. Молимо знајте да је овај број у односу са датумом поруке.',
	'STYLES_TIP'				=> 'Савет: Стилови могу брзо бити примењени на изабрани текст.',

	'TOO_FEW_CHARS'				=> 'Ваша порука садржи премало знакова.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Ваша порука садржи %1$d знакова. Најмањи број знакова који треба да унесете је %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Морате унети бар две понуде за гласање.',
	'TOO_MANY_ATTACHMENTS'		=> 'Не могу да додам други прилог, %d је највише.',
	'TOO_MANY_CHARS'			=> 'Ваша порука садржи превише знакова.',
	'TOO_MANY_CHARS_POST'		=> 'Ваша порука садржи %1$d знакова. Највећи број дозвољених знакова је %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Ваш потпис садржи %1$d знакова. Највећи број дозвољених знакова је %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Покушали сте да унесете превише понуда за гласање.',
	'TOO_MANY_SMILIES'			=> 'Ваша порука садржи превише смајлића. Највише %d смајлића је дозвољено.',
	'TOO_MANY_URLS'				=> 'Ваша порука садржи превише URL. Највише %d URL је дозвољено.',
	'TOO_MANY_USER_OPTIONS'		=> 'Не можете одредити више понуда по кориснику од постојећих понуда гласања.',
	'TOPIC_BUMPED'				=> 'Тема је успешно погурана.',

	'UNAUTHORISED_BBCODE'		=> 'Не можете користити одређене ББКодове: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Како бисте променили ову тему из глобалне у обичну, треба да изаберете форум у којем желите да ова тема буде приказана.',
	'UPDATE_COMMENT'			=> 'Ажурирај коментар',
	'URL_INVALID'				=> 'URL који сте унели је неисправан.',
	'URL_NOT_FOUND'				=> 'Одабрана датотека не може бити пронађена.',
	'URL_IS_OFF'				=> '[url] је <em>ИСКЉУЧЕН</em>',
	'URL_IS_ON'					=> '[url] је <em>УКЉУЧЕН</em>',
	'USER_CANNOT_BUMP'			=> 'Не можете гурати теме у овом форуму.',
	'USER_CANNOT_DELETE'		=> 'Не можете брисати поруке у овом форуму.',
	'USER_CANNOT_EDIT'			=> 'Не можете учитавати поруке у овом форуму.',
	'USER_CANNOT_REPLY'			=> 'Не можете одговарати у овом форуму.',
	'USER_CANNOT_FORUM_POST'	=> 'Не можете извршавати поступке слања у овом форуму јер овај тип форума то не подржава.',

	'VIEW_MESSAGE'				=> '%sПреглед ваше поруке%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sПреглед ваше приватне поруке%s',

	'WRONG_FILESIZE'			=> 'Датотека је превелика, највећа дозвољена величина је %1d %2s.',
	'WRONG_SIZE'				=> 'Слика мора бити бар %1$d пиксела широка, %2$d пиксела висока а највише %3$d пиксела широка и %4$d пиксела висока. Послата слика је %5$d пиксела широка и %6$d пиксела висока.',
));

?>