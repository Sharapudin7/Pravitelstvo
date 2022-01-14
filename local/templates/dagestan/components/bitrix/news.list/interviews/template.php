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

<section class="interviews">
	<h3 class="block-title">Выступления и Интервью</h3>
	<div class="interviews__body">
		<? foreach ($arResult['ITEMS'] as $arItem) { ?>
			<div class="interviews__item">
				<img class="interviews__photo" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
				<div class="interviews__detail">
					<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="interviews__link"><?= $arItem["NAME"] ?></a>
					<div class="interviews__meta">
						<div datetime="2021-10-05"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></div>
						<div>
							<svg width="19" height="11" class="interviews__meta-icon">
								<use xlink:href="#icon-eye"></use>
							</svg>
							<span><?= $arItem['SHOW_COUNTER'] ?></span>
						</div>
					</div>
				</div>
			</div>
		<? } ?>
	</div>
</section>
