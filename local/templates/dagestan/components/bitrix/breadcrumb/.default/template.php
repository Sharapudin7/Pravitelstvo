<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
  die();
}

global $APPLICATION;

if ($APPLICATION->GetCurPage(false) === '/' || preg_match('/^\/auth\//', $APPLICATION->GetCurPage(false))) {
  return;
}

return (
  '<nav class="breadcrumb">' .
  '<ul class="breadcrumb__items">' .
  array_reduce($arResult, static function ($acc, $item) {
    return ($acc .
      '<li class="breadcrumb__item">' .
      ($item['LINK'] ? '<a class="breadcrumb__link" href="' . $item['LINK'] . '">' . htmlspecialchars($item['TITLE'], ENT_QUOTES | ENT_HTML5) . '</a>' : htmlspecialchars($item['TITLE'], ENT_QUOTES | ENT_HTML5)) .
      '</li>'
    );
  }, '') .
  '</ul>' .
  '</nav>'
);
