<?php
/**
*
* acp_forums [Serbian]
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Аутоматско-поткресивање застарелих',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Број дана од последње поруке после кога ће тема бити уклоњена.',
	'AUTO_PRUNE_FREQ'			=> 'Учесталост аутоматског-поткресивања',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Време у данима између поткресивања.',
	'AUTO_PRUNE_VIEWED'			=> 'Аутоматско-поткресивање застарелих прегледа',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Број дана од последњег прегледа теме после којег ће тема бити уклоњена.',

	'CONTINUE'						=> 'Наставак',
	'COPY_PERMISSIONS'				=> 'Копирај дозволе из',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'За олакшање постављења дозвола за ваш нови форум, можете копирати дозволе постојећег форума.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Једном направљен, форум ће имати исте дозволе као и онај који изаберете овде. Ако није изабран ниједан форум новонаправљени форум неће бити видљив све док дозволе не буду биле постављене.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Уколико изаберете да копирате дозволе, форум ће имати исте дозволе као и онај који сте овде изабрали. Ово ће преписати преко било каквих претходно постављених дозвола за овај форум са дозволама форума које сте изабрали овде. Уколико ниједан форум није изабран тренутне дозволе ће бити задржане.',
	'COPY_TO_ACL'					=> 'Алтернативно, такође сте у могућности да %sпоставите нове дозволе%s за овај форум.',
	'CREATE_FORUM'					=> 'Направи нови форум',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Обриши садржај или помери у форум',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Обриши подфоруме или помери у форум',
	'DEFAULT_STYLE'						=> 'Задати стил',
	'DELETE_ALL_POSTS'					=> 'Обриши поруке',
	'DELETE_SUBFORUMS'					=> 'Обриши подфоруме и поруке',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Омогући активне теме',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Уколико подесите на да активне теме у изабраним подфорумима ће бити приказане под овом категоријом.',

	'EDIT_FORUM'					=> 'Учитај форум',
	'ENABLE_INDEXING'				=> 'Омогући индексирање претраге',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Уколико подесите на да поруке направљене у овом форуму ће бити индексиране за претрагу.',
	'ENABLE_POST_REVIEW'			=> 'Омогући преиспитивање порука',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Уколико подесите на да корисници могу да преиспитају своје поруке уколико су написане нове поруке у теми док су корисници писали њихове. Ово би требало онемогућити за chat форуме.',
	'ENABLE_QUICK_REPLY'			=> 'Омогући брзи одговор',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Омогућава брзи одговор у овом форуму. Ова поставка се не разматра уколико је брзи одговор онемогућен широм форума. Брзи одговор ће бити једино приказан за кориснике који имају дозволу да пишу у овом форуму.',
	'ENABLE_RECENT'					=> 'Прикажи активне теме',
	'ENABLE_RECENT_EXPLAIN'			=> 'Уколико подесите на да теме направљене у овом форуму ће бити приказане на списку активних тема.',
	'ENABLE_TOPIC_ICONS'			=> 'Омогући иконице тема',

	'FORUM_ADMIN'						=> 'Администрација форума',
	'FORUM_ADMIN_EXPLAIN'				=> 'У phpBB3 све је основано на форумима. Категорија је само посебан тип форума. Сваки форум може имати неограничен број под-форума и можете одредити да ли ће у сваком бити могуће слање порука или не (н.пр. да ли ће се форум понашати као стара категорија). Овде можете додавати, учитавати, брисати, закључавати, откључавати појединачне форуме као и да подешавате одређене додатне контроле. Уколико су ваше поруке и теме изашле из усклађености можете такође поново ускладити форум. <strong>Треба да копирате или подесите одговарајуће дозволе за новонаправљене форуме како бисте их имали приказане.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Омогући аутоматско-поткресивање',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Поткресује форум или теме, подесите одреднице учесталости/старости испод.',
	'FORUM_CREATED'						=> 'Форум је успешно направљен.',
	'FORUM_DATA_NEGATIVE'				=> 'Одреднице поткресивања не могу бити негативне.',
	'FORUM_DESC_TOO_LONG'				=> 'Опис форума је предугачак, мора бити мањи од 4000 знакова.',
	'FORUM_DELETE'						=> 'Обриши форум',
	'FORUM_DELETE_EXPLAIN'				=> 'Образац испод ће вам омогућити да обришете форум. Уколико је у форуму могуће писање можете да одредите где желите да поставите све теме (или форуме) које садржи.',
	'FORUM_DELETED'						=> 'Форум је успешно обрисан.',
	'FORUM_DESC'						=> 'Опис',
	'FORUM_DESC_EXPLAIN'				=> 'Свака HTML ознака унесена овде биће приказана као што изгледа.',
	'FORUM_EDIT_EXPLAIN'				=> 'Образац испод ће вам омогућити да подесите овај форум. Молимо знајте да се контроле за уређивање и бројање порука подешавају преко дозвола форума за сваког корисника или корисничку групу.',
	'FORUM_IMAGE'						=> 'Слика форума',
	'FORUM_IMAGE_EXPLAIN'				=> 'Место, у односу на phpBB root фасциклу, додатне слике која се додељује овом форуму.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Одабрана слика форума не постоји',
	'FORUM_LINK_EXPLAIN'				=> 'Пуни URL (укључујући протокол, н.пр.: <samp>http://</samp>) до одредишта на које ће корисник бити одведен када кликне на овај форум, н.пр.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Прати везе преусмеравања',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Бележи број пута колико је кликнуто на везу форума.',
	'FORUM_NAME'						=> 'Назив форума',
	'FORUM_NAME_EMPTY'					=> 'Морате унети назив за овај форум.',
	'FORUM_PARENT'						=> 'Родитељски форум',
	'FORUM_PASSWORD'					=> 'Лозинка форума',
	'FORUM_PASSWORD_CONFIRM'			=> 'Потврдите лозинку форума',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Треба да буде подешено само уколико је лозинка форума унесена.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Одређује лозинку за овај форум, користи систем дозвола превасходно.',
	'FORUM_PASSWORD_UNSET'				=> 'Уклони лозинку форума',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Означите овде уколико желите да уклоните лозинку форума.',
	'FORUM_PASSWORD_OLD'				=> 'Лозинка форума користи стару енкрипцију и требало би да буде промењена.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Лозинке које сте унели се не поклапају.',
	'FORUM_PRUNE_SETTINGS'				=> 'Поставке поткресивања форума',
	'FORUM_RESYNCED'					=> 'Форум “%s” је успешно поново усклађен',
	'FORUM_RULES_EXPLAIN'				=> 'Правила форума су приказана на било којој страници у датом форуму.',
	'FORUM_RULES_LINK'					=> 'Веза до правила форума',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Можете овде да унесете URL странице/поруке која садржи правила вашег форума. Ова поставка ће преписати преко текста правила форума који сте назначили.',
	'FORUM_RULES_PREVIEW'				=> 'Преглед правила форума',
	'FORUM_RULES_TOO_LONG'				=> 'Правила форума морају бити мања од 4000 знакова.',
	'FORUM_SETTINGS'					=> 'Поставке форума',
	'FORUM_STATUS'						=> 'Статус форума',
	'FORUM_STYLE'						=> 'Стил форума',
	'FORUM_TOPICS_PAGE'					=> 'Тема по страници',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Уколико није-нула ова вредност ће преписати преко задате поставке тема по страници.',
	'FORUM_TYPE'						=> 'Тип форума',
	'FORUM_UPDATED'						=> 'Подаци о форуму су успешно ажурирани.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Желите да промените форум у коме се пише и има подфоруме у везу. Молимо вас да померите све подфоруме ван овог форума пре него што наставите, јер после промене у везу више нећете моћи да прегледате подфоруме који су тренутно повезани са овим форумом.',

	'GENERAL_FORUM_SETTINGS'	=> 'Опште поставке форума',

	'LINK'						=> 'Веза',
	'LIST_INDEX'				=> 'Прикажи подфорум на списку родитељског-форума',
	'LIST_INDEX_EXPLAIN'		=> 'Приказује овај подфорум на списку и другде као везу на списку његовог родитељског-форума уколико је поставка родитељског-форума “Списак подфорума у легенди” омогућена.',
	'LIST_SUBFORUMS'			=> 'Списак подфорума у легенди',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Приказује подфоруме овог форума на почетној страници и другде као везу у легенди уколико је њихова поставка “Прикажи подфоруме у легенди родитељског-форума” омогућена.',
	'LOCKED'					=> 'Закључан',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Изабрали сте да померите поруке у форум у којем није могуће писање. Молимо вас да изаберете форум у којем је писање могуће.',
	'MOVE_POSTS_TO'					=> 'Помери поруке у',
	'MOVE_SUBFORUMS_TO'				=> 'Помери подфоруме у',

	'NO_DESTINATION_FORUM'			=> 'Нисте одредили форум у који бисте померили садржај.',
	'NO_FORUM_ACTION'				=> 'Није одређен поступак шта се дешава са садржајем форума.',
	'NO_PARENT'						=> 'Без родитеља',
	'NO_PERMISSIONS'				=> 'Не копирај дозволе',
	'NO_PERMISSION_FORUM_ADD'		=> 'Немате потребне дозволе за додавање форума.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Немате потребне дозволе да обришете форуме.',

	'PARENT_IS_LINK_FORUM'		=> 'Родитељ кога сте изабрали је веза форума. Везе форума не могу да садрже друге форуме, молимо вас да изаберете категорију или форум као родитељски форум.',
	'PARENT_NOT_EXIST'			=> 'Родитељ не постоји.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Поткресивање саопштења',
	'PRUNE_STICKY'				=> 'Поткресивање лепљивих',
	'PRUNE_OLD_POLLS'			=> 'Поткресивање старих гласања',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Уклања теме са гласањима у којима није гласано одређен број дана.',

	'REDIRECT_ACL'	=> 'Сада можете да %sподесите дозволе%s за овај форум.',

	'SYNC_IN_PROGRESS'			=> 'Усклађивање форума',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Тренутно поновно усклађивање опсега тема %1$d/%2$d.',

	'TYPE_CAT'			=> 'Категорија',
	'TYPE_FORUM'		=> 'Форум',
	'TYPE_LINK'			=> 'Веза',

	'UNLOCKED'			=> 'Откључан',
));

?>