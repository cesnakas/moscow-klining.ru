<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Способы оплаты | клининговая компания \"Чистый Офис\"");
$APPLICATION->SetPageProperty("description", "Способы оплаты. 40 клинеров в штате. Цены от 50 руб. за кв.м. Работаем по договору. Скидки и приятные бонусы каждому клиенту! +7(495) 369-28-97");
$APPLICATION->SetTitle("Оплата");
?><div class="container">

	<div class="p_podp no_home">
		<p>
 <b>Оплата за оказанные услуги производится как наличным, так и безналичным расчетом</b>
		</p>
		<p>
 <b>Наши реквизиты</b>
		</p>
		<p>
			 ИНН: 561400301038&nbsp;
		</p>
		<p>
			 ОГРНИП: 317502900041711
		</p>
		<p>
			 ОКВЭД: 8121
		</p>
		<p>
			 Р/счет: 40802810500290001111
		</p>
		<p>
			 К/счет: 30101810245250000117
		</p>
		<p>
			 Банк: ПАО «БИНБАНК», 115172, г. Москва, ул. Котельническая набережная, д. 33, стр. 1, 3-6 этажи.
		</p>
		<p>
			 БИК: 044525117
		</p>
		<p>
			 ИНН: 5408117935
		</p>
		<p>
			 КПП: 770501001
		</p>
	</div>
</div>
<?$APPLICATION->IncludeFile(
		$APPLICATION->GetTemplatePath("/include/bloki.php"),
						Array(),
						Array("MODE"=>"html")
						);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>