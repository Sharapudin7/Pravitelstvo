<?/*<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="left-menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>
*/?>


<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
  die();
}
?>
<?php if ($arResult): ?>
  <div class="section-menu-wrapper section-menu-wrapper--no-slide js-section-menu-wrapper">
    <div class="container">
      <nav class="section-menu js-section-menu">
        <ul class="section-menu__items js-section-menu-items">
          <?php foreach($arResult as $item): ?>
            <li class="section-menu__item <?php if ($item['SELECTED']): ?>section-menu__item--selected<?php endif; ?>">
              <a
                class="section-menu__link"
                href="<?= $item['LINK']; ?>"
                <?php if ($item['IS_EXTERNAL_LINK']): ?>target="_blank"<?php endif; ?>
              >
                <?= $item['TEXT']; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <button
        type="button"
        class="section-menu__nav section-menu__nav--prev js-section-menu-prev"
      >
        <svg width="7" height="11">
          <use xlink:href="#icon-chevron-left"></use>
        </svg>
      </button>
      <button
        type="button"
        class="section-menu__nav section-menu__nav--next js-section-menu-next"
      >
        <svg width="7" height="11">
          <use xlink:href="#icon-chevron-right"></use>
        </svg>
      </button>
      <button
        type="button"
        class="section-menu__expand js-section-menu-expand"
      >
        <svg width="11" height="7">
          <use xlink:href="#icon-chevron-down"></use>
        </svg>
      </button>
      <button
        type="button"
        class="section-menu__collapse js-section-menu-collapse"
      >
        <svg width="11" height="7">
          <use xlink:href="#icon-chevron-up"></use>
        </svg>
      </button>
    </div>
  </div>
<?php endif; ?>
