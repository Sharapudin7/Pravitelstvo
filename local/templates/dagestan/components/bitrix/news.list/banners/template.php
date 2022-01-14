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

<section class="banners">
	<div class="container">
		<div class="banners__items-wrapper">
			<div class="banners__items owl-carousel banners-slider owl-theme">
				<? foreach ($arResult['ITEMS'] as $arItem) { ?>
					<div class="banners__item">
						<a class="banners__link" href="<?= $arItem["PROPERTIES"]["BANNER__LINK"]["VALUE"] ?>" target="_blank">
							<img alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="banners__image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
							<div class="banners__item-title-block">
								<strong><?= $arItem["NAME"]?></strong>
								<span><?= $arItem["PREVIEW_TEXT"]?></span>
							</div>
						</a>
					</div>
				<? } ?>
			</div>
			<!-- <div class="banners__footer">
				<div class="banners__nav-buttons">
					<button type="button" class="banners__nav-button banners__nav-button--prev prev-banners">
						<svg width="7" height="11">
							<use xlink:href="#icon-chevron-left"></use>
						</svg>
					</button>
					<button type="button" class="banners__nav-button banners__nav-button--next next-banners">
						<svg width="7" height="11">
							<use xlink:href="#icon-chevron-right"></use>
						</svg>
					</button>
				</div>
			</div> -->
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {

		var owl = $('.banners-slider').owlCarousel({
			items: 4,
			margin: 0,
			nav: false,
			dots: true,
			loop: true,
			responsive: {
				0: {
					items: 4
				}
			}
		});
		owl.owlCarousel();
		$('.next-banners').click(function() {
			owl.trigger('next.owl.carousel');
		});
		$('.prev-banners').click(function() {
			owl.trigger('prev.owl.carousel', [300]);
		});

	});
</script>