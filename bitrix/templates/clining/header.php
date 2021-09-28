<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
<head>
<?
$bXhtmlStyle = true;
echo '<meta http-equiv="Content-Type" content="text/html; charset='.LANG_CHARSET.'"'.($bXhtmlStyle? ' /':'').'>'."\n";
$APPLICATION->ShowMeta("robots", false, $bXhtmlStyle);
$APPLICATION->ShowMeta("keywords", false, $bXhtmlStyle);
$APPLICATION->ShowMeta("description", false, $bXhtmlStyle);
$APPLICATION->ShowLink("canonical", null, $bXhtmlStyle);
$APPLICATION->ShowHeadStrings();
?>
<title><?$APPLICATION->ShowTitle()?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script data-skip-moving="true" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
  $(window).on('load', function () {$preloader = $('.loaderArea'),$loader = $preloader.find('.loader');$loader.fadeOut();$preloader.delay(350).fadeOut('slow');});</script>
<style>.loaderArea{ background:linear-gradient(90deg,#009688 10%,#1c7973 90%); overflow:hidden; position:fixed; left:0; top:0; right:0; bottom:0; z-index:100000; } .loader{ height:40px; width:40px; position:absolute; left:50%; margin-left:-20px; top:50%; margin-top:-20px; } .loader:before, .loader:after{ content:""; height:40px; width:40px; border:8px solid rgba(255,255,255,.5); border-radius:10px; position:absolute; top:0; } .loader:before{ animation:animate 2s infinite linear; } @keyframes animate{ 0%{ transform:rotate(0)skew(0); } 100%{ transform:rotate(180deg)skew(360deg); } } .loader:after{ animation:animate2 2s infinite linear; } @keyframes animate2{ 0%{ transform:rotate(0)skew(0); } 100%{ transform:rotate(-180deg)skew(-360deg); } } </style>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
#WF_META#

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

</head>
	<body>
<div class="loaderArea">
   <div class="loader"></div>
</div>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
<div  itemscope itemtype="http://schema.org/WPHeader">
		<div class='planka_top'>
			<div class='container'>
				<div class='row'>
					<div class='col-sm-8'>
<?$APPLICATION->IncludeFile(
								$APPLICATION->GetTemplatePath("/include/info-hd.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
</div>
					<div class='col-sm-4  col-xs-12  text-right'>
<?$APPLICATION->IncludeFile(
								$APPLICATION->GetTemplatePath("/include/rezim2.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
</div>
</div>

</div>
</div>
		<header>
			<div class='container head_block'>
				<div class='row'>
					<div class="col-sm-6 col-md-3 logo">
						<?$APPLICATION->IncludeFile(
								$APPLICATION->GetTemplatePath("/include/logo.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
					</div>
<div class="col-sm-12 col-md-6 phone">
<?$APPLICATION->IncludeFile(
								$APPLICATION->GetTemplatePath("/include/menu-hd.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
					</div>
					<div class="col-md-3 col-sm-6 vremy">
<?$APPLICATION->IncludeFile(
								$APPLICATION->GetTemplatePath("/include/phone2.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
<a id="touch-menu" class="mobile-menu" href="#"><img src="/upload/medialibrary/cd6/cd6a60baed3df3e41266d74d8ae32ea5.png"></a>
					</div>
				</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:search.title",
	"search",
	Array(
		"CATEGORY_0" => array(0=>"main",),
		"CATEGORY_0_TITLE" => "",
		"CATEGORY_0_main" => array(0=>"",),
		"CHECK_DATES" => "N",
		"CONTAINER_ID" => "title-search",
		"INPUT_ID" => "title-search-input",
		"NUM_CATEGORIES" => "1",
		"ORDER" => "date",
		"PAGE" => "#SITE_DIR#search/index.php",
		"SHOW_INPUT" => "Y",
		"SHOW_OTHERS" => "N",
		"TOP_COUNT" => "5",
		"USE_LANGUAGE_GUESS" => "Y"
	)
);?>
			</div>

		</header>
		</div>
<?if($APPLICATION->GetCurPage(false)==SITE_DIR):?>
			<?$APPLICATION->IncludeFile(
								$APPLICATION->GetTemplatePath("/include/slider.php"),
						Array(),
						Array("MODE"=>"html")
						);?>
		<?else:?>
<div class='bread'>
<div class='container'>
		<?if(CSite::InDir('/kliningovye-uslugi/')):?><br><?else:?><h1><?$APPLICATION->ShowTitle(false)?></h1><?endif;?>
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bread", Array(

	),
	false
);?>
</div>
		</div>
	<?endif?>
<div class='content'>
