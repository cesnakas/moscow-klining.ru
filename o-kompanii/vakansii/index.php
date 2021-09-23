<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Вакансии | Чистый офис");
$APPLICATION->SetPageProperty("description", "Вакансии | Клининговая компания Чистый офис");
$APPLICATION->SetTitle("Вакансии");
?><div class="container">
	<div class="p_podp no_home">
		<div class="row">
			<div class="col-sm-8">
				<div class="doska" style="margin: 15px 0;">
					<p>
 <b>Компания приглашает на работу уборщицу</b>
					</p>
					<p>
 <b>График работы:</b> 5/2 с 07:00 до 18:00
					</p>
					<p>
 <b>Зарплата:</b> 28 000 рублей
					</p>
					<p>
 <b>Условия:</b> уборка офисных помещений (основная + поддерживающая)
					</p>
					<p>
 <b>Требования:</b> гражданство РФ, ответственность, чистоплотность
					</p>
				</div>
			</div>
			<div class="col-sm-4">
				<p style="text-align:center;">
 <img alt="22-04-6859333.jpg" src="/upload/medialibrary/253/253668cba6d44807d9d7075442daef2c.jpg" style="width:100%;max-width:280px; border-radius: 50%;" title="22-04-6859333.jpg">
				</p>
			</div>
		</div>
	</div>
</div>
<?$APPLICATION->IncludeFile(
		$APPLICATION->GetTemplatePath("/include/bloki.php"),
						Array(),
						Array("MODE"=>"html")
						);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>