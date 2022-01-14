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
<div class="hero-list">
    <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
        <?= $arResult["NAV_STRING"] ?><br/>
    <? endif; ?>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="hero-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="hero-item__image">
                <img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]['ID'])?>" alt="<?= $arItem['NAME'] ?>" >
            </div>
            <div class="hero-item__info">
                <div class="hero-item__head">
                    <div class="hero-item__title-block">
                        <h3 class="hero-item__title"><?= mb_strtoupper($arItem['NAME'] )?></h3>
                        <div class="hero-item__meta">
                            <span class="rank"><?= mb_strtoupper($arItem['PROPERTIES']['RANK']['VALUE'])?></span>
                            <?php if ($arItem['PROPERTIES']['DECREE_DATE']['VALUE']) { ?>
                                <span class="date">Дата указа: <?= $arItem['PROPERTIES']['DECREE_DATE']['VALUE'] ?></span>
                            <?php } ?>
                            <?php if ($arItem['PROPERTIES']['DATE_AWARD']['VALUE']) { ?>
                                <span class="date"> Дата награждения: <?= $arItem['PROPERTIES']['DATE_AWARD']['VALUE'] ?></span>
                            <?php } ?>
                        </div>
                        <span class="hero-item__title-preview"><?= $arItem['PREVIEW_TEXT'] ?></span>
                    </div>
                    <div class="hero-item__medal">
                        <img src="<?=CFile::GetPath($arItem['FIELDS']["DETAIL_PICTURE"]['ID'])?>" alt="<?= $arItem['PROPERTIES']['RANK']['VALUE'] ?>">
                    </div>
                </div>
                <div class="hero-item__preview"><?= $arItem['DETAIL_TEXT'] ?></div>
            </div>
        </div>
    <? endforeach; ?>
  <div id="pag">
        <br/><?= $arResult["NAV_STRING"] ?>
  </div>
</div>

<script>
    $(document).ready(function(){
        $(document).on('click', '.load-more-items', function(){
            var targetContainer = $('.hero-list'),
                url =  $('.load-more-items').attr('data-url');
            if (url !== undefined) {
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'html',
                    success: function(data){
                        $('.load-more-items').remove();
                        var elements = $(data).find('.hero-item'),
                            pagination = $(data).find('.load-more-items');
                        targetContainer.append(elements);
                        $('#pag').append(pagination);

                    }
                });
            }
        });
    });
</script>