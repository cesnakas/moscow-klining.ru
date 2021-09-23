<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "калькулятор стоимости уборки");
$APPLICATION->SetPageProperty("description", "калькулятор стоимости уборки - утренняя, вечерняя, поддерживающая, комплексная. 40 клинеров в штате. Цены от 50 руб. за кв.м. Работаем по договору. Скидки и приятные бонусы каждому клиенту! +7(495) 369-28-97");
$APPLICATION->SetTitle("Калькулятор");
?><div class="container" wfd-id="4">
	<div class="p_podp no_home" wfd-id="5">
		<div class="row" wfd-id="6">
			<div class="col-md-9 col-sm-9" wfd-id="18">
				<div id="show_price" wfd-id="19">
					<div id="category_28_noPrint" class="table-responsive" wfd-id="20">
						<table class="table table-bordered price">
						<tbody>
						<tr>
							<th class="active text-left">
								 Услуга <br>
								 Минимальная стоимость услуг - 15000 руб.<br>
							</th>
							<th class="active text-center">
								 Ед.изм.
							</th>
							<th class="active text-center">
								 Кол-во м2
							</th>
							<th class="active text-center">
								 Сумма
							</th>
						</tr>
						<tr>
							<td>
								<p class="uslugi_name">
									 Основная уборка (утром или вечером) - S более 1000 м.кв.&nbsp; &nbsp;&nbsp;<span wfd-id="48">График 5/2</span>
								</p>
							</td>
							<td class="text-center">
								 м2
							</td>
							<td class="text-center">
								<div class="input-group kol_tovar_plus_minus" wfd-id="45">
 <span class="input-group-btn" wfd-id="47"> <button class="btn value-control minus" wfd-id="72">-</button> </span> <input type="number" value="0" class="form-control" id="compareid_108" min="0" autofocus="" pattern="[0-9]*" style="text-align: center;" wfd-id="56"> <span class="input-group-btn" wfd-id="46"> <button class="btn value-control plus" wfd-id="71">+</button> </span>
								</div>
							</td>
							<td class="text-center">
								<p class="summ_ed">
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="uslugi_name">
									 Основная уборка (утром или вечером) - S менее 1000 м.кв.&nbsp; &nbsp;&nbsp;<span wfd-id="44">График 5/2</span>
								</p>
							</td>
							<td class="text-center">
								 м2
							</td>
							<td class="text-center">
								<div class="input-group kol_tovar_plus_minus" wfd-id="41">
 <span class="input-group-btn" wfd-id="43"> <button class="btn value-control minus" wfd-id="70">-</button> </span> <input type="number" value="0" class="form-control" id="compareid_109" min="0" autofocus="" pattern="[0-9]*" style="text-align: center;" wfd-id="55"> <span class="input-group-btn" wfd-id="42"> <button class="btn value-control plus" wfd-id="69">+</button> </span>
								</div>
							</td>
							<td class="text-center">
								<p class="summ_ed">
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="uslugi_name">
									 Основная уборка (утром или вечером) - S более 1000 м.кв.&nbsp; &nbsp;&nbsp;<span wfd-id="40">График 6/1</span>
								</p>
							</td>
							<td class="text-center">
								 м2
							</td>
							<td class="text-center">
								<div class="input-group kol_tovar_plus_minus" wfd-id="37">
 <span class="input-group-btn" wfd-id="39"> <button class="btn value-control minus" wfd-id="68">-</button> </span> <input type="number" value="0" class="form-control" id="compareid_110" min="0" autofocus="" pattern="[0-9]*" style="text-align: center;" wfd-id="54"> <span class="input-group-btn" wfd-id="38"> <button class="btn value-control plus" wfd-id="67">+</button> </span>
								</div>
							</td>
							<td class="text-center">
								<p class="summ_ed">
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="uslugi_name">
									Основная уборка (утром или вечером) - S&nbsp;менее 1000 м.кв.&nbsp; &nbsp; <span wfd-id="36">График 6/1</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
								</p>
							</td>
							<td class="text-center">
								 м2
							</td>
							<td class="text-center">
								<div class="input-group kol_tovar_plus_minus" wfd-id="33">
 <span class="input-group-btn" wfd-id="35"> <button class="btn value-control minus" wfd-id="66">-</button> </span> <input type="number" value="0" class="form-control" id="compareid_111" min="0" autofocus="" pattern="[0-9]*" style="text-align: center;" wfd-id="53"> <span class="input-group-btn" wfd-id="34"> <button class="btn value-control plus" wfd-id="65">+</button> </span>
								</div>
							</td>
							<td class="text-center">
								<p class="summ_ed">
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="uslugi_name">
									 Генеральная уборка
								</p>
							</td>
							<td class="text-center">
								 м2
							</td>
							<td class="text-center">
								<div class="input-group kol_tovar_plus_minus" wfd-id="30">
 <span class="input-group-btn" wfd-id="32"> <button class="btn value-control minus" wfd-id="64">-</button> </span> <input type="number" value="0" class="form-control" id="compareid_112" min="0" autofocus="" pattern="[0-9]*" style="text-align: center;" wfd-id="52"> <span class="input-group-btn" wfd-id="31"> <button class="btn value-control plus" wfd-id="63">+</button> </span>
								</div>
							</td>
							<td class="text-center">
								<p class="summ_ed">
								</p>
							</td>
						</tr>
						<tr id="product_113_noPrint">
							<td>
								<p class="uslugi_name">
									 Первичная уборка
								</p>
							</td>
							<td class="text-center">
								 м2
							</td>
							<td class="text-center">
								<div class="input-group kol_tovar_plus_minus" wfd-id="27">
 <span class="input-group-btn" wfd-id="29"> <button class="btn value-control minus" wfd-id="62">-</button> </span> <input type="number" value="0" class="form-control" id="compareid_113" min="0" autofocus="" pattern="[0-9]*" style="text-align: center;" wfd-id="51"> <span class="input-group-btn" wfd-id="28"> <button class="btn value-control plus" wfd-id="61">+</button> </span>
								</div>
							</td>
							<td class="text-center">
								<p class="summ_ed">
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="uslugi_name">
									 Мойка окон
								</p>
							</td>
							<td class="text-center">
								 м2
							</td>
							<td class="text-center">
								<div class="input-group kol_tovar_plus_minus" wfd-id="24">
 <span class="input-group-btn" wfd-id="26"> <button class="btn value-control minus" wfd-id="60">-</button> </span> <input type="number" value="0" class="form-control" id="compareid_114" min="0" autofocus="" pattern="[0-9]*" style="text-align: center;" wfd-id="50"> <span class="input-group-btn" wfd-id="25"> <button class="btn value-control plus" wfd-id="59">+</button> </span>
								</div>
							</td>
							<td class="text-center">
								<p class="summ_ed">
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="uslugi_name">
									 Химчистка ковролина
								</p>
							</td>
							<td class="text-center">
								 м2
							</td>
							<td class="text-center">
								<div class="input-group kol_tovar_plus_minus" wfd-id="21">
 <span class="input-group-btn" wfd-id="23"> <button class="btn value-control minus" wfd-id="58">-</button> </span> <input type="number" value="0" class="form-control" id="compareid_115" min="0" autofocus="" pattern="[0-9]*" style="text-align: center;" wfd-id="49"> <span class="input-group-btn" wfd-id="22"> <button class="btn value-control plus" wfd-id="57">+</button> </span>
								</div>
							</td>
							<td class="text-center">
								<p class="summ_ed">
								</p>
							</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 text-right" wfd-id="7">
				<div id="total_price" class="default_total_price" wfd-id="8">
					<div class="total_price" wfd-id="14">
						<div class="title" wfd-id="17">
							 Итого на сумму:
						</div>
						<div class="summa" wfd-id="15">
 <span id="total_sum" wfd-id="16">0</span><i class="fa fa-rub"></i>
						</div>
					</div>
					<div class="spisok" wfd-id="13">
					</div>
					 <?$APPLICATION->IncludeComponent(
	"altasib:feedback.form",
	"forma",
	Array(
		"ACTIVE_ELEMENT" => "Y",
		"ADD_HREF_LINK" => "Y",
		"ADD_LEAD" => "N",
		"ALX_LINK_POPUP" => "N",
		"BBC_MAIL" => "",
		"CAPTCHA_TYPE" => "default",
		"CATEGORY_SELECT_NAME" => "Выберите категорию",
		"CHANGE_CAPTCHA" => "Y",
		"CHECKBOX_TYPE" => "CHECKBOX",
		"CHECK_ERROR" => "N",
		"COLOR_OTHER" => "#ff852a",
		"COLOR_SCHEME" => "BRIGHT",
		"COLOR_THEME" => "",
		"COMPONENT_TEMPLATE" => "forma",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EVENT_TYPE" => "ALX_FEEDBACK_FORM3",
		"FB_TEXT_NAME" => "",
		"FB_TEXT_SOURCE" => "PREVIEW_TEXT",
		"FORM_ID" => "4",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INPUT_APPEARENCE" => array(0=>"DEFAULT",),
		"JQUERY_EN" => "N",
		"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array(0=>"PHONE",),
		"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
		"NAME_ELEMENT" => "ALX_DATE",
		"NOT_CAPTCHA_AUTH" => "N",
		"PROPERTY_FIELDS" => array(0=>"PHONE",1=>"FIO",2=>"COMENT",3=>"FEEDBACK_TEXT",),
		"PROPERTY_FIELDS_REQUIRED" => array(0=>"PHONE",),
		"PROPS_AUTOCOMPLETE_EMAIL" => array(0=>"EMAIL",),
		"PROPS_AUTOCOMPLETE_NAME" => array(),
		"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(0=>"PHONE",),
		"PROPS_AUTOCOMPLETE_VETO" => "N",
		"REQUIRED_SECTION" => "N",
		"SECTION_FIELDS_ENABLE" => "N",
		"SECTION_MAIL_ALL" => "",
		"SEND_IMMEDIATE" => "Y",
		"SEND_MAIL" => "N",
		"SHOW_LINK_TO_SEND_MORE" => "Y",
		"SHOW_MESSAGE_LINK" => "Y",
		"SPEC_CHAR" => "N",
		"USERMAIL_FROM" => "N",
		"USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_INPUT_LABEL" => "Я принимаю условия передачи информации",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "Y",
		"USE_CAPTCHA" => "Y",
		"WIDTH_FORM" => "100%"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>
 <?$APPLICATION->IncludeFile(
		$APPLICATION->GetTemplatePath("/include/bloki.php"),
						Array(),
						Array("MODE"=>"html")
						);?> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>