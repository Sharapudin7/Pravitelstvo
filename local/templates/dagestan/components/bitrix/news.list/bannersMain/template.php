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

<div class="container">
	<div class="container__column-2">
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<a target="_blank" class="banners__link" href="<?= $arItem["DISPLAY_PROPERTIES"]['LINK']['VALUE'] ?>"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" /></a>
		<? endforeach; ?>
	</div>
</div>