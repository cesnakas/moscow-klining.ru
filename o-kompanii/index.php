<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "О компании | Чистый офис");
$APPLICATION->SetPageProperty("description", "О клининговой компании | Чистый офис");
$APPLICATION->SetTitle("О компании");
?><div class="container">
	<div class="p_podp no_home">
		<p>
			 "Чистый офис" - это молодая, динамично развивающаяся клининговая компания, которая специализируется на уборке офисных и других нежилых помещений в #WF_CITY_PRED# и Московской области. За 5 лет существования, мы успели выполнить сотни заказов разной сложности.
		</p>
		<p>
			 У каждого сотрудника компании профессиональный опыт работы в сфере клининга,&nbsp;в среднем 5 лет.&nbsp;
		</p>
		<p>
			 Мы рады новым клиентам и придерживаемся&nbsp; гибкой ценовой политики. Все цены обсуждаются.&nbsp;
		</p>
		<p>
			 Особое внимание уделяется контролю за качеством услуг, которое должно соответствовать высоким требованиям заказчика, тщательному подбору и периодическому обучению персонала.
		</p>
		<p>
			 Опытные клинеры выполнят ежедневную, поддерживающую или генеральную уборку офиса в #WF_CITY_PRED# недорого в удобное для вас время. В разделе с ценами, стандартные схемы уборки. Но возможно составить индивидуальный план работ.
		</p>
		<h2>Наш главный потенциал - это люди!</h2>
		<p>
			 Наши специалисты обеспечены всем необходимым, лучшими техническими аппаратами и инвентарем, от известных производителей Vileda и Karcher, специальной одеждой и обувью в соответствии с типовыми нормами, утвержденными Приказом Министерства здравоохранения и социального развития РФ от 1 октября 2008 г. № 541н.&nbsp;
		</p>
		<p>
			 Услуги оказываются в соответствии с ГОСТ Р 51870-2014.
		</p>
		<div class="kliner">
			<h2>Наши сотрудники</h2>
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"klineri",
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
		"COMPONENT_TEMPLATE" => "klineri",
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
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "15",
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
);?>
		</div>
		<p>
 <b>Обратитесь в нашу компанию и занимайтесь любимыми делами! "</b><b>Чистый офис" - уборка на совесть! </b>
		</p>
		<h4>
		Дополнительно о компании </h4>
		<ul>
			<li><a href="/o-kompanii/novosti/">Новости компании</a></li>
			<li><a href="/o-kompanii/vakansii/">Вакансии</a></li>
			<li><a href="/o-kompanii/tekhnika/">Используемая техника</a></li>
			<li><a href="/o-kompanii/moyushchie-sredstva/">Чистящие и моющие средства, которые используем в работе</a></li>
		</ul>
	</div>
</div>
<div class="say_sotrudniki">
	<div class="container">
		<h3 class="kak_h2">О нас говорят сотрудники</h3>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"sotrudniki",
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
		"COMPONENT_TEMPLATE" => "sotrudniki",
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
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "8",
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
);?>
	</div>
</div>
<?$APPLICATION->IncludeFile(
		$APPLICATION->GetTemplatePath("/include/bloki.php"),
						Array(),
						Array("MODE"=>"html")
						);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>