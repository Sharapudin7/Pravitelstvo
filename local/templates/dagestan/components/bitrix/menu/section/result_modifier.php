<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
  die();
}

foreach ($arResult as &$item) {
  $item['IS_EXTERNAL_LINK'] = (boolean) preg_match('/^https?\:\/\//', $item['LINK']);
}
