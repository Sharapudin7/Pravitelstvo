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
<section class="news__events">
    <div class="news__block">
        <div class="new__news">
            <div class="new__news-date">
                <h3>20.12.2021</h3>
            </div>
            <div class="new__news-title">
                <a href="">
                    Сергей Меликов: Образование сегодня в республике для нас стоит на
                </a>
            </div>
        </div>
    </div>
    <div class="news__block">
        <div class="new__news">
            <div class="new__news-date">
                <h3>20.12.2021</h3>
            </div>
            <div class="new__news-title">
                <a href="">
                    В Дагестане, как и по всей стране, сегодня, 1 декабря, стартовала декада приемов граждан,
                    приуроченная...
                </a>
            </div>
        </div>

    </div>
    <div class="news__block">
        <div class="new__news">
            <div class="new__news-date">
                <h3>20.12.2021</h3>
            </div>
            <div class="new__news-title">
                <a href="">
                    Сегодня, 30 ноября, Глава Дагестана Сергей Меликов принял участие в торжественной церемонии,
                    посвященной...
                </a>
            </div>
        </div>

    </div>
    <div class="news__block">
        <div class="new__news">
            <div class="new__news-date">
                <h3>20.12.2021</h3>
            </div>
            <div class="new__news-title">
                <a href="">
                    Глава Дагестана Сергей Меликов принял участие в Стратегической сессии по защите моделей
                    экономическо...
                </a>
            </div>
        </div>

    </div>
    <div class="news__block">
        <div class="new__news">
            <div class="new__news-date">
                <h3>20.12.2021</h3>
            </div>
            <div class="new__news-title">
                <a href="">
                    В Дагестане, как и по всей стране, сегодня, 1 декабря, стартовала декада приемов...
                </a>
            </div>
        </div>

    </div>

    <!-- <div class="news__footer">
					<a class="news__more" href="<?= $arResult['LIST_PAGE_URL'] ?>">
						<span>Все новости</span>
						<svg width="7" height="11">
							<use xlink:href="#icon-chevron-right"></use>
						</svg>
					</a>
				</div> -->

</section>
<?
$sliceNewsSlider = array_slice($arResult['ITEMS'], 0, 1, true);
$sliceNewsColumn = array_slice($arResult['ITEMS'], 0);
?>



<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
<?= $arResult["NAV_STRING"] ?>
<? endif; ?>






<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
<?= $arResult["NAV_STRING"] ?>
<? endif; ?>



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