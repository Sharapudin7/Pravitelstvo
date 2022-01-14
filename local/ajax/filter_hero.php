<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
session_start();

if($_GET['section_id']){
    $section_id = intval($_GET['section_id']);

    if(isset($_SESSION['filter'])){

        if($_SESSION['filter']==$section_id){
            unset($_SESSION['filter']);
        }else{
            unset($_SESSION['filter']);
            $_SESSION['filter'] = $section_id;
        }
    }else{
        $_SESSION['filter'] = $section_id;
    }
}

echo json_encode(['status'=>true]);
