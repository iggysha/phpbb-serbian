<?php
/**
*
* mcp [Serbian (Cyrillic script)]
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
	'ACTION'				=> 'Поступак',
	'ACTION_NOTE'			=> 'Поступак/Белешка',
	'ADD_FEEDBACK'			=> 'Додај повратни одговор',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ако желите да додате пријаву о овоме молимо вас да попуните следећи образац. Користите само plain text; HTML, ББКод, итд. нису дозвољени.',
	'ADD_WARNING'			=> 'Додај опомену',
	'ADD_WARNING_EXPLAIN'	=> 'Да бисте послали опомену овом кориснику молимо вас да попуните следећи образац. Користите само plain text; HTML, ББКод, итд. нису дозвољени.',
	'ALL_ENTRIES'			=> 'Сви уноси',
	'ALL_NOTES_DELETED'		=> 'Успешно су уклоњене све белешке корисника.',
	'ALL_REPORTS'			=> 'Све пријаве',
	'ALREADY_REPORTED'		=> 'Ова порука је већ пријављена.',
	'ALREADY_REPORTED_PM'	=> 'Ова приватна порука је већ пријављена.',
	'ALREADY_WARNED'		=> 'Опомена је већ додељена за ову поруку.',
	'APPROVE'				=> 'Одобри',
	'APPROVE_POST'			=> 'Одобри поруку',
	'APPROVE_POST_CONFIRM'	=> 'Да ли сигурно желите да одобрите ову поруку?',
	'APPROVE_POSTS'			=> 'Одобри поруке',
	'APPROVE_POSTS_CONFIRM'	=> 'Да ли сигурно желите да одобрите изабране поруке?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Не можете померити тему у форум у којем се тема већ налази.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Не можете опоменути нерегистроване кориснике.',
	'CANNOT_WARN_SELF'		=> 'Не можете опоменути самог себе.',
	'CAN_LEAVE_BLANK'		=> 'Ово може бити остављено празно.',
	'CHANGE_POSTER'			=> 'Промени пошиљаоца',
	'CLOSE_PM_REPORT'		=> 'Затвори ПП пријаву',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Да ли сигурно желите да затворите одабрану ПП пријаву?',
	'CLOSE_PM_REPORTS'		=> 'Затвори ПП пријаве',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Да ли сигурно желите да затворите одабране ПП пријаве?',
	'CLOSE_REPORT'			=> 'Затвори пријаву',
	'CLOSE_REPORT_CONFIRM'	=> 'Да ли сигурно желите да затворите изабрану пријаву?',
	'CLOSE_REPORTS'			=> 'Затвори пријаве',
	'CLOSE_REPORTS_CONFIRM'	=> 'Да ли сигурно желите да затворите изабране пријаве?',

	'DELETE_PM_REPORT'			=> 'Обриши ПП пријаву',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Да ли сигурно желите да обришете одабрану ПП пријаву?',
	'DELETE_PM_REPORTS'			=> 'Обриши ПП пријаве',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Да ли сигурно желите да обришете одабране ПП пријаве?',
	'DELETE_POSTS'				=> 'Обриши поруке',
	'DELETE_POSTS_CONFIRM'		=> 'Да ли сигурно желите да обришете ове поруке?',
	'DELETE_POST_CONFIRM'		=> 'Да ли сигурно желите да обришете ову поруку?',
	'DELETE_REPORT'				=> 'Обриши пријаву',
	'DELETE_REPORT_CONFIRM'		=> 'Да ли сигурно желите да обришете изабрану пријаву?',
	'DELETE_REPORTS'			=> 'Обриши пријаве',
	'DELETE_REPORTS_CONFIRM'	=> 'Да ли сигурно желите да обришете изабране пријаве?',
	'DELETE_SHADOW_TOPIC'		=> 'Обриши притајену тему',
	'DELETE_TOPICS'				=> 'Обриши изабране теме',
	'DELETE_TOPICS_CONFIRM'		=> 'Да ли сигурно желите да обришете ове теме?',
	'DELETE_TOPIC_CONFIRM'		=> 'Да ли сигурно желите да обришете ову тему?',
	'DISAPPROVE'				=> 'Неодобри',
	'DISAPPROVE_REASON'			=> 'Разлог за неодобрење',
	'DISAPPROVE_POST'			=> 'Неодобри поруку',
	'DISAPPROVE_POST_CONFIRM'	=> 'Да ли сигурно желите да неодобрите ову поруку?',
	'DISAPPROVE_POSTS'			=> 'Неодобри поруке',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Да ли сигурно желите да неодобрите изабране поруке?',
	'DISPLAY_LOG'				=> 'Прикажи уносе од претходних',
	'DISPLAY_OPTIONS'			=> 'Поставке приказа',

	'EMPTY_REPORT'					=> 'Морате унети опис када бирате овај разлог.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Молимо знајте да су једна или више тема уклоњене из базе зато што су биле или постале празне.',

	'FEEDBACK'				=> 'Повратни одговор',
	'FORK'					=> 'Копирај',
	'FORK_TOPIC'			=> 'Копирај тему',
	'FORK_TOPIC_CONFIRM'	=> 'Да ли сигурно желите да копирате ову тему?',
	'FORK_TOPICS'			=> 'Копирај изабране теме',
	'FORK_TOPICS_CONFIRM'	=> 'Да ли сигурно желите да копирате изабране теме?',
	'FORUM_DESC'			=> 'Опис',
	'FORUM_NAME'			=> 'Назив форума',
	'FORUM_NOT_EXIST'		=> 'Форум који сте изабрали не постоји.',
	'FORUM_NOT_POSTABLE'	=> 'У форум који сте изабрали не могу да се шаљу поруке.',
	'FORUM_STATUS'			=> 'Статус форума',
	'FORUM_STYLE'			=> 'Стил форума',

	'GLOBAL_ANNOUNCEMENT'	=> 'Опште саопштење',

	'IP_INFO'				=> 'IP адреса',
	'IPS_POSTED_FROM'		=> 'IP адресе са којих је овај корисник писао',

	'LATEST_LOGS'				=> 'Последњих 5 записаних поступака',
	'LATEST_REPORTED'			=> 'Последњих 5 пријава',
	'LATEST_REPORTED_PMS'		=> 'Последњих 5 ПП пријава',
	'LATEST_UNAPPROVED'			=> 'Последњих 5 порука које чекају на одобрење',
	'LATEST_WARNING_TIME'		=> 'Последње додељене опомене',
	'LATEST_WARNINGS'			=> 'Последњих 5 опомена',
	'LEAVE_SHADOW'				=> 'Оставите притајену тему на месту',
	'LIST_REPORT'				=> '1 пријава',
	'LIST_REPORTS'				=> '%d пријава',
	'LOCK'						=> 'Закључај',
	'LOCK_POST_POST'			=> 'Закључај поруку',
	'LOCK_POST_POST_CONFIRM'	=> 'Да ли сигурно желите да спречите учитавање ове поруке?',
	'LOCK_POST_POSTS'			=> 'Закључај изабране поруке',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Да ли сигурно желите да спречите учитавање изабраних порука?',
	'LOCK_TOPIC_CONFIRM'		=> 'Да ли сигурно желите да закључате ову тему?',
	'LOCK_TOPICS'				=> 'Закључај изабране теме',
	'LOCK_TOPICS_CONFIRM'		=> 'Да ли сигурно желите да закључате све изабране теме?',
	'LOGS_CURRENT_TOPIC'		=> 'Тренутно прегледате записе од:',
	'LOGIN_EXPLAIN_MCP'			=> 'Да бисте уређивали овај форум морате се прво пријавити.',
	'LOGVIEW_VIEWTOPIC'			=> 'Преглед теме',
	'LOGVIEW_VIEWLOGS'			=> 'Преглед записа теме',
	'LOGVIEW_VIEWFORUM'			=> 'Преглед форума',
	'LOOKUP_ALL'				=> 'Провера свих IP адреса',
	'LOOKUP_IP'					=> 'Провера IP адресе',

	'MARKED_NOTES_DELETED'		=> 'Успешно сте уклонили све означене белешке корисника.',

	'MCP_ADD'						=> 'Додај опомену',

	'MCP_BAN'					=> 'Забране',
	'MCP_BAN_EMAILS'			=> 'Забрана e-mails',
	'MCP_BAN_IPS'				=> 'Забрана IP адреса',
	'MCP_BAN_USERNAMES'			=> 'Забрани Корисничка имена',

	'MCP_LOGS'						=> 'Записи уредника',
	'MCP_LOGS_FRONT'				=> 'Предња страна',
	'MCP_LOGS_FORUM_VIEW'			=> 'Записи форума',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Записи тема',

	'MCP_MAIN'						=> 'Главни',
	'MCP_MAIN_FORUM_VIEW'			=> 'Преглед форума',
	'MCP_MAIN_FRONT'				=> 'Предња страна',
	'MCP_MAIN_POST_DETAILS'			=> 'Појединости поруке',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Преглед теме',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Измени у “Саопштење”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Да ли сигурно желите да промените ову тему у “Саопштење”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Измени у “Саопштења”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Да ли сигурно желите да промените изабране теме у “Саопштења”?',
	'MCP_MAKE_GLOBAL'				=> 'Измени у “Опште саопштење”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Да ли сигурно желите да промените ову тему у “Опште саопштење”?',
	'MCP_MAKE_GLOBALS'				=> 'Измени у “Општа саопштења”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Да ли сигурно желите да промените изабране теме у “Општа саопштења”?',
	'MCP_MAKE_STICKY'				=> 'Измени у “Лепљиву”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Да ли сигурно желите да промените ову тему у “Лепљиву”?',
	'MCP_MAKE_STICKIES'				=> 'Измени у “Лепљиве”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Да ли сигурно желите да промените изабране теме у “Лепљиве”?',
	'MCP_MAKE_NORMAL'				=> 'Измени у “Обичну Тему”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Да ли сигурно желите да промените ову тему у “Обичну Тему”?',
	'MCP_MAKE_NORMALS'				=> 'Измени у “Обичне Теме”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Да ли сигурно желите да промените изабране теме у “Обичне Теме”?',

	'MCP_NOTES'						=> 'Белешке корисника',
	'MCP_NOTES_FRONT'				=> 'Предња страна',
	'MCP_NOTES_USER'				=> 'Појединости корисника',

	'MCP_POST_REPORTS'				=> 'Додељене пријаве на ову поруку',

	'MCP_PM_REPORTS'				=> 'Пријављене ПП',
	'MCP_PM_REPORT_DETAILS'			=> 'Појединости пријаве ПП',
	'MCP_PM_REPORTS_CLOSED'			=> 'Затворене ПП пријаве',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Ово је списак свих пријава приватних порука које су претходно решене.',
	'MCP_PM_REPORTS_OPEN'			=> 'Отвори ПП пријаву',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Ово је списак свих пријава приватних порука које још увек треба да буду решене.',

	'MCP_REPORTS'					=> 'Пријављене поруке',
	'MCP_REPORT_DETAILS'			=> 'Појединости пријаве',
	'MCP_REPORTS_CLOSED'			=> 'Затворене пријаве',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Ово је списак свих пријава порука које су претходно већ решене.',
	'MCP_REPORTS_OPEN'				=> 'Отворене пријаве',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Ово је списак свих пријава порука које још увек треба да се реше.',

	'MCP_QUEUE'								=> 'Чека на одобрење',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Одобри појединости',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Поруке чекају на одобрење',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Ово је списак свих порука које захтевају одобрење пре него што постану видљиве корисницима.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Теме чекају на одобрење',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Ово је списак свих тема које захтевају одобрење пре него што постану видљиве корисницима.',

	'MCP_VIEW_USER'			=> 'Преглед опомена за одређеног корисника',

	'MCP_WARN'				=> 'Опомене',
	'MCP_WARN_FRONT'		=> 'Предња страница',
	'MCP_WARN_LIST'			=> 'Списак опомена',
	'MCP_WARN_POST'			=> 'Опомена за одређену поруку',
	'MCP_WARN_USER'			=> 'Опомени корисника',

	'MERGE_POSTS_CONFIRM'	=> 'Да ли сигурно желите да померите изабране поруке?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Користећи образац испод можете померити изабране поруке у другу тему. Поруке ће бити раздвојене од ове теме и спојене у другу тему. Овим порукама неће бити промењен редослед и појавиће се као да су их корисници послали у нову тему.<br />Молимо вас да унесете id одредишне теме или кликните на “Изабери тему” да је потражите.',
	'MERGE_TOPIC_ID'		=> 'Број за препознавање одредишне теме',
	'MERGE_TOPICS'			=> 'Споји теме',
	'MERGE_TOPICS_CONFIRM'	=> 'Да ли сигурно желите да спојите изабране теме?',
	'MODERATE_FORUM'		=> 'Уреди форум',
	'MODERATE_TOPIC'		=> 'Уреди тему',
	'MODERATE_POST'			=> 'Уреди поруку',
	'MOD_OPTIONS'			=> 'Могућности уредника',
	'MORE_INFO'				=> 'Више података',
	'MOST_WARNINGS'			=> 'Корисници са највише опомена',
	'MOVE_TOPIC_CONFIRM'	=> 'Да ли сигурно желите да померите тему у нови форум?',
	'MOVE_TOPICS'			=> 'Помери изабране теме',
	'MOVE_TOPICS_CONFIRM'	=> 'Да ли сигурно желите да померите изабране теме у нови форум?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Обавести пошиљаоца о одобрењу?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Обавести пошиљаоца о неодобравању?',
	'NOTIFY_USER_WARN'				=> 'Обавести корисника о опомени?',
	'NOT_MODERATOR'					=> 'Ви нисте уредник овог форума.',
	'NO_DESTINATION_FORUM'			=> 'Молимо изаберите форум за одредиште.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Нема доступног одредишног форума.',
	'NO_ENTRIES'					=> 'Нема записа уноса за овај период.',
	'NO_FEEDBACK'					=> 'Не постоји повратни одговор за овог корисника.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Морате изабрати одредишну тему за спајање порука.',
	'NO_MATCHES_FOUND'				=> 'Нема пронађених поклапања.',
	'NO_POST'						=> 'Морате изабрати поруку како бисте опоменули корисника за поруку.',
	'NO_POST_REPORT'				=> 'Ова порука није пријављена.',
	'NO_POST_SELECTED'				=> 'Морате изабрати најмање једну поруку како бисте извели овај поступак.',
	'NO_REASON_DISAPPROVAL'			=> 'Молимо вас да дате одговарајући разлог за неодобрење.',
	'NO_REPORT'						=> 'Нема пронађене пријаве',
	'NO_REPORTS'					=> 'Нема пронађених пријава',
	'NO_REPORT_SELECTED'			=> 'Морате изабрати бар једну пријаву како бисте извели овај поступак.',
	'NO_TOPIC_ICON'					=> 'Нема',
	'NO_TOPIC_SELECTED'				=> 'Морате изабрати бар једну тему да бисте извршили овај поступак.',
	'NO_TOPICS_QUEUE'				=> 'Нема тема на чекању за одобрење.',

	'ONLY_TOPIC'			=> 'Само тема “%s”',
	'OTHER_USERS'			=> 'Остали корисници који пишу са ове IP адресе',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Одабрана ПП пријава је успешно затворена.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Одабрана ПП пријава је успешно обрисана.',
	'PM_REPORTED_SUCCESS'		=> 'Ова приватна порука је успешно пријављена.',
	'PM_REPORT_TOTAL'			=> 'Укупно има <strong>1</strong> ПП пријава за преглед.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Одабране ПП пријаве су успешно затворене.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Одабране ПП пријаве су успешно обрисане.',
	'PM_REPORTS_TOTAL'			=> 'Укупно има <strong>%d</strong> ПП пријава за преглед.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Нема ПП пријава за преглед.',
	'PM_REPORT_DETAILS'			=> 'Појединости пријаве приватне поруке',
	'POSTER'					=> 'Пошиљалац',
	'POSTS_APPROVED_SUCCESS'	=> 'Одабране поруке су одобрене.',
	'POSTS_DELETED_SUCCESS'		=> 'Одабране поруке су успешно уклоњене из базе.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Одабране поруке су неодобрене.',
	'POSTS_LOCKED_SUCCESS'		=> 'Одабране поруке су успешно закључане.',
	'POSTS_MERGED_SUCCESS'		=> 'Одабране поруке су спојене.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Одабране поруке су успешно откључане.',
	'POSTS_PER_PAGE'			=> 'Порука по страници',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Поставите на 0 за преглед свих порука.)',
	'POST_APPROVED_SUCCESS'		=> 'Одабрана порука је одобрена.',
	'POST_DELETED_SUCCESS'		=> 'Одабрана порука је успешно уклоњена из базе.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Одабрана порука је неодобрена.',
	'POST_LOCKED_SUCCESS'		=> 'Порука је успешно закључана.',
	'POST_NOT_EXIST'			=> 'Порука коју сте тражили не постоји.',
	'POST_REPORTED_SUCCESS'		=> 'Ова порука је успешно пријављена.',
	'POST_UNLOCKED_SUCCESS'		=> 'Порука је успешно откључана.',

	'READ_USERNOTES'			=> 'Белешке корисника',
	'READ_WARNINGS'				=> 'Опомене корисника',
	'REPORTER'					=> 'Пријављује',
	'REPORTED'					=> 'Пријављено',
	'REPORTED_BY'				=> 'Пријављено од',
	'REPORTED_ON_DATE'			=> 'послата',
	'REPORTS_CLOSED_SUCCESS'	=> 'Одабране пријаве су успешно затворене.',
	'REPORTS_DELETED_SUCCESS'	=> 'Одабране пријаве су успешно обрисане.',
	'REPORTS_TOTAL'				=> 'Укупно има <strong>%d</strong> пријава за преглед.',
	'REPORTS_ZERO_TOTAL'		=> 'Нема пријава за преглед.',
	'REPORT_CLOSED'				=> 'Ова пријава је већ затворена.',
	'REPORT_CLOSED_SUCCESS'		=> 'Одабрана пријава је успешно затворена.',
	'REPORT_DELETED_SUCCESS'	=> 'Одабрана пријава је успешно обрисана.',
	'REPORT_DETAILS'			=> 'Појединости пријаве',
	'REPORT_MESSAGE'			=> 'Пријави ову поруку',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Користите овај образац да пријавите изабрану приватну поруку. Пријављивање би уопштено требало да буде коришћено само уколико порука крши правила форума. <strong>Пријављивање приватне поруке учиниће садржај исте видљивим за све уреднике.</strong>',
	'REPORT_NOTIFY'				=> 'Обавести ме',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Обавештава вас кад је ваша пријава обрађена.',
	'REPORT_POST_EXPLAIN'		=> 'Користите овај образац да пријавите изабрану поруку уредницима и администраторима форума. Пријављивање би уопштено требало да буде коришћено само уколико порука крши правила форума.',
	'REPORT_REASON'				=> 'Разлог пријаве',
	'REPORT_TIME'				=> 'Време пријаве',
	'REPORT_TOTAL'				=> 'Укупно има <strong>1</strong> пријава за преглед.',
	'RESYNC'					=> 'Ресинхронизуј',
	'RETURN_MESSAGE'			=> '%sПовратак на поруку%s',
	'RETURN_NEW_FORUM'			=> '%sИди на нови форум%s',
	'RETURN_NEW_TOPIC'			=> '%sИди на нову тему%s',
	'RETURN_PM'					=> '%sПовратак на приватну поруку%s',
	'RETURN_POST'				=> '%sПовратак на поруку%s',
	'RETURN_QUEUE'				=> '%sПовратак на чекања%s',
	'RETURN_REPORTS'			=> '%sПовратак на пријаве%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sПовратак на тему%s',

	'SEARCH_POSTS_BY_USER'				=> 'Претражи поруке од',
	'SELECT_ACTION'						=> 'Изаберите жељени поступак',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Молимо вас да изаберете форум у којем желите да ово опште саопштење буде приказано.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Једна или више изабраних тема су општа саопштења. Молимо вас да изаберете форум у којем желите да буду приказана.',
	'SELECT_MERGE'						=> 'Изабери за спајање',
	'SELECT_TOPICS_FROM'				=> 'Изабери теме од',
	'SELECT_TOPIC'						=> 'Изабери тему',
	'SELECT_USER'						=> 'Изабери корисника',
	'SORT_ACTION'						=> 'Запис поступака',
	'SORT_DATE'							=> 'Датум',
	'SORT_IP'							=> 'IP адресе',
	'SORT_WARNINGS'						=> 'Опомене',
	'SPLIT_AFTER'						=> 'Раздвој тему од изабране поруке па надаље',
	'SPLIT_FORUM'						=> 'Форум за нову тему',
	'SPLIT_POSTS'						=> 'Раздвој изабране поруке',
	'SPLIT_SUBJECT'						=> 'Наслов нове теме',
	'SPLIT_TOPIC_ALL'					=> 'Раздвој тему од изабраних порука',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Да ли сигурно желите да раздвојите ову тему?',
	'SPLIT_TOPIC_BEYOND'				=> 'Раздвој тему код изабране поруке',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Да ли сигурно желите да раздвојите ову тему код изабране поруке?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Користећи образац испод можете раздвојити тему на две, било одабиром порука појединачно било раздвајањем код изабране поруке.',

	'THIS_PM_IP'				=> 'IP за ову приватну поруку',
	'THIS_POST_IP'				=> 'IP за ову поруку',
	'TOPICS_APPROVED_SUCCESS'	=> 'Одабране теме су одобрене.',
	'TOPICS_DELETED_SUCCESS'	=> 'Одабране теме су успешно уклоњене из базе.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Одабране теме су неодобрене.',
	'TOPICS_FORKED_SUCCESS'		=> 'Одабране теме су успешно копиране.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Одабране теме су закључане.',
	'TOPICS_MOVED_SUCCESS'		=> 'Одабране теме су успешно померене.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Одабране теме су поново усклађене.',
	'TOPICS_TYPE_CHANGED'		=> 'Типови тема су успешно промењени.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Одабране теме су откључане.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Одабрана тема је одобрена.',
	'TOPIC_DELETED_SUCCESS'		=> 'Одабрана тема је успешно уклоњена из базе.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Одабрана тема је неодобрена.',
	'TOPIC_FORKED_SUCCESS'		=> 'Одабрана тема је успешно копирана.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Одабрана тема је закључана.',
	'TOPIC_MOVED_SUCCESS'		=> 'Одабрана тема је успешно померена.',
	'TOPIC_NOT_EXIST'			=> 'Тема коју сте изабрали не постоји.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Одабрана тема је ресинхронизована.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Одабрана тема је успешно раздвојена.',
	'TOPIC_TIME'				=> 'Време теме',
	'TOPIC_TYPE_CHANGED'		=> 'Тип теме је успешно промењен.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Одабрана тема је откључана.',
	'TOTAL_WARNINGS'			=> 'Укупно Опомена',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Укупно има <strong>%d</strong> порука које чекају на одобрење.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Нема порука које чекају на одобрење.',
	'UNAPPROVED_POST_TOTAL'			=> 'Укупно има <strong>1</strong> порука која чека на одобрење.',
	'UNLOCK'						=> 'Откључај',
	'UNLOCK_POST'					=> 'Откључај поруку',
	'UNLOCK_POST_EXPLAIN'			=> 'Дозволи учитавање',
	'UNLOCK_POST_POST'				=> 'Откључај поруку',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Да ли сигурно желите да дозволите учитавање ове поруке?',
	'UNLOCK_POST_POSTS'				=> 'Откључај изабране поруке',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Да ли сигурно желите да дозволите учитавање изабраних порука?',
	'UNLOCK_TOPIC'					=> 'Откључај тему',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Да ли сигурно желите да откључате ову тему?',
	'UNLOCK_TOPICS'					=> 'Откључај изабране теме',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Да ли сигурно желите да откључате све изабране теме?',
	'USER_CANNOT_POST'				=> 'Не можете писати у овом форуму.',
	'USER_CANNOT_REPORT'			=> 'Не можете пријављивати поруке у овом форуму.',
	'USER_FEEDBACK_ADDED'			=> 'Корисников повратни одговор је успешно додат.',
	'USER_WARNING_ADDED'			=> 'Корисник је успешно опоменут.',

	'VIEW_DETAILS'			=> 'Преглед појединости',
	'VIEW_PM'				=> 'Преглед приватне поруке',
	'VIEW_POST'				=> 'Преглед поруке',

	'WARNED_USERS'			=> 'Опоменути корисници',
	'WARNED_USERS_EXPLAIN'	=> 'Ово је списак корисника са неистеклим опоменама које су им додељене.',
	'WARNING_PM_BODY'		=> 'Следи опомена која вам је додељена од администратора или уредника ове веб странице.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Додељена опомена форума',
	'WARNING_POST_DEFAULT'	=> 'Ово је опомена због следеће поруке коју сте послали: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Нема опомена.',

	'YOU_SELECTED_TOPIC'	=> 'Изабрали сте тему број %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Пиратерија',
			'SPAM'		=> 'Спам',
			'OFF_TOPIC'	=> 'Промашена-тема',
			'OTHER'		=> 'Остало',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Порука садржи везе ка незаконитом или пиратском програму.',
			'SPAM'		=> 'Пријављена порука има само сврху да рекламира неку веб страницу или неки производ.',
			'OFF_TOPIC'	=> 'Пријављена порука је о промашеној теми.',
			'OTHER'		=> 'Пријављена порука се не уклапа ни у једну другу категорију, молимо вас да користите поље за више података.',
		)
	),
));

?>