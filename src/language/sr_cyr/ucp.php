<?php
/**
*
* ucp [Serbian]
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Приступањем на “%1$s” (у даљем тексту “ми”, “нас”, “наш”, “%1$s”, “%2$s”), прихватате услове наведене у даљем тексту. Ако се не слажете са свим условима онда вас молимо да не приступате и/или користите “%1$s”. Ми можемо ове услове променити било када и у крајњем ћемо вас обавестити о томе, мада би било мудро да сами проверите званичност услова док настављате коришћење “%1$s” након измена што значи да прихватате ове услове у измењеном и/или исправљеном облику.<br />
	<br />
	Наши форуми су омогућени од phpBB (у даљем тексту “они”, “њих”, “њихов”, “phpBB програм”, “www.phpbb.com”, “phpBB Група”, “phpBB Тимови”) што је решење за форум издат под “<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” (у даљем тексту “GPL”) и може бити преузет са <a href="http://www.phpbb.com/">www.phpbb.com</a>. phpBB програм само олакшава на мрежи основане разговоре, phpBB Група није одговорна за оно што се одобрава и/или не одобрава као дозвољен садржај и/или понашање. За више података о phpBB, молимо погледајте: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Слажете се да нећете слати никакав наопак, бестидан, прост, клеветнички, пун мржње, претећи, сексуално-усмерен или било какав други материјал који може да повреди било какве законе ваше земље, земље где се “%1$s” хостује или Међународни Закон. Радећи тако може доћи до тога да будете тренутно и за стално стављени под забрану, са обавештењем вашем Интернет Сервис Провајдеру уколико буде тражено од нас. IP адресе свих порука су снимљене како би помогле у спровођењу ових услова. Слажете се да “%1$s” има право да уклони, учита, помери или затвори било коју тему и било када то буде сматрано за сходно. Као корисник се слажете да било који податак који унесете буде сачуван у бази. Међутим ови подаци неће бити обелодањени трећој страни без ваше дозволе, нити ће “%1$s” ни phpBB бити држани одговорним за било какав покушај хаковања који би могао довести до тога да ови подаци буду компромитовани.
	',

	'PRIVACY_POLICY'		=> 'Ова полиса подробно објашњава како “%1$s” заједно са његовим припојеним компанијама (у даљем тексту “ми”, “нас”, “наш”, “%1$s”, “%2$s”) и phpBB (у даљем тексту “оне”, “њих”, “њихов”, “phpBB програм”, “www.phpbb.com”, “phpBB Група”, “phpBB Тимови”) користе било какве податке прикупљене током било које ваше корисничке сесије (у даљем тексту “ваши подаци”).<br />
	<br />
	Ваши подаци се сакупљају на два начина. Прво, прегледање “%1$s” ће проузроковати да phpBB програм направи неколико колачића, који су мале текстуалне датотеке које се преузимају у фасциклу веб прегледача на вашем рачунару. Прва два колачића садрже само ознаку корисника (у даљем тексту “user-id”) и ознаку анонимне сесије (у даљем тексту “session-id”), која вам се аутоматски додељује од phpBB програма. Трећи колачић ће бити направљен када будете прегледали теме у “%1$s” и користи да сачува податке о темама које сте прочитали, побољшавајући тако ваше коришћење.<br />
	<br />
	Ми можемо такође да направимо колачиће ван phpBB програма док прегледате “%1$s”, иако су они ван домашаја овог документа који је намењен само да покрије странице направљене од phpBB програма. Други начин на који сакупљамо ваше податке је оно што ви нама пошаљете. Ово може бити, и није ограничено на: писање као анонимни корисник (у даљем тексту “анонимне поруке”), регистровање на “%1$s” (у даљем тексту “ваш налог”) и поруке које сте ви послали након регистрације и док сте пријављени (у даљем тексту “ваше поруке”).<br />
	<br />
	Ваш налог ће као најмање садржати јединствену ознаку имена (у даљем тексту “ваше корисничко име”), личну лозинку која се користи за пријављивање на ваш налог (у даљем тексту “ваша лозинка”) и личну, исправну e-mail адресу (у даљем тексту “ваш e-mail”). Ваши подаци за ваш налог на “%1$s” су заштићени законима о заштити-података прихваћеним у земљи која нас хостује. Било који подаци поред вашег корисничког имена, ваше лозинке, и ваше e-mail адресе тражени од “%1$s” током поступка регистрације су или обавезни или по избору, у надлежности “%1$s”. У свим случајевима, имате могућност да изаберете који ће подаци вашег налога бити јавно приказани. Осим тога, у вашем налогу, имате могућност избора улаз-а и излаз-а аутоматски изведених e-mails из phpBB програма.<br />
	<br />
	Ваша лозинка је криптована (у једном-смеру) тако да је безбедна. Међутим, препоручљиво је да не користите исту лозинку на више различитих веб места. Ваша лозинка је намењена приступу вашем налогу на “%1$s”, зато вас молимо да је пажљиво чувате и ни под каквим околностима нико у вези са “%1$s”, phpBB или неком другом трећом страном, неће имати право да вам тражи лозинку. Заборавите ли лозинку за ваш налог, можете користити могућност “Заборавио сам моју лозинку” коју пружа phpBB програм. Овај поступак ће вам тражити да упишете корисничко име и e-mail, а онда ће phpBB програм извести нову лозинку за повратак вашег налога.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Ваш налог је активиран. Хвала вам што сте се регистровали.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Налог је сада активиран.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Ваш налог је сада успешно поново активиран.',
	'ACCOUNT_ADDED'					=> 'Хвала вам што сте се регистровали, ваш налог је направљен. Сада се можете пријавити са вашим корисничким именом и лозинком.',
	'ACCOUNT_COPPA'					=> 'Ваш налог је направљен али мора да буде одобрен, молимо вас да проверите ваш e-mail за појединости.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Ваш налог је ажуриран. Међутим, овај форум захтева поновну активацију налога при промени e-mail адресе. Активациони кључ је послат на вашу нову e-mail адресу коју сте дали. Молимо вас да проверите ваш e-mail за више података.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Ваш налог је ажуриран. Међутим, овај форум захтева поновну активацију налога од администратора при промени e-mail адресе. Послат им је e-mail и бићете обавештени када ваш налог буде поново активиран.',
	'ACCOUNT_INACTIVE'				=> 'Ваш налог је направљен. Међутим, овај форум захтева активацију налога, активациони кључ је послат на e-mail адресу коју сте дали. Молимо вас да проверите ваш e-mail за више података.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Ваш налог је направљен. Међутим, овај форум захтева активацију налога од администратора. Послат им је e-mail и бићете обавештени када ваш налог буде био активиран.',
	'ACTIVATION_EMAIL_SENT'			=> 'Активациони e-mail је послат на вашу e-mail адресу.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Активациони e-mail је послат на e-mail адресу администратора.',
	'ADD'							=> 'Додај',
	'ADD_BCC'						=> 'Додај [BCC]',
	'ADD_FOES'						=> 'Додај нове за игнорисање',
	'ADD_FOES_EXPLAIN'				=> 'Можете унети неколико корисничких имена свако у нови ред.',
	'ADD_FOLDER'					=> 'Додај фасциклу',
	'ADD_FRIENDS'					=> 'Додај нове пријатеље',
	'ADD_FRIENDS_EXPLAIN'			=> 'Можете унети неколико корисничких имена свако у други ред.',
	'ADD_NEW_RULE'					=> 'Додај ново правило',
	'ADD_RULE'						=> 'Додај правило',
	'ADD_TO'						=> 'Додај [За]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Овде можете да додате нове кориснике групи. Можете изабрати да ли ова група постаје задата за изабраног корисника. Молимо унесите свако корисничко име у одвојен ред.',
	'ADMIN_EMAIL'					=> 'Администратори ми могу слати e-mail са вестима',
	'AGREE'							=> 'Прихватам ове услове',
	'ALLOW_PM'						=> 'Дозвола корисницима да ми шаљу приватне поруке',
	'ALLOW_PM_EXPLAIN'				=> 'Молимо знајте да ће администратори и уредници увек моћи да вам шаљу поруке.',
	'ALREADY_ACTIVATED'				=> 'Већ сте активирали ваш налог.',
	'ATTACHMENTS_EXPLAIN'			=> 'Ово је списак прилога које сте послали у порукама на овом форуму.',
	'ATTACHMENTS_DELETED'			=> 'Прилози су успешно обрисани.',
	'ATTACHMENT_DELETED'			=> 'Прилог је успешно обрисан.',
	'AVATAR_CATEGORY'				=> 'Категорија',
	'AVATAR_EXPLAIN'				=> 'Највеће димензије; ширина: %1$d пиксела, висина: %2$d пиксела, величина датотеке: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Функција грбова је тренутно онемогућена.',
	'AVATAR_GALLERY'				=> 'Месна галерија',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Не могу да додам грб за %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Ваш грб не може бити приказан јер су грбови онемогућени.',
	'AVATAR_PAGE'					=> 'Страница',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Ваш тренутни грб не може бити приказан јер је његов тип онемогућен.',

	'BACK_TO_DRAFTS'			=> 'Назад на сачуване нацрте',
	'BACK_TO_LOGIN'				=> 'Назад на пријаву',
	'BIRTHDAY'					=> 'Рођендан',
	'BIRTHDAY_EXPLAIN'			=> 'Подешавањем године приказаће се ваше године када вам је рођендан.',
	'BOARD_DATE_FORMAT'			=> 'Мој облик датума',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Коришћена синтакса је истоветна PHP <a href="http://www.php.net/date">date()</a> функцији.',
	'BOARD_DST'					=> 'Летње Рачунање времена/<abbr title="Daylight Saving Time">DST</abbr> је укључено',
	'BOARD_LANGUAGE'			=> 'Мој језик',
	'BOARD_STYLE'				=> 'Мој стил форума',
	'BOARD_TIMEZONE'			=> 'Моја временска зона',
	'BOOKMARKS'					=> 'Белешке',
	'BOOKMARKS_EXPLAIN'			=> 'Можете забележити теме за будуће одреднице. Означите кућицу за било коју белешку коју желите да обришете, а онда притисните <em>Уклони означене белешке</em> дугме.',
	'BOOKMARKS_DISABLED'		=> 'Белешке су онемогућене на овом форуму.',
	'BOOKMARKS_REMOVED'			=> 'Белешке су успешно уклоњене.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Не можете више учитавати или брисати ту поруку.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Поруке не могу бити померене у фасциклу коју желите да уклоните.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Поруке не могу бити уклоњене из сандучета за слање.',
	'CANNOT_RENAME_FOLDER'		=> 'Ова фасцикла не може бити преименована.',
	'CANNOT_REMOVE_FOLDER'		=> 'Ова фасцикла не може бити уклоњена.',
	'CHANGE_DEFAULT_GROUP'		=> 'Промени задату групу',
	'CHANGE_PASSWORD'			=> 'Промени лозинку',
	'CLICK_GOTO_FOLDER'			=> '%1$sИдите до ваше “%3$s” фасцикле%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sПовратак у вашу “%3$s” фасциклу%2$s',
	'CONFIRMATION'				=> 'Потврда регистрације',
	'CONFIRM_CHANGES'			=> 'Потврда промена',
	'CONFIRM_EMAIL'				=> 'Потврда e-mail адресе',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Треба да назначите ово само уколико мењате вашу e-mail адресу.',
	'CONFIRM_EXPLAIN'			=> 'Како би спречили аутоматске регистрације форум захтева да унесете код за потврду. Код је приказан у слици коју бисте требали да видите испод. Ако не можете да прочитате код или сте на било који други начин онемогућени да разазнате текст молимо вас да се повежете са %sАдминистратором Форума%s.',
	'VC_REFRESH'				=> 'Освежи код за потврду',
	'VC_REFRESH_EXPLAIN'		=> 'Уколико не можете да прочитате код онда можете да тражите нови кликом на дугме.',

	'CONFIRM_PASSWORD'			=> 'Потврдите лозинку',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Треба да потврдите вашу лозинку само уколико сте је променили изнад.',
	'COPPA_BIRTHDAY'			=> 'Да бисте наставили са поступком регистрације молимо вас да нам кажете када сте рођени.',
	'COPPA_COMPLIANCE'			=> 'COPPA сагласност',
	'COPPA_EXPLAIN'				=> 'Молимо знајте да ће се кликом на дугме прихвати направити ваш налог. Међутим не може бити активиран док родитељ или старатељ не одобри вашу регистрацију. Биће вам послата мејлом копија неопходног обрасца са појединостима где да га пошаљете.',
	'CREATE_FOLDER'				=> 'Додај фасциклу…',
	'CURRENT_IMAGE'				=> 'Тренутна слика',
	'CURRENT_PASSWORD'			=> 'Тренутна лозинка',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Морате потврдити вашу тренутну лозинку уколико желите да промените лозинку, или вашу e-mail адресу или пак корисничко име.',
	'CUR_PASSWORD_EMPTY'		=> 'Нисте унели вашу тренутну лозинку.',
	'CUR_PASSWORD_ERROR'		=> 'Тренутна лозинка коју сте унели је неисправна.',
	'CUSTOM_DATEFORMAT'			=> 'Властити…',

	'DEFAULT_ACTION'			=> 'Задати поступак',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Овај поступак ће бити активиран уколико ништа од горњег није применљиво.',
	'DEFAULT_ADD_SIG'			=> 'Прикључи мој потпис као задато',
	'DEFAULT_BBCODE'			=> 'Омогући ББКод као задато',
	'DEFAULT_NOTIFY'			=> 'Обавести ме о одговорима као задато',
	'DEFAULT_SMILIES'			=> 'Омогући смајлиће као задато',
	'DEFINED_RULES'				=> 'Одређена правила',
	'DELETED_TOPIC'				=> 'Тема је уклоњена.',
	'DELETE_ATTACHMENT'			=> 'Обриши прилог',
	'DELETE_ATTACHMENTS'		=> 'Обриши прилоге',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Да ли сигурно желите да обришете овај прилог?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Да ли сигурно желите да обришете ове прилоге?',
	'DELETE_AVATAR'				=> 'Обриши слику',
	'DELETE_COOKIES_CONFIRM'	=> 'Да ли сигурно желите да обришете све колачиће постављене од овог форума?',
	'DELETE_MARKED_PM'			=> 'Обриши означене поруке',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Да ли сигурно желите да обришете све означене поруке?',
	'DELETE_OLDEST_MESSAGES'	=> 'Обриши најстарије поруке',
	'DELETE_MESSAGE'			=> 'Обриши поруку',
	'DELETE_MESSAGE_CONFIRM'	=> 'Да ли сигурно желите да обришете ову приватну поруку?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Обриши све поруке у уклоњеној фасцикли',
	'DELETE_RULE'				=> 'Обриши правило',
	'DELETE_RULE_CONFIRM'		=> 'Да ли сигурно желите да обришете ово правило?',
	'DEMOTE_SELECTED'			=> 'Расчини изабране',
	'DISABLE_CENSORS'			=> 'Омогући пречистач речи',
	'DISPLAY_GALLERY'			=> 'Прикажи галерију',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Унети e-mail домен нема исправан MX протокол.',
	'DOWNLOADS'					=> 'Преузимања',
	'DRAFTS_DELETED'			=> 'Сви изабрани нацрти су успешно обрисани.',
	'DRAFTS_EXPLAIN'			=> 'Овде можете да прегледате, учитавате и бришете ваше сачуване нацрте.',
	'DRAFT_UPDATED'				=> 'Нацрт је успешно ажуриран.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Овде можете да учитате ваш нацрт. Нацрти не садрже прилоге и податке о гласању.',
	'EMAIL_BANNED_EMAIL'		=> 'Адреса e-mail коју сте унели није дозвољена за коришћење.',
	'EMAIL_INVALID_EMAIL'		=> 'Адреса e-mail коју сте унели је неисправна.',
	'EMAIL_REMIND'				=> 'Ово мора да буде e-mail адреса удружена са вашим налогом. Уколико ово нисте мењали преко ваше корисничке контролне плоче онда је то e-mail адреса с којом сте регистровали ваш налог.',
	'EMAIL_TAKEN_EMAIL'			=> 'Унета e-mail адреса је већ заузета.',
	'EMPTY_DRAFT'				=> 'Морате унети поруку како бисте прихватили ваше измене.',
	'EMPTY_DRAFT_TITLE'			=> 'Морате унети наслов нацрта.',
	'EXPORT_AS_XML'				=> 'Извези као XML',
	'EXPORT_AS_CSV'				=> 'Извези као CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Извези као CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Извези као TXT',
	'EXPORT_AS_MSG'				=> 'Извези као MSG',
	'EXPORT_FOLDER'				=> 'Извези овај преглед',

	'FIELD_REQUIRED'					=> 'Поље “%s” мора бити употпуњено.',
	'FIELD_TOO_SHORT'					=> 'Поље “%1$s” је прекратко, најмање %2$d знакова је потребно.',
	'FIELD_TOO_LONG'					=> 'Поље “%1$s” је предугачко, највише %2$d знакова је дозвољено.',
	'FIELD_TOO_SMALL'					=> 'Вредност “%1$s” је премала, вредност од најмање %2$d је потребна.',
	'FIELD_TOO_LARGE'					=> 'Вредност “%1$s” је превелика, вредност од највише %2$d је дозвољена.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Поље “%s” има неисправне знакове, само су бројеви дозвољени.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Поље “%s” има неисправне знакове, само алфанумерички знакови су дозвољени.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Поље “%s” има неисправне знакове, само алфанумерички знакови, размак или -+_[] знакови су дозвољени.',
	'FIELD_INVALID_DATE'				=> 'Поље “%s” има неисправан датум.',
	'FIELD_INVALID_VALUE'				=> 'Поље “%s” има неисправану вредност.',

	'FOE_MESSAGE'				=> 'Порука од игнорисаног',
	'FOES_EXPLAIN'				=> 'Игнорисани су корисници који ће бити игнорисани по задатом. Поруке од тих корисника неће бити потпуно видљиве. Приватне поруке од игнорисаних су још увек допуштене. Молимо знајте да не можете игнорисати уреднике или администраторе.',
	'FOES_UPDATED'				=> 'Ваш списак за игнорисање је успешно ажуриран.',
	'FOLDER_ADDED'				=> 'Фасцикла је успешно додата.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d од %2$d порука сачувано',
	'FOLDER_NAME_EMPTY'			=> 'Морате унети име за ову фасциклу.',
	'FOLDER_NAME_EXIST'			=> 'Фасцикла <strong>%s</strong> већ постоји.',
	'FOLDER_OPTIONS'			=> 'Поставке фасцикле',
	'FOLDER_RENAMED'			=> 'Фасцикла је успешно преименована.',
	'FOLDER_REMOVED'			=> 'Фасцикла је успешно уклоњена.',
	'FOLDER_STATUS_MSG'			=> 'Фасцикла је %1$d%% попуњена (%2$d од %3$d порука сачувано)',
	'FORWARD_PM'				=> 'Проследи ПП',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Пре него што могнете да наставите са прегледом форума неопходно је да промените вашу лозинку.',
	'FRIEND_MESSAGE'			=> 'Порука од пријатеља',
	'FRIENDS'					=> 'Пријатељи',
	'FRIENDS_EXPLAIN'			=> 'Пријатељи вам омогућавају брз приступ члановима са којима често комуницирате. Уколико предложак има одговарајућу подршку свака порука написана од пријатеља може бити осветљена.',
	'FRIENDS_OFFLINE'			=> 'Није на вези',
	'FRIENDS_ONLINE'			=> 'На вези',
	'FRIENDS_UPDATED'			=> 'Ваш списак пријатеља је успешно ажуриран.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Поступак који се преузима када је фасцикла пуна је успешно измењен.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Изворна Порука --------',
	'FWD_SUBJECT'				=> 'Наслов: %s',
	'FWD_DATE'					=> 'Датум: %s',
	'FWD_FROM'					=> 'Од: %s',
	'FWD_TO'					=> 'За: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Опште саопштење',

	'HIDE_ONLINE'				=> 'Сакриј мој статус на вези',
	'HIDE_ONLINE_EXPLAIN'		=> 'Промена ове поставке неће имати утицаја до ваше поновне посете форуму.',
	'HOLD_NEW_MESSAGES'			=> 'Не прихватај нове поруке (Нове поруке ће бити задржане док се не обезбеди довољно простора)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Нове поруке ће бити задржане',

	'IF_FOLDER_FULL'			=> 'Уколико је фасцикла пуна',
	'IMPORTANT_NEWS'			=> 'Важна саопштења',
	'INVALID_USER_BIRTHDAY'			=> 'Унети рођендан није исправан датум.',
	'INVALID_CHARS_USERNAME'	=> 'Корисничко име садржи забрањене знакове.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Лозинка не садржи потребне знакове.',
	'ITEMS_REQUIRED'			=> 'Ставке означене са * су обавезна поља профила и морају бити попуњена.',

	'JOIN_SELECTED'				=> 'Придружи изабрано',

	'LANGUAGE'					=> 'Језик',
	'LINK_REMOTE_AVATAR'		=> 'Веза ван веб-странице',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Унесите URL до места које садржи грб који желите да повежете.',
	'LINK_REMOTE_SIZE'			=> 'Димензије грба',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Унесите ширину и висину грба, оставите празно за покушај аутоматске верификације.',
	'LOGIN_EXPLAIN_UCP'			=> 'Молимо вас да се пријавите како бисте приступили Корисничкој Контролној Плочи.',
	'LOGIN_REDIRECT'			=> 'Успешно сте се пријавили.',
	'LOGOUT_FAILED'				=> 'Нисте одјављени, јер се захтев не поклапа са вашом сесијом. Молимо вас да се повежете са администратором уколико наставите да имате сметњи.',
	'LOGOUT_REDIRECT'			=> 'Успешно сте се одјавили.',

	'MARK_IMPORTANT'				=> 'Означи/Одзначи као важно',
	'MARKED_MESSAGE'				=> 'Означена порука',
	'MAX_FOLDER_REACHED'			=> 'Достигли сте највећи дозвољени број кориснички одређених фасцикли.',
	'MESSAGE_BY_AUTHOR'				=> 'од',
	'MESSAGE_COLOURS'				=> 'Боје поруке',
	'MESSAGE_DELETED'				=> 'Порука је успешно обрисана.',
	'MESSAGE_HISTORY'				=> 'Историјат поруке',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Ова порука је уклоњена од њеног аутора пре него што је испоручена.',
	'MESSAGE_SENT_ON'				=> 'послата',
	'MESSAGE_STORED'				=> 'Ова порука је успешно послата.',
	'MESSAGE_TO'					=> 'За',
	'MESSAGES_DELETED'				=> 'Поруке су успешно обрисане',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Помери поруке из уклоњене фасцикле у',
	'MOVE_DOWN'						=> 'Помери доле',
	'MOVE_MARKED_TO_FOLDER'			=> 'Помери означене у %s',
	'MOVE_PM_ERROR'					=> 'Дошло је до грешке приликом померања порука у нову фасциклу, само су %1d од %2d порука померене.',
	'MOVE_TO_FOLDER'				=> 'Помери у фасциклу',
	'MOVE_UP'						=> 'Помери горе',

	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'Нисте унели потврду e-mail адресе.',
	'NEW_EMAIL_ERROR'				=> 'Адреса e-mail коју сте унели се не поклапа.',
	'NEW_FOLDER_NAME'				=> 'Ново име фасцикле',
	'NEW_PASSWORD'					=> 'Нова лозинка',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Нисте унели потврду лозинке.',
	'NEW_PASSWORD_ERROR'			=> 'Лозинке које сте унели се не поклапају.',
	'NOTIFY_METHOD'					=> 'Начин обавештавања',
	'NOTIFY_METHOD_BOTH'			=> 'Оба',
	'NOTIFY_METHOD_EMAIL'			=> 'E-mail само',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Начин за слање порука послатих преко овог форума.',
	'NOTIFY_METHOD_IM'				=> 'Само Jabber',
	'NOTIFY_ON_PM'					=> 'Обавести ме о новим приватним порукама',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Не можете додати анонимног корисника на ваш списак пријатеља.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Не можете додавати ботове на ваш списак пријатеља.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Не можете додавати кориснике на ваш списак пријатеља када су већ на вашем списку за игнорисање.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Не можете додати сами себе на списак пријатеља.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Не можете додавати администраторе и уреднике на ваш списак за игнорисање.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Не можете додати анонимног корисника на ваш списак за игнорисање.',
	'NOT_ADDED_FOES_BOTS'			=> 'Не можете додавати ботове на ваш списак за игнорисање.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Не можете додавати кориснике на ваш списак за игнорисање када су већ на вашем списку пријатеља.',
	'NOT_ADDED_FOES_SELF'			=> 'Не можете додати сами себе на списак за игнорисање.',
	'NOT_AGREE'						=> 'Не слажем се са овим условима',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Одредишна фасцикла “%s” је изгледа пуна. Захтевани поступак није предузет.',
	'NOT_MOVED_MESSAGE'				=> 'Имате 1 приватну поруку тренутно на чекању због попуњене фасцикле.',
	'NOT_MOVED_MESSAGES'			=> 'Имате %d приватних порука тренутно на чекању због попуњене фасцикле.',
	'NO_ACTION_MODE'				=> 'Нисте изабрали поступак за поруку.',
	'NO_AUTHOR'						=> 'Нема одређеног аутора за ову поруку',
	'NO_AVATAR_CATEGORY'			=> 'Нема',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Нисте овлашћени да бришете приватне поруке.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Нисте овлашћени да учитавате приватне поруке.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Нисте овлашћени да прослеђујете приватне поруке.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Нисте овлашћени да шаљете приватне поруке групама.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Нисте овлашћени да тражите нову лозинку.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Нисте овлашћени да читате приватне поруке које су на држању.',
	'NO_AUTH_READ_MESSAGE'			=> 'Нисте овлашћени да читате приватне поруке.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Не можете да читате ову поруку јер је уклоњена од аутора.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Нисте овлашћени да шаљете приватне поруке.',
	'NO_AUTH_SIGNATURE'				=> 'Нисте овлашћени да одређујете потпис.',

	'NO_BCC_RECIPIENT'			=> 'Ништа',
	'NO_BOOKMARKS'				=> 'Немате белешки.',
	'NO_BOOKMARKS_SELECTED'		=> 'Нисте изабрали ниједну белешку.',
	'NO_EDIT_READ_MESSAGE'		=> 'Приватна порука не може бити учитана јер је већ прочитана.',
	'NO_EMAIL_USER'				=> 'Подаци о e-mail/корисничком имену не могу бити пронађени.',
	'NO_FOES'					=> 'Тренутно немате одређених за игнорисање',
	'NO_FRIENDS'				=> 'Тренутно немате одређених пријатеља',
	'NO_FRIENDS_OFFLINE'		=> 'Нема пријатеља који нису на вези',
	'NO_FRIENDS_ONLINE'			=> 'Нема пријатеља на вези',
	'NO_GROUP_SELECTED'			=> 'Нисте изабрали групу.',
	'NO_IMPORTANT_NEWS'			=> 'Нема присутних важних саопштења.',
	'NO_MESSAGE'				=> 'Приватна порука не може бити пронађена.',
	'NO_NEW_FOLDER_NAME'		=> 'Морате да одредите ново име фасцикле.',
	'NO_NEWER_PM'				=> 'Нема новијих порука.',
	'NO_OLDER_PM'				=> 'Нема старијих порука.',
	'NO_PASSWORD_SUPPLIED'		=> 'Не можете се пријавити без лозинке.',
	'NO_RECIPIENT'				=> 'Нисте одредили примаоца.',
	'NO_RULES_DEFINED'			=> 'Нема одређених правила.',
	'NO_SAVED_DRAFTS'			=> 'Нема сачуваних нацрта.',
	'NO_TO_RECIPIENT'			=> 'Нико',
	'NO_WATCHED_FORUMS'			=> 'Не пратите ниједан форум.',
	'NO_WATCHED_SELECTED'		=> 'Нисте изабрали ниједну праћену тему нити форум.',
	'NO_WATCHED_TOPICS'			=> 'Не пратите ниједну тему.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Лозинка мора бити између %1$d и %2$d знакова дугачка, мора садржати велика и мала слова и мора садржати бројеве.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Мора бити између %1$d и %2$d знакова.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Лозинка мора бити између %1$d и %2$d знакова дугачка и мора садржати велика и мала слова.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Лозинка мора бити између %1$d и %2$d знакова дугачка, мора садржати велика и мала слова, мора садржати бројеве и мора садржати симболе.',
	'PASSWORD'					=> 'Лозинка',
	'PASSWORD_ACTIVATED'		=> 'Ваша нова лозинка је активирана.',
	'PASSWORD_UPDATED'			=> 'Нова лозинка је послата на вашу регистровану e-mail адресу.',
	'PERMISSIONS_RESTORED'		=> 'Успешно сте повратили изворне дозволе.',
	'PERMISSIONS_TRANSFERRED'	=> 'Успешно сте пребацили дозволе из <strong>%s</strong>, сада сте у могућности да прегледате форум са овим корисничким дозволама.<br />Молимо знајте да дозволе администратора нису пренете. У могућности сте да вратите ваш комплет дозвола било када.',
	'PM_DISABLED'				=> 'Приватне поруке су онемогућене на овом форуму.',
	'PM_FROM'					=> 'Од',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Ова порука је послата од корисника који више није регистрован.',
	'PM_ICON'					=> 'ПП икона',
	'PM_INBOX'					=> 'Долазно',
	'PM_NO_USERS'				=> 'Захтевани корисници које желите да додате не постоје.',
	'PM_OUTBOX'					=> 'За слање',
	'PM_SENTBOX'				=> 'Послато',
	'PM_SUBJECT'				=> 'Наслов поруке',
	'PM_TO'						=> 'Пошаљи за',
	'PM_USERS_REMOVED_NO_PM'	=> 'Неки корисници не могу бити додати јер су онемогућили пријем приватних порука.',
	'POPUP_ON_PM'				=> 'Искачући прозор за нову приватну поруку',
	'POST_EDIT_PM'				=> 'Учитај поруку',
	'POST_FORWARD_PM'			=> 'Проследи поруку',
	'POST_NEW_PM'				=> 'Нова порука',
	'POST_PM_LOCKED'			=> 'Приватне поруке су закључане.',
	'POST_PM_POST'				=> 'Цитирај поруку',
	'POST_QUOTE_PM'				=> 'Цитирај поруку',
	'POST_REPLY_PM'				=> 'Одговори на поруку',
	'PRINT_PM'					=> 'Преглед за штампу',
	'PREFERENCES_UPDATED'		=> 'Ваше поставке су ажуриране.',
	'PROFILE_INFO_NOTICE'		=> 'Молимо знајте да ови подаци могу бити видљиви осталим корисницима. Будите пажљиви када укључујете било какве личне појединости. Сва поља означена са * морају бити употпуњена.',
	'PROFILE_UPDATED'			=> 'Ваш профил је ажуриран.',

	'RECIPIENT'							=> 'Прималац',
	'RECIPIENTS'						=> 'Примаоци',
	'REGISTRATION'						=> 'Регистрација',
	'RELEASE_MESSAGES'					=> '%sПусти све поруке које-су на чекању%s… оне ће бити пре-распоређене у одговарајућу фасциклу уколико има довољно простора.',
	'REMOVE_ADDRESS'					=> 'Уклони адресу',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Уклони изабране белешке',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Да ли сигурно желите да уклоните све изабране белешке?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Уклони означене белешке',
	'REMOVE_FOLDER'						=> 'Уклони фасциклу',
	'REMOVE_FOLDER_CONFIRM'				=> 'Да ли сигурно желите да уклоните ову фасциклу?',
	'RENAME'							=> 'Преименуј',
	'RENAME_FOLDER'						=> 'Преименуј фасциклу',
	'REPLIED_MESSAGE'					=> 'Одговорено на поруку',
	'REPLY_TO_ALL'						=> 'Одговори пошиљаоцу и свим примаоцима.',
	'REPORT_PM'							=> 'Пријави приватну поруку',
	'RESIGN_SELECTED'					=> 'Откажи изабрано',
	'RETURN_FOLDER'						=> '%1$sПовратак у претходну фасциклу%2$s',
	'RETURN_UCP'						=> '%sПовратак у Корисничку Контролну Плочу%s',
	'RULE_ADDED'						=> 'Правило је успешно додато.',
	'RULE_ALREADY_DEFINED'				=> 'Ово правило је претходно одређено.',
	'RULE_DELETED'						=> 'Правило је успешно уклоњено.',
	'RULE_NOT_DEFINED'					=> 'Правило није исправно одређено.',
	'RULE_REMOVED_MESSAGE'				=> 'Једна приватна порука је уклоњена због пречистача приватних порука.',
	'RULE_REMOVED_MESSAGES'				=> '%d приватне поруке су уклоњене због пречистача приватних порука.',

	'SAME_PASSWORD_ERROR'		=> 'Нова лозинка коју сте унели је иста као ваша тренутна лозинка.',
	'SEARCH_YOUR_POSTS'			=> 'Преглед ваших порука',
	'SEND_PASSWORD'				=> 'Пошаљи лозинку',
	'SENT_AT'					=> 'Послато',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Корисници се могу повезати са мном путем e-mail',
	'SIGNATURE_EXPLAIN'			=> 'Ово је блок текста који може бити додат вашим порукама. Постоји ограничење од %d знакова.',
	'SIGNATURE_PREVIEW'			=> 'Ваш потпис ће се овако појављивати у порукама',
	'SIGNATURE_TOO_LONG'		=> 'Ваш потпис је предугачак.',
	'SORT'						=> 'Поређај',
	'SORT_COMMENT'				=> 'Коментар датотеке',
	'SORT_DOWNLOADS'			=> 'Преузимања',
	'SORT_EXTENSION'			=> 'Екстензија',
	'SORT_FILENAME'				=> 'Назив датотеке',
	'SORT_POST_TIME'			=> 'Време поруке',
	'SORT_SIZE'					=> 'Величина датотеке',

	'TIMEZONE'					=> 'Временска зона',
	'TO'						=> 'За',
	'TOO_MANY_RECIPIENTS'		=> 'Покушали сте да пошаљете приватну поруку за превише примаоца.',
	'TOO_MANY_REGISTERS'		=> 'Премашили сте највећи дозвољени број покушаја регистрације за ову сесију. Молимо вас да покушате касније.',

	'UCP'						=> 'Корисничка Контролна Плоча',
	'UCP_ACTIVATE'				=> 'Активирај налог',
	'UCP_ADMIN_ACTIVATE'		=> 'Молимо знајте да треба да унесете исправну e-mail адресу пре него што ваш налог буде активиран. Администратор ће прегледати ваш налог и уколико га одобри добићете e-mail на адресу коју сте унели.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Прилози',
	'UCP_COPPA_BEFORE'			=> 'Пре %s',
	'UCP_COPPA_ON_AFTER'		=> 'На или после %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Молимо знајте да треба да унесете исправну e-mail адресу пре него што ваш налог буде активиран. Добићете e-mail на адресу коју сте дали а који садржи везу за активацију налога.',
	'UCP_ICQ'					=> 'ICQ број',
	'UCP_JABBER'				=> 'Jabber адреса',

	'UCP_MAIN'					=> 'Преглед',
	'UCP_MAIN_ATTACHMENTS'		=> 'Управљање прилозима',
	'UCP_MAIN_BOOKMARKS'		=> 'Управљање белешкама',
	'UCP_MAIN_DRAFTS'			=> 'Управљање нацртима',
	'UCP_MAIN_FRONT'			=> 'Главна страна',
	'UCP_MAIN_SUBSCRIBED'		=> 'Управљање праћењима',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Нисте послали ниједну датотеку.',

	'UCP_PREFS'					=> 'Поставке форума',
	'UCP_PREFS_PERSONAL'		=> 'Учитај опште поставке',
	'UCP_PREFS_POST'			=> 'Учитај задате поставке писања',
	'UCP_PREFS_VIEW'			=> 'Учитај поставке приказа',

	'UCP_PM'					=> 'Приватне поруке',
	'UCP_PM_COMPOSE'			=> 'Нова порука',
	'UCP_PM_DRAFTS'				=> 'Управљање ПП нацртима',
	'UCP_PM_OPTIONS'			=> 'Правила, фасцикле &amp; поставке',
	'UCP_PM_POPUP'				=> 'Приватне поруке',
	'UCP_PM_POPUP_TITLE'		=> 'Искакање приватних порука',
	'UCP_PM_UNREAD'				=> 'Непрочитане поруке',
	'UCP_PM_VIEW'				=> 'Преглед порука',

	'UCP_PROFILE'				=> 'Профил',
	'UCP_PROFILE_AVATAR'		=> 'Учитај грб',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Учитај профил',
	'UCP_PROFILE_REG_DETAILS'	=> 'Учитај поставке налога',
	'UCP_PROFILE_SIGNATURE'		=> 'Учитај потпис',

	'UCP_USERGROUPS'			=> 'Корисничке групе',
	'UCP_USERGROUPS_MEMBER'		=> 'Учитај чланство',
	'UCP_USERGROUPS_MANAGE'		=> 'Управљање групама',

	'UCP_REGISTER_DISABLE'			=> 'Прављење новог налога тренутно није могуће.',
	'UCP_REMIND'					=> 'Пошаљи лозинку',
	'UCP_RESEND'					=> 'Пошаљи активациони e-mail',
	'UCP_WELCOME'					=> 'Добро дошли у Корисничку Контролну Плочу. Одавде можете пратити, прегледати или изменити ваш профил, поставке, праћене форуме и теме. Такође можете слати поруке другим корисницима (уколико је дозвољено). Молимо вас да прочитате сва саопштења пре него што наставите.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Пријатељи &amp; Игнорисани',
	'UCP_ZEBRA_FOES'				=> 'Управљање игнорисанима',
	'UCP_ZEBRA_FRIENDS'				=> 'Управљање пријатељима',
	'UNDISCLOSED_RECIPIENT'			=> 'Недодељен Прималац',
	'UNKNOWN_FOLDER'				=> 'Непозната фасцикла',
	'UNWATCH_MARKED'				=> 'Прекини праћење означених',
	'UPLOAD_AVATAR_FILE'			=> 'Додавање са вашег рачунара',
	'UPLOAD_AVATAR_URL'				=> 'Додавање са URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Унесите URL до места које садржи слику. Слика ће бити копирана на ову веб страницу.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Корисничко име мора бити између %1$d и %2$d знакова дугачко и користите само алфанумеричке знакове.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Корисничко име мора бити између %1$d и %2$d знакова дугачко и користите алфанумеричке, размак или -+_[] знакове.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Корисничко име мора бити између %1$d и %2$d знакова дугачко и користите само ASCII знакове, дакле без посебних симбола.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Корисничко име мора бити између %1$d и %2$d знакова дугачко и користите само слова и бројеве.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Корисничко име мора бити између %1$d и %2$d знакова дугачко и користите слова, бројеве, размак или -+_[] знакове.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Дужина мора бити између %1$d и %2$d знакова.',
	'USERNAME_TAKEN_USERNAME'		=> 'Корисничко име које сте унели је већ у употреби, молимо вас да изаберете друго.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Корисничко име које сте унели је недозвољено или садржи недозвољену реч. Молимо вас да изаберете друго име.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Корисничка имена која сте унели или не могу бити пронађена или нису активирани корисници.',

	'VIEW_AVATARS'				=> 'Прикажи грбове',
	'VIEW_EDIT'					=> 'Преглед/Учитај',
	'VIEW_FLASH'				=> 'Прикажи Flash анимације',
	'VIEW_IMAGES'				=> 'Прикажи слике у порукама',
	'VIEW_NEXT_HISTORY'			=> 'Следећа ПП у историји',
	'VIEW_NEXT_PM'				=> 'Следећа ПП',
	'VIEW_PM'					=> 'Преглед поруке',
	'VIEW_PM_INFO'				=> 'Појединости поруке',
	'VIEW_PM_MESSAGE'			=> '1 порука',
	'VIEW_PM_MESSAGES'			=> '%d поруке',
	'VIEW_PREVIOUS_HISTORY'		=> 'Претходна ПП у историји',
	'VIEW_PREVIOUS_PM'			=> 'Претходна ПП',
	'VIEW_SIGS'					=> 'Прикажи потписе',
	'VIEW_SMILIES'				=> 'Прикажи смајлиће као сличице',
	'VIEW_TOPICS_DAYS'			=> 'Прикажи теме из претходних дана',
	'VIEW_TOPICS_DIR'			=> 'Прикажи смер ређања тема',
	'VIEW_TOPICS_KEY'			=> 'Прикажи теме поређане по',
	'VIEW_POSTS_DAYS'			=> 'Прикажи поруке из претходних дана',
	'VIEW_POSTS_DIR'			=> 'Прикажи смер ређања порука',
	'VIEW_POSTS_KEY'			=> 'Прикажи поруке поређане по',

	'WATCHED_EXPLAIN'			=> 'Испод је списак форума и тема које пратите. Бићете обавештени о новим порукама у њима. Да бисте престали са праћењем означите форум или тему и онда притисните дугме <em>Прекини праћење означених</em>.',
	'WATCHED_FORUMS'			=> 'Праћени форуми',
	'WATCHED_TOPICS'			=> 'Праћене теме',
	'WRONG_ACTIVATION'			=> 'Активациони кључ који сте приложили се не поклапа ни са једним у бази.',

	'YOUR_DETAILS'				=> 'Ваша активност',
	'YOUR_FOES'					=> 'Ваши игнорисани',
	'YOUR_FOES_EXPLAIN'			=> 'Да бисте уклонили корисничка имена изаберите их а онда кликните на прихвати.',
	'YOUR_FRIENDS'				=> 'Ваши пријатељи',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Да бисте уклонили корисничка имена изаберите их а онда кликните на прихвати.',
	'YOUR_WARNINGS'				=> 'Ваш ниво опомене',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Поставите у фасциклу',
		'MARK_AS_READ'		=> 'Означи као прочитано',
		'MARK_AS_IMPORTANT'	=> 'Означи поруку',
		'DELETE_MESSAGE'	=> 'Обриши поруку'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Наслов',
		'SENDER'	=> 'Пошиљалац',
		'MESSAGE'	=> 'Порука',
		'STATUS'	=> 'Статус поруке',
		'TO'		=> 'Послата За'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'је као',
		'IS_NOT_LIKE'	=> 'није као',
		'IS'			=> 'је',
		'IS_NOT'		=> 'није',
		'BEGINS_WITH'	=> 'почиње са',
		'ENDS_WITH'		=> 'завршава се са',
		'IS_FRIEND'		=> 'је пријатељ',
		'IS_FOE'		=> 'је за игнорисање',
		'IS_USER'		=> 'је корисник',
		'IS_GROUP'		=> 'је у корисничкој групи',
		'ANSWERED'		=> 'одговорио',
		'FORWARDED'		=> 'прослеђена',
		'TO_GROUP'		=> 'у моју задату корисничку групу',
		'TO_ME'			=> 'за мене'
	),


	'GROUPS_EXPLAIN'	=> 'Корисничке групе омогућавају администраторима форума да боље управљају корисницима. По задатом ћете бити смештени у одређену групу, и то је ваша задата група. Ова група одређује како се можете појавити пред другим корисницима, на пример боју вашег корисничког имена, грб, чин, итд. У зависности од тога да ли администратор дозвољава можете бити у могућности да промените вашу задату групу. Можете такође бити у или вам омогућено да се прикључите другим групама. Неке групе вам могу дати додатне дозволе за преглед садржаја или повећавају ваше могућности у другим областима.',
	'GROUP_LEADER'		=> 'Вођство',
	'GROUP_MEMBER'		=> 'Чланство',
	'GROUP_PENDING'		=> 'Чека на чланство',
	'GROUP_NONMEMBER'	=> 'Не-чланство',
	'GROUP_DETAILS'		=> 'Појединости групе',

	'NO_LEADER'		=> 'Нема вођства групе',
	'NO_MEMBER'		=> 'Нема чланства групе',
	'NO_PENDING'	=> 'Нема чланства на чекању',
	'NO_NONMEMBER'	=> 'Нема група без-чланова',
));

?>