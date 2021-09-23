<div class='padd'>
<div class="owl-carousel2 owl-carousel grid">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="item item-pomeshenie" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

<? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 250, "height" => 300), BX_RESIZE_IMAGE_EXACT, false); 
      ?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<img
					src="<?=$renderImage["src"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					class="img_olw"
					/>
		<?endif?>
<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
<a href='<?echo $arItem["CODE"]?>' class='absolut'><?echo $arItem["NAME"]?></a>
<?endif?>
	</div>
<?endforeach;?>
</div>
</div>