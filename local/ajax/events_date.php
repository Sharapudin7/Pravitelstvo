<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');



$dates = \CIBlockElement::GetList(
    array('id' => 'asc'),
    array('IBLOCK_ID' =>17, '=PROPERTY_DATA_EVENTS'=>trim($_GET['id'])),
    false,
    false,
    array( 'IBLOCK_ID', "ID", "NAME")
);

$dateList = [];

while ($ob = $dates->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arFields["PROPERTIES"] = $ob->GetProperties();
    $dateList=$arFields["PROPERTIES"]['EVENTS']["VALUE"];
}
?>


<?
foreach ($dateList as $item){?>

    <div class="body__title"> <?=$item?></div>
    <!-- <span style="font-weight: bold"></span><br> -->
<?php } ?>
<script>
    $('.desc-events').addClass('show')
    $('.close').click(() => {
        $('.desc-events').removeClass('show')
    })
</script>