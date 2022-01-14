<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>
	<nav class="top-menu">
		<ul id="horizontal-multilevel-menu" class="top-menu__root-items container">

			<?
			$previousLevel = 0;
			foreach ($arResult as $arItem) : ?>

				<? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) : ?>
					<?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
				<? endif ?>

				<? if ($arItem["IS_PARENT"]) : ?>

					<? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
						<li class="top-menu__root-item">
							<a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]) : ?>root-item-selected<? else : ?>top-menu__root-item-link<? endif ?>">
								<svg class="top-menu__root-item-icon" width="11" height="7">
									<use xlink:href="#icon-chevron-down"></use>
								</svg>
								<?= $arItem["TEXT"] ?>
							</a>
							<ul class="top-menu__items">
							<? else : ?>
								<li<? if ($arItem["SELECTED"]) : ?> class="top-menu__item item-selected" <? endif ?>>
									<a href="<?= $arItem["LINK"] ?>" class="parent">
										<?= $arItem["TEXT"] ?>
										<svg class="top-menu__root-item-icon top-menu__root-item-icon_right" width="11" height="7">
											<use xlink:href="#icon-chevron-right"></use>
										</svg>

									</a>
									<ul class="top-menu__items">
									<? endif ?>

								<? else : ?>

									<? if ($arItem["PERMISSION"] > "D") : ?>

										<? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
											<li class="top-menu__root-item">
												<a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]) : ?>root-item-selected<? else : ?>root-item<? endif ?>">

													<?= $arItem["TEXT"] ?>
												</a>
											</li>
										<? else : ?>
											<li<? if ($arItem["SELECTED"]) : ?> class="top-menu__root-item item-selected" <? endif ?>><a href="<?= $arItem["LINK"] ?>">

													<?= $arItem["TEXT"] ?>
												</a>
						</li>
					<? endif ?>

				<? else : ?>

					<? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
						<li class="top-menu__root-item">
							<a href="" class="<? if ($arItem["SELECTED"]) : ?>root-item-selected<? else : ?>root-item<? endif ?>" title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>">

								<?= $arItem["TEXT"] ?>
							</a>
						</li>
					<? else : ?>
						<li class="top-menu__root-item">
							<a href="" class="denied" title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>">

								<?= $arItem["TEXT"] ?>
							</a>
						</li>
					<? endif ?>

				<? endif ?>

			<? endif ?>

			<? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

		<? endforeach ?>

		<? if ($previousLevel > 1) : //close last item tags
		?>
			<?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
		<? endif ?>

		</ul>
		<div class="menu-clear-left"></div>
	</nav>
<? endif ?>