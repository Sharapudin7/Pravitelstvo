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

<div class="search-title">
	<h3 class="block-title">Новости</h3>
	<h3 class="block-title block__title-news">Лента событий</h3>
</div>
<div class="news-events-block__body news-events-block__body--no-events">
<?
$sliceNewsSlider = array_slice($arResult['ITEMS'], 0, 1, true);
$sliceNewsColumn = array_slice($arResult['ITEMS'], 0);
?>
    <? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
    <?= $arResult["NAV_STRING"] ?>
    <? endif; ?>
            <section class="news-slider">
                <div class="news-slider__wrapper">
                    <div class="news-slider__items main-slider">
                        <div class="news__items">
                            <? foreach ($sliceNewsColumn as $arItem) { ?>
                            <div class="news__item">
                                <img class="news__photo" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                    src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
                                <!-- <div class="news__meta">
								<div class="news__date" datetime="2021-10-05">
									<?= $arItem['DISPLAY_ACTIVE_FROM'] ?>
								</div>
								<div>
									<svg width="19" height="11" class="news__meta-icon">
										<use xlink:href="#icon-eye"></use>
									</svg>
									<span><?= $arItem['SHOW_COUNTER'] ?></span>
								</div>
							</div> -->
                                <div class="news-slider__detail">
                                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"
                                        class="news-slider__link"><?= $arItem["NAME"] ?></a>
                                    <div class="news-slider__meta">
                                        <div datetime="2021-10-05"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></div>
                                    </div>
                                </div>
                            </div>
                            <? } ?>
                        </div>

                        <!-- <div class="news-slider__nav-buttons">
						<button type="button" class="news-slider__nav-button news-slider__nav-button--prev prev-main">
							<svg width="7" height="11">
								<use xlink:href="#icon-chevron-left"></use>
							</svg>
						</button>
						<button type="button" class="news-slider__nav-button news-slider__nav-button--next next-main">
							<svg width="7" height="11">
								<use xlink:href="#icon-chevron-right"></use>
							</svg>
						</button>
					</div>
					<div class="news-slider__pages">
						<button type="button" class="news-slider__page news-slider__page--current" data-key="0"></button>
						<button type="button" class="news-slider__page" data-key="1"></button>
						<button type="button" class="news-slider__page" data-key="2"></button>
					</div> -->
                    </div>
</div>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
<?= $arResult["NAV_STRING"] ?>
<? endif; ?>
</section>


<script>
// $(document).ready(function() {

// 	var owl = $('.main-slider').owlCarousel({
// 		items: 1,
// 		margin: 10,
// 		nav: false,
// 		dots: false,
// 		dotsContainer: '#carousel-custom-dots'
// 	});
// 	owl.owlCarousel();
// 	$('.next-main').click(function() {
// 		owl.trigger('next.owl.carousel');
// 	});
// 	$('.prev-main').click(function() {
// 		owl.trigger('prev.owl.carousel', [300]);
// 	});

// });
</script>