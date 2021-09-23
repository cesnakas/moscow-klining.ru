<p class="footer_title">
	 Как нас найти
</p>
<?$APPLICATION->IncludeComponent(
	"webfly:cities.popup", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"WF_FAVORITE" => "WF_SUBDOMAIN",
		"WF_JQUERY" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
<div class="bottom_contact_info" itemscope="" itemtype="http://schema.org/Organization">
	<p itemprop="telephone">
		 Телефон: <a href='tel:+84953692897'>8 (495) 369-28-97</a>
	</p>
	<p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
		 Адрес: г. <span itemprop="streetAddress">#WF_CONTACTS#</span>
	</p>
	<p itemprop="email">
		 E-mail: zakaz@moscow-klining.ru
	</p>
</div>
 <br>