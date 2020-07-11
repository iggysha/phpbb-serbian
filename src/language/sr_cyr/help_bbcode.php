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
		1 => 'Увод'
	),
	array(
		0 => 'Шта је ББКод?',
		1 => 'ББКод је посебна примена HTML. Да ли можете користити ББКод у вашим порукама на форуму одређено је од администратора. Додатно можете онемогућити ББКод по поруци на обрасцу за слање порука. ББКод је сам по себи сличан у стилу са HTML, тагови су уметнути у витичасте заграде [ и ] радије него &lt; и &gt; и нуде већу контролу над тим шта и како је нешто приказано. У зависности од предлошка који користите можете наћи да је додавање ББКода вашим порукама много лакше кликом миша на поља изнад поруке на обрасцу за писање поруке. Чак и са тим можда нађете да ће вам овај водич бити од користи.'
	),
	array(
		0 => '--',
		1 => 'Обликовање Текста'
	),
	array(
		0 => 'Како направити задебљани, искошени и подвучени текст',
		1 => 'ББКод укључује тагове који вам омогућавају да брзо промените основни стил вашег текста. Ово се постиже на следеће начине: <ul><li>Да бисте направили део текста задебљаним затворите га у <strong>[b][/b]</strong>, н.пр. <br /><br /><strong>[b]</strong>Здраво<strong>[/b]</strong><br /><br />постаће <strong>Здраво</strong></li><li>За подвлачење користите <strong>[u][/u]</strong>, на пример:<br /><br /><strong>[u]</strong>Добро јутро<strong>[/u]</strong><br /><br />постаје <span style="text-decoration: underline">Добро јутро</span></li><li>За искошење текста користите <strong>[i][/i]</strong>, н.пр.<br /><br />Ово је <strong>[i]</strong>Сјајно!<strong>[/i]</strong><br /><br />ће дати Ово је <i>Сјајно!</i></li></ul>'
	),
	array(
		0 => 'Како да променим боју текста или величину',
		1 => 'Да бисте променили боју или величину текста можете користити следеће тагове. Имајте у виду да ће изглед крајњег исхода зависити од корисниковог прегледача и система: <ul><li>Промена боје текста могућа је тако што ћете га убацити у <strong>[color=][/color]</strong>. Можете изабрати или препознатљив назив боје (н.пр. црвена, плава, жута, итд.) или хексадецимални облик, н.пр. #FFFFFF, #000000. На пример, за прављење црвеног текста можете користити:<br /><br /><strong>[color=red]</strong>Здраво!<strong>[/color]</strong><br /><br />или<br /><br /><strong>[color=#FF0000]</strong>Здраво!<strong>[/color]</strong><br /><br />И једно и друго ће дати <span style="color:red">Здраво!</span></li><li>Промена величине текста се може постићи на сличан начин користећи <strong>[size=][/size]</strong>. Овај таг зависи од предлошка који је корисник изабрао али препоручени облик је бројевна вредност која представља величину текста у процентима, почевши од 20 (врло мали) па све до 200 (врло велики) по подразумеваном. На пример:<br /><br /><strong>[size=30]</strong>МАЛИ<strong>[/size]</strong><br /><br />ће уопште бити <span style="font-size:30%;">МАЛИ</span><br /><br />док ће:<br /><br /><strong>[size=200]</strong>ВЕЛИКИ!<strong>[/size]</strong><br /><br />бити <span style="font-size:200%;">ВЕЛИКИ!</span></li></ul>'
	),
	array(
		0 => 'Могу ли да комбинујем тагове за обликовање?',
		1 => 'Да, наравно да можете, на пример да бисте привукли нечију пажњу можете писати:<br /><br /><strong>[size=200][color=red][b]</strong>ПОГЛЕДАЈ МЕ!<strong>[/b][/color][/size]</strong><br /><br />даће <span style="color:red;font-size:200%;"><strong>ПОГЛЕДАЈ МЕ!</strong></span><br /><br />Не препоручујемо да пишете пуно текста који изгледа овако! Знајте да је на вама, односно писцу, да се побринете да су тагови правилно затворени. На пример следеће је неисправно:<br /><br /><strong>[b][u]</strong>Ово је погрешно<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Цитирање и добијање текста фиксне-ширине'
	),
	array(
		0 => 'Цитирање текста у одговорима',
		1 => 'Постоје два начина како можете цитирати текст, са или без одреднице.<ul><li>Када користите Quote функцију за одговор на поруку требало би да приметите да је текст поруке додат у прозору затвореном са <strong>[quote=&quot;&quot;][/quote]</strong>. Овај начин вам омогућава да цитирате са одредницом на особу или било шта друго што изаберете да ставите! На пример да бисте цитирали део текста од Госн. Јова унесите:<br /><br /><strong>[quote=&quot;Госн. Јова&quot;]</strong>Текст од Госн. Јова ићи ће овде<strong>[/quote]</strong><br /><br />Добијени излаз ће аутоматски додати &quot;Госн. Јова пише:&quot; пре самог текста. Знајте да <strong>морате</strong> укључити ознаке цитата &quot;&quot; око имена које цитирате, оне нису по избору.</li><li>Други начин вам омогућава да на слепо цитирате нешто. Да бисте ово користили убаците текст у <strong>[quote][/quote]</strong> тагове. Када прегледате поруку једноставно ће се приказати текст у цитираном делу.</li></ul>'
	),
	array(
		0 => 'Добијање кода или податка фиксне ширине',
		1 => 'Ако желите да прикажете део кода или у ствари било шта што захтева фиксну ширину, н.пр. Courier облик слова требало би да убаците текст у <strong>[code][/code]</strong> тагове, н.пр.<br /><br /><strong>[code]</strong>echo &quot;Ово је неки код&quot;;<strong>[/code]</strong><br /><br />Сва обликовања коришћена у <strong>[code][/code]</strong> таговима су сачувана када их касније прегледате. Истицање PHP синтаксе може бити омогућено коришћењем <strong>[code=php][/code]</strong> и препоручљиво је када шаљете узорке PHP кода пошто повећава читљивост.'
	),
	array(
		0 => '--',
		1 => 'Прављење спискова'
	),
	array(
		0 => 'Прављење Пописног списка',
		1 => 'ББКод подржава два типа спискова, пописне и уређене. Они су суштински исти као и њихова HTML замена. Пописни списак даје сваку ставку у вашем списку редом једну за другом увлачећи сваку ставку са одговарајућим знаком испред. За прављење пописног списка користите <strong>[list][/list]</strong> и одредите сваку ставку списка користећи <strong>[*]</strong>. На пример да бисте направили списак ваших омиљених боја можете да користите:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Црвена<br /><strong>[*]</strong>Плава<br /><strong>[*]</strong>Жута<br /><strong>[/list]</strong><br /><br />Ово ће направити следећи списак:<ul><li>Црвена</li><li>Плава</li><li>Жута</li></ul><br />Друго што можете да урадите је да назначите стил за пописни списак користећи <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, or <strong>[list=square][/list]</strong>.'
	),
	array(
		0 => 'Прављење Уређеног списка',
		1 => 'Други тип списка, уређени списак, даје вам контролу над тим шта добијате пре сваке ставке. Да бисте направили уређени списак користите <strong>[list=1][/list]</strong> за прављење бројевног списка или други начин <strong>[list=a][/list]</strong> за словни списак. Као и са пописним списком, ставке су означене са <strong>[*]</strong>. На пример:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Идите до продавница<br /><strong>[*]</strong>Купите нов рачунар<br /><strong>[*]</strong>Закуните се пред рачунаром да када се разбије<br /><strong>[/list]</strong><br /><br />ће дати следеће:<ol style="list-style-type: decimal;"><li>Идите до продавница</li><li>Купите нов рачунар</li><li>Закуните се пред рачунаром да када се разбије</li></ol>Док би се за словни списак требало користити:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Први могући одговор<br /><strong>[*]</strong>Други могући одговор<br /><strong>[*]</strong>Трећи могући одговор<br /><strong>[/list]</strong><br /><br />даје<ol style="list-style-type: lower-alpha"><li>Први могући одговор</li><li>Други могући одговор</li><li>Трећи могући одговор</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Први могући одговор<br /><strong>[*]</strong>Други могући одговор<br /><strong>[*]</strong>Трећи могући одговор<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: upper-alpha"><li>Први могући одговор</li><li>Други могући одговор</li><li>Трећи могући одговор</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Први могући одговор<br /><strong>[*]</strong>Други могући одговор<br /><strong>[*]</strong>Трећи могући одговор<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: lower-roman"><li>Први могући одговор</li><li>Други могући одговор</li><li>Трећи могући одговор</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Први могући одговор<br /><strong>[*]</strong>Други могући одговор<br /><strong>[*]</strong>Трећи могући одговор<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: upper-roman"><li>Први могући одговор</li><li>Други могући одговор</li><li>Трећи могући одговор</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Прављење Веза'
	),
	array(
		0 => 'Веза до друге веб странице',
		1 => 'phpBB ББКод подржава велики број начина за прављење URI (Uniform Resource Indicators) познатије као URL.<ul><li>Први од њих користи <strong>[url=][/url]</strong> таг, шта год укуцали после знака = ће проузроковати да садржај тога тага делује као URL. На пример да бисте повезали до phpBB.com можете да користите:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Посетите phpBB!<strong>[/url]</strong><br /><br />Ово ће направити следећу везу, <a href="https://www.phpbb.com/">Посетите phpBB!</a> Молимо знајте да се веза отвара у истом прозору или новом прозору у зависности од поставки корисниковог прегледача.</li><li>Уколико желите да се сам URL приказује као веза ово можете да урадите једноставно користећи:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Ово ће направити следећу везу, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Додатно, phpBB могућности зване <i>Магичне Везе</i>, ће претворити сваки синтаксно исправан URL у везу без потребе да одређујете било какав таг чак нити префикс http://. На пример куцањем www.phpbb.com у вашој поруци ће аутоматски довести да <a href="http://www.phpbb.com/">www.phpbb.com</a> постаје оно што добијете када прегледате поруку.</li><li>Иста се ствар једнако примењује и на мејл адресе, па можете или изричито назначити адресу на пример:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />што ће дати <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> или можете само откуцати no.one@domain.adr у вашу поруку и биће аутоматски пребачено када будете прегледали поруку.</li></ul>Као што са свим ББКод таговима можете спаковати URL око било којих других тагова као што су <strong>[img][/img]</strong> (види следећи пасус), <strong>[b][/b]</strong>, итд. Као и са таговима за обликовање на вама да обезбедите исправан редослед њиховог отварања и затварања, на пример:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">није</span> исправно што може довести да ваша порука буде обрисана па зато пазите.'
	),
	array(
		0 => '--',
		1 => 'Приказивање слика у порукама'
	),
	array(
		0 => 'Додавање слике у поруку',
		1 => 'phpBB ББКод садржи таг за убацивање слика у ваше поруке. Две врло важне ствари које требате да запамтите приликом коришћења овог тага су: многи корисници не цене пуно слика у порукама и друго је да слика коју приказујете већ мора бити доступна на интернету (не може постојати на вашем рачунару на пример, изузев уколико није веб сервер!). Да бисте приказали слику морате окружити URL који води до слике са <strong>[img][/img]</strong> таговима. На пример:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Као што је забележено у URL одељку изнад можете окружити слику са <strong>[url][/url]</strong> таговима уколико желите, н.пр.<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />ће дати:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	),
	array(
		0 => 'Додавање прилога у поруку',
		1 => 'Прилози сада могу бити смештени у било који део поруке користећи нови <strong>[attachment=][/attachment]</strong> ББКод, уколико су прилози омогућени од администратора форума и уколико су вам дате одговарајуће дозволе за слање прилога. У обрасцу за писање је кућица са па-дајућим изборима (односно дугме) за смештање прилога у поруку.'
	),
	array(
		0 => '--',
		1 => 'Остало'
	),
	array(
		0 => 'Могу ли да додам властите тагове?',
		1 => 'Уколико сте администратор форума и имате одговарајуће дозволе, можете додати накнадне ББКодове кроз одељак Властитих ББКодова.'
	),
);
