<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use OpenRegion\Core\Support\File;

/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

$arParams['CACHE_TIME'] = 0;
$arParams['CACHE_TYPE'] = 'N';

$defaultComponentPage = 'template';


if ($arParams['SEF_MODE'] || $arParams['URL_TEMPLATES']) {
  $arDefaultUrlTemplates404 = $arParams['URL_TEMPLATES'] ?? $arParams['SEF_URL_TEMPLATES'];

  $arVariables = array();
  $arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates($arDefaultUrlTemplates404, $arParams['SEF_URL_TEMPLATES']);
  $arVariableAliases = CComponentEngine::MakeComponentVariableAliases($arDefaultVariableAliases404, $arParams['VARIABLE_ALIASES']);

  $engine = new CComponentEngine($this);
  $componentPage = $engine->guessComponentPath(
    $arParams['SEF_FOLDER'],
    $arUrlTemplates,
    $arVariables
  );

  if (!$componentPage && $sefFolder != $curPage) {
    CHTTP::SetStatus('404 Not Found');
    @define('ERROR_404', 'Y');
  }

  if (!$componentPage) {
    $componentPage = is_array($arUrlTemplates)
      ? (array_search('', $arUrlTemplates, true)  ?: $defaultComponentPage)
      : $defaultComponentPage;
  }

  CComponentEngine::InitComponentVariables($componentPage, $arComponentVariables, $arVariableAliases, $arVariables);
  $arResult = array(
    'FOLDER' => $arParams['SEF_FOLDER'],
    'URL_TEMPLATES' => $arUrlTemplates,
    'VARIABLES' => $arVariables,
    'ALIASES' => $arVariableAliases
  );
} else {
  $componentPage = $defaultComponentPage;
}

$this->IncludeComponentTemplate($componentPage);
