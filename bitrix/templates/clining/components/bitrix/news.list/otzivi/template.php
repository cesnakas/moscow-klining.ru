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
<div class="row otzivi">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-sm-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 100, "height" => 95), BX_RESIZE_IMAGE_EXACT, false); 
      ?>
				<img
					class="img_otziv"
					border="0"
					src="<?=$renderImage['src']?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					/>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<p class='name_otziv'><?echo $arItem["NAME"]?></p>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
	<div class='text_otziv'><?echo $arItem["PREVIEW_TEXT"];?> </div>
		<?endif;?>

	<?if( $arItem["PROPERTIES"]["VIDEO"]["~VALUE"]):?>
<div class='text_otziv'>  <div class="youtube" data-embed="<?=$arItem["PROPERTIES"]["VIDEO"]["~VALUE"]?>"><div class="play-button"></div></div>
</div>
		<?endif;?>
	</div>
<?endforeach;?>
</div>
<div class='center'><a href='/klientam/otzyvy/' class='knopka'>Посмотреть все отзывы</a></div>
        <script>
        ( function() {
    var youtube = document.querySelectorAll( ".youtube" );
    for (var i = 0; i < youtube.length; i++) {
        var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
        var image = new Image();
                image.src = source;
                image.addEventListener( "load", function() {
                    youtube[ i ].appendChild( image );
                }( i ) );
                youtube[i].addEventListener( "click", function() {
                    var iframe = document.createElement( "iframe" );
                    iframe.setAttribute( "frameborder", "0" );
                    iframe.setAttribute( "autoplay", "1" );
                    iframe.setAttribute( "allowfullscreen", "" );
                    iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );
                    this.innerHTML = "";
                    this.appendChild( iframe );
                } );    
    };
} )();
        </script>
        <style>/* Lazyload iframe YOUtube */
.youtube {background-color: #000;margin-bottom: 30px;position: relative;padding-top: 56.25%;overflow: hidden;cursor: pointer;width: 100%;}
.youtube img {width: 100%;top: -16.82%;left: 0;opacity: 0.7;max-height: initial;border: none;padding: 0;margin: 0;}
.youtube .play-button {width: 90px;height: 60px;background-color:#ff852a;box-shadow: 0 0 30px rgba( 0,0,0,0.6 );z-index: 1;opacity: 0.8;border-radius: 20px;}
.youtube .play-button:before {content: "";border-style: solid;border-width: 15px 0 15px 26.0px;border-color: transparent transparent transparent #fff;}
.youtube img, .youtube .play-button {cursor: pointer;}
.youtube img, .youtube iframe, .youtube .play-button, .youtube .play-button:before {position: absolute;}
.youtube .play-button, .youtube .play-button:before {top: 50%; left: 50%; transform: translate3d( -50%, -50%, 0 );}
.youtube iframe {height: 100%; width: 100%; top: 0; left: 0;}</style>