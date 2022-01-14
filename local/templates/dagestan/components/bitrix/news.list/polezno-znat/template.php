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
<? $sliceNewsSlider = array_slice($arResult['ITEMS'], 3); ?>
<div class="activity-block activity-block--news">

	<div class="container">

		<div class="activity-block__body">
			<section class="activity">
				<div class="activity__title-block">
					<h2 class="activity__title"><?= $arParams["PAGER_TITLE"] ?: GetMessage('POLEZNO_BLOCK_TITLE') ?></h2>
					<a class="activity__title-more" href="<?=$arResult['LIST_PAGE_URL']?>">
						<span><?=GetMessage('ALL_LINK_TEXT')?></span>
					</a>
				</div>
				<div class="activity__items">

					<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
						<?= $arResult["NAV_STRING"] ?><br />
					<? endif; ?>
					<? foreach ($sliceNewsSlider as $arItem) : ?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<a class="activity__item activity__item--news" href="<?= $arItem["DETAIL_PAGE_URL"] ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
							<span class="activity__photo">
								<? if ($arItem['PREVIEW_PICTURE']['SRC']) { ?>
									<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="" class="activity__img">
								<? } else { ?>
									<svg class="activity__icon" role="presentation" viewBox="0 0 30 30" style="color: var(--primary-color);">
										<use href="#briefcase"></use>
									</svg>
								<? } ?>
							</span>
							<div class="activity__description">
								<span><?= $arItem["PREVIEW_TEXT"] ?></span>
								<div class="news-slider__meta">
									<div datetime="2021-10-05"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></div>
								</div>
							</div>
						</a>

					<? endforeach; ?>

					<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
						<br /><?= $arResult["NAV_STRING"] ?>
					<? endif; ?>

				</div>
			</section>
		</div>
	</div>
</div>