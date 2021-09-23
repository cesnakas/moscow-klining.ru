<div class='padd'>
<div class="owl-carousel2 owl-carousel grid">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
<figure class="effect-bubba"> 
<? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 345, "height" => 295), BX_RESIZE_IMAGE_EXACT, false); 
      ?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<img
					border="0"
					src="<?=$renderImage["src"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					class="img_olw"
					/>
		<?endif?>
<figcaption>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<p class='h2'><?echo $arItem["NAME"]?></p>
		<?endif;?>
	<p class='cena267'><?print_r ($arItem["PROPERTIES"]["PRICE"]["VALUE"])?></p>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
	<div class='text_uslug2'><?echo $arItem["PREVIEW_TEXT"];?></div>
		<?endif;?>
	<a href="<?echo $arItem["CODE"]?>"></a>
 </figcaption>
	</figure>
	</div>
<?endforeach;?>
</div>
</div>