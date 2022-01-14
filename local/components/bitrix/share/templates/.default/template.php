<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
  die();
}


$image = '';
if ($arParams['IMAGE']) {
  if (preg_match('/^https?\:\/\/.+/', $arParams['IMAGE'])) {
    $image = $arParams['IMAGE'];
  } else {
    $image = HttpRequest::getSchemeAndHttpHost() . $arParams['IMAGE'];
  }
}
?>
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,lj,pocket,telegram" <?php if ($arParams['IMAGE']) : ?> data-image="<?= $image; ?>" <?php endif; ?>></div>