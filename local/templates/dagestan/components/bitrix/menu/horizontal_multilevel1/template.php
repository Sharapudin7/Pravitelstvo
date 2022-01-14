<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="nav-menu top-menu">
  <ul class="top-menu__root-items container">
    <?php foreach ($arResult as $arItem) : ?>
    <li class="top-menu__root-item <?php if ($arItem['SELECTED']): ?>top-menu__root-item--selected<?php endif; ?>">
        <a
          class="top-menu__root-item-link"
          href="<?= $arItem['LINK']; ?>"
          <?php if ($arItem['IS_EXTERNAL_LINK']): ?>target="_blank"<?php endif; ?>
        >
          <span class="top-menu__root-item-label">
            <?= $arItem['TEXT']; ?>
          </span>
          <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.5 0.25L4 3.75L7.5 0.25" fill="white"/>
          </svg>
        </a>
        <?php if ($arItem['CHILDREN']): ?>
          <ul class="top-menu__items">
            <?php if ($isStickyMenu): ?>
              <li class="top-menu__item top-menu__item--title">
                <h2><?= $arItem['TEXT']; ?></h2>
              </li>
            <?php endif; ?>
            <?php foreach($arItem['CHILDREN'] as $item): ?>
              <li class="top-menu__item">
                <a
                  class="top-menu__item-link"
                  href="<?= $item['LINK']; ?>"
                  <?php if ($item['IS_EXTERNAL_LINK']): ?>target="_blank"<?php endif; ?>
                >
                  <?= $item['TEXT']; ?>
                </a>
                <?php if (!$isStickyMenu && count($item['PARAMS']['CHILDREN']) > 0): ?>
                  <ul class="top-menu__child-items">
                    <?php foreach ($item['PARAMS']['CHILDREN'] as $childItem): ?>
                      <li class="top-menu__child-item">
                        <a
                          class="top-menu__child-item-link"
                          href="<?= $childItem['LINK']; ?>"
                          <?php if ($childItem['IS_EXTERNAL_LINK']): ?>target="_blank"<?php endif; ?>
                        >
                          <?= $childItem['TEXT']; ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>