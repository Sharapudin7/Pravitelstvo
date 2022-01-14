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
<? CJSCore::Init(array("viewer")); ?>
<?
/*
if ($arResult['PROPERTIES']['FOTO_ARRAY']['VALUE']) { ?>
	<pre><? print_r($arResult['DISPLAY_PROPERTIES']['FOTO_ARRAY']['FILE_VALUE']); ?></pre>
	$photos = [];
	foreach ($arResult['PROPERTIES']['FOTO_ARRAY']['VALUE'] as $key => $photoId) {
	$arPhoto = CFile::ResizeImageGet($photoId, ["width" => 1500, "height" => 1500], BX_RESIZE_IMAGE_EXACT, true, false, false, 100);
	$arPhotoBig = CFile::ResizeImageGet($photoId, ["width" => 300, "height" => 300], BX_RESIZE_IMAGE_PROPORTIONAL, true, false, false, 100);
	$photos[] = ['SRC' => $arPhoto['src'], 'SRC_BIG' => $arPhotoBig['src'], 'ALT' => $arResult['PROPERTIES']['FOTO_ARRAY']['DESCRIPTION'][$key]];
	}

	//И сохраняем в кеш только нужные данные
	$arResult['GALLERY_PHOTOS'] = $photos;
	$this->__component->SetResultCacheKeys(['GALLERY_PHOTOS']);
<? } ?>
*/ ?>
<? $countPhoto = count($arResult['PROPERTIES']['FOTO_ARRAY']['VALUE']); ?>
<div class="list-detail">
	<div class="list__detail">
		<h1 class="list__title-detail"><?= $arResult["NAME"] ?></h1>
		<div class="list__foot">
			<div class="meta">
				<div class="list__date meta__item">
					<span><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
				</div>

				<div class="meta__item">
					<svg width="19" height="11" class="meta__icon">
						<use xlink:href="#icon-eye"></use>
					</svg>
					<span><?= $arResult["SHOW_COUNTER"] ?></span>
				</div>

				<div class="meta__item">
					<svg width="17" height="13" class="meta__icon">
						<use xlink:href="#icon-photo"></use>
					</svg>
					<span><?= $countPhoto ?></span>
				</div>
			</div>
		</div>
		<div class="list__photos">
			<div id="photos-detail" class="photos-detail">
				<? foreach ($arResult['DISPLAY_PROPERTIES']['FOTO_ARRAY']['FILE_VALUE'] as $photo) { ?>
					<div class="photo__item">
						<span class="feed-com-img-wrap photo__item-detail" href="<?= $photo['SRC']; ?>">
							<img onload="this.parentNode.className='feed-com-img-wrap';" src="<?= $photo['SRC']; ?>" alt="<?= $photo['ALT']; ?>" data-bx-viewer="image" data-bx-src="<?= $photo['SRC']; ?>" data-bx-download="<?= $photo['SRC']; ?>" data-bx-width="875" data-bx-height="875">
						</span>
					</div>
				<? } ?>
			</div>
		</div>
	</div>
	<svg class="arrow-right" width="7" height="11">
		<use xlink:href="#icon-chevron-left"></use>
	</svg>
	<a class="detail__link" href="./">Вернуться в фотогалерею</a>

</div>
<script>
	BX.ready(function() {
		var obImageView = BX.viewElementBind(
			'photos-detail', {
				showTitle: true,
				lockScroll: false
			},
			function(node) {
				return BX.type.isElementNode(node) && (node.getAttribute('data-bx-viewer') || node.getAttribute('data-bx-image'));
			}
		);
	});
</script>