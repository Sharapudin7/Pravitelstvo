<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"banners", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "BANNER__LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "banners"
	),
	false
);?>
<? $APPLICATION->IncludeComponent(
	"bitrix:main.map", 
	"footer", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COL_NUM" => "5",
		"LEVEL" => "1",
		"SET_TITLE" => "Y",
		"SHOW_DESCRIPTION" => "N",
		"COMPONENT_TEMPLATE" => "footer"
	),
	false
); ?>

<script src="/local/templates/dagestan/js/slickSlider/slick/slick.min.js"></script>
<script src="/local/templates/dagestan/js/main.js"></script>
<script src="/local/templates/dagestan/js/zabuto_calendar.min.js"></script>


<?php

CModule::IncludeModule('iblock');

$dates = \CIBlockElement::GetList(
    array('id' => 'asc'),
    array('IBLOCK_ID' =>17),
    false,
    false,
    array( 'IBLOCK_ID', "ID", "NAME")
);

$dateList=[];
while ($ob = $dates->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arFields["PROPERTIES"] = $ob->GetProperties();
    $dateFormat = strtotime($arFields["PROPERTIES"]['DATA_EVENTS']["VALUE"]);
    $dateFormat = date('Y-m-d', $dateFormat);
    $dateList[]=['title'=>'Количество событий: '.count($arFields["PROPERTIES"]['EVENTS']["VALUE"]),'date'=>$dateFormat,"badge"=>false];
}
?>

<script>
    var eventData = <?php echo json_encode($dateList) ?>;
    $(document).ready(function () {
        $(".calendar").zabuto_calendar({
            cell_border: true,
            today: false,
            language: "ru",
            data: eventData,
            show_days: true,
            weekstartson: 1,
            nav_icon: {
                prev: '<i class="ui-icon ui-icon-circle-triangle-w"></i>',
                next: '<i class="ui-icon ui-icon-circle-triangle-e"></i>'
            },
            action: function() {
                if (this.className.indexOf('event') > -1) {
                    loadDay(this.id);
                    $('.calendarEventsModalTitle').html("");
                    $('.calendarEventsModalBody').html("");
                }
            }
        });

        function loadDay(id) {
            id = id.substring(id.length - 10, id.length);
            $.ajax({
                url: '/local/ajax/events_date.php',
                cache: false,
                data: { id: id },
                type: "get",
                success: function (data) {
                    $('div.desc-events .title').html("События на " + id);
                    $('div.desc-events .body').html(data);
                    $('div#loading').hide();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        };
    });
</script>
</body>

</html>