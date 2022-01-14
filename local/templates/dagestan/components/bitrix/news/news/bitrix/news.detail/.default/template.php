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

<main class="detail">
	<h1 class="detail__title"><?= $arResult["NAME"] ?></h1>
	<div class="detail__meta meta">
		<div>
			<div class="meta__item">
				<span><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
			</div>
			<div class="meta__item">
				<svg width="19" height="11" class="meta__icon">
					<use xlink:href="#icon-eye"></use>
				</svg>
				<? if ($arResult["SHOW_COUNTER"]) : ?>
					<span><?= $arResult["SHOW_COUNTER"] ?></span>
				<? else : ?>
					<span>100</span>
				<? endif; ?>
			</div>
		</div>
		<!-- <a href="javascript:(print());" class="meta__item js-print">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" color="" class="meta__icon">
				<use xlink:href="#icon-printer"></use>
			</svg>
		</a> -->
	</div>

	<!-- <aside class="detail__aside">
		<div class="detail__image js-slider">
			<img src=" <?= $arResult["DETAIL_PICTURE"]['SRC'] ?>">
		</div>
		<div class="extra">

			<div class="extra__item detail__share">
				<div>
					Поделиться </div>
				<div class="news-detail-share">

					<? $APPLICATION->IncludeComponent('bitrix:share', ' ', [
						'IMAGE' => $arResult['PHOTO']['IMG']['SRC'],
					], $component); ?>

				</div>

			</div>
		</div>
	</aside> -->

	<div class="detail__text">
		<div class="detail__image">
			<img src=" <?= $arResult["DETAIL_PICTURE"]['SRC'] ?>">
		</div>
		<p><?= $arResult["DETAIL_TEXT"] ?></p>
		<div class="detail__bottom">
			<button class="btn detail__back-btn" onclick="history.go(-1)">Вернуться назад</button>
			<div class="detail__share">
				<? $APPLICATION->IncludeComponent('bitrix:share', ' ', [
					'IMAGE' => $arResult['PHOTO']['IMG']['SRC'],
				], $component); ?>
			</div>
		</div>
	</div>

	<div class="detail__document-grid">
		<? if (!empty($arResult['PROPERTIES']['DOCUMENTS']['VALUE'])) : ?>

			<? foreach ($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $arItem) {
				$fileArray = CFile::GetFileArray($arItem);

				$fileName = $fileArray['ORIGINAL_NAME'];
				$fileExt = end(explode('.', $fileName));
				$fileExt = substr($fileExt, 0, 3);
				$fileSizeString = CFile::FormatSize($fileArray['FILE_SIZE']);
			?>
				<div class="detail__document">
					<svg width="45" height="51" class="meta__icon">
						<use xlink:href="#icon-file-<?= $fileExt ?>"></use>
					</svg>
					<div class="detail__document-description">
						<a class="document__description" href="<?= $fileArray['SRC'] ?>"><?= $fileName ?></a>
						<p class="document__size"><?= $fileSizeString ?></p>
					</div>
				</div>


			<? } ?>

		<? else : ?>
			<span></span>
		<? endif; ?>

	</div>

</main>
<? /*$APPLICATION->IncludeComponent(
	"bitrix:rating.vote",
	"standart",
	array(
		"ENTITY_TYPE_ID" => "IBLOCK_ELEMENT",
		"ENTITY_ID" => $arResult['ID'],
		"OWNER_ID" => "1",
		"USER_HAS_VOTED" => "Y",
		"PATH_TO_USER_PROFILE" => "/people/user/#USER_ID#/",
		"USER_VOTE",
		"TOTAL_VOTES",
		"TOTAL_POSITIVE_VOTES",
		"TOTAL_NEGATIVE_VOTES",
		"TOTAL_VALUE",

	),
	null,
	array("HIDE_ICONS" => "Y")
); */ ?>
<pre><? $arOrder = array("SORT" => "ASC");
		$arFilter = array('ID' => $arResult['ID']);
		$arSelectFields = array('ID', 'RATING_TOTAL_VALUE', 'RATING_TOTAL_POSITIVE_VOTES', 'RATING_USER_VOTE_VALUE', 'RATING_TOTAL_NEGATIVE_VOTES');
		$dbResult = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelectFields);
		$voteResult = $dbResult->Fetch();
		//print_r($voteResult)
		?>
		</pre>