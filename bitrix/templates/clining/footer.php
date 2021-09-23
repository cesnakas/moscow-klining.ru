<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
	</div>
<div class='forma_podp'>
	<div class='container'>
<div class='row'>
<div class='col-sm-6 col-xs-12 col-md-7'>
<p class='podpis'>Узнайте точную стоимость уборки</p>
		<p>Укажите метраж помещения, тип уборки и дополнительные пожелания</p>
	</div>
<div class='col-sm-6 col-xs-12 col-md-5'>
<p class="knopka alx_feedback_popup" id="form_id_FID2">
			 Расчитать стоимость
		</p>
	</div>
		</div>
</div>
</div>
<!--<div class='forma_podp'>
<div class='container'>
	<p class='podpis'>Подпишитесь на акции и скидки</p>
	<?$APPLICATION->IncludeComponent(
	"altasib:feedback.form",
	"contact2",
	array(
		"ACTIVE_ELEMENT" => "Y",
		"ADD_HREF_LINK" => "Y",
		"ALX_LINK_POPUP" => "N",
		"BBC_MAIL" => "",
		"CATEGORY_SELECT_NAME" => "Выберите категорию",
		"CHECKBOX_TYPE" => "CHECKBOX",
		"CHECK_ERROR" => "N",
		"COLOR_OTHER" => "#009688",
		"COLOR_SCHEME" => "BRIGHT",
		"COLOR_THEME" => "",
		"EVENT_TYPE" => "ALX_FEEDBACK_FORM2",
		"FB_TEXT_NAME" => "",
		"FB_TEXT_SOURCE" => "PREVIEW_TEXT",
		"FORM_ID" => "3",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INPUT_APPEARENCE" => array(
			0 => "DEFAULT",
		),
		"JQUERY_EN" => "N",
		"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array(
		),
		"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
		"NAME_ELEMENT" => "ALX_DATE",
		"PROPERTY_FIELDS" => array(
			0 => "EMAIL",
		),
		"PROPERTY_FIELDS_REQUIRED" => array(
			0 => "EMAIL",
		),
		"PROPS_AUTOCOMPLETE_EMAIL" => array(
		),
		"PROPS_AUTOCOMPLETE_NAME" => array(
		),
		"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
		),
		"PROPS_AUTOCOMPLETE_VETO" => "N",
		"SECTION_FIELDS_ENABLE" => "N",
		"SECTION_MAIL_ALL" => "",
		"SEND_IMMEDIATE" => "Y",
		"SEND_MAIL" => "N",
		"SHOW_LINK_TO_SEND_MORE" => "N",
		"SHOW_MESSAGE_LINK" => "Y",
		"USERMAIL_FROM" => "N",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_INPUT_LABEL" => "",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_CAPTCHA" => "N",
		"WIDTH_FORM" => "100%",
		"COMPONENT_TEMPLATE" => "contact2",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
	);?>
	</div>
		</div>-->
<footer>
	<div class='container'>
		<div class='row'>

			<div class='col-sm-3'>
				<?/*$APPLICATION->IncludeFile(
						$APPLICATION->GetTemplatePath("/include/menu1.php"),
				Array(),
				Array("MODE"=>"html")
				);*/?>
				<p class="footer_title">Наши услуги</p>
				<ul class="footer">
					<li><a href="/kliningovye-uslugi/uborka-ofisa/">Уборка офиса</a></li>
					<li><a href="/kliningovye-uslugi/ezhednevnaya-uborka-ofisa/">Ежедневная</a></li>
					<li><a href="/kliningovye-uslugi/generalnaya-uborka-ofisa/">Генеральная</a></li>
					<li><a href="/kliningovye-uslugi/utrennyaya-uborka-ofisa/">Утренняя</a></li>
					<li><a href="/kliningovye-uslugi/vechernyaya-uborka-ofisov/">Вечерняя</a></li>
					<li><a href="/kliningovye-uslugi/kompleksnaya-uborka-ofisov/">Комплексная</a></li>
					<li><a href="/kliningovye-uslugi/regulyarnaya-uborka-ofisov/">Регулярная</a></li>
					<li><a href="/kliningovye-uslugi/podderzhivayushchaya-uborka-ofisa/">Поддерживающая</a></li>
				</ul>
			</div>
			<div class='col-sm-3'>
<?$APPLICATION->IncludeFile(
								$APPLICATION->GetTemplatePath("/include/info.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
			</div>
			<div class='col-sm-3 '>
<?$APPLICATION->IncludeFile(
								$APPLICATION->GetTemplatePath("/include/menu2.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
			</div>
			<div class='col-sm-3'>

<?$APPLICATION->IncludeFile(
		$APPLICATION->GetTemplatePath("/include/contact.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
<a href="https://dialogs.yandex.ru/store/skills/0960c8b8-chistyj-ofi?utm_source=site&utm_medium=badge&utm_campaign=v1&utm_term=d4" target="_blank"><img alt="Алиса это умеет" src="https://dialogs.s3.yandex.net/badges/v1-term4.svg"/></a>
				<a href='/chistiy_ofis.pdf' target="_blank" class='prez'><img src='/upload/medialibrary/9ac/9ac75383e237840b68060555aaab1798.png'>Скачать презентацию</a>
<br>
<iframe src="https://yandex.ru/sprav/widget/rating-badge/8950269928" width="150" height="50" frameborder="0" class='reiting'></iframe>
</div>
		</div>
	</div>
</footer>
<div class='bottom_planka'>
<div class='container'>
<div class='row'>
<div class='col-sm-6'>
<?$APPLICATION->IncludeFile(
		$APPLICATION->GetTemplatePath("/include/copyright.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
	</div>
<div class='col-sm-6 right'>
<?$APPLICATION->IncludeFile(
		$APPLICATION->GetTemplatePath("/include/soc.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
	</div>
</div>
	</div>
</div>
<div id="upbutton"></div>
<span class="alx_feedback_popup" id="form_id_FID2"></span>
<script src="//code.jivosite.com/widget.js" data-jv-id="zYeUGVcnOc" async></script>
<?
$APPLICATION->ShowCSS(true, $bXhtmlStyle);
$APPLICATION->ShowHeadScripts();
?>
<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
		<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?=SITE_TEMPLATE_PATH?>/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/carusel/owl.carousel.css">
<script src="<?=SITE_TEMPLATE_PATH?>/gallary/lightslider.js"></script>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/gallary/lightslider.css">
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/carusel/owl.theme.default.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script src="<?=SITE_TEMPLATE_PATH?>/carusel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/fancybox/jquery.fancybox.pack.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46168248 = new Ya.Metrika({
                    id:46168248,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QPXRRC370H"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag("js", new Date());

gtag("config", "G-QPXRRC370H");
</script>
<?$APPLICATION->IncludeComponent(
    "webfly:meta.edit",
    ".default",
    array(
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "WF_JQUERY" => "N"
    ),
    false
);?>
	</body>
</html>