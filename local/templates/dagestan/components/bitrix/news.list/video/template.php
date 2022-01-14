<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<!-- <div class="news-list">
	<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>

	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<p class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" /></a>
				<? else : ?>
					<img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" />
				<? endif; ?>
			<? endif ?>
			<? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]) : ?>
				<span class="news-date-time"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
			<? endif ?>
			<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]) : ?>
				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
					<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><b><? echo $arItem["NAME"] ?></b></a><br />
				<? else : ?>
					<b><? echo $arItem["NAME"] ?></b><br />
				<? endif; ?>
			<? endif; ?>
			<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]) : ?>
				<? echo $arItem["PREVIEW_TEXT"]; ?>
			<? endif; ?>
			<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
		<div style="clear:both"></div>
	<? endif ?>
	<? foreach ($arItem["FIELDS"] as $code => $value) : ?>
		<small>
			<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
		</small><br />
	<? endforeach; ?>
	<? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty) : ?>
		<small>
			<?= $arProperty["NAME"] ?>:&nbsp;
			<? if (is_array($arProperty["DISPLAY_VALUE"])) : ?>
				<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
			<? else : ?>
				<?= $arProperty["DISPLAY_VALUE"]; ?>
			<? endif ?>
		</small><br />
	<? endforeach; ?>
	</p>
<? endforeach; ?>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
	<br /><?= $arResult["NAV_STRING"] ?>
<? endif; ?>
</div> -->

<?
$sliceVideoBig = array_slice($arResult['ITEMS'], 0, 1, true);
$sliceVideoPreview = array_slice($arResult['ITEMS'], 1);
?>

<!-- <div class="video">
	<? foreach ($arResult['ITEMS'] as $arItem) : ?>
		<iframe width="560" height="315" src="<?= $arItem['DISPLAY_PROPERTIES']['VIDEO_LINK']['VALUE'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<? endforeach; ?>
</div> -->



<div class="video-preview">
	<div class="main-title-block">
		<h3 class="block-title">Видео</h3>
		<!-- <a class="main-title-more" href="#">
			<span>Показать больше</span>
		</a> -->
	</div>
	<div class="video-preview__main">
		<? foreach ($sliceVideoBig as $arItem) : ?>
			<iframe class="video__gallery-item" width="500" height="270" src="<?= $arItem['DISPLAY_PROPERTIES']['VIDEO_LINK']['VALUE'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<? endforeach; ?>
	</div>
	<!-- <div class="video-preview__gallery">
		<? foreach ($sliceVideoPreview as $arItem) : ?>
			<iframe class="video-preview__gallery-item" width="170" height="90" src="<?= $arItem['DISPLAY_PROPERTIES']['VIDEO_LINK']['VALUE'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<? endforeach; ?>
	</div> -->
</div>

<!-- <div id="YoutubeGalleryMainContainer1" class="video-preview">
	<? foreach ($arResult['ITEMS'] as $arItem) : ?>
		<div id="YoutubeGallerySecondaryContainer1" class="video-preview__main">
			<div id="YoutubeGallerySecondaryContainer1">
				<iframe class="video__gallery-item" width="500" height="270" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="video-preview__gallery">
			<a href="javascript:YoutubeGalleryHotVideoSwitch1('<?= $arItem['DISPLAY_PROPERTIES']['VIDEO_LINK']['VALUE'] ?>','youtube',810)">
				<img src="<?= $arItem['PREVIEW_PICTURES'] ?>">
			</a>
		</div>
	<? endforeach; ?>

</div> -->
<!-- <script>
	$('.video-preview__gallery-item').on('click', function() {
		var src = $(this).prop('src');
		concole.log(src);
		$('.video__gallery-item').attr('src', src);
	});
</script> -->