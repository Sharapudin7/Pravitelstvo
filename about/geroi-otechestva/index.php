<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Герои Отечества");
$APPLICATION->SetPageProperty("description", "Герои Отечества");
$APPLICATION->SetPageProperty("tags", "Герои Отечества");
$APPLICATION->SetTitle("Герои Отечества");
CModule::IncludeModule("iblock");
session_start();
global $arrFilter;
if (isset($_SESSION['filter'])) {
    $arrFilter = array("SECTION_ID" => [$_SESSION['filter']]);
    $id = $_SESSION['filter'];
} else {
    $arrFilter = array("SECTION_ID" => []);
}
//unset($_SESSION['filter']);
?>
    <style>
        .actives{
            background-color: #2B4399;
            color: white;
        }
    </style>

<?php
$res = CIBlockSection::GetList(
    array('ID' => 'asc'),
    array('IBLOCK_ID' => '14', 'ACTIVE' => 'Y')
); ?>
<div class="hero-title">
	<h3 class="block-title">Герои отечества</h3>
	<div class="hero-filter">
		<span class="hero-filter__title">Фильтр:</span>
		<? while ($row = $res->GetNext()) {
			if($row['ID']==$id){
				$active='actives';
			}else{
				$active='';
			}
			echo '<a class="hero-filter__item '.$active.'" data-id="' . $row['ID'] . '">' . $row['NAME'] . '</a>';
		}
		?>
	</div>
</div>
<? $APPLICATION->IncludeComponent(
	"bitrix:news", 
	"geroi", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "DETAIL_TEXT",
			2 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"FILTER_PROPERTY_CODE" => array(
			0 => "DATE_AWARD",
			1 => "DECREE_DATE",
			2 => "RANK",
			3 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "DATE_AWARD",
			1 => "DECREE_DATE",
			2 => "RANK",
			3 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "more_hero",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "geroi",
		"SEF_FOLDER" => "/geroi-otechestva/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "/geroi-otechestva/",
			"section" => "/geroi-otechestva/#SECTION_CODE#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
		)
	),
	false
); ?><br>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.hero-filter__item', function () {
                var section_id = $(this).attr('data-id');

                if (section_id !== undefined) {
                    $.ajax({
                        url: '/local/ajax/filter_hero.php',
                        type: 'GET',
                        dataType: "json",
                        data: {section_id: section_id},
                        success: function (data) {
                            if(data.status==true){
                                location.reload();
                            }
                        }
                    });
                }
            });
        });
    </script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>