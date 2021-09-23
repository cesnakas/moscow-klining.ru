<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дополнительные услуги");
?><div itemscope="" itemtype="http://schema.org/Product">

		<div class="container">
			<div class="slid" style="background:url(/upload/medialibrary/c84/c846fbd9173a5b682f7a5bb43ccfd6c0.jpg) no-repeat 50%;">
				<div id="text-slid2" class="text-slider">
					<h1 class="name_slid" itemprop="name">
					Дополнительные услуги </h1>
					<p class="text-slid">
						 Закажите расчет стоимости услуг сегодня и получите специальные условия сотрудничества
					</p>
 <a href="/kalkulyator/" class="knopka">Рассчитать стоимость</a>
				</div>
			</div>
		</div>
		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."/include/bloki2.php"
	)
);?>
			<div class="container" wfd-id="6">
		<h2 class="kak_h2">Цены на дополнительные уборку</h2>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."/include/cena.php"
	)
);?>
		<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
		</div>
<div class="gray">
		<div class="container">
			<h3 class="kak_h2">Другие услуги компании</h3>
			<div class="uslugi">
				<div class="padd">
					<div class="owl-carousel2 owl-carousel grid">
						<div class="item">
							<p style="background:url('/upload/medialibrary/173/173fc4a5537ece12099f7b0beab8581f.jpg') no-repeat 50% / cover" class="p-img">
							</p>
							<div class="obshee">
								<p class="h2">
 <a href="/kliningovye-uslugi/chistka-kovrolina/">Чистка ковролина</a>
								</p>
							</div>
						</div>
						<div class="item">
							<p style="background:url('/upload/medialibrary/a21/a210b94b6b1d31602a46427c353dd135.jpg') no-repeat 50% / cover" class="p-img">
							</p>
							<div class="obshee">
								<p class="h2">
 <a href="/kliningovye-uslugi/moyka-okon/">Мойка окон в офисе</a>
								</p>
							</div>
						</div>
						<div class="item">
							<p style="background:url('/upload/medialibrary/5ae/5ae47ef1a4d41a813758a0adb6bc7365.jpg') no-repeat 50% / cover" class="p-img">
							</p>
							<div class="obshee">
								<p class="h2">
 <a href="/kliningovye-uslugi/moyka-vitrin/">Мойка витрин</a>
								</p>
							</div>
						</div>
						<div class="item">
							<p style="background:url('/upload/medialibrary/163/1636f0ea84616d861c25fdf6c1023ed7.jpg') no-repeat 50% / cover" class="p-img">
							</p>
							<div class="obshee">
								<p class="h2">
 <a href="/kliningovye-uslugi/chistka-mebeli/">Чистка мебели</a>
								</p>
							</div>
						</div>
						<div class="item">
							<p style="background:url('/upload/medialibrary/d25/d2540096c99fb02b73b493c8f64668ea.jpg') no-repeat 50% / cover" class="p-img">
							</p>
							<div class="obshee">
								<p class="h2">
 <a href="/kliningovye-uslugi/dopolnitelnye-uslugi/uborka-territoriy/">Уборка территорий</a>
								</p>
							</div>
						</div>
						<div class="item">
							<p style="background:url('/upload/medialibrary/9ac/9acee924532c501ef6bdd14e3a6341f6.jpg') no-repeat 50% / cover" class="p-img">
							</p>
							<div class="obshee">
								<p class="h2">
 <a href="/kliningovye-uslugi/dopolnitelnye-uslugi/chistka-polov/">Чистка полов</a>
								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."/include/bloki.php"
	)
);?> <br>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>