<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
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
    $dateList[]=['title'=>'Количество событий:'.count($arFields["PROPERTIES"]['EVENTS']["VALUE"]),'date'=>$dateFormat,"badge"=>'false'];
}

?>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>