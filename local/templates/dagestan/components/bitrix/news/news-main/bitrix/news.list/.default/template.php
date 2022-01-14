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

<?
$sliceNewsSlider = array_slice($arResult['ITEMS'], 0, 3, true);
$sliceNewsColumn = array_slice($arResult['ITEMS'], 3);
?>
<pre><? //print_r($arResult['ITEMS'])
		?></pre>

<section class="news-events-block">
	<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
	<div class="container">
		<div class="news-events-block__body news-events-block__body--no-events">
			<section class="news-slider">
				<h2 class="news-slider__title">Новости</h2>
				<div class="news-slider__wrapper">
					<div class="news-slider__items owl-carousel main-slider">
						<? foreach ($sliceNewsSlider as $arItem) { ?>
							<?
							$link = $arItem['DETAIL_PAGE_URL'] . $arItem['ID'];
							?>
							<div class="news-slider__item">
								<img class="news-slider__photo" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
								<div class="news-slider__detail">
									<a href="<?= $link ?>" class="news-slider__link"><?= $arItem["PREVIEW_TEXT"] ?></a>
									<div class="news-slider__meta">
										<div datetime="2021-10-05"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></div>
										<div>
											<svg width="19" height="11" class="news-slider__meta-icon">
												<use xlink:href="#icon-eye"></use>
											</svg>
											<span><?= $arItem['SHOW_COUNTER'] ?></span>
										</div>
									</div>
								</div>
							</div>
						<? } ?>
					</div>
					<div class="news-slider__nav-buttons">
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
					</div>
				</div>
			</section>
			<section class="news">
				<div class="news__items">
					<? foreach ($sliceNewsColumn as $arItem) { ?>
						<?
						$link = $arItem['DETAIL_PAGE_URL'] . $arItem['ID'];
						?>
						<div class="news__item">
							<div class="news__meta">
								<div class="news__date" datetime="2021-10-05">
									<?= $arItem['DISPLAY_ACTIVE_FROM'] ?>
								</div>
								<div>
									<svg width="19" height="11" class="news__meta-icon">
										<use xlink:href="#icon-eye"></use>
									</svg>
									<span><?= $arItem['SHOW_COUNTER'] ?></span>
								</div>
							</div>
							<h3 class="news__name">
								<a href="<?= $link ?>"><?= $arItem["PREVIEW_TEXT"] ?></a>
							</h3>
						</div>
					<? } ?>
				</div>
				<div class="news__footer">
					<a class="news__more" href="press-tsentr/news/">
						<span>Все новости</span>
						<svg width="7" height="11">
							<use xlink:href="#icon-chevron-right"></use>
						</svg>
					</a>
				</div>
			</section>
		</div>
	</div>
	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</section>
<script>
	$(document).ready(function() {
		var owl = $('.main-slider').owlCarousel({
			items: 1,
			margin: 10,
			nav: false,
			dots: false,
			dotsContainer: '#carousel-custom-dots'
		});
		owl.owlCarousel();
		$('.next-main').click(function() {
			owl.trigger('next.owl.carousel');
		});
		$('.prev-main').click(function() {
			owl.trigger('prev.owl.carousel', [300]);
		});

	});
</script>