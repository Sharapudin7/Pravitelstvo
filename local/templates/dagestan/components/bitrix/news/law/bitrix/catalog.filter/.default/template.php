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
<form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>" method="get" class="filter">
	<? foreach ($arResult["ITEMS"] as $arItem) :
		if (array_key_exists("HIDDEN", $arItem)) :
			echo $arItem["INPUT"];
		endif;
	endforeach; ?>
	<div class="data-table" cellspacing="0" cellpadding="2">
		<!-- <div>
			<div>
				<p colspan="2" align="center"><?= GetMessage("IBLOCK_FILTER_TITLE") ?></p>
			</div>
		</div> -->
		<div>
			<? foreach ($arResult["ITEMS"] as $arItem) : ?>
				<? if (!array_key_exists("HIDDEN", $arItem)) : ?>
					<div>
						<h3 class="filter__title" valign="top"><?= $arItem["NAME"] ?>:</h3>
						<p class="filter__select" valign="top"><?= $arItem["INPUT"] ?></p>
					</div>
				<? endif ?>
			<? endforeach; ?>
		</div>
		<div>
			<div>
				<div class="filter__button-container" colspan="2">
					<input class="filter__button filter__button_submit" type="submit" name="set_filter" value="<?= GetMessage("IBLOCK_SET_FILTER") ?>" />
					<input type="hidden" name="set_filter" value="Y" />&nbsp;&nbsp;
					<input class="filter__button filter__button_reset" type="submit" name="del_filter" value="<?= GetMessage("IBLOCK_DEL_FILTER") ?>" />
				</div>
			</div>
		</div>
	</div>
</form>