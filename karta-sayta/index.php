<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карта сайта");
?><div class="container">
	<div class="gray no_home">
		 <?/*$APPLICATION->IncludeComponent(
	"bitrix:main.map",
	"carta",
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COL_NUM" => "1",
		"COMPONENT_TEMPLATE" => "carta",
		"LEVEL" => "3",
		"SET_TITLE" => "N",
		"SHOW_DESCRIPTION" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "STATIC"
	),
	false
);*/?>
		<ul class="map-level-0">
			<li><a href="/">Клининговая компания в Москве</a>
			<ul class="map-level-1">
				<li><a href="/kliningovye-uslugi/uborka-ofisa/">Уборка офиса</a>
				<ul class="map-level-2">
					<li><a href="/kliningovye-uslugi/ezhednevnaya-uborka-ofisa/">Ежедневная уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/razovaya-uborka-ofisa/">Разовая уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/generalnaya-uborka-ofisa/">Генеральная уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/utrennyaya-uborka-ofisa/">Утренняя уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/vechernyaya-uborka-ofisov/">Вечерняя уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/kompleksnaya-uborka-ofisov/">Комплексная уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/regulyarnaya-uborka-ofisov/">Регулярная уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/uborka-ofisa-posle-remonta/">Уборка офиса после ремонта</a></li>
					<li><a href="/kliningovye-uslugi/vlazhnaya-uborka-ofisov/">Влажная уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/podderzhivayushchaya-uborka-ofisa/">Поддерживающая уборка офиса</a></li>
				</ul>
 </li>
				<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/">Уборка нежилых помещений</a>
				<ul class="map-level-2">
					<li><a href="/kliningovye-uslugi/srochnaya-uborka-pomeshcheniy/">Срочная</a></li>
					<li><a href="/kliningovye-uslugi/poslestroitelnaya-uborka-pomeshcheniy/">Послестроительная уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/vlazhnaya-uborka-pomeshcheniy/">Влажная уборка помещений</a></li>
					<li><a href="/kliningovye-uslugi/uborka-ofisa-posle-pozhara/">Уборка помещений после пожара</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/shkoly/">Школы</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/biznes-tsentry/">Бизнес центры</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/magaziny/">Магазины</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/gostinitsy/">Гостиницы</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/parking/">Паркинг</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/kafe-i-restorany/">Кафе и рестораны</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/sklady/">Склады</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/kinoteatry/">Кинотеатры</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/promyshlennye-obekty/">Промышленные объекты</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/torgovye-tsentry/">Торговые центры</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/salony-krasoty/">Салоны красоты</a></li>
					<li><a href="/kliningovye-uslugi/uborka-pomeshcheniy/posle-meropriyatiy/">После мероприятий</a></li>
				</ul>
 </li>
				<li><a href="/kliningovye-uslugi/dopolnitelnye-uslugi/">Дополнительные услуги</a>
				<ul class="map-level-2">
					<li><a href="/kliningovye-uslugi/chistka-kovrolina/">Чистка ковролина</a></li>
					<li><a href="/kliningovye-uslugi/moyka-okon/">Мойка окон</a></li>
					<li><a href="/kliningovye-uslugi/moyka-vitrin/">Мойка витрин</a></li>
					<li><a href="/kliningovye-uslugi/chistka-mebeli/">Чистка мебели</a></li>
					<li><a href="/kliningovye-uslugi/dopolnitelnye-uslugi/uborka-territoriy/">Уборка территорий</a></li>
					<li><a href="/kliningovye-uslugi/dopolnitelnye-uslugi/chistka-polov/">Чистка полов</a></li>
				</ul>
 </li>
			</ul>
 </li>
			<li><a href="/tseny/">Прайс лист на клининговые услуги</a></li>
			<li><a href="/o-kompanii/">О компании</a>
			<ul class="map-level-1">
				<li><a href="/o-kompanii/novosti/">Новости</a></li>
				<li><a href="/o-kompanii/vakansii/">Вакансии</a></li>
				<li><a href="/o-kompanii/polzovatelskoe-soglashenie/">Пользовательское соглашение</a></li>
				<li><a href="/o-kompanii/tekhnika/">Техника</a></li>
				<li><a href="/o-kompanii/moyushchie-sredstva/">Моющие средства</a></li>
			</ul>
 </li>
			<li><a href="/klientam/">Клиентам</a>
			<ul class="map-level-1">
				<li><a href="/klientam/aktsii/">Акции<span>1</span></a></li>
				<li><a href="/klientam/galereya/">Галерея</a></li>
				<li><a href="/klientam/oplata/">Оплата</a></li>
				<li><a href="/klientam/otzyvy/">Отзывы</a></li>
				<li><a href="/klientam/garantii/">Гарантии</a></li>
				<li><a href="/klientam/stati/">Статьи</a></li>
				<li><a href="/klientam/vopros-otvet/">Вопрос-Ответ</a></li>
			</ul>
 </li>
			<li><a href="/kontakty/">Контакты</a></li>
		</ul>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>