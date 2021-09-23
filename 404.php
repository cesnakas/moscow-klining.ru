<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Ошибка 404 - страница не найдена");
$APPLICATION->SetPageProperty("keywords", "Ошибка 404 - страница не найдена");
$APPLICATION->SetPageProperty("description", "Ошибка 404 - страница не найдена");

$APPLICATION->SetTitle("404 Not Found");
?><div class='container'>
<div style="text-align:center;">
	<p  class='err404' style="    font-size: 100px;
    font-family: opensans-bold;">404</p>
	<p class='err_podp' style="    font-size: 50px;">Страница не найдена</p>
<p class='err_text' style="    font-size: 25px;
    margin-bottom: 50px;">Неправильно набран адрес, или такой страницы
	на сайте больше не существует</p>
<a href="/" class="knopka err" style="color: white;
    text-decoration: none;">Перейти на главную</a>
<br>
</div>
</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>