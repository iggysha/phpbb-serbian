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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Питања Пријаве и Регистрације'
	),
	array(
		0 => 'Зашто морам да се региструјем?',
		1 => 'Можда и не морате, на администратору форума је да одлучи да ли је потребно да се региструјете како бисте слали поруке. Поред тога; регистрација ће вам дати и додатне могућности које нису доступне гостима као што су избор слике грба, приватне поруке, слање мејлова корисницима, учлањење у корисничке групе, итд. Потребно је само неколико тренутака за регистрацију па је препоручљиво да то урадите.'
	),
	array(
		0 => 'Шта је COPPA?',
		1 => 'COPPA, или Children’s Online Privacy Protection Act of 1998, је закон у САД који захтева од веб страница које могуће скупљају податке од малолетника млађих од 13 година да имају писмену сагласност родитеља или други начин признања од законитих старатеља, да дозвољавају сабирање личних података од малолетника млађих од 13 година. Уколико нисте сигурни да ли се ово примењује на вас као некога ко покушава да се региструје или на веб страницу на коју се покушавате регистровати, повежите се са правним саветником за помоћ. Молимо имајте у виду да phpBB Limited и власници овог форума не могу пружати правне савете и да нису адреса на коју се треба обраћати за било шта из правног домена, изузев за оно што је наведено у питању “С ким да се повежем поводом наопаких и/или законских ствари повезаних са овим форумом?”.',
	),
	array(
		0 => 'Зашто не могу да се региструјем?',
		1 => 'Могуће је да је власник веб странице онемогућио регистрације како би спречио новим посетиоцима да се пријаве. Власник веб странице је могао такође да забрани вашу IP адресу или онемогући корисничко име које покушавате да региструјете. Повежите се са администратором форума за помоћ.',
	),
	array(
		0 => 'Регистрован сам али не могу да се пријавим!',
		1 => 'Као прво, проверите ваше корисничко име и лозинку. Уколико су исправни, онда се једна од две ствари можда десила. Уколико је омогућена COPPA подршка а ви приликом регистрације изабрали да сте млађи од 13 година, мораћете да следите упутства која сте добили. Неки форуми такође могу да траже да новорегистровани налози буду активирани, било од вас самих било од администратора пре него што могнете да се пријавите; овај податак је био присутан током регистрације. Уколико вам је послат мејл, пратите упутства. Уколико вам није стигао мејл, можда сте дали неисправну мејл адресу или вам је мејл ухваћен од стране спам пречистача. Уколико сте сигурни да је ваша мејл адреса коју сте дали исправна, пробајте да се повежете са администратором форума.'
	),
	array(
		0 => 'Зашто не могу да се пријавим?',
		1 => 'Има неколико разлога због којих би ово могло да се појави. Прво, проверите да ли су ваше корисничко име и лозинка исправни. Уколико јесу, повежите се са администратором форума како бисте проверили да нисте можда под забраном. Такође је могуће да администратор форума има грешку у конфигурацији са своје стране, те да би можда требало да је исправи.',
	),
	array(
		0 => 'Регистровао сам се у прошлости али више не могу да се пријавим?!',
		1 => 'Могуће је да је администратор деактивирао или обрисао ваш налог из неког разлога. Такође, многи форуми повремено уклањају кориснике који нису ништа писали током дугог времена како би се смањила величина базе. Уколико се ово догодило, пробајте се поново регистровати и будите више укључени у разговоре.'
	),
	array(
		0 => 'Изгубио сам моју лозинку!',
		1 => 'Не паничите! Иако вам ваша лозинка не може бити враћена, она лако може да буде васпостављена. Посетите страницу за пријаву и кликните на <em>Заборавио сам моју лозинку</em>. Испратите сва упутства и требало би да будете у стању да се поново пријавите ускоро.<br />Међутим, уколико нисте у стању да васпоставите вашу лозинку, повежите се са администратором форума.',
	),
	array(
		0 => 'Зашто добијам аутоматску одјаву?',
		1 => 'Уколико нисте означили кућицу <em>Запамти ме</em> када сте се пријављивали, форум ће вас држати пријављеним само током унапред одређеног времена. Ово спречава злоупотребу вашег налога од било кога другог. Како бисте остали пријављени, означите кућицу <em>Запамти ме</em> током пријављивања. Ово није препоручљиво уколико форуму приступате са рачунара који делите са неким, н.пр. библиотека, интернет кафе, универзитетски рачунарски центар, итд. Уколико не видите ову кућицу, то значи да је администратор онемогућио ту могућност.',
	),
	array(
		0 => 'Шта “Обриши све колачиће форума” ради?',
		1 => '“Обриши све колачиће форума” брише све колачиће направљене од стране phpBB који вас држе препознатим и пријављеним на форум. Такође пружају и могућности као што је праћење прочитаног уколико је то омогућено од администратора форума. Уколико имате сметњи при пријави или одјави, брисање колачића форума може помоћи.',
	),
	array(
		0 => '--',
		1 => 'Корисничке Поставке и избори'
	),
	array(
		0 => 'Како да променим моје поставке?',
		1 => 'Уколико сте регистровани корисник, све ваше поставке су сачуване у бази форума. За њихово мењање, посетите вашу Корисничку Контролну Плочу; веза обично може бити пронађена кликом на ваше корисничко име при врху страница форума. Овај систем ће вам омогућити да промените све ваше поставке.',
	),
	array(
		0 => 'Како да спречим да се моје корисничко име појављује на списку корисника на вези?',
		1 => 'Унутар ваше Корисничке Контролне Плоче, под “Поставке форума”, наћи ћете понуду <em>Сакриј мој статус на вези</em>. Омогућите ову могућност па ћете се појављивати на списку на вези само администраторима, уредницима и себи. За остале ћете бити скривени корисник.'
	),
	array(
		0 => 'Времена нису исправна!',
		1 => 'Могуће је да је приказано време из друге временске зоне. Уколико је ово случај, посетите вашу Корисничку Контролну Плочу и промените вашу временску зону у складу са вашим подручјем, н.пр. Лондон, Париз, Њујорк, Сиднеј, итд. Молимо имајте у виду да промена временске зоне, као и многих других поставки, може бити урађено само од стране регистрованих корисника. Уколико нисте регистровани ово је добар тренутак да то урадите.'
	),
	array(
		0 => 'Променио сам временску зону и време је и даље погрешно!',
		1 => 'Уколико сте сигурни да сте временску зону подесили исправно а време је и даље неисправно, онда је време сачувано на часовнику сервера неисправно. Молимо вас обавестите администратора да отклони сметње.'
	),
	array(
		0 => 'Мој језик није на списку!',
		1 => 'Или администратор није инсталирао ваш језик или још нико није превео овај форум на ваш језик. Пробајте да питате администратора форума да инсталира језички пакет који вам треба. Уколико језички пакет не постоји, осећајте се слободним да направите нови превод. Више података може бити пронађено на <a href="https://www.phpbb.com/">phpBB</a>&reg; веб страници.',
	),
	array(
		0 => 'Шта су слике поред мог корисничког имена?',
		1 => 'Постоје две слике које се могу појавити поред корисничког имена када прегледате поруке. Једна од њих може бити слика удружена са вашим чином, углавном у облику звездица, блокова или тачака, указујући на то колико сте порука послали или ваш статус на форуму. Друга, обично већа слика, познатија је као грб и углавном је јединствена или лична за сваког корисника.',
	),
	array(
		0 => 'Како да прикажем свој грб?',
		1 => 'Унутар ваше Корисничке Контролне Плоче, под “Профил” можете додати грб користећи један од следећа четири начина: Gravatar, Галерија, Удаљени или Додавање. На администратору форума је да омогући грбове и изабере начин како грбови могу бити учињени доступним. Уколико нисте у могућности да користите грбове, повежите се са администратором форума.',
	),
	array(
		0 => 'Шта је мој чин и како да га променим?',
		1 => 'Чинови, који се појављују испод вашег корисничког имена, указују или на број порука које сте послали или служе за препознавање одређених корисника, н.пр. уредника и администратора. Углавном, не можете непосредно да промените израз ниједног чина на форуму пошто су они подешени од администратора форума. Молимо да не злоупотребљавате форум непотребним писањем само да бисте повећали ваш чин. Већина форума ово неће трпети и уредник или администратор ће врло једноставно смањити ваш број порука.'
	),
	array(
		0 => 'Када кликнем на мејл везу корисника пита ме да се пријавим?',
		1 => 'Само регистровани корисници могу слати мејл другим корисницима преко у-грађеног мејл обрасца, и само уколико је администратор омогућио ову могућност. Ово је у настојању да се спречи злонамерна употреба мејл система од анонимних корисника.'
	),
	array(
		0 => '--',
		1 => 'Питања Писања'
	),
	array(
		0 => 'Како да направим нову тему или да пошаљем одговор?',
		1 => 'За слање нове теме у форум, кликните на "Нова Тема". За слање одговора на тему, кликните на "Пошаљи Одговор". Може вам бити потребно да се региструјете пре него што могнете слати поруке. Списак ваших дозвола у сваком форуму је доступан при дну страница приказа форума и тема. Пример: Можете слати нове теме, Можете слати прилоге, итд.',
	),
	array(
		0 => 'Како да учитам или обришем поруку?',
		1 => 'Уколико нисте администратор или уредник форума, можете да учитавате или бришете само сопствене поруке. Можете да учитате поруку кликом на дугме за учитавање за одређену поруку, понекад само одређено време након што је порука направљена. Уколико је неко већ одговорио на поруку, наћи ћете мали комад излазног текста испод поруке када се вратите на тему који приказује број пута колико сте је учитали заједно са датумом и временом. Ово ће се појавити само уколико је неко већ одговорио; неће се појавити уколико је уредник или администратор учитао поруку, иако они могу да оставе белешку зашто су учитали поруку. Молимо знајте да обични корисници не могу да обришу поруку након што неко одговори.'
	),
	array(
		0 => 'Како да додам потпис својој поруци?',
		1 => 'Да бисте додали потпис поруци морате прво да га направите што се ради преко ваше Корисничке Контролне Плоче. Када га направите, можете да означите кућицу <em>Додај потпис</em> на обрасцу за писање како бисте додали ваш потпис. Такође можете да додајете потпис као подразумевано свим вашим порукама означавањем одговарајуће кућице у вашој Корисничкој Контролној Плочи. Уколико урадите тако, и даље можете да спречите додавање потписа одређеним порукама од-значавањем кућице додај потпис на обрасцу за слање поруке.'
	),
	array(
		0 => 'Како да направим гласање?',
		1 => 'Када шаљете нову тему или учитавате прву поруку теме, кликните на “Додај гласање” испод главног обрасца за писање; уколико не можете да видите ово, немате одговарајуће дозволе да правите гласања. Унесите назив и бар две понуде у одговарајућа поља, проверавајући да је свака понуда у одвојеном реду у текстуалном подручју. Можете такође да поставите број понуда које корисници могу изабрати током гласања под “Понуда по кориснику”, временско ограничење у данима за гласање (0 за неограничено трајање) и на крају могућност да дозволите корисницима да направе исправку својих гласова.'
	),
	array(
		0 => 'Зашто не могу да додам више понуда за гласање?',
		1 => 'Ограничење за понуде гласања је постављено од администратора форума. Ако осећате потребу да додате више понуда вашем гласању од дозвољеног броја, повежите се са администратором форума.'
	),
	array(
		0 => 'Како да учитам или да обришем гласање?',
		1 => 'Као и са порукама, гласања могу да буду учитана само од изворног пошиљаоца, уредника или администратора. За учитавање гласања, кликните да учитате прву поруку у теми; она увек има гласање које јој је придружено. Уколико нико није гласао, корисници могу да обришу гласање или да учитају било коју понуду гласања. Међутим, уколико су чланови већ гласали, само уредници и администратори могу да их учитавају и бришу. Ово спречава да се мењају понуде то-ком гласања.'
	),
	array(
		0 => 'Зашто не могу да приступим форуму?',
		1 => 'Неки форуми могу да имају ограничен приступ одређеним корисницима или групама. За прегледање, читање, писање или извођење других поступака могу вам бити потребне посебне дозволе. Повежите се са уредником или администратором како би вам омогућили приступ.'
	),
	array(
		0 => 'Зашто не могу да додајем прилоге?',
		1 => 'Дозволе за прилоге се дају по форуму, по групи, или по кориснику. Администратор форума можда није дозволио додавање прилога одређеним форумима у којима пишете, или можда само одређене групе могу слати прилоге. Повежите се са администратором уколико нисте сигурни зашто не можете да додајете прилоге.'
	),
	array(
		0 => 'Зашто сам добио опомену?',
		1 => 'Сваки администратор форума има свој скуп правила за своју веб страницу. Уколико сте прекршили неко од правила, може вам бити додељена опомена. Молимо знајте да је ово питање одлуке администратора форума, као и да phpBB Limited нема ништа са опоменама на одређеној веб страници. Повежите се са администратором уколико нисте сигурни зашто вам је додељена опомена.'
	),
	array(
		0 => 'Како могу да пријавим поруку уреднику?',
		1 => 'Уколико је администратор форума ово омогућио, требало би да видите дугме за пријављивање порука тик поред поруке коју желите да пријавите. Кликом на ово проћи ћете кроз кораке неопходне за пријаву поруке.'
	),
	array(
		0 => 'За шта је дугме “Сачувај нацрт” при слању теме?',
		1 => 'Ово вам омогућава да сачувате поруке за касније употпуњење и слање. За учитавање сачуваних нацрта, посетите Корисничку Контролну Плочу.'
	),
	array(
		0 => 'Зашто моја порука треба да буде одобрена?',
		1 => 'Администратор форума је можда одлучио да форум у који пишете треба претходно да има прегледане поруке. Такође је могуће да вас је администратор поставио у групу корисника чије поруке треба прво прегледати пре него што буду биле пуштене. Молимо да се повежете са администратором форума за више података.'
	),
	array(
		0 => 'Како да погурам моју тему?',
		1 => 'Кликом на везу “Погурај тему” док је прегледате, можете “погурати” тему на врх форума на првој страници. Међутим, уколико ово не видите, онда је гурање тема можда онемогућено или дозвољено време између гурања није још достигнуто. Такође је могуће да погурате тему тако што ћете једноставно одговорити на њу, међутим, будите сигурни да следите правила форума када то радите.'
	),
	array(
		0 => '--',
		1 => 'Обликовања и Типови Тема'
	),
	array(
		0 => 'Шта је ББКод?',
		1 => 'ББКод је посебна примена HTML, која нуди велику контролу у обликовању одређених објеката у поруци. Коришћење ББКода је омогућено од администратора, али такође може да буде и онемогућено по порукама у обрасцу за писање. ББКод је сам по себи сличан у стилу са HTML, али су тагови затворени угластим заградама [ и ] пре него &lt; и &gt;. За више података о ББКоду погледајте водич којем можете да приступите са странице за писање.'
	),
	array(
		0 => 'Могу ли да користим HTML?',
		1 => 'Не. Није могуће слати HTML на овом форуму и имати га представљеног као HTML. Већина обликовања која се могу пренети коришћењем HTML могу бити примењена користећи ББКод уместо њега.'
	),
	array(
		0 => 'Шта су Смајлићи?',
		1 => 'Смајлићи, или Емотикони, су мале слике које могу бити искоришћене за изражавање осећања користећи кратак код, н.пр. :) значи срећан, док :( значи тужан. Пуни списак смајлића може бити виђен преко обрасца за писање. Пробајте да не претерујете са употребом смајлића, утолико пре, пошто они могу брзо учинити поруку нечитљивом и уредник може да их избаци или уклони поруку заједно с њима. Администратор форума је можда такође подесио ограничење за број смајлића које можете користити у поруци.'
	),
	array(
		0 => 'Могу ли слати слике?',
		1 => 'Да, слике могу бити приказане у вашим порукама. Уколико је администратор омогућио прилоге, можете бити у могућности да додате слику на форум. У супротном, морате направити везу до слике похрањене на јавно приступачном веб серверу, н.пр. http://www.example.com/my-picture.gif. Не можете направити везу до слика похрањених на вашем PC (осим уколико није јавно приступачни веб сервер) нити слике похрањене иза механизама који траже потврду, н.пр. hotmail или yahoo поштанска сандучад, лозинком заштићене веб странице, итд. За приказ слике користите ББКод [img] таг.'
	),
	array(
		0 => 'Шта су општа саопштења?',
		1 => 'Општа саопштења садрже важне податке и треба да их прочитате што је могуће пре. Општа саопштења ће се појавити на врху сваког форума и такође у вашој Корисничкој Контролној Плочи. Дозволе за општа саопштења даје администратор форума.'
	),
	array(
		0 => 'Шта су саопштења?',
		1 => 'Саопштења често садрже важне податке за форум који тренутно читате и требало би да их прочитате што је могуће пре. Саопштења се појављују на врху сваке странице у форуму за који су послата. Као и са општим саопштењима, дозволе за саопштења даје администратор форума.'
	),
	array(
		0 => 'Шта су лепљиве теме?',
		1 => 'Лепљиве теме у форуму се појављују испод било ког саопштења при прегледу форума и само на првој страници. Оне су некада јако важне па би требало да их прочитате кад могнете. Као и са саопштењима и општим саопштењима, дозволе за лепљиве теме даје администратор форума.'
	),
	array(
		0 => 'Шта су закључане теме?',
		1 => 'Закључане теме су теме у којима корисници не могу више одговарати и било које гласање које се налази у њима је аутоматски окончано. Теме могу бити закључане из више разлога и подешене су на овај начин или од уредника или од администратора форума. Можете такође бити у могућности да закључате ваше сопствене теме у зависности од дозвола које су вам додељене од администратора форума.'
	),
	array(
		0 => 'Шта су иконе теме?',
		1 => 'Иконе теме су слике изабране од пошиљаоца и придружене порукама како би указивале на њихов садржај. Могућност коришћења икона теме зависи од дозвола постављених од администратора форума.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Нивои Корисника и Групе'
	),
	array(
		0 => 'Ко су Администратори?',
		1 => 'Администратори су људи са највишим нивоом додељене контроле над и у форуму. Ови чланови могу да контролишу све видове поступака на форуму, укључујући постављање дозвола, забрана корисника, прављење корисничких група или постављање уредника, итд., у зависности од оснивача форума и тога које је дозволе дао другим администраторима. Они такође могу имати пуну уредничку способност у свим форумима, у зависности од тога шта им је оснивач форума дозволио.'
	),
	array(
		0 => 'Ко су Уредници?',
		1 => 'Уредници су појединци (или групе појединаца) чији је посао да прате форум из дана у дан. Они имају моћ да учитају или обришу поруке и закључају, откључају, преместе, обришу и раздвоје теме у форумима које они уређују. Уопштено, уредници су ту да спрече људе да промаше тему односно да иду ван-теме или праве сметње слањем наопаких и одвратних ствари.'
	),
	array(
		0 => 'Шта су корисничке групе?',
		1 => 'Корисничке групе су групе корисника које деле заједницу у одељке са којима администратори форума могу да раде. Сваки корисник може припадати различитим групама и свакој групи могу бити додељене појединачне дозволе. Ово пружа лак начин администраторима да промене дозволе за мноштво корисника одједном, као што је промена дозвола уредника или омогућавање корисницима да приступе приватном форуму.'
	),
	array(
		0 => 'Где су корисничке групе и како да приступим некој?',
		1 => 'Можете прегледати све корисничке групе преко везе “Корисничке групе” у вашој Корисничкој Контролној Плочи. Уколико бисте волели да се придружите некој, наставите са кликом на одговарајуће дугме. Немају све групе отворен приступ, ипак. Неке могу тражити одобрење за приступ, неке могу бити затворене а неке могу имати чак и скривено чланство. Уколико је група отворена, можете да јој приступите кликом на одговарајуће дугме. Уколико група захтева одобрење за приступ можете тражити приступ кликом на одговарајуће дугме. Вођа корисничке групе треба да вам одобри приступ и може да вас пита зашто желите да се прикључите групи. Молимо да не досађујете вођама група уколико вам не одобре приступ; имаће они своје разлоге.'
	),
	array(
		0 => 'Како да постанем вођа корисничке групе?',
		1 => 'Вођа корисничке групе је обично додељен када су корисничке групе прављене од администратора форума. Уколико сте заинтересовани за прављење корисничке групе, онда као прва ствар треба да буде да се повежете са администратором; шаљући му приватну поруку.',
	),
	array(
		0 => 'Зашто се неке групе појављују у другачијој боји?',
		1 => 'Могуће је администратору да додели боју члановима корисничке групе ради лакшег препознавања чланова те групе.'
	),
	array(
		0 => 'Шта је “Подразумевана корисничка група”?',
		1 => 'Уколико сте члан више од једне корисничке групе, ваша подразумевана група је искоришћена за одређивање која боја и чин групе би требало да се прикажу за вас по подразумеваном. Администратор форума вам може дати дозволу да промените вашу подразумевану корисничку групу преко ваше Корисничке Контролне Плоче.'
	),
	array(
		0 => 'Шта је веза “Форум тим”?',
		1 => 'Ова страница вам пружа списак особља форума, укључујући администраторе форума и уреднике који укључују појединости о томе које форуме уређују.'
	),
	array(
		0 => '--',
		1 => 'Приватне Поруке'
	),
	array(
		0 => 'Не могу да шаљем приватне поруке!',
		1 => 'Постоје три разлога за ово; нисте регистровани и/или нисте пријављени, администратор форума је онемогућио приватне поруке, или вас је администратор форума спречио да шаљете приватне поруке. Повежите се са администратором форума за више података.'
	),
	array(
		0 => 'Настављам да добијам непожељне приватне поруке!',
		1 => 'Можете аутоматски обрисати приватне поруке од корисника коришћењем правила порука у вашој Корисничкој Контролној Плочи. Уколико добијате наопаке приватне поруке од одређеног корисника, пријавите поруке уреднику форума; они имају моћ да спрече корисника да шаље приватне поруке.'
	),
	array(
		0 => 'Примио сам спам или наопак мејл од неког са овог форума!',
		1 => 'Жао нам је што то чујемо. Образац за мејл овог форума укључује обезбеђење које покушава да прати кориснике који шаљу такве поруке, па пошаљите мејл администратору форума са пуним умношком мејла који сте добили. Врло је важно да ово укључује заглавља која садрже појединости корисника који је послао мејл. Администратор форума потом може да предузме одређене радње.'
	),
	array(
		0 => '--',
		1 => 'Пријатељи и Занемарени'
	),
	array(
		0 => 'Шта су спискови Пријатеља и Занемарених?',
		1 => 'Можете користити ове спискове за организовање других чланова форума. Чланови додати вашем списку пријатеља биће побројани у вашој Корисничкој Контролној Плочи за брз приступ да видите њихов статус на вези и да им пошаљете приватне поруке. С основом у подршци од предлошка, поруке од ових корисника могу такође бити јако осветљене. Уколико додате корисника на списак занемарених, било које поруке послате од њих ће бити скривене по подразумеваном.'
	),
	array(
		0 => 'Како могу да додам / уклоним кориснике са свог списка Пријатеља или Занемарених?',
		1 => 'Можете да додате кориснике на ваш списак на два начина. У сваком корисничком профилу, постоји веза за додавање корисника било на ваш списак Пријатеља било Занемарених. Други начин, из ваше Корисничке Контролне Плоче, можете непосредно да додајете кориснике уношењем њихових корисничких имена. Можете такође да уклоните кориснике са вашег списка користећи исту страницу.'
	),
	array(
		0 => '--',
		1 => 'Претрага Форума'
	),
	array(
		0 => 'Како могу да претражујем форум или форуме?',
		1 => 'Уношењем појма за претрагу у кућицу за претрагу смештену на прегледу почетне странице, прегледу форума и прегледу теме. Напредној претрази се може приступити кликом на везу “Напредна претрага” која је доступна на свим страницама форума. Како да приступите претрази може да зависи од стила који је коришћен.'
	),
	array(
		0 => 'Зашто моја претрага не даје исходе?',
		1 => 'Ваша претрага је вероватно била превише нејасна и укључивала је много уопштених појмова који нису индексирани од phpBB. Будите одређенији и користите могућности доступне у Напредној претрази.',
	),
	array(
		0 => 'Зашто моја претрага избацује празну страницу!?',
		1 => 'Ваша претрага је дала превише исхода да би сервер могао да их све похвата. Користите “Напредна претрага” и будите одређенији у коришћеним појмовима и форумима који треба да буду претражени.'
	),
	array(
		0 => 'Како да претражујем чланове?',
		1 => 'Посетите страницу “Чланови” и кликните на везу “Пронађи члана”.'
	),
	array(
		0 => 'Како могу да пронађем моје поруке и теме?',
		1 => 'Ваше поруке могу бити пронађене било кликом на везу “Преглед ваших порука” у Корисничкој Контролној Плочи или кликом на везу “Претражи корисник’ове поруке” преко странице вашег профила или кликом на изборник “Брзе везе” при врху форума. За претрагу ваших тема, користите страницу Напредне претраге и испуните различите могућности одговарајуће.',
	),
	array(
		0 => '--',
		1 => 'Праћења и Забелешке',
	),
	array(
		0 => 'Која је разлика између забелешки и праћења?',
		1 => 'У phpBB 3.0, бележење тема је радило као и прављење забелешки у вашем веб прегледачу. Нисте били неопходно обавештени о томе када има нека измена. Од phpBB 3.1, бележење је више као праћење теме. Можете бити обавештени када забележена тема буде измењена. Праћење, међутим, ће вас обавестити о томе када има измена на теми или форуму. Поставке обавештавања за забелешке и праћења могу бити подешене у Корисничкој Контролној Плочи, под “Поставке форума”.',
	),
	array(
		0 => 'Како да забележим или да пратим одређене теме?',
		1 => 'Можете забележити или пратити одређену тему кликом на одговарајућу везу у “Алати теме” изборнику, смештеном при врху и дну теме.<br />Одговарањем на тему са означеним “Обавести ме када одговор буде био послат” такође ће вам омогућити праћење теме.',
	),
	array(
		0 => 'Како да пратим одређене форуме?',
		1 => 'За праћење одређеног форума, кликните на “Прати форум” везу, при дну странице, одмах по уласку на тај форум.',
	),
	array(
		0 => 'Како да уклоним моја праћења?',
		1 => 'Да бисте уклонили ваша праћења, отиђите до ваше Корисничке Контролне Плоче и следите везе до ваших праћења.'
	),
	array(
		0 => '--',
		1 => 'Прилози'
	),
	array(
		0 => 'Који прилози су дозвољени на овом форуму?',
		1 => 'Сваки администратор форума може омогућити или онемогућити одређене типове прилога. Уколико нисте сигурни шта је дозвољено за додавање, повежите се са администратором форума за помоћ.'
	),
	array(
		0 => 'Како да пронађем све моје прилоге?',
		1 => 'Да бисте нашли списак ваших прилога које сте додали, идите на вашу Корисничку Контролну Плочу и следите везе до одељка прилога.'
	),
	array(
		0 => '--',
		1 => 'phpBB Питања',
	),
	array(
		0 => 'Ко је написао овај форум?',
		1 => 'Овај програм (у његовом неизмењеном облику) је направио, издао и заштитио од умножавања <a href="https://www.phpbb.com/">phpBB Limited</a>. Доступан је под GNU General Public Licence, верзија 2 (GPL-2.0) и може бити слободно растуран. Погледајте <a href="https://www.phpbb.com/about/">About phpBB</a> за више појединости.',
	),
	array(
		0 => 'Зашто X могућност није доступна?',
		1 => 'Овај програм је написан од и лиценциран кроз phpBB Limited. Уколико верујете да нека могућност треба да буде додата молимо посетите <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>, где ћете наћи погодности да то и урадите.'
	),
	array(
		0 => 'С ким да се повежем поводом наопаких и/или законских ствари повезаних са овим форумом?',
		1 => 'Било који од администратора на списку “Форум тим” странице би требало да буде одговарајући да се повежете с њим поводом ваших примедби. Уколико још увек не добијате одговор требало би да се повежете са власником домена (урадите <a href="http://www.google.com/search?q=whois">whois проверу</a>) или, уколико се ово извршава на бесплатном сервису (н.пр. Yahoo!, free.fr, f2s.com, итд.), управу или одељак за злоупотребе тог сервиса. Молимо знајте да phpBB Limited нема <strong>у потпуности никакву надлежност</strong> и да не може ни на било који начин бити сматрана одговорном око тога како, где и од кога се овај форум користи. Немојте се повезивати са phpBB Limited у смислу било које законске (cease and desist, liable, defamatory comment, итд.) ствари <strong>која није у непосредном односу</strong> са phpBB.com веб страницом или посебно самим програмом phpBB по себи. Уколико сте послали мејл phpBB Limited о употреби овог програма <strong>од треће стране</strong> онда би требало да очекујете сажет одговор или никакав одговор уопште.'
	),
	array(
		0 => 'Како да се повежем са администратором форума?',
		1 => 'Сви корисници форума могу да користе “Повежимо се” образац, уколико је омогућен од администратора форума.<br />Чланови форума такође могу да користе “Форум тим” везу.',
	),
);
