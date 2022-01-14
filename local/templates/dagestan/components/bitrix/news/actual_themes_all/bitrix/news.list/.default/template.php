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

<section class="list">
	<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<? $firstNewID = $arResult['ITEMS'][0]['ID']; ?>
	<? $arItem = $arResult['ITEMS'][0]; ?>

	<div class="list__item  list__item--main">
		<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="list__photo">
			<img alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="list__photo-image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
		</a>
		<div class="list__detail">
			<div class="list__head">
				<div class="meta">
					<div class="list__date meta__item" datetime="2021-10-01">
						<span><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
					</div>
					<div class="meta__item">
						<svg width="19" height="11" class="meta__icon">
							<use xlink:href="#icon-eye"></use>
						</svg>
						<span><?= $arItem['SHOW_COUNTER'] ?></span>
					</div>
					<!-- <div class="meta__item">
							<svg width="18" height="18" class="meta__icon">
								<use xlink:href="#icon-thumbs-up"></use>
							</svg>
							<span>1</span>
						</div> -->
				</div>
			</div>
			<h3 class="list__title">
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
			</h3>
		</div>
	</div>

	<? foreach ($arResult["ITEMS"] as $arItem) : ?>

		<? if ($firstNewID != $arItem['ID']) : ?>
			<div class="list__item">
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="list__photo">
					<img alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="list__photo-image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
				</a>
				<div class="list__detail">
					<div class="list__head">
						<div class="meta">
							<div class="list__date meta__item" datetime="2021-10-01">
								<span><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
							</div>
							<div class="meta__item">
								<svg width="19" height="11" class="meta__icon">
									<use xlink:href="#icon-eye"></use>
								</svg>
								<span><?= $arItem['SHOW_COUNTER'] ?></span>
							</div>
							<!-- <div class="meta__item">
								<svg width="18" height="18" class="meta__icon">
									<use xlink:href="#icon-thumbs-up"></use>
								</svg>
								<span>1</span>
							</div> -->
						</div>
					</div>
					<h3 class="list__title">
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
					</h3>
				</div>
			</div>
		<? endif; ?>
	<? endforeach; ?>
	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<br /><?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</section>