<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
 <script>
$(document).ready(function() {
	$('.owl-carousel').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:50, //Отступ от картино если выводите больше 1
		nav:true,
navText:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
autoplayHoverPause:true,
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:2
			}
		}
	});
});
</script>
<div class='padd'>
<div class="owl-carousel">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<img
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					class="img_olw"
					/>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<p class='fio_otziv'><?echo $arItem["NAME"]?></p>
		<?endif;?>
		<?if($arParams["DISPLAY_PROPERTIES"]["DOLZHNOST"]["VALUE"]!="N"):?>
		<p class='dolzhnost'><? echo $arItem["DISPLAY_PROPERTIES"]["DOLZHNOST"]["VALUE"];?></p>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
	<div class='text_otziv'><?echo $arItem["PREVIEW_TEXT"];?></div>
		<?endif;?>
	</div>
<?endforeach;?>
</div>
</div>