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
<div class='slider'>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<?$b==0;foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="item <?if ($b==0): echo "active";?><?endif?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style='background:url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat 50% / cover;'>
<div class='container'>
<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>

			<?echo $arItem["PREVIEW_TEXT"];?>
	<?endif;?>
		</div>

<?$b++;?>
	</div>
<?endforeach;?>
</div>
 <ol class="carousel-indicators">
<? $i=0; foreach($arResult["ITEMS"] as $arItem):?>
	 <li data-target="#carousel-example-generic" data-slide-to="<?echo $i;?>" <?if ($i==0): echo "class='active'";?><?endif?>></li>
<?$i++;?>
<?endforeach;?>
</ol>
</div>
</div>