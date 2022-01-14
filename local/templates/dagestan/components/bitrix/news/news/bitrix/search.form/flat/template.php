<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);?>

<div class="title-wrapper">
    <h1 class="title-wrapper__title">Новости</h1>
</div>

<div class="js-filter-news">
<form class="jzVwP" action="<?=$arResult["FORM_ACTION"]?>">
	<div class="_rD97">
		<div class="_PhN9">
	
			<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
						"bitrix:search.suggest.input",
						"",
						array(
							"NAME" => "q",
							"VALUE" => "",
							"INPUT_SIZE" => 15,
							"DROPDOWN_SIZE" => 10,
						),
						$component, array("HIDE_ICONS" => "Y")
			);?>
			<?else:?>
	
			<input type="text" name="q" value="" size="15" class="input input--big" placeholder="Найти материалы по заголовку и тексту" maxlength="50" />
			<?endif;?>
			<input name="s" class="button button--primary button--big" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" />
		</div>
		 <!-- <button type="button" class="button button--secondary button--big"><svg width="11" height="7" class="button__icon"><use xlink:href="#icon-chevron-down"></use></svg><span>Расширенный поиск</span></button> -->
	</div>
</form>
</div>

 