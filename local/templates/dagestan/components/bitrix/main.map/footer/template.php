<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!is_array($arResult["arMap"]) || count($arResult["arMap"]) < 1)
	return;

$arRootNode = array();
foreach ($arResult["arMap"] as $index => $arItem) {
	if ($arItem["LEVEL"] == 0)
		$arRootNode[] = $index;
}

$allNum = count($arRootNode);
$colNum = ceil($allNum / $arParams["COL_NUM"]);

?>

<footer id="footer" class="footer">
	<div class="container">
		<nav class="sitemap">
			<ul class="map-level-0 sitemap__root-items">

				<?
				$previousLevel = -1;
				$counter = 0;
				$column = 1;
				foreach ($arResult["arMap"] as $index => $arItem) :
					$arItem["FULL_PATH"] = htmlspecialcharsbx($arItem["FULL_PATH"], ENT_COMPAT, false);
					$arItem["NAME"] = htmlspecialcharsbx($arItem["NAME"], ENT_COMPAT, false);
					$arItem["DESCRIPTION"] = htmlspecialcharsbx($arItem["DESCRIPTION"], ENT_COMPAT, false);
				?>

					<? if ($arItem["LEVEL"] < $previousLevel) : ?>
						<?= str_repeat("</ul></li>", ($previousLevel - $arItem["LEVEL"])); ?>
					<? endif ?>


					<? if ($counter >= $colNum && $arItem["LEVEL"] == 0) :
						$allNum = $allNum - $counter;
						$colNum = ceil(($allNum) / ($arParams["COL_NUM"] > 1 ? ($arParams["COL_NUM"] - $column) : 1));
						$counter = 0;
						$column++;
					?>
			</ul>


			<ul class="map-level-0 sitemap__root-items">
			<? endif ?>

				<? if (array_key_exists($index + 1, $arResult["arMap"]) && $arItem["LEVEL"] < $arResult["arMap"][$index + 1]["LEVEL"]) : ?>

					<li class="sitemap__root-item"><a href="<?= $arItem["FULL_PATH"] ?>"><?= $arItem["NAME"] ?></a><? if ($arParams["SHOW_DESCRIPTION"] == "Y" && $arItem["DESCRIPTION"] <> '') { ?><div><?= $arItem["DESCRIPTION"] ?></div><? } ?>
						<ul class="sitemap__child-items map-level-<?= $arItem["LEVEL"] + 1 ?>">

						<? else : ?>
							<li>
								<a href="<?= $arItem["FULL_PATH"] ?>"><?= $arItem["NAME"] ?></a>
								<? if ($arParams["SHOW_DESCRIPTION"] == "Y" && $arItem["DESCRIPTION"] <> '') { ?><div><?= $arItem["DESCRIPTION"] ?></div><? } ?>
							</li>

						<? endif ?>


						<?
						$previousLevel = $arItem["LEVEL"];
						if ($arItem["LEVEL"] == 0)
							$counter++;
						?>

					<? endforeach ?>

					<? if ($previousLevel > 1) : //close last item tags
					?>
						<?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
				<? endif ?>

			</ul>

			</ul>

			<div class="footer__contacts">
				<span class="footer__contacts-title">Контакты</span>
				<div class="footer-contacts">
					<a href="tel:88002223344" class="footer-contacts__item">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.1668 14.51V17.26C19.1679 17.5153 19.1156 17.768 19.0133 18.0019C18.911 18.2358 18.761 18.4458 18.5729 18.6184C18.3848 18.791 18.1627 18.9224 17.9209 19.0042C17.679 19.0859 17.4228 19.1163 17.1685 19.0933C14.3478 18.7868 11.6383 17.823 9.25767 16.2792C7.04285 14.8718 5.16506 12.994 3.75767 10.7792C2.20849 8.38778 1.2444 5.66509 0.943506 2.83167C0.920599 2.57819 0.950725 2.3227 1.03196 2.0815C1.1132 1.84029 1.24378 1.61864 1.41537 1.43066C1.58697 1.24268 1.79583 1.09249 2.02865 0.989653C2.26147 0.886814 2.51315 0.833581 2.76767 0.833341H5.51767C5.96254 0.828962 6.39381 0.986496 6.73112 1.27658C7.06843 1.56666 7.28874 1.9695 7.351 2.41001C7.46708 3.29007 7.68233 4.15417 7.99267 4.98584C8.116 5.31394 8.14269 5.67051 8.06959 6.01332C7.99648 6.35612 7.82663 6.67078 7.58017 6.92001L6.41601 8.08418C7.72093 10.3791 9.62109 12.2793 11.916 13.5842L13.0802 12.42C13.3294 12.1736 13.6441 12.0037 13.9869 11.9306C14.3297 11.8575 14.6862 11.8842 15.0143 12.0075C15.846 12.3178 16.7101 12.5331 17.5902 12.6492C18.0355 12.712 18.4421 12.9363 18.7328 13.2794C19.0235 13.6225 19.178 14.0605 19.1668 14.51Z" fill="white"/>
						</svg>
						<div class="footer-contacts__item-text">
							<strong>8 (800) 222 33 44</strong>
							<span>Горячая линия</span>
						</div>
					</a>
					<a href="mailto:letters@glavard.ru" class="footer-contacts__item">
						<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.3333 0.666748H2.66665C1.97964 0.666748 1.37774 1.04972 1.06389 1.61272C1.16679 1.63944 1.26675 1.68465 1.35895 1.7492L9.99995 7.79789L18.6409 1.7492C18.7332 1.68464 18.8331 1.63943 18.9361 1.6127C18.6222 1.04971 18.0203 0.666748 17.3333 0.666748Z" fill="white"/>
							<path d="M0.833313 3.61912V13.5001C0.833313 14.5084 1.65831 15.3334 2.66665 15.3334H17.3333C18.3417 15.3334 19.1666 14.5084 19.1666 13.5001V3.61907L10.5256 9.66779C10.21 9.88873 9.7899 9.88873 9.47427 9.66779L0.833313 3.61912Z" fill="white"/>
						</svg>
						<div class="footer-contacts__item-text">
							<strong>letters@glavard.ru</strong>
							<span>Для обращений</span>
						</div>
					</a>
					<div class="footer-contacts__social">
						<a href="https://www.instagram.com/melikov_s.a/" class="footer__insta" target="_blank">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.250153 6.1C0.250153 2.86913 2.86929 0.25 6.10015 0.25H13.9002C17.131 0.25 19.7502 2.86913 19.7502 6.1V13.9C19.7502 17.1309 17.131 19.75 13.9002 19.75H6.10015C2.86929 19.75 0.250153 17.1309 0.250153 13.9V6.1ZM10.0024 5.23112C7.36856 5.23112 5.23161 7.36792 5.23161 10.0019C5.23161 12.6358 7.36856 14.7726 10.0024 14.7726C12.6363 14.7726 14.7731 12.6358 14.7731 10.0019C14.7731 7.36792 12.6363 5.23112 10.0024 5.23112ZM10.0024 13.0965C8.29368 13.0965 6.90769 11.7107 6.90769 10.0019C6.90769 8.29305 8.29368 6.9072 10.0024 6.9072C11.7112 6.9072 13.097 8.29305 13.097 10.0019C13.097 11.7107 11.7112 13.0965 10.0024 13.0965ZM14.9612 6.15615C15.5764 6.15615 16.0751 5.65744 16.0751 5.04239C16.0751 4.4272 15.5764 3.92863 14.9612 3.92863C14.3461 3.92863 13.8474 4.4272 13.8474 5.04239C13.8474 5.65744 14.3461 6.15615 14.9612 6.15615Z" fill="white"/>
							</svg>
						</a>
						<a href="#" class="footer__fb" target="_blank">
							<svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.5969 0H8.43411C7.03607 0 5.69529 0.510717 4.70673 1.4198C3.71816 2.32888 3.16279 3.56186 3.16279 4.8475V7.756H0V11.634H3.16279V19.39H7.37985V11.634H10.5426L11.5969 7.756H7.37985V4.8475C7.37985 4.59037 7.49092 4.34378 7.68864 4.16196C7.88635 3.98014 8.1545 3.878 8.43411 3.878H11.5969V0Z" fill="white"/>
							</svg>
						</a>
						<a href="#" class="footer__ok" target="_blank">
							<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.27118 14.7917C3.64321 14.6219 2.17536 14.221 0.918648 13.2381C0.762714 13.1158 0.601721 12.9979 0.459422 12.8614C-0.090637 12.3331 -0.146061 11.728 0.289192 11.1045C0.661543 10.5709 1.2866 10.4282 1.93629 10.7346C2.06209 10.794 2.18196 10.8681 2.29677 10.9477C4.63886 12.557 7.8563 12.6014 10.2072 11.0201C10.4401 10.8415 10.6891 10.6959 10.9776 10.6215C11.5387 10.4775 12.0619 10.6836 12.363 11.1745C12.707 11.7351 12.7026 12.2823 12.2788 12.7175C11.6286 13.3848 10.8468 13.8676 9.97802 14.2045C9.15656 14.523 8.25681 14.6833 7.36629 14.7898C7.50067 14.936 7.56401 15.0079 7.64802 15.0924C8.85723 16.3073 10.0717 17.5172 11.277 18.7358C11.6876 19.1511 11.7734 19.6659 11.5473 20.1489C11.3001 20.6768 10.7467 21.024 10.2041 20.9869C9.86036 20.9631 9.59226 20.792 9.35407 20.5521C8.44155 19.6338 7.51188 18.7325 6.61784 17.7969C6.35766 17.5249 6.23252 17.5763 6.0029 17.8125C5.08489 18.7576 4.15192 19.6882 3.21346 20.6134C2.79206 21.0289 2.29061 21.1037 1.80191 20.8664C1.28242 20.6145 0.951859 20.0843 0.977371 19.5514C0.994966 19.1909 1.17223 18.9155 1.41966 18.6685C2.61633 17.4736 3.8097 16.2756 5.00352 15.0787C5.08247 14.9991 5.15615 14.9147 5.27118 14.7917Z" fill="white"/>
								<path d="M6.26307 10.6293C3.35882 10.6194 0.977356 8.21176 0.994291 5.30289C1.01101 2.36191 3.39401 -0.00811673 6.32685 2.08931e-05C9.26563 0.00793858 11.6244 2.41206 11.6097 5.38361C11.5947 8.28654 9.19679 10.6394 6.26307 10.6293ZM8.90252 5.30993C8.89746 3.86561 7.7472 2.71579 6.30574 2.71447C4.85218 2.71293 3.69158 3.88364 3.7028 5.34116C3.71358 6.77998 4.87374 7.92166 6.31915 7.91638C7.76017 7.91133 8.90736 6.75402 8.90252 5.30993Z" fill="white"/>
							</svg>
						</a>
						<a href="#" class="footer__youtube" target="_blank">
							<svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22.7747 3.37619C22.5154 2.41228 21.7554 1.65244 20.7916 1.39288C19.0309 0.911133 11.988 0.911133 11.988 0.911133C11.988 0.911133 4.94536 0.911133 3.18466 1.37462C2.23943 1.6339 1.46091 2.41241 1.20163 3.37619C0.738281 5.13675 0.738281 8.78792 0.738281 8.78792C0.738281 8.78792 0.738281 12.4575 1.20163 14.1996C1.46118 15.1634 2.22089 15.9233 3.1848 16.1828C4.9639 16.6647 11.9883 16.6647 11.9883 16.6647C11.9883 16.6647 19.0309 16.6647 20.7916 16.2012C21.7555 15.9418 22.5154 15.182 22.7749 14.2182C23.2381 12.4575 23.2381 8.80646 23.2381 8.80646C23.2381 8.80646 23.2567 5.13675 22.7747 3.37619ZM9.7457 12.161V5.41484L15.6022 8.78792L9.7457 12.161Z" fill="white"/>
							</svg>
						</a>
					</div>
				</div>
			</div>

		</nav>
		<div class="footer__bottom">
			<div class="footer__copyright">Официальный сайт главы Республики Дагестан Copyright © 2021</div>
			<a href="/sitemap/" class="footer__sitemap">Карта сайта</a>
		</div>
	</div>
	<span class="footer__copyright container"></span>
</footer>



<!-- <ul class="footer__links">
	<?php foreach ($arResult as $arItem) : ?>
		<li class="top-menu__root-item <?php if ($arItem['SELECTED']) : ?>top-menu__root-item--selected<?php endif; ?>">
			<a class="footer__link" href="<?= $arItem['LINK']; ?>" <?php if ($arItem['IS_EXTERNAL_LINK']) : ?>target="_blank" <?php endif; ?>>
				<?= $arItem['TEXT']; ?>
			</a>

		</li>
	<?php endforeach; ?>
</ul>
</div> -->