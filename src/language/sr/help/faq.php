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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Сваки администратор форума може омогућити или онемогућити одређене типове прилога. Уколико нисте сигурни шта је дозвољено за додавање, повежите се са администратором форума за помоћ.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Који прилози су дозвољени на овом форуму?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Да бисте нашли списак ваших прилога које сте додали, идите на вашу Корисничку Контролну Плочу и следите везе до одељка прилога.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Како да пронађем све моје прилоге?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Прилози',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Праћења и Забелешке',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Обликовања и Типови Тема',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Пријатељи и Занемарени',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Нивои Корисника и Групе',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB Питања',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Питања Пријаве и Регистрације',
	'HELP_FAQ_BLOCK_PMS'	=> 'Приватне Поруке',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Питања Писања',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Претрага Форума',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Корисничке Поставке и избори',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'У phpBB 3.0, бележење тема је радило као и прављење забелешки у вашем веб прегледачу. Нисте били неопходно обавештени о томе када има нека измена. Од phpBB 3.1, бележење је више као праћење теме. Можете бити обавештени када забележена тема буде измењена. Праћење, међутим, ће вас обавестити о томе када има измена на теми или форуму. Поставке обавештавања за забелешке и праћења могу бити подешене у Корисничкој Контролној Плочи, под “Поставке форума”.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Која је разлика између забелешки и праћења?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'За праћење одређеног форума, кликните на “Прати форум” везу, при дну странице, одмах по уласку на тај форум.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Како да пратим одређене форуме?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Да бисте уклонили ваша праћења, отиђите до ваше Корисничке Контролне Плоче и следите везе до ваших праћења.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Како да уклоним моја праћења?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Можете забележити или пратити одређену тему кликом на одговарајућу везу у “Алати теме” изборнику, смештеном при врху и дну теме.<br />Одговарањем на тему са означеним “Обавести ме када одговор буде био послат” такође ће вам омогућити праћење теме.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Како да забележим или да пратим одређене теме?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Саопштења често садрже важне податке за форум који тренутно читате и требало би да их прочитате што је могуће пре. Саопштења се појављују на врху сваке странице у форуму за који су послата. Као и са општим саопштењима, дозволе за саопштења даје администратор форума.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Шта су саопштења?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'ББКод је посебна примена HTML, која нуди велику контролу у обликовању одређених објеката у поруци. Коришћење ББКода је омогућено од администратора, али такође може да буде и онемогућено по порукама у обрасцу за писање. ББКод је сам по себи сличан у стилу са HTML, али су тагови затворени угластим заградама [ и ] пре него &lt; и &gt;. За више података о ББКоду погледајте водич којем можете да приступите са странице за писање.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Шта је ББКод?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Општа саопштења садрже важне податке и треба да их прочитате што је могуће пре. Општа саопштења ће се појавити на врху сваког форума и такође у вашој Корисничкој Контролној Плочи. Дозволе за општа саопштења даје администратор форума.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Шта су општа саопштења?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Не. Није могуће слати HTML на овом форуму и имати га представљеног као HTML. Већина обликовања која се могу пренети коришћењем HTML могу бити примењена користећи ББКод уместо њега.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Могу ли да користим HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Иконе теме су слике изабране од пошиљаоца и придружене порукама како би указивале на њихов садржај. Могућност коришћења икона теме зависи од дозвола постављених од администратора форума.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Шта су иконе теме?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Да, слике могу бити приказане у вашим порукама. Уколико је администратор омогућио прилоге, можете бити у могућности да додате слику на форум. У супротном, морате направити везу до слике похрањене на јавно приступачном веб серверу, н.пр. http://www.example.com/my-picture.gif. Не можете направити везу до слика похрањених на вашем PC (осим уколико није јавно приступачни веб сервер) нити слике похрањене иза механизама који траже потврду, н.пр. hotmail или yahoo поштанска сандучад, лозинком заштићене веб странице, итд. За приказ слике користите ББКод [img] таг.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Могу ли слати слике?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Закључане теме су теме у којима корисници не могу више одговарати и било које гласање које се налази у њима је аутоматски окончано. Теме могу бити закључане из више разлога и подешене су на овај начин или од уредника или од администратора форума. Можете такође бити у могућности да закључате ваше сопствене теме у зависности од дозвола које су вам додељене од администратора форума.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Шта су закључане теме?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Смајлићи, или Емотикони, су мале слике које могу бити искоришћене за изражавање осећања користећи кратак код, н.пр. :) значи срећан, док :( значи тужан. Пуни списак смајлића може бити виђен преко обрасца за писање. Пробајте да не претерујете са употребом смајлића, утолико пре, пошто они могу брзо учинити поруку нечитљивом и уредник може да их избаци или уклони поруку заједно с њима. Администратор форума је можда такође подесио ограничење за број смајлића које можете користити у поруци.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Шта су Смајлићи?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Лепљиве теме у форуму се појављују испод било ког саопштења при прегледу форума и само на првој страници. Оне су некада јако важне па би требало да их прочитате чим пре могнете. Као и са саопштењима и општим саопштењима, дозволе за лепљиве теме даје администратор форума.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Шта су лепљиве теме?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Можете користити ове спискове за организовање других чланова форума. Чланови додати вашем списку пријатеља биће побројани у вашој Корисничкој Контролној Плочи за брз приступ да видите њихов статус на вези и да им пошаљете приватне поруке. С основом у подршци од предлошка, поруке од ових корисника могу такође бити јако осветљене. Уколико додате корисника на списак занемарених, било које поруке послате од њих ће бити скривене као подразумевано.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Шта су спискови Пријатеља и Занемарених?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Можете да додате кориснике на ваш списак на два начина. У сваком корисничком профилу, постоји веза за додавање корисника било на ваш списак Пријатеља било Занемарених. Други начин, из ваше Корисничке Контролне Плоче, можете непосредно да додајете кориснике уношењем њихових корисничких имена. Можете такође да уклоните кориснике са вашег списка користећи исту страницу.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Како могу да додам / уклоним кориснике са свог списка Пријатеља или Занемарених?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Администратори су људи са највишим нивоом додељене контроле над и у форуму. Ови чланови могу да контролишу све видове поступака на форуму, укључујући постављање дозвола, забрану корисника, прављење корисничких група или постављање уредника, итд., у зависности од оснивача форума и тога које је дозволе дао другим администраторима. Они такође могу имати пуну уредничку способност у свим форумима, у зависности од тога шта им је оснивач форума дозволио.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Ко су Администратори?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Могуће је администратору да додели боју члановима корисничке групе ради лакшег препознавања чланова те групе.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Зашто се неке корисничке групе појављују у другачијој боји?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Уколико сте члан више од једне корисничке групе, ваша подразумевана група је искоришћена за одређивање која боја и чин групе би требало да се прикажу за вас по подразумеваном. Администратор форума вам може дати дозволу да промените вашу подразумевану корисничку групу преко ваше Корисничке Контролне Плоче.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Шта је “Подразумевана корисничка група”?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Уредници су појединци (или групе појединаца) чији је посао да прате форум из дана у дан. Они имају моћ да учитају или обришу поруке и закључају, откључају, преместе, обришу и раздвоје теме у форумима које они уређују. Уопштено, уредници су ту да спрече људе да промаше тему односно да иду ван-теме или праве сметње слањем наопаких или одвратних ствари.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Ко су Уредници?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Ова страница вам пружа списак особља форума, укључујући администраторе форума и уреднике али и друге појединости као што је које форуме уређују.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Шта је “Форум тим” веза?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Корисничке групе су групе корисника које деле заједницу у одељке са којима администратори форума могу да раде. Сваки корисник може припадати различитим групама и свакој групи могу бити додељене појединачне дозволе. Ово пружа лак начин администраторима да промене дозволе за мноштво корисника одједном, као што је промена дозвола уредника или омогућавање корисницима да приступе приватном форуму.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Можете прегледати све корисничке групе преко везе “Корисничке групе” у вашој Корисничкој Контролној Плочи. Уколико бисте волели да се придружите некој, наставите са кликом на одговарајуће дугме. Немају све групе отворен приступ, ипак. Неке могу тражити одобрење за приступ, неке могу бити затворене а неке могу имати чак и скривено чланство. Уколико је група отворена, можете да јој приступите кликом на одговарајуће дугме. Уколико група захтева одобрење за приступ можете тражити приступ кликом на одговарајуће дугме. Вођа корисничке групе треба да вам одобри приступ и може да вас пита зашто желите да се прикључите групи. Молимо да не досађујете вођама група уколико вам не одобре приступ; имаће они своје разлоге.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Где су корисничке групе и како да приступим некој?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Вођа корисничке групе је обично додељен када су корисничке групе прављене од администратора форума. Уколико сте заинтересовани за прављење корисничке групе, онда као прва ствар треба да буде да се повежете са администратором; шаљући му приватну поруку.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Како да постанем вођа корисничке групе?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Шта су корисничке групе?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Сви корисници форума могу да користе “Повежимо се” образац, уколико је омогућен од администратора форума.<br />Чланови форума такође могу да користе “Форум тим” везу.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Како да се повежем са администратором форума?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Овај програм је написан од и лиценциран кроз phpBB Limited. Уколико верујете да нека могућност треба да буде додата молимо посетите <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>, где можете подржати постојеће идеје или предложити нове могућности.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Зашто X могућност’није доступна?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Било који од администратора на списку “Форум тим” странице би требало да буде одговарајући да се повежете с њим поводом ваших примедби. Уколико још увек не добијате одговор требало би да се повежете са власником домена (урадите <a href="http://www.google.com/search?q=whois">whois проверу</a>) или, уколико се ово извршава на бесплатном сервису (н.пр. Yahoo!, free.fr, f2s.com, etc.), управу или одељак за злоупотребе тог сервиса. Молимо знајте да phpBB Limited нема <strong>у потпуности никакву надлежност</strong> и да не може ни на било који начин бити сматран одговорнiм око тога како, где и од кога се овај форум користи. Немојте се повезивати са phpBB Limited у смислу било које законске (cease and desist, liable, defamatory comment, итд.) ствари <strong>која није у непосредном односу</strong> са phpBB.com веб страницом или посебно самим програмом phpBB по себи. Уколико сте послали мејл phpBB Limited о употреби овог програма <strong>од треће стране</strong> онда би требало да очекујете сажет одговор или никакав одговор уопште.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'С ким да се повежем поводом наопаких и/или законских ствари повезаних са овим форумом?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Овај програм (у његовом неизмењеном облику) је направио, издао и заштитио од умножавања <a href="https://www.phpbb.com/">phpBB Limited</a>. Доступан је под GNU General Public Licence, издање 2 (GPL-2.0) и може бити слободно растуран. Погледајте <a href="https://www.phpbb.com/about/">About phpBB</a> за више појединости.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Ко је написао овај форум?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Уколико нисте означили кућицу <em>Запамти ме</em> када сте се пријављивали, форум ће вас држати пријављеним само током унапред одређеног времена. Ово спречава злоупотребу вашег налога од било кога другог. Како бисте остали пријављени, означите кућицу <em>Запамти ме</em> током пријављивања. Ово није препоручљиво уколико форуму приступате са рачунара који делите са неким, н.пр. библиотека, интернет кафе, универзитетски рачунарски центар, итд. Уколико не видите ову кућицу, то значи да је администратор онемогућио ту могућност.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Зашто добијам аутоматску одјаву?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Има неколико разлога због којих би ово могло да се појави. Прво, проверите да ли су ваше корисничко име и лозинка исправни. Уколико јесу, повежите се са администратором форума како бисте проверили да нисте можда под забраном. Такође је могуће да администратор форума има грешку у конфигурацији са своје стране, те да би можда требало да је исправи.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Могуће је да је администратор деактивирао или обрисао ваш налог из неког разлога. Такође, многи форуми повремено уклањају кориснике који нису ништа писали током дугог времена како би се смањила величина базе. Уколико се ово догодило, пробајте се поново регистровати и будите више укључени у разговоре.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Регистровао сам се у прошлости али више не могу да се пријавим?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Зашто не могу’да се пријавим?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Могуће је да је администратор форума онемогућио регистрације како би спречио новим посетиоцима да се пријаве. Администратор форума је могао такође да забрани вашу IP адресу или онемогући корисничко име које покушавате да региструјете. Повежите се са администратором форума за помоћ.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Зашто не’могу да се региструјем?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA, или Children’s Online Privacy Protection Act of 1998, је закон у САД који захтева од веб страница које могуће скупљају податке од малолетника млађих од 13 година да имају писмену сагласност родитеља или други начин признања од законитих старатеља, да дозвољавају сабирање личних података од малолетника млађих од 13 година. Уколико нисте сигурни да ли се ово примењује на вас као некога ко покушава да се региструје или на веб страницу на коју се покушавате регистровати, повежите се са правним саветником за помоћ. Молимо имајте у виду да phpBB Limited и власници овог форума не могу пружати правне савете и да нису адреса на коју се треба обраћати за било шта из правног домена, изузев за оно што је наведено у питању “С ким да се повежем поводом наопаких и/или законских ствари повезаних са овим форумом?”.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Шта је COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '“Обриши све колачиће форума” брише све колачиће направљене од стране phpBB који вас држе препознатим и пријављеним на форум. Такође пружају и могућности као што је праћење прочитаног уколико је то омогућено од администратора форума. Уколико имате сметњи при пријави или одјави, брисање колачића форума може помоћи.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Шта “Обриши колачиће” ради?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Не паничите! Иако вам ваша лозинка не може бити враћена, она лако може да буде васпостављена. Посетите страницу за пријаву и кликните на <em>Заборавио сам моју лозинку</em>. Испратите сва упутства и требало би да будете у стању да се поново пријавите ускоро.<br />Међутим, уколико нисте у стању да васпоставите вашу лозинку, повежите се са администратором форума.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Изгубио’сам моју лозинку!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Можда и не морате, на администратору форума је да одлучи да ли је потребно да се региструјете како бисте слали поруке. Поред тога; регистрација ће вам дати и додатне могућности које нису доступне гостима као што су избор слике грба, приватне поруке, слање мејлова корисницима, учлањење у корисничке групе, итд. Потребно је само неколико тренутака за регистрацију па је препоручљиво да то урадите.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Као прво, проверите ваше корисничко име и лозинку. Уколико су исправни, онда се једна од две ствари можда десила. Уколико је омогућена COPPA подршка а ви приликом регистрације изабрали да сте млађи од 13 година, мораћете да следите упутства која сте добили. Неки форуми такође могу да траже да новорегистровани налози буду активирани, било од вас самих било од администратора пре него што могнете да се пријавите; овај податак је био присутан током регистрације. Уколико вам је послат мејл, пратите упутства. Уколико вам није стигао мејл, можда сте дали неисправну мејл адресу или вам је мејл ухваћен од стране спам пречистача. Уколико сте сигурни да је ваша мејл адреса коју сте дали исправна, пробајте да се повежете са администратором форума.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Регистрован сам али не могу да се пријавим!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Зашто морам да се региструјем?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Постоје три разлога за ово; нисте регистровани и/или нисте пријављени, администратор форума је онемогућио приватне поруке за цео форум, или вас је администратор форума спречио да шаљете приватне поруке. Повежите се са администратором форума за више података.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Не могу да шаљем приватне поруке!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Жао нам је што то чујемо. Образац за мејл овог форума укључује обезбеђење које покушава да прати кориснике који шаљу такве поруке, па пошаљите мејл администратору форума са пуним умношком мејла који сте добили. Врло је важно да ово укључује заглавља која садрже појединости корисника који је послао мејл. Администратор форума потом може да предузме одређене радње.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Примио сам спам или наопак мејл од неког са овог форума!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Можете аутоматски обрисати приватне поруке од корисника коришћењем правила порука у вашој Корисничкој Контролној Плочи. Уколико добијате наопаке приватне поруке од одређеног корисника, пријавите поруке уреднику форума; они имају моћ да спрече корисника да шаље приватне поруке.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Настављам да добијам непожељне приватне поруке!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Кликом на везу “Погурај тему” док је прегледате, можете “погурати” тему на врх форума на првој страници. Међутим, уколико ово не видите, онда је гурање тема можда онемогућено или дозвољено време између гурања није још достигнуто. Такође је могуће да погурате тему тако што ћете једноставно одговорити на њу, међутим, будите сигурни да следите правила форума када то радите.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Како да погурам моју тему?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'За слање нове теме у форум, кликните на "Нова Тема". За слање одговора на тему, кликните на "Пошаљи Одговор". Може вам бити потребно да се региструјете пре него што могнете слати поруке. Списак ваших дозвола у сваком форуму је доступан при дну страница приказа форума и тема. Пример: Можете слати нове теме, Можете слати прилоге, итд.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Како да направим нову тему или да пошаљем одговор?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Ово вам омогућава да сачувате поруке за касније употпуњење и слање. За учитавање сачуваних нацрта, посетите Корисничку Контролну Плочу.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'За шта је дугме “Сачувај нацрт” при слању теме?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Уколико нисте администратор или уредник форума, можете да учитавате или бришете само сопствене поруке. Можете да учитате поруку кликом на дугме за учитавање за одређену поруку, понекад само одређено време након што је порука направљена. Уколико је неко већ одговорио на поруку, наћи ћете мали комад излазног текста испод поруке када се вратите на тему који приказује број пута колико сте је учитали заједно са датумом и временом. Ово ће се појавити само уколико је неко већ одговорио; неће се појавити уколико је уредник или администратор учитао поруку, иако они могу да оставе белешку зашто су учитали поруку. Молимо знајте да обични корисници не могу да обришу поруку након што неко одговори.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Како да учитам или обришем поруку?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Неки форуми могу да имају ограничен приступ одређеним корисницима или групама. За прегледање, читање, писање или извођење других поступака могу вам бити потребне посебне дозволе. Повежите се са уредником или администратором како би вам омогућили приступ.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Зашто не могу’да приступим форуму?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Дозволе за прилоге се дају по форуму, по групи, или по кориснику. Администратор форума можда није дозволио додавање прилога одређеним форумима у којима пишете, или можда само одређене групе могу слати прилоге. Повежите се са администратором уколико нисте сигурни зашто не можете да додајете прилоге.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Зашто не могу да додајем прилоге?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Ограничење за понуде гласања је постављено од администратора форума. Ако осећате потребу да додате више понуда вашем гласању од дозвољеног броја, повежите се са администратором форума.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Зашто не могу’да додам више понуда за гласање?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Када шаљете нову тему или учитавате прву поруку теме, кликните на “Додај гласање” испод главног обрасца за писање; уколико не можете да видите ово, немате одговарајуће дозволе да правите гласања. Унесите назив и бар две понуде у одговарајућа поља, проверавајући да је свака понуда у одвојеном реду у текстуалном подручју. Можете такође да поставите број понуда које корисници могу изабрати током гласања под “Понуда по кориснику”, временско ограничење у данима за гласање (0 за неограничено трајање) и на крају могућност да дозволите корисницима да направе исправку својих гласова.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Како да направим гласање?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Као и са порукама, гласања могу да буду учитана само од изворног пошиљаоца, уредника или администратора. За учитавање гласања, кликните да учитате прву поруку у теми; она увек има гласање које јој је придружено. Уколико нико није гласао, корисници могу да обришу гласање или да учитају било коју понуду гласања. Међутим, уколико су чланови већ гласали, само уредници и администратори могу да их учитавају и бришу. Ово спречава да се мењају понуде то-ком гласања.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Како да учитам или да обришем гласање?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Администратор форума је можда одлучио да форум у који пишете треба да има претходно прегледане поруке. Такође је могуће да вас је администратор поставио у групу корисника чије поруке треба прво прегледати пре него што буду биле пуштене. Молимо да се повежете са администратором форума за више података.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Зашто моја порука треба да буде одобрена?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Уколико је администратор форума ово омогућио, требало би да видите дугме за пријављивање порука тик поред поруке коју желите да пријавите. Кликом на ово проћи ћете кроз кораке неопходне за пријаву поруке.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Како могу да пријавим поруку уреднику?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Да бисте додали потпис поруци морате прво да га направите што се ради преко ваше Корисничке Контролне Плоче. Када га направите, можете да означите кућицу <em>Додај потпис</em> на обрасцу за писање како бисте додали ваш потпис. Такође можете да додајете потпис као подразумевано свим вашим порукама означавањем одговарајуће кућице у вашој Корисничкој Контролној Плочи. Уколико урадите тако, и даље можете да спречите додавање потписа одређеним порукама од-значавањем кућице додај потпис на обрасцу за слање поруке.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Како да додам потпис својој поруци?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Сваки администратор форума има свој скуп правила за своју веб страницу. Уколико сте прекршили неко од правила, може вам бити додељена опомена. Молимо знајте да је ово питање одлуке администратора форума, као и да phpBB Limited нема ништа са опоменама на одређеној веб страници. Повежите се са администратором уколико нисте сигурни зашто вам је додељена опомена.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Зашто сам добио опомену?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Ваша претрага је дала превише исхода да би сервер могао да их све похвата. Користите “Напредна претрага” и будите одређенији у коришћеним појмовима и форумима који треба да буду претражени.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Зашто моја претрага избацује празну страницу!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Уношењем појма за претрагу у кућицу за претрагу смештену на прегледу почетне странице, прегледу форума и прегледу теме. Напредној претрази се може приступити кликом на везу “Напредна претрага” која је доступна на свим страницама форума. Како да приступите претрази може да зависи од стила који је коришћен.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Како могу да претражујем форум или форуме?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Посетите страницу “Чланови” и кликните на везу “Пронађи члана”.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Како да претражујем чланове?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Ваша претрага је вероватно била превише нејасна и укључивала је много уопштених појмова који нису индексирани од phpBB. Будите одређенији и користите могућности доступне у Напредној претрази.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Зашто моја претрага не даје исходе?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Ваше поруке могу бити пронађене било кликом на везу “Преглед ваших порука” у Корисничкој Контролној Плочи или кликом на везу “Претражи корисник’ове поруке” преко странице вашег профила или кликом на изборник “Брзе везе” при врху форума. За претрагу ваших тема, користите страницу Напредне претраге и испуните различите могућности одговарајуће.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Како могу да пронађем моје поруке и теме?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Постоје две слике које се могу појавити поред корисничког имена када прегледате поруке. Једна од њих може бити слика удружена са вашим чином, углавном у облику звездица, блокова или тачака, указујући на то колико сте порука послали или ваш статус на форуму. Друга, обично већа слика, познатија је као грб и углавном је јединствена или лична за сваког корисника.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'Унутар ваше Корисничке Контролне Плоче, под “Профил” можете додати грб користећи један од следећа четири начина: Gravatar, Галерија, Удаљени или Додавање. На администратору форума је да омогући грбове и изабере начин како грбови могу бити учињени доступним. Уколико нисте у могућности да користите грбове, повежите се са администратором форума.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Како да прикажем свој грб?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Шта су слике поред мог корисничког имена?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Уколико сте регистровани корисник, све ваше поставке су сачуване у бази форума. За њихово мењање, посетите вашу Корисничку Контролну Плочу; веза обично може бити пронађена кликом на ваше корисничко име при врху страница форума. Овај систем ће вам омогућити да промените све ваше поставке.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Како да променим моје поставке?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Само регистровани корисници могу слати мејл другим корисницима преко у-грађеног мејл обрасца, и само уколико је администратор омогућио ову могућност. Ово је у настојању да се спречи злонамерна употреба мејл система од анонимних корисника.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Када кликнем на мејл везу корисника пита ме да се пријавим?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'Унутар ваше Корисничке Контролне Плоче, под “Поставке форума”, наћи ћете понуду <em>Сакриј мој статус на вези</em>. Омогућите ову могућност па ћете се појављивати на списку на вези само администраторима, уредницима и себи. За остале ћете бити скривени корисник.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Како да спречим да се моје корисничко име појављује на списку корисника на вези?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Или администратор није инсталирао ваш језик или још нико није превео овај форум на ваш језик. Пробајте да питате администратора форума да инсталира језички пакет који вам треба. Уколико језички пакет не постоји, осећајте се слободним да направите нови превод. Више података може бити пронађено на <a href="https://www.phpbb.com/">phpBB</a>&reg; веб страници.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Мој језик није на списку!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Чинови, који се појављују испод вашег корисничког имена, указују или на број порука које сте послали или служе за препознавање одређених корисника, н.пр. уредника и администратора. Углавном, не можете непосредно да промените израз ниједног чина на форуму пошто су они подешени од администратора форума. Молимо да не злоупотребљавате форум непотребним писањем само да бисте повећали ваш чин. Већина форума ово неће трпети и уредник или администратор ће врло једноставно смањити ваш број порука.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Шта је мој чин и како да га променим?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Уколико сте сигурни да сте временску зону подесили исправно а време је и даље неисправно, онда је време сачувано на часовнику сервера неисправно. Молимо вас обавестите администратора да отклони сметње.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Променио сам моју временску зону а време је и даље погрешно!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Могуће је да је приказано време из друге временске зоне. Уколико је ово случај, посетите вашу Корисничку Контролну Плочу и промените вашу временску зону у складу са вашим подручјем, н.пр. Лондон, Париз, Њујорк, Сиднеј, итд. Молимо имајте у виду да промена временске зоне, као и многих других поставки, може бити урађено само од стране регистрованих корисника. Уколико нисте регистровани ово је добар тренутак да то урадите.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Времена нису исправна!',
));
