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

foreach ($dateList as $item){?>

    <span style="font-weight: bold"><?=$item?></span><br>

<?php } ?>