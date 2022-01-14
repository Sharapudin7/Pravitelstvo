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


<div class="free-block">
	<div class="container">
		<div class="free-block__body">
			<a href="https://www.government-nnov.ru/?id=254474">Меры по борьбе с распространением коронавирусной инфекции</a>
		</div>
	</div>
</div>



<section class="media">
	<h3 class="media__title container">Фотогалерея</h3>
	<div class="container">
		<div class="photo__wrapper">
			<div class="media__items owl-carousel foto-slider">
				<? foreach ($arResult['ITEMS'] as $arItem) { ?>
					<?
					$link = $arItem['DETAIL_PAGE_URL'] . $arItem['ID'];
					?>
					<div class="media__item">
						<div class="media__item-image">
							<img alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
						</div>

						<div class="media__item-detail">
							<a class="item-detail__link" href="<?= $link ?>"><?= $arItem["PREVIEW_TEXT"] ?></a>
							<div class="item-detail__date">
								<span><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
							</div>
							<!-- <div class="meta__item">
								<svg width="19" height="11" class="meta__icon">
									<use xlink:href="#icon-eye"></use>
								</svg>
								<span><?= $arItem['SHOW_COUNTER'] ?></span>
							</div> -->
						</div>
					</div>
				<? } ?>
			</div>
		</div>
	</div>
	<div class="media__footer container">
		<div class="photo__footer">
			<div class="photo__nav-buttons">
				<button type="button" class="photo__nav-button photo__nav-button--prev prev-foto">
					<svg width="7" height="11">
						<use xlink:href="#icon-chevron-left"></use>
					</svg>
				</button>
				<button type="button" class="photo__nav-button photo__nav-button--next next-foto">
					<svg width="7" height="11">
						<use xlink:href="#icon-chevron-right"></use>
					</svg>
				</button>
			</div>
		</div>

		<a class="media__footer-more" href="/press-tsentr/fotogalereya">
			<span>Смотреть фотоархив</span>
			<svg width="7" height="11">
				<use xlink:href="#icon-chevron-right"></use>
			</svg>
		</a>
	</div>
</section>

<script>
	$(document).ready(function() {

		var owl = $('.foto-slider').owlCarousel({
			items: 3,
			margin: 20,
			nav: false,
			dots: false,
			loop: true
		});
		owl.owlCarousel();
		$('.next-foto').click(function() {
			owl.trigger('next.owl.carousel');
		});
		$('.prev-foto').click(function() {
			owl.trigger('prev.owl.carousel', [300]);
		});

	});
</script>