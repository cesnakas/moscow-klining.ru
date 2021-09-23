<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Клининговая компания в #WF_CITY_PRED# «Чистый офис» - профессиональная уборка офиса и коммерческих помещений");
$APPLICATION->SetPageProperty("keywords", "уборка офисов уборка офиса");
$APPLICATION->SetPageProperty("description", "Профессиональные услуги клининга - уборка офиса - утренняя, вечерняя, поддерживающая, комплексная. 40 клинеров в штате. Цены от 50 руб. за кв.м. Работаем по договору. Скидки и приятные бонусы каждому клиенту! +7(495) 369-28-97");
$APPLICATION->SetTitle("Главная");
?><div class="container cleinti">
	<span class="kak_h2">Наши клиенты и партнеры</span>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"client",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br>
</div>
<div class="gray">
	<div class="container">
		<span class="kak_h2">Выберите подходящий тип уборки</span>
		<div class="uslugi">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"uslugi-new",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "Y",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "uslugi",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"CODE",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"PRICE",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
		</div>
	</div>
</div>
<div class="container pomeshenie">
	<span class="kak_h2">Где мы наводим чистоту</span>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"pomeshenie",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "Y",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "uslugi-new",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"CODE",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"PRICE",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
<div class="gray">
	<div class="container video-rabot">
		<span class="kak_h2">Как мы работаем</span>
		<div class="row">
			<div class="col-sm-5">
 <video controls="controls" width="100%" height="400"> <source src="/upload/medialibrary/6a7/6a789ba2525b2327c030b4b02bfbfaa3.mp4" type="video/mp4"></video>
			</div>
			<div class="col-sm-7">
				<div>
					<h1>Клининговая компания в Москве «Чистый офис» - профессиональная уборка офисов</h1>
				</div>
				<p class="p_podp">
					 Клининговая компания «Чистый офис» более 5 лет предоставляет профессиональную помощь по сохранению чистоты в домах и офисах. Предлагаем выполнить уборку помещений любого размера. Сотрудники с внушительным стажем быстро справляются с загрязнениями разной сложности. Работаем с частными и корпоративными заказчиками. Минимальная стоимость работ - 17 000 рублей в месяц.
				</p>





				<p class="knopka alx_feedback_popup" id="form_id_FID2">
					 Заказать услугу
				</p>
			</div>
		</div>
	</div>
</div>
<div class="container calc-home">
<br>
<p>Клиенты заказывают клининг в #WF_CITY_PRED# и Московской области по телефону и на сайте.
Можем провести срочную уборку, приехав по названному адресу в день регистрации обращения.
	Специалисты обеспечивают высокое качество услуг, оперативно добиваясь идеального результата.</p>

<p>Есть много форматов сотрудничества. Например, можно заказать разовый выезд сотрудников или обратиться за обслуживанием в течение фиксированного времени (месяц, полгода, год).
Применяем персональный подход к каждому клиенту, в точности соблюдая его требования и пожелания.
Все клининговые работы проводятся в строгом соответствии с действующими санитарно-гигиеническими нормами РФ.</p>

	<h2>Профессиональный клининг в Москве</h2>

<p>Обеспечиваем уборку офиса в Москве, решая все поставленные задачи оперативно и на высоком уровне. Помогаем заказчикам избавиться от рутинных дел, требующих огромного количества свободного времени и сил.
Приводим в порядок любые помещения и пространства. Работаем без опозданий, сдаем объект четко в согласованное время. Гарантируем сохранность предметов интерьера, бытовой техники и иного имущества.

<h2>Цены на клининг</h2>

<p>Цены на услуги компетентных клинеров заранее обсуждаются с заказчиком. Клиенты могут изучить стоимость работы в прайсе, опубликованном на официальном сайте фирмы. Когда вы будете заказывать клининг в Москве, консультант дополнительно разъяснит вопросы формирования прейскуранта и наличие дополнительных услуг.
На сайте фирмы есть удобный электронный калькулятор. С помощь сервиса можно рассчитать примерную стоимость услуг уборки по площади объекта. </p>

<h2>Комплексная уборка офисов и квартир и что в нее входит</h2>

	<h3>Уборка офисов включает в себя:</h3>
	<ul><li>сухую и влажную обработку;</li>
<li>чистку ковровых покрытий и мягкой мебели;</li>
<li>удаление пыли с поверхностей, светильников, оргтехники, стекол и зеркал;</li>
<li>уборку и дезинфекцию санузлов, раковин, кафельной плитки;</li>
<li>вынос мусора;</li>
<li>удаление загрязнений с труб и кондиционеров;</li>
<li>мойку дверей.</li></ul>


<h3>Мойка окон</h3>
		<p>Когда клиенты заказывают клининг офисов и квартир, им часто требуется влажная обработка окон. Очистка стеклопакетов обычно проводится в межсезонный период или после отделочных работ в помещении. Это популярная услуга, требующая применения специальных моющих составов. Поддержание чистоты окон обеспечивает благоприятный микроклимат внутри комнаты. </p>
<h3>Уборка после ремонта</h3>
<p>Даже при аккуратном и осторожном выполнении отделки и ремонта в помещениях неизбежно остается грязь. Если не провести уборку сразу после окончания ремонта, повышается риск развития аллергических и ЛОР-заболеваний. На поверхностях остается большое количество мелких частиц пыли. </p>
<p>Клинеры удалят остатки красящих и клеящих составов, капли цементного раствора и мусор. Используются эффективные безвредные средства и приспособления для доступа к закрытым участкам квартиры. Экспертам в области клининга потребуется:</p>
<ul><li>собрать и вынести скопившийся строительный мусор, а именно, части обоев, кирпичную крошку, банки и коробки;</li>
<li>провести сухую обработку всех поверхностей помещения пылесосом;</li>
<li>удалить остатки клея, краски, шпатлевки, лака. Требуется применение особых химических составов, которые не причиняют вреда разным типам поверхностей;</li>
<li>провести влажную уборку помещения, техники и мебели с использованием мягких щеток и чистящих средств;</li>
		<li>обработать подоконник и дверные коробки.</li></ul>

<h3>Срочная уборка</h3>
<p>Клинер приезжает на объект через один или пару часов после поступления заявки от клиента. Выполняется экспресс уборка, позволяющая оперативно привести пространство в порядок.</p>

<h3>Генеральная уборка</h3>
<p>Генеральную уборку заказывают при наличии серьезных загрязнений, требующих комплексного подхода. Обычно это мероприятие занимает несколько часов. Может привлекаться команда компетентных уборщиков для ускорения процесса. После завершения помещение приобретает изначальную чистоту.</p>
<h3>Утренняя</h3>
<p>Услуга популярна среди компаний с нефиксированным рабочим графиком. Если персоналу необходимо присутствовать в офисе по вечерам, то уборку удобнее перенести на раннее утро.
Это позволяет провести все манипуляции в пустом помещении, не мешая рабочему процессу. К приходу сотрудников кабинеты и технические помещения будут полностью готовы к эксплуатации.</p>
<h3>Вечерняя</h3>
<p>Вечерняя уборка офисных помещений проводится при нормированном графике. После того, как персонал покидает кабинеты, клинеры начинают обработку.</p>

<h3>Уборка подъездов</h3>
	<p>Клининг в Москве и Московской область часто подразумевает наведение чистоты на территории подъезда. Это место высокой проходимости, поэтому оно требует регулярного ухода и выноса мусора. В данную услугу включается:</p>
<ul><li>обработка мусоропроводов, загрузочных клапанов;</li>
<li>удаление мусора;</li>
<li>мойка мусоросборников;</li>
<li>очистка и дезинфекция мусоропровода;</li>
<li>устранение засоров;</li>
<li>мытье окон;</li>
<li>уборка площадки;</li>
	<li>обработка металлических решеток, перил, лестниц, плафонов, почтовых ящиков.</li></ul>



	<h3 class="kak_h2">Сколько это стоит</h3>
	<div class="white calc_razdel">
		<div class="row" wfd-id="51">
			<div class="col-sm-4" wfd-id="55">
				<p class="podp">
					 Укажите площадь
				</p>
				<div class="input-group kol_tovar_plus_minus" wfd-id="56">
 <span class="input-group-btn" wfd-id="58"> <button class="btn value-control minus" wfd-id="67">-</button> </span> <input type="number" value="0" class="form-control" id="compareid_108" min="0" pattern="[0-9]*" style="text-align: center;" wfd-id="65"> <span class="input-group-btn" wfd-id="57"> <button class="btn value-control plus" wfd-id="66">+</button> </span>
				</div>
			</div>
			<div class="col-sm-4" wfd-id="53">
				<p class="cena2">
 <span class="summ_ed" wfd-id="54">0</span> <i>руб.</i>
				</p>
			</div>
			<div class="col-sm-4" wfd-id="52">
				<p class="knopka alx_feedback_popup" id="form_id_FID2">
					 Заказать услугу
				</p>
			</div>
		</div>
	</div>
</div>
<div class="container dop-uslugi">
	<h2 class="kak_h2">Дополнительные услуги</h2>
	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-4 ">
			<div class="border">
				<div class="img" style="background:url(&quot;/upload/medialibrary/4f3/4f307b5709fe7609a51a26299cbbc015.jpg&quot;) no-repeat 50% / cover;">
				</div>
				<div class="block-inln">
 <a href="/kliningovye-uslugi/chistka-kovrolina/" class="uslug_2_a">Чистка ковролина</a>
					<p class="price">
						 от 35 руб / кв.м.
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 ">
			<div class="border">
				<div class="img" style="background:url(&quot;/upload/medialibrary/263/263ee0a20684f96419b6d817c9fe74ad.jpg&quot;) no-repeat 50% / cover;">
				</div>
				<div class="block-inln">
 <a href="/kliningovye-uslugi/moyka-okon/" class="uslug_2_a">Мойка окон</a>
					<p class="price">
						 от 35 руб / кв.м.
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 ">
			<div class="border">
				<div class="img" style="background:url(&quot;/upload/medialibrary/3bf/3bfc426d02a283d1584460adcc4d99bd.jpg&quot;) no-repeat 50% / cover;">
				</div>
				<div class="block-inln">
 <a href="/kliningovye-uslugi/moyka-vitrin/" class="uslug_2_a">Мойка витрин</a>
					<p class="price">
						 от 35 руб / кв.м.
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 ">
			<div class="border">
				<div class="img" style="background:url(&quot;/upload/medialibrary/93b/93b840f02f8012999b8be18ddf617e6f.jpg&quot;) no-repeat 50% / cover;">
				</div>
				<div class="block-inln">
 <a href="/kliningovye-uslugi/chistka-mebeli/" class="uslug_2_a">Чистка мебели</a>
					<p class="price">
						 от 50 руб / кв.м.
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 ">
			<div class="border">
				<div class="img" style="background:url(&quot;/upload/medialibrary/e52/e5227202725e852e03b692a50e444650.jpg&quot;) no-repeat 50% / cover;">
				</div>
				<div class="block-inln">
 <a href="/kliningovye-uslugi/dopolnitelnye-uslugi/uborka-territoriy/" class="uslug_2_a">Уборка территорий</a>
					<p class="price">
						 от 30 руб / кв.м.
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 ">
			<div class="border">
				<div class="img" style="background:url(&quot;/upload/medialibrary/b3c/b3cc95c046d508836be94f489cb70906.jpg&quot;) no-repeat 50% / cover;">
				</div>
				<div class="block-inln">
 <a href="/kliningovye-uslugi/dopolnitelnye-uslugi/chistka-polov/" class="uslug_2_a">Чистка полов</a>
					<p class="price">
						 от 20 руб / кв.м.
					</p>

	</div>
</div>
</div>

					<p>В профессиональный клининг в Москве не включается ряд дополнительных услуг. Их необходимо заказывать отдельно. Среди таких видов помощи:</p>
<ul><li>чистка ковролина с применением парогенераторов, пылесосов;</li>
<li>мойка окон с внутренней и наружной сторон. Используются специализированные средства, не оставляющие разводов. Удаляется пыль с откосов, подоконников и рам;</li>
<li>чистка мебели;</li>
<li>уборка прилегающей территории. Отличается в зимний и летний период. В холодное время года специалисты удаляют снег, делают противогололедные присыпки, чистят ливневки. В теплые дни необходимо подметание тротуаров, обработка урн, уход за тротуарной плиткой, стрижка газонов;</li>
<li>чистка полов с применением особых падов, швабр, щеток. В зависимости от материала (керамогранит, мрамор, ламинат, паркет, линолеум, гранит, плитка) подбирают специальные жидкости и насадки.</li></ul>

	<h3>Дезинфекция</h3>
<p>Перед началом клининга специалисты моют руки, надевают маски и перчатки. Дезинфекция поможет снизить риски заболеваний и очистить помещение.
	Клинеры проводят обработку поверхностей (унитаз, выключатели, смесители, ручки) средством, содержащим аммониевые соединения. Это безопасный состав без неприятного запаха. Вещество на длительный срок предохраняет от микробов, вирусов, бактерий и грибков.</p>

	<h3>Меры безопасности</h3>
Для заботы о чистоте и здоровье клиентов мы применяем такие меры безопасности как:
<ul><li>предварительная обработка рук антисептиком;</li>
<li>использование специализированного инвентаря, который дезинфицируется перед использованием;</li>
<li>проверка состояния здоровья уборщиков перед началом работы. Измерение температуры происходит утром и вечером;</li>
<li>использование медицинских масок во время обработки помещений.</li></ul>

<h2>Преимущества клининговой компании «Чистый Офис»</h2>
		<p>Мы получили большое число хвалебных отзывов от клиентов. Заказывая клининг коммерческих помещений, вы получаете:</p>
<ul><li>адекватные и обоснованные цены;</li>
<li>индивидуальный план оказания услуг;</li>
<li>строгое исполнение сроков независимо от объема и сложности работ;</li>
<li>клининг в удобное для клиента время;</li>
<li>уборку экологичными сертифицированными чистящими веществами;</li>
<li>следование санитарно-технологическим нормам и ГОСТ;</li>
<li>порядочность, пунктуальность и доброжелательность персонала;</li>
<li>ответственность за выполненную работу;</li>
	<li>соблюдение антиковидных мер.</li></ul>









	</div>
</div>
<div class="akcii-home">
	<div class="container">
		<p class="title">
			 Предлагаем Вам стоимость услуг на 15 % ниже от той, которую Вы платите нашим конкурентам. Звоните, договаривайтесь и получайте реальную выгоду прямо сейчас!
		</p>
		<p class="knopka alx_feedback_popup" id="form_id_FID2">
			 Заказать
		</p>
	</div>
</div>
<div class="container" wfd-id="27">
	<div class="our_object" wfd-id="28">
		<h3 class="kak_h2">Фото с наших объектов</h3>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"gallery-default",
	Array(
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "Y",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "gallery-default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "8",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Галерея",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	</div>
</div>
<div class="container">
	<h2>Стоимость уборки офисов</h2>
	<div class="cena">
		<h3>Основная уборка офиса (утром или вечером) - <span>График 5/2</span></h3>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов до 500 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <span><a href="/kalkulyator/">от 90 руб/кв.м.</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span> <a href="/kalkulyator/">Уборка офисов от 500 до 1500 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 80 руб/кв.м.</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов от 1500 до 3000 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 70 руб/кв.м.</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов свыше 3000 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 50 руб/кв.м.</a></span>
			</div>
		</div>
	</div>
	<div class="cena">
		<h3>Комплексная уборка офиса (основная и поддерживающая) - <span>График 5/2</span></h3>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов до 500 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">Договорная</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов от 500 до 1500 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 100 руб/кв.м</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов от 1500 до 3000 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 90 руб/кв.м</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов свыше 3000 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 80 руб/кв.м</a></span>
			</div>
		</div>
	</div>
	<div class="cena">
		<h3>Основная уборка офиса (утром или вечером) - <span>График 6/1</span></h3>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов до 500 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 100 руб/кв.м</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов от 500 до 1500 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 90 руб/кв.м</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов от 1500 до 3000 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 80 руб/кв.м</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов свыше 3000 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 70 руб/кв.м</a></span>
			</div>
		</div>
	</div>
	<div class="cena">
		<h3>Комплексная уборка офиса (основная и поддерживающая) - <span>График 6/1</span></h3>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">до 500 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">Договорная</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов от 500 до 1500 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 120 руб/кв.м</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов от 1500 до 3000 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 110 руб/кв.м</a></span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
 <span><a href="/kalkulyator/">Уборка офисов свыше 3000 кв.м.</a></span><a href="/kalkulyator/"> </a>
			</div>
 <a href="/kalkulyator/"> </a>
			<div class="col-xs-6 right">
 <a href="/kalkulyator/"> </a><span><a href="/kalkulyator/">от 100 руб/кв.м</a></span>
			</div>
		</div>
	</div>
</div>
<div class="gray preim">
	<div class="container">
		<span class="kak_h2">Преимущества клининговой компании</span>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="border-white">
					<p class="title">
						 Строгое соблюдение договорных обязательств
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="border-white">
					<p class="title">
						 Сервис, возможность получить дополнительные услуги
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="border-white">
					<p class="title">
						 Полная материальная ответственность компании
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="border-white">
					<p class="title">
						 Применение профессиональных моющих и дезинфицирующих средств
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="border-white">
					<p class="title">
						 Отсутствие проблем, вызванных кадровыми вопросами
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="border-white">
					<p class="title">
						 Удобный график работы, выбранный на Ваше усмотрение
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="border-white">
					<p class="title">
						 Уборка помещений разной площади
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="border-white">
					<p class="title">
						 Предоставление скидок постоянным клиентам
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="border-white">
					<p class="title">
						 контроль качества в соответствии с ГОСТ Р 51870-2014.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container" wfd-id="44">
	<span class="kak_h2">О нас говорят</span>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"otzivi",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "otzivi",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"VIDEO",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
 <br>
 <br><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>