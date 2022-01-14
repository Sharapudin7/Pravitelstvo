<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<? if ($USER->isAuthorized()) { ?>
	<div class="detail__footer">
		<div class="detail__footer-item detail__footer-item--rating">
			<div class="detail__footer-label">
				<span>Оценить</span>

				<span id="rating-vote-<?= htmlspecialcharsbx($arResult['VOTE_ID']) ?>" class="rating-vote <?= ($arResult['VOTE_AVAILABLE'] == 'N' ? 'rating-vote-disabled' : '') ?>" title="<?= ($arResult['VOTE_AVAILABLE'] == 'N' ? htmlspecialcharsbx($arResult['ALLOW_VOTE']['ERROR_MSG']) : '') ?>">

					<button id="rating-vote-<?= htmlspecialcharsbx($arResult['VOTE_ID']) ?>-plus" class="rating-vote-plus <?= ($arResult['VOTE_BUTTON'] == 'PLUS' ? 'rating-vote-plus-active' : '') ?>" title="<?= $arResult['VOTE_AVAILABLE'] == 'N' ? '' : ($arResult['VOTE_BUTTON'] == 'PLUS' ? GetMessage("RATING_COMPONENT_CANCEL") : GetMessage("RATING_COMPONENT_PLUS")) ?>">
						<svg width="23" height="23">
							<use xlink:href="#icon-thumbs-up"></use>
						</svg>
					</button>
					<span id="rating-vote-<?= htmlspecialcharsbx($arResult['VOTE_ID']) ?>-result" class="rating-vote-result rating-vote-result-<?= ($arResult['TOTAL_VALUE'] < 0 ? 'minus' : 'plus') ?>" title="<?= htmlspecialcharsbx($arResult['VOTE_TITLE']) ?>"> <?= htmlspecialcharsbx($arResult['TOTAL_VALUE']) ?></span>

					<button id="rating-vote-<?= htmlspecialcharsbx($arResult['VOTE_ID']) ?>-minus" class="rating-vote-minus <?= ($arResult['VOTE_BUTTON'] == 'MINUS' ? 'rating-vote-minus-active' : '') ?>" title="<?= $arResult['VOTE_AVAILABLE'] == 'N' ? '' : ($arResult['VOTE_BUTTON'] == 'MINUS' ? GetMessage("RATING_COMPONENT_CANCEL") : GetMessage("RATING_COMPONENT_MINUS")) ?>">
						<svg width="23" height="23">
							<use xlink:href="#icon-thumbs-down"></use>
						</svg>
					</button>

				</span>
				<script type="text/javascript">
					BX.ready(function() {
						<? if ($arResult['AJAX_MODE'] == 'Y') : ?>
							BX.loadCSS('/local/components/bitrix/rating.vote/templates/standart/style.css');
							BX.loadScript('/bitrix/js/main/rating.js', function() {
							<? endif; ?>
							if (!window.Rating && top.Rating)
								Rating = top.Rating;
							Rating.Set(
								'<?= CUtil::JSEscape($arResult['VOTE_ID']) ?>',
								'<?= CUtil::JSEscape($arResult['ENTITY_TYPE_ID']) ?>',
								'<?= intval($arResult['ENTITY_ID']) ?>',
								'<?= CUtil::JSEscape($arResult['VOTE_AVAILABLE']) ?>',
								'<?= $USER->GetId() ?>', {
									'PLUS': '<?= GetMessageJS("RATING_COMPONENT_PLUS") ?>',
									'MINUS': '<?= GetMessageJS("RATING_COMPONENT_MINUS") ?>',
									'CANCEL': '<?= GetMessageJS("RATING_COMPONENT_CANCEL") ?>'
								},
								'standart',
								'<?= CUtil::JSEscape($arResult['PATH_TO_USER_PROFILE']) ?>'
							);
							<? if ($arResult['AJAX_MODE'] == 'Y') : ?>
							});
						<? endif; ?>
					});
				</script>

			</div>
		</div>
	</div>
<? } ?>