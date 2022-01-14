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

function preview_text($value, $limit = 300)
{
    $value = stripslashes($value);
    $value = htmlspecialchars_decode($value, ENT_QUOTES);
    $value = str_ireplace(array('<br>', '<br />', '<br/>'), ' ', $value);
    $value = strip_tags($value);
    $value = trim($value);

    if (mb_strlen($value) < $limit) {
        return $value;
    } else {
        $value   = mb_substr($value, 0, $limit);
        $length  = mb_strripos($value, ' ');
        $end     = mb_substr($value, $length - 1, 1);

        if (empty($length)) {
            return $value;
        } elseif (in_array($end, array('.', '!', '?'))) {
            return mb_substr($value, 0, $length);
        } elseif (in_array($end, array(',', ':', ';', '«', '»', '…', '(', ')', '—', '–', '-'))) {
            return trim(mb_substr($value, 0, $length - 1)) . '...';
        } else {
            return trim(mb_substr($value, 0, $length)) . '...';
        }

        return trim();
    }
}
?>

<section class="list">
	<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<? $firstNewID = $arResult['ITEMS'][0]['ID']; ?>
	<? $arItem = $arResult['ITEMS'][0]; ?>

    <h3 class="block-title">Новости</h3>

	<div class="list__item  list__item--main">
		<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="list__photo">
			<img alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="list__photo-image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
		</a>
		<div class="list__detail">
			<h3 class="list__title">
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
			</h3>
			<p class="list__detail-anonce"><?=preview_text($arItem["DETAIL_TEXT"],800)?></p>
            <div class="list__head">
                <div class="meta">
                    <div class="list__date meta__item" datetime="2021-10-01">
                        <span><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
                    </div>
                    <div class="meta__item">
                        <svg width="19" height="11" class="meta__icon">
                            <use xlink:href="#icon-eye"></use>
                        </svg>
                        <span><?= $arItem['SHOW_COUNTER'] ?></span>
                    </div>
                </div>
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="btn btn-default">Подробнее</a>
            </div>
		</div>
	</div>

    <h3 class="block-title">Последние события</h3>

    <div class="list__items news-lists">
	<? unset($arResult["ITEMS"][0]); foreach ($arResult["ITEMS"] as $arItem) : ?>
			<div class="list__item news">
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="list__photo">
					<img alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="list__photo-image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
				</a>
				<div class="list__detail">
					<h3 class="list__title">
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
					</h3>
					<div class="preview-text"><?= $arItem["PREVIEW_TEXT"] ?></div>
                    <div class="list__head">
                        <div class="meta">
                            <div class="list__date meta__item" datetime="2021-10-01">
                                <span><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
                            </div>
                            <div class="meta__item">
                                <svg width="19" height="11" class="meta__icon">
                                    <use xlink:href="#icon-eye"></use>
                                </svg>
                                <span><?= $arItem['SHOW_COUNTER'] ?></span>
                            </div>
                        </div>
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="btn btn-default">Подробнее</a>
                    </div>
				</div>
			</div>
	<? endforeach; ?>
    </div>
    <div id="pag">
<?= $arResult["NAV_STRING"] ?>
    </div>
</section>

<script>
    $(document).ready(function(){
        $(document).on('click', '.load-more-items', function(){
            var targetContainer = $('.news-lists'),
                url =  $('.load-more-items').attr('data-url');

            if (url !== undefined) {
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'html',
                    success: function(data){
                        $('.load-more-items').remove();
                        var elements = $(data).find('.news'),
                            pagination = $(data).find('.load-more-items');
                        targetContainer.append(elements);
                        $('#pag').append(pagination);

                    }
                });
            }
        });
    });
</script>