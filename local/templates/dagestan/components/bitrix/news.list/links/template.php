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
<section class="partners">
	<div class="container">
		<ul class="partners__items">
			<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
				<?= $arResult["NAV_STRING"] ?><br />
			<? endif; ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<? foreach ($arResult['ITEMS'] as $arItem) : ?>
				<li class="partners__item">
					<p class="partners__item-title"><?= $arItem["NAME"] ?></p>
					<a class="partners__item-link" href="<?= $arItem["PROPERTIES"]["LINK_TO_PORTAL"]["VALUE"] ?>"><?= $arItem["PROPERTIES"]["LINK_NAME"]["VALUE"] ?></a>
				</li>
			<? endforeach; ?>
			<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
				<br /><?= $arResult["NAV_STRING"] ?>
			<? endif; ?>
		</ul>
	</div>
</section>