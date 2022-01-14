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
<?if (count($arResult['ITEMS'])) {?>
<div class="actual-themes-block">
    <div class="actual-themes-block__body">
        <section class="actual-themes">
            <div class="main-title-block">
                <h3 class="block-title"><?=$arParams["PAGER_TITLE"]?:GetMessage('PREVIEW_BLOCK_TITLE')?></h3>
                <!-- <a class="main-title-more" href="<?=$arResult['LIST_PAGE_URL']?>">
						<span><?=GetMessage('ALL_LINK_TEXT')?></span>
					</a> -->
            </div>
            <div class="actual-themes__items">
                <? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
                <?= $arResult["NAV_STRING"] ?><br />
                <? endif; ?>
                <? foreach (array_slice($arResult['ITEMS'], 0, 1) as $arItem) { ?>
                <?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
                <div class="actual__block">
                    <div class="actual__news">
                        <div class="actual__news-date">
                            <h3>20.12.2021</h3>
                        </div>
                        <div class="actual__news-title">
                            <a href="">
                                Открыта аккредитация журналистов при Администрации Главы и Правительства РД на 2022 год
                            </a>
                        </div>
                    </div>
                    
                </div>
				<div class="actual__block">
                    <div class="actual__news">
                        <div class="actual__news-date">
                            <h3>20.12.2021</h3>
                        </div>
                        <div class="actual__news-title">
                            <a href="">
                                Открыта аккредитация журналистов при Администрации Главы и Правительства РД на 2022 год
                            </a>
                        </div>
                    </div>
                    
                </div>
				<div class="actual__block">
                    <div class="actual__news">
                        <div class="actual__news-date">
                            <h3>20.12.2021</h3>
                        </div>
                        <div class="actual__news-title">
                            <a href="">
                                Открыта аккредитация журналистов при Администрации Главы и Правительства РД на 2022 год
                            </a>
                        </div>
                    </div>
                </div>
                <? } ?>
                <? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
                <br /><?= $arResult["NAV_STRING"] ?>
                <? endif; ?>
            </div>
        </section>
    </div>
</div>
<?}?>