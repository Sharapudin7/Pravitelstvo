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

<form  action="<?=$arResult["FORM_ACTION"]?>" class="top-panel__search-form">
    <?if($arParams["USE_SUGGEST"] === "Y"):?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:search.suggest.input",
			"",
			array(
			"NAME" => "q",
			"VALUE" => "",
			"INPUT_SIZE" => 15,
			"DROPDOWN_SIZE" => 10,
			),
			$component, array("HIDE_ICONS" => "Y"));
		?>
	<?else:?>
		<input class="top-panel__search-input" id="search-input" name="search" type="text" placeholder="Введите запрос">
	<?endif;?>
                    
	<button name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" class="top-panel__search-button" title="Поиск">
		<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M6.33333 11.6667C9.27885 11.6667 11.6667 9.27885 11.6667 6.33333C11.6667 3.38781 9.27885 1 6.33333 1C3.38781 1 1 3.38781 1 6.33333C1 9.27885 3.38781 11.6667 6.33333 11.6667Z" stroke="#123179" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M13 13L10.1 10.1" stroke="#123179" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
	</button>
</form>