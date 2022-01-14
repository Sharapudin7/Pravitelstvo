<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
  die();
}

$menu = [];

foreach ($arResult as $item) {
  $item['IS_EXTERNAL_LINK'] = (boolean) preg_match('/^https?\:\/\//', $item['LINK']);
  if ($item['DEPTH_LEVEL'] == 1) {
    $menu[] = $item;
  } elseif ($item['DEPTH_LEVEL'] == 2) {
    if (!$menu[count($menu) - 1]['CHILDREN']) {
      $menu[count($menu) - 1]['CHILDREN'] = [];
    }
    if ($item['PARAMS']['CHILDREN']) {
      foreach ($item['PARAMS']['CHILDREN'] as $key => $child) {
        $item['PARAMS']['CHILDREN'][$key]['IS_EXTERNAL_LINK'] = (boolean) preg_match('/^https?\:\/\//', $child['LINK']);
      }
    }
    $menu[count($menu) - 1]['CHILDREN'][] = $item;
  }
}
$arResult = $menu;