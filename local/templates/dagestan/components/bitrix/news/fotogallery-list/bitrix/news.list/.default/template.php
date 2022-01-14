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
$arrayPhotoGallerySize = 5;
?>


<section class="list">
	<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>
	<? foreach ($arResult["ITEMS"] as $arItem) { ?>
		<? $countPhoto = count($arItem['DISPLAY_PROPERTIES']['FOTO_ARRAY']['FILE_VALUE']); ?>
		<div class="list__item list__item--photogallery">
			<div class="list__detail">
				<h3 class="list__title">
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
				</h3>

				<div class="list__foot">
					<div class="meta">
						<div class="list__date meta__item">
							<span><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
						</div>

						<div class="meta__item">
							<svg width="19" height="11" class="meta__icon">
								<use xlink:href="#icon-eye"></use>
							</svg>
							<span><?= $arItem["SHOW_COUNTER"] ?></span>
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
					<div class="photos">
						<?
						$slicePhotoGallery = array_slice($arItem['DISPLAY_PROPERTIES']['FOTO_ARRAY']['FILE_VALUE'], 0, $arrayPhotoGallerySize); ?>
						<? foreach ($slicePhotoGallery as $arPhoto) { ?>
							<div class="photos__item">
								<img src="<?= $arPhoto['SRC'] ?>">
							</div>
						<? } ?>
					</div>
				</div>
			</div>
		</div>
	<? } ?>
	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<br /><?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</section>