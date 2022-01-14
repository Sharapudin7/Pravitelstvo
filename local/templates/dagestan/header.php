<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$currentPage = $APPLICATION->GetCurPage(false);
?>
<!DOCTYPE html>
<html>

<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/fonts/golos/golos.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/local/templates/dagestan/css/flexboxgrid.css">
    <link rel="stylesheet" href="/local/templates/dagestan/js/slickSlider/slick/slick.css">
    <link rel="stylesheet" href="/local/templates/dagestan/js/slickSlider/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/local/templates/dagestan/css/zabuto_calendar.min.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <?
    CJSCore::Init(array('jquery2'));
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/template_styles.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/OwlCarousel/owl.carousel.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/OwlCarousel/owl.theme.default.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/slickSlider/slick/slick.css');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/OwlCarousel/owl.carousel.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/slickSlider/slick/slick.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/OwlCarousel/owl.carousel.min.js');
    ?>

</head>

<body>
    <svg style="display: none;">
        <!-- иконка слабовидящих -->
        <symbol id="icon-glasses" viewBox="0 0 34 14" fill="none">
            <circle cx="8.1665" cy="7" r="6" stroke="currentColor" stroke-width="2" />
            <circle cx="25.6665" cy="7" r="6" stroke="currentColor" stroke-width="2" />
            <path d="M14 4H20V6H14V4Z" fill="currentColor" />
            <path d="M0 4H3V6H0L0 4Z" fill="currentColor" />
            <path d="M31 4H34V6H31V4Z" fill="currentColor" />
        </symbol>
        <!-- иконка поиска -->
        <symbol id="icon-search" viewBox="0 0 16 16" fill="none">
            <circle cx="6.5" cy="6.5" r="5.5" stroke="currentColor" stroke-width="2" />
            <path d="M10.4141 9L15.4153 14.0012L14.0011 15.4155L8.99985 10.4142L10.4141 9Z" fill="currentColor" />
        </symbol>
        <!-- иконка стрелка вниз -->
        <symbol id="icon-chevron-down" viewBox="0 0 11 7" fill="none">
            <path d="M1 1L5.5 5L10 1" stroke="currentColor" stroke-width="2" />
        </symbol>
        <!-- иконка стрелка вверх -->
        <symbol id="icon-chevron-up" viewBox="0 0 11 7" fill="none">
            <path d="M1 5L5.5 1L10 5" stroke="currentColor" stroke-width="2" />
        </symbol>
        <!-- иконка стрелка влево -->
        <symbol id="icon-chevron-left" viewBox="0 0 7 11" fill="none">
            <path d="M5 1L1 5.5L5 10" stroke="currentColor" stroke-width="2" />
        </symbol>
        <!-- иконка стрелка вправо -->
        <symbol id="icon-chevron-right" viewBox="0 0 7 11" fill="none">
            <path d="M1 1L5 5.5L1 10" stroke="currentColor" stroke-width="2" />
        </symbol>
        <!-- иконка наверх -->
        <symbol id="icon-arrow-up" viewBox="0 0 26 26" fill="none">
            <polyline stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="19 11 13 5 7 11" />
            <path d="M13 5 L13 21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </symbol>
        <!-- иконка вниз -->
        <symbol id="icon-arrow-down" viewBox="0 0 26 26" fill="none">
            <polyline stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="19 15 13 21 7 15" />
            <path d="M13 5 L13 21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </symbol>
        <!-- иконка глаза -->
        <symbol id="icon-eye" viewBox="0 0 19 11" fill="none">
            <path d="M9.6507 1.00098C5.42293 1.00098 2.60442 3.61587 1.72363 5.26738C2.46906 6.43648 5.24677 9.44542 9.6507 9.44542C14.0546 9.44542 16.7253 6.63061 17.5778 5.26738C16.697 3.61587 13.8785 1.00098 9.6507 1.00098Z" stroke="currentColor" stroke-width="1.5" />
            <ellipse cx="9.67288" cy="5.21183" rx="3.09134" ry="2.96379" fill="currentColor" />
        </symbol>
        <!-- иконка почтового конверта -->
        <symbol id="icon-envelope" viewBox="0 0 18 14" fill="none">
            <rect stroke="currentColor" stroke-width="2" x="1" y="1" width="16" height="12" />
            <polyline stroke="currentColor" stroke-width="2" points="0.993319992 1.08315247 8.9971131 7.38470133 17.0009062 1.08315247" />
        </symbol>
        <!-- иконка сайтмапа -->
        <symbol id="icon-sitemap" viewBox="0 0 18 16" fill="none">
            <rect x="1" y="3" width="8" height="4" stroke="currentColor" stroke-width="2" />
            <rect x="10" y="4" width="6" height="2" fill="currentColor" />
            <rect x="1" y="11" width="8" height="4" stroke="currentColor" stroke-width="2" />
            <rect x="10" y="12" width="6" height="2" fill="currentColor" />
            <rect x="16" y="14" width="14" height="2" transform="rotate(-90 16 14)" fill="currentColor" />
        </symbol>
        <!-- иконка 1 -->
        <symbol id="stack-overflow" viewBox="0 0 384 512" fill="currentColor">
            <path d="M290.7 311L95 269.7 86.8 309l195.7 41zm51-87L188.2 95.7l-25.5 30.8 153.5 128.3zm-31.2 39.7L129.2 179l-16.7 36.5L293.7 300zM262 32l-32 24 119.3 160.3 32-24zm20.5 328h-200v39.7h200zm39.7 80H42.7V320h-40v160h359.5V320h-40z"></path>
        </symbol>
        <!-- иконка рукопожатие -->
        <symbol id="handshake" viewBox="0 0 640 512" fill="currentColor">
            <path d="M519.2 127.9l-47.6-47.6A56.252 56.252 0 0 0 432 64H205.2c-14.8 0-29.1 5.9-39.6 16.3L118 127.9H0v255.7h64c17.6 0 31.8-14.2 31.9-31.7h9.1l84.6 76.4c30.9 25.1 73.8 25.7 105.6 3.8 12.5 10.8 26 15.9 41.1 15.9 18.2 0 35.3-7.4 48.8-24 22.1 8.7 48.2 2.6 64-16.8l26.2-32.3c5.6-6.9 9.1-14.8 10.9-23h57.9c.1 17.5 14.4 31.7 31.9 31.7h64V127.9H519.2zM48 351.6c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16c0 8.9-7.2 16-16 16zm390-6.9l-26.1 32.2c-2.8 3.4-7.8 4-11.3 1.2l-23.9-19.4-30 36.5c-6 7.3-15 4.8-18 2.4l-36.8-31.5-15.6 19.2c-13.9 17.1-39.2 19.7-55.3 6.6l-97.3-88H96V175.8h41.9l61.7-61.6c2-.8 3.7-1.5 5.7-2.3H262l-38.7 35.5c-29.4 26.9-31.1 72.3-4.4 101.3 14.8 16.2 61.2 41.2 101.5 4.4l8.2-7.5 108.2 87.8c3.4 2.8 3.9 7.9 1.2 11.3zm106-40.8h-69.2c-2.3-2.8-4.9-5.4-7.7-7.7l-102.7-83.4 12.5-11.4c6.5-6 7-16.1 1-22.6L367 167.1c-6-6.5-16.1-6.9-22.6-1l-55.2 50.6c-9.5 8.7-25.7 9.4-34.6 0-9.3-9.9-8.5-25.1 1.2-33.9l65.6-60.1c7.4-6.8 17-10.5 27-10.5l83.7-.2c2.1 0 4.1.8 5.5 2.3l61.7 61.6H544v128zm48 47.7c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16c0 8.9-7.2 16-16 16z"></path>
        </symbol>
        <!-- иконка документа -->
        <symbol id="file-alt" viewBox="0 0 384 512" fill="currentColor">
            <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path>
        </symbol>
        <!-- иконка портфеля -->
        <symbol id="briefcase" viewBox="0 0 512 512" fill="currentColor">
            <path d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path>
        </symbol>
        <!-- иконка фотографии -->
        <symbol id="icon-photo" viewBox="0 0 17 13" fill="none">
            <path d="M1 11.826v-11h15v11m-15 0h15m-15 0l4-4.5 2.5 1.5 3.5-4.5 5 7.5" stroke="currentColor" stroke-width="1.5" />
            <path d="M7 4.326a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" fill="currentColor" />
        </symbol>
        <symbol id="icon-printer" viewBox="0 0 26 26" fill="none">
            <path d="M8,17 L4,17 L4,11 C4,9.8954305 4.8954305,9 6,9 L20,9 C21.1045695,9 22,9.8954305 22,11 L22,17 L18,17" stroke="currentColor" stroke-width="2" />
            <polyline stroke="currentColor" stroke-width="2" points="8 9 8 5 18 5 18 9"></polyline>
            <rect stroke="currentColor" stroke-width="2" x="8" y="15" width="10" height="6"></rect>
            <circle fill="currentColor" cx="19" cy="12" r="1"></circle>
        </symbol>
        <symbol id="icon-file" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path d="M9.643 0C7.875 0 6.429 1.434 6.429 3.188v44.624C6.429 49.566 7.875 51 9.643 51h32.143C43.554 51 45 49.566 45 47.812V12.75L32.143 0h-22.5z" fill="#E2E5E7" />
            <path d="M35.357 12.75H45L32.143 0v9.563c0 1.753 1.446 3.187 3.214 3.187z" fill="#B0B7BD" />
            <path fill="#CAD1D8" d="M45 22.313l-9.643-9.563H45z" />
        </symbol>

        <symbol id="icon-file-rtf" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path d="M10.1667 0C8.425 0 7 1.43437 7 3.1875V47.8125C7 49.5656 8.425 51 10.1667 51H41.8333C43.575 51 45 49.5656 45 47.8125V12.75L32.3333 0H10.1667Z" fill="#E2E5E7" />
            <path d="M35.25 13H45L32 0V9.75C32 11.5375 33.4625 13 35.25 13Z" fill="#B0B7BD" />
            <path d="M45 22L35 13H45V22Z" fill="#CAD1D8" />
            <path d="M39 41.4167C39 42.2875 38.2688 43 37.375 43H1.625C0.73125 43 0 42.2875 0 41.4167V25.5833C0 24.7125 0.73125 24 1.625 24H37.375C38.2688 24 39 24.7125 39 25.5833V41.4167Z" fill="#50BEE8" />
            <path d="M8.5473 37.4212C8.5473 38.5288 6.85393 38.5671 6.85393 37.4467V30.2095C6.85393 29.7632 7.19929 29.4317 7.61786 29.4317H11.003C14.2338 29.4317 14.8959 33.7651 12.1982 34.8473L13.89 36.9112C14.5521 37.8929 13.2295 38.8348 12.464 37.8674L10.5431 35.115H8.5473V37.4212ZM8.5473 33.6488H11.003C12.6566 33.6488 12.76 30.9729 11.003 30.9729H8.5473V33.6488Z" fill="white" />
            <path d="M37.4 43H7V45H37.4C38.28 45 39 44.1 39 43V41C39 42.1 38.28 43 37.4 43Z" fill="#CAD1D8" />
            <path d="M18.7792 30.6477H16.7544C15.7485 30.6477 15.7485 29 16.7544 29H22.2282C23.2573 29 23.2573 30.6477 22.2282 30.6477H20.3076V37.1501C20.3076 38.2696 18.7792 38.2969 18.7792 37.1501C18.7792 37.1501 18.7792 30.6477 18.7792 30.6477Z" fill="white" />
            <path d="M27.5968 30.6917V32.7591H30.7051C31.1444 32.7591 31.5836 33.2275 31.5836 33.683C31.5836 34.1124 31.1444 34.4621 30.7051 34.4621H27.5968V37.1932C27.5968 37.6487 27.2918 38 26.8648 38C26.3279 38 26 37.6487 26 37.1932V29.8068C26 29.3383 26.3294 29 26.8648 29H31.1459C31.6828 29 32 29.3383 32 29.8068C32 30.2232 31.6828 30.69 31.1459 30.69H27.5968V30.6917Z" fill="white" />
        </symbol>

        <symbol id="icon-file-tif" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path d="M10.1667 0C8.425 0 7 1.43437 7 3.1875V47.8125C7 49.5656 8.425 51 10.1667 51H41.8333C43.575 51 45 49.5656 45 47.8125V12.75L32.3333 0H10.1667Z" fill="#E2E5E7" />
            <path d="M35.25 13H45L32 0V9.75C32 11.5375 33.4625 13 35.25 13Z" fill="#B0B7BD" />
            <path d="M45 22L35 13H45V22Z" fill="#CAD1D8" />
            <path d="M39 41.4167C39 42.2875 38.2688 43 37.375 43H1.625C0.73125 43 0 42.2875 0 41.4167V25.5833C0 24.7125 0.73125 24 1.625 24H37.375C38.2688 24 39 24.7125 39 25.5833V41.4167Z" fill="#A066AA" />
            <path d="M12.7543 31.0255H10.5277C9.42162 31.0255 9.42162 29.3951 10.5277 29.3951H16.5468C17.6784 29.3951 17.6784 31.0255 16.5468 31.0255H14.4349V37.4595C14.4349 38.5671 12.7543 38.5942 12.7543 37.4595C12.7543 37.4595 12.7543 31.0255 12.7543 31.0255Z" fill="white" />
            <path d="M18.8927 30.1969C18.8927 29.1514 20.5734 29.1132 20.5734 30.1969V37.4708C20.5734 38.529 18.8927 38.5545 18.8927 37.4708V30.1969Z" fill="white" />
            <path d="M24.4806 31.0871V33.1128H27.7241C28.1824 33.1128 28.6408 33.5718 28.6408 34.018C28.6408 34.4388 28.1824 34.7814 27.7241 34.7814H24.4806V37.4573C24.4806 37.9036 24.1623 38.2478 23.7166 38.2478C23.1564 38.2478 22.8142 37.9036 22.8142 37.4573V30.2201C22.8142 29.7611 23.158 29.4296 23.7166 29.4296H28.184C28.7442 29.4296 29.0753 29.7611 29.0753 30.2201C29.0753 30.6281 28.7442 31.0855 28.184 31.0855H24.4806V31.0871Z" fill="white" />
            <path d="M37.4 43H7V45H37.4C38.28 45 39 44.1 39 43V41C39 42.1 38.28 43 37.4 43Z" fill="#CAD1D8" />
        </symbol>

        <symbol id="icon-file-txt" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path fill="#E2E5E7" d="M9.643 0C7.875 0 6.429 1.434 6.429 3.188v44.624C6.429 49.566 7.875 51 9.643 51h32.143C43.554 51 45 49.566 45 47.812V12.75L32.143 0h-22.5z" />
            <path fill="#B0B7BD" d="M35.357 12.75H45L32.143 0v9.563c0 1.753 1.446 3.187 3.214 3.187z" />
            <path fill="#CAD1D8" d="M45 22.313l-9.643-9.563H45z" />
            <path fill="#576D7E" d="M38.571 41.438c0 .876-.723 1.593-1.607 1.593H1.607A1.605 1.605 0 010 41.438V25.5c0-.877.723-1.594 1.607-1.594h35.357c.884 0 1.607.717 1.607 1.594v15.938z" />
            <path fill="#FFF" d="M10.123 31.026H7.875c-1.119 0-1.119-1.63 0-1.63h6.078c1.144 0 1.144 1.63 0 1.63H11.82v6.434c0 1.107-1.697 1.134-1.697 0v-6.434h.001zM19.328 32.49l2.237-2.778c.668-.865 1.965.243 1.234 1.071a75.761 75.761 0 00-2.353 2.891l2.623 3.237c.705.957-.707 1.875-1.401.931l-2.365-3.007-2.325 3.07c-.656.93-2.109-.114-1.374-.981l2.58-3.25c-.808-1.005-1.592-1.985-2.376-2.89-.81-.957.694-1.937 1.284-1.045l2.235 2.751zM26.748 31.026H24.5c-1.119 0-1.119-1.63 0-1.63h6.076c1.145 0 1.145 1.63 0 1.63h-2.132v6.434c0 1.107-1.697 1.134-1.697 0v-6.434z" />
            <path fill="#CAD1D8" d="M36.964 43.031H6.43v1.594h30.535c.884 0 1.607-.717 1.607-1.594v-1.593c0 .876-.723 1.593-1.607 1.593z" />
        </symbol>

        <symbol id="icon-file-jpg" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path fill="#E2E5E7" d="M9.643 0C7.875 0 6.429 1.434 6.429 3.188v44.624C6.429 49.566 7.875 51 9.643 51h32.143C43.554 51 45 49.566 45 47.812V12.75L32.143 0h-22.5z" />
            <path fill="#B0B7BD" d="M35.357 12.75H45L32.143 0v9.563c0 1.753 1.446 3.187 3.214 3.187z" />
            <path fill="#CAD1D8" d="M45 22.313l-9.643-9.563H45z" />
            <path fill="#50BEE8" d="M38.571 41.438c0 .876-.723 1.593-1.607 1.593H1.607A1.605 1.605 0 010 41.438V25.5c0-.877.723-1.594 1.607-1.594h35.357c.884 0 1.607.717 1.607 1.594v15.938z" />
            <path fill="#FFF" d="M11.046 30.197c0-1.071 1.697-1.071 1.697 0v5.033c0 2.002-.964 3.213-3.187 3.213-1.093 0-2.004-.295-2.801-1.313-.656-.778.578-1.899 1.247-1.084.54.663 1.119.816 1.683.79.718-.025 1.35-.345 1.363-1.606v-5.033h-.002z" />
            <path fill="#FFF" fill-rule="nonzero" d="M15.001 30.197c0-.421.334-.88.874-.88h2.969c1.671 0 3.175 1.11 3.175 3.235 0 2.015-1.504 3.137-3.175 3.137h-2.146v1.683c0 .56-.36.878-.823.878-.424 0-.874-.317-.874-.878v-7.175zm1.697.725v3.175h2.146c.861 0 1.543-.754 1.543-1.545 0-.89-.682-1.63-1.543-1.63h-2.146z" />
            <path fill="#FFF" d="M31.196 37.27c-.913.752-2.031 1.07-3.161 1.07-2.7 0-4.614-1.528-4.614-4.562 0-2.572 2.018-4.573 4.728-4.573 1.016 0 2.133.343 2.93 1.12.783.764-.347 1.899-1.117 1.225-.476-.46-1.144-.803-1.813-.803-1.554 0-3.057 1.235-3.057 3.03 0 1.888 1.259 3.035 2.943 3.035.783 0 1.451-.23 1.927-.573v-1.567h-1.927c-1.144 0-1.029-1.555 0-1.555h2.57c.476 0 .911.357.911.752v2.714c0 .23-.101.443-.32.687z" />
            <path fill="#CAD1D8" d="M36.964 43.031H6.43v1.594h30.535c.884 0 1.607-.717 1.607-1.594v-1.593c0 .876-.723 1.593-1.607 1.593z" />
        </symbol>
        <symbol id="icon-file-jpeg" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path fill="#E2E5E7" d="M9.643 0C7.875 0 6.429 1.434 6.429 3.188v44.624C6.429 49.566 7.875 51 9.643 51h32.143C43.554 51 45 49.566 45 47.812V12.75L32.143 0h-22.5z" />
            <path fill="#B0B7BD" d="M35.357 12.75H45L32.143 0v9.563c0 1.753 1.446 3.187 3.214 3.187z" />
            <path fill="#CAD1D8" d="M45 22.313l-9.643-9.563H45z" />
            <path fill="#50BEE8" d="M38.571 41.438c0 .876-.723 1.593-1.607 1.593H1.607A1.605 1.605 0 010 41.438V25.5c0-.877.723-1.594 1.607-1.594h35.357c.884 0 1.607.717 1.607 1.594v15.938z" />
            <path fill="#FFF" d="M11.046 30.197c0-1.071 1.697-1.071 1.697 0v5.033c0 2.002-.964 3.213-3.187 3.213-1.093 0-2.004-.295-2.801-1.313-.656-.778.578-1.899 1.247-1.084.54.663 1.119.816 1.683.79.718-.025 1.35-.345 1.363-1.606v-5.033h-.002z" />
            <path fill="#FFF" fill-rule="nonzero" d="M15.001 30.197c0-.421.334-.88.874-.88h2.969c1.671 0 3.175 1.11 3.175 3.235 0 2.015-1.504 3.137-3.175 3.137h-2.146v1.683c0 .56-.36.878-.823.878-.424 0-.874-.317-.874-.878v-7.175zm1.697.725v3.175h2.146c.861 0 1.543-.754 1.543-1.545 0-.89-.682-1.63-1.543-1.63h-2.146z" />
            <path fill="#FFF" d="M31.196 37.27c-.913.752-2.031 1.07-3.161 1.07-2.7 0-4.614-1.528-4.614-4.562 0-2.572 2.018-4.573 4.728-4.573 1.016 0 2.133.343 2.93 1.12.783.764-.347 1.899-1.117 1.225-.476-.46-1.144-.803-1.813-.803-1.554 0-3.057 1.235-3.057 3.03 0 1.888 1.259 3.035 2.943 3.035.783 0 1.451-.23 1.927-.573v-1.567h-1.927c-1.144 0-1.029-1.555 0-1.555h2.57c.476 0 .911.357.911.752v2.714c0 .23-.101.443-.32.687z" />
            <path fill="#CAD1D8" d="M36.964 43.031H6.43v1.594h30.535c.884 0 1.607-.717 1.607-1.594v-1.593c0 .876-.723 1.593-1.607 1.593z" />
        </symbol>

        <symbol id="icon-file-pdf" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path fill="#E2E5E7" d="M9.643 0C7.875 0 6.429 1.434 6.429 3.188v44.624C6.429 49.566 7.875 51 9.643 51h32.143C43.554 51 45 49.566 45 47.812V12.75L32.143 0h-22.5z" />
            <path fill="#B0B7BD" d="M35.357 12.75H45L32.143 0v9.563c0 1.753 1.446 3.187 3.214 3.187z" />
            <path fill="#CAD1D8" d="M45 22.313l-9.643-9.563H45z" />
            <path fill="#F15642" d="M38.571 41.438c0 .876-.723 1.593-1.607 1.593H1.607A1.605 1.605 0 010 41.438V25.5c0-.877.723-1.594 1.607-1.594h35.357c.884 0 1.607.717 1.607 1.594v15.938z" />
            <path fill="#FFF" fill-rule="nonzero" d="M7.006 30.197c0-.421.334-.88.872-.88h2.969c1.671 0 3.175 1.11 3.175 3.235 0 2.015-1.504 3.137-3.175 3.137H8.7v1.683c0 .56-.36.878-.823.878-.424 0-.872-.317-.872-.878v-7.175zm1.695.725v3.175h2.146c.861 0 1.542-.754 1.542-1.545 0-.89-.681-1.63-1.542-1.63H8.7zM16.54 38.25c-.425 0-.888-.23-.888-.789v-7.239c0-.457.463-.79.887-.79h2.943c5.872 0 5.744 8.818.116 8.818h-3.059zm.81-7.263v5.71h2.132c3.47 0 3.624-5.71 0-5.71h-2.133z" />
            <path fill="#FFF" d="M27.309 31.09v2.025h3.277c.462 0 .925.459.925.904 0 .42-.463.765-.925.765h-3.277v2.675c0 .447-.32.79-.77.79-.566 0-.911-.343-.911-.79v-7.238c0-.458.347-.79.91-.79h4.512c.566 0 .9.332.9.79a.884.884 0 01-.9.867h-3.741v.001z" />
            <path fill="#CAD1D8" d="M36.964 43.031H6.43v1.594h30.535c.884 0 1.607-.717 1.607-1.594v-1.593c0 .876-.723 1.593-1.607 1.593z" />
        </symbol>

        <symbol id="icon-file-doc" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path fill="#E2E5E7" d="M9.643 0C7.875 0 6.429 1.434 6.429 3.188v44.624C6.429 49.566 7.875 51 9.643 51h32.143C43.554 51 45 49.566 45 47.812V12.75L32.143 0h-22.5z" />
            <path fill="#B0B7BD" d="M35.357 12.75H45L32.143 0v9.563c0 1.753 1.446 3.187 3.214 3.187z" />
            <path fill="#CAD1D8" d="M45 22.313l-9.643-9.563H45z" />
            <path fill="#50BEE8" d="M38.571 41.438c0 .876-.723 1.593-1.607 1.593H1.607A1.605 1.605 0 010 41.438V25.5c0-.877.723-1.594 1.607-1.594h35.357c.884 0 1.607.717 1.607 1.594v15.938z" />
            <path fill="#FFF" fill-rule="nonzero" d="M6.085 38.25c-.425 0-.887-.231-.887-.79v-7.238c0-.459.462-.79.887-.79h2.942c5.873 0 5.743 8.818.114 8.818H6.085zm.81-7.264v5.709h2.132c3.47 0 3.623-5.71 0-5.71H6.895zM19.688 38.378c-2.377.102-4.846-1.467-4.846-4.589 0-3.135 2.467-4.676 4.846-4.676 2.248.113 4.6 1.656 4.6 4.676 0 3.022-2.352 4.589-4.6 4.589zm-.142-7.607c-1.44 0-3.007 1.007-3.007 3.02 0 2.001 1.569 3.021 3.007 3.021 1.479 0 3.058-1.02 3.058-3.021 0-2.015-1.58-3.02-3.058-3.02z" />
            <path fill="#FFF" d="M25.8 33.776c0-2.459 1.555-4.574 4.51-4.574 1.12 0 2.006.332 2.943 1.135a.863.863 0 01.039 1.235.878.878 0 01-1.183-.038c-.525-.548-1.065-.7-1.798-.7-1.979 0-2.928 1.39-2.928 2.944 0 1.58.936 3.033 2.928 3.033.733 0 1.414-.295 2.005-.816.397-.306.95-.155 1.182.153.205.28.307.752-.142 1.197-.9.83-1.978.996-3.047.996-3.108 0-4.51-2.105-4.51-4.565z" />
            <path fill="#CAD1D8" d="M36.964 43.031H6.43v1.594h30.535c.884 0 1.607-.717 1.607-1.594v-1.593c0 .876-.723 1.593-1.607 1.593z" />
        </symbol>

        <symbol id="icon-file-rar" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path fill="#E2E5E7" d="M9.563 0a3.197 3.197 0 00-3.188 3.188v44.624A3.197 3.197 0 009.563 51h31.874a3.197 3.197 0 003.188-3.188V12.75L31.875 0H9.562z" />
            <path fill="#B0B7BD" d="M35.063 12.75h9.562L31.875 0v9.563a3.197 3.197 0 003.188 3.187z" />
            <path fill="#CAD1D8" d="M44.625 22.313l-9.562-9.563h9.562z" />
            <path fill="#576D7E" d="M34.25 41.438c0 .876-.642 1.593-1.427 1.593H1.427C.642 43.031 0 42.314 0 41.438V25.5c0-.877.642-1.594 1.427-1.594h31.396c.785 0 1.427.717 1.427 1.594v15.938z" />
            <path fill="#FFF" d="M6.178 37.275c0 1.107-1.696 1.146-1.696.025v-7.237c0-.446.346-.778.765-.778h3.39c3.236 0 3.899 4.334 1.197 5.416l1.694 2.064c.663.981-.661 1.923-1.428.956l-1.923-2.753H6.178v2.307zm0-3.773h2.46c1.655 0 1.759-2.676 0-2.676h-2.46v2.676zM24.028 37.275c0 1.107-1.696 1.146-1.696.025v-7.237c0-.446.346-.778.765-.778h3.39c3.235 0 3.898 4.334 1.197 5.416l1.694 2.064c.663.981-.661 1.923-1.428.956l-1.923-2.753h-1.999v2.307zm0-3.773h2.46c1.655 0 1.759-2.676 0-2.676h-2.46v2.676zM13.011 38.25c-.408-.231-.663-.689-.408-1.224l3.656-7.148c.345-.676 1.263-.701 1.581 0l3.593 7.148c.523.993-1.02 1.783-1.478.79l-.562-1.122H14.69l-.548 1.122c-.202.434-.674.525-1.132.434zm5.48-3.237l-1.44-3.148-1.566 3.148h3.006z" />
            <path fill="#CAD1D8" d="M32.655 43.031H6.375v1.594h26.28c.876 0 1.593-.717 1.593-1.594v-1.593c0 .876-.717 1.593-1.593 1.593z" />
        </symbol>

        <symbol id="icon-file-zip" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path fill="#E2E5E7" d="M9.563 0a3.197 3.197 0 00-3.188 3.188v44.624A3.197 3.197 0 009.563 51h31.874a3.197 3.197 0 003.188-3.188V12.75L31.875 0H9.562z" />
            <path fill="#B0B7BD" d="M35.063 12.75h9.562L31.875 0v9.563a3.197 3.197 0 003.188 3.187z" />
            <path fill="#CAD1D8" d="M44.625 22.313l-9.562-9.563h9.562z" />
            <path fill="#84BD5A" d="M38.25 41.438c0 .876-.717 1.593-1.594 1.593H1.594A1.598 1.598 0 010 41.438V25.5c0-.877.717-1.594 1.594-1.594h35.062c.877 0 1.594.717 1.594 1.594v15.938z" />
            <path fill="#FFF" d="M10.025 38.25c-.804 0-1.122-.776-.663-1.324l4.537-6.028h-3.761c-1.108 0-1.019-1.565 0-1.565h5.136c.968 0 1.248.915.561 1.656l-4.346 5.643h4.142c1.02 0 1.148 1.62-.1 1.62h-5.506v-.002zM17.934 30.197c0-1.046 1.683-1.084 1.683 0v7.275c0 1.057-1.683 1.084-1.683 0v-7.275z" />
            <path fill="#FFF" fill-rule="nonzero" d="M21.876 30.197c0-.421.331-.88.867-.88h2.943c1.658 0 3.15 1.11 3.15 3.235 0 2.015-1.492 3.137-3.15 3.137H23.56v1.683c0 .56-.357.878-.816.878a.86.86 0 01-.867-.878v-7.175zm1.681.725v3.175h2.128c.854 0 1.53-.754 1.53-1.545 0-.89-.676-1.63-1.53-1.63h-2.128z" />
            <path fill="#CAD1D8" d="M36.656 43.031H6.375v1.594h30.281c.877 0 1.594-.717 1.594-1.594v-1.593c0 .876-.717 1.593-1.594 1.593z" />
        </symbol>

        <symbol id="icon-file-ppt" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path fill="#E2E5E7" d="M9.643 0C7.875 0 6.429 1.434 6.429 3.188v44.624C6.429 49.566 7.875 51 9.643 51h32.143C43.554 51 45 49.566 45 47.812V12.75L32.143 0h-22.5z" />
            <path fill="#B0B7BD" d="M35.357 12.75H45L32.143 0v9.563c0 1.753 1.446 3.187 3.214 3.187z" />
            <path fill="#CAD1D8" d="M45 22.313l-9.643-9.563H45z" />
            <path fill="#F15642" d="M38.571 41.531c0 .877-.723 1.594-1.607 1.594H1.607A1.605 1.605 0 010 41.531V25.594C0 24.717.723 24 1.607 24h35.357c.884 0 1.607.717 1.607 1.594V41.53z" />
            <path fill="#CAD1D8" d="M36.964 43.031H6.43v1.594h30.535c.884 0 1.607-.717 1.607-1.594v-1.593c0 .876-.723 1.593-1.607 1.593z" />
            <path fill="#FFF" d="M9.37 30.924V34.1h2.128c.855 0 1.53-.754 1.53-1.544 0-.891-.675-1.63-1.53-1.63H9.371zM7.69 30.2c0-.42.33-.88.865-.88h2.943c1.658 0 3.15 1.11 3.15 3.236 0 2.014-1.492 3.137-3.15 3.137H9.371v1.683c0 .56-.356.878-.815.878a.859.859 0 01-.865-.878v-7.176h-.002zM17.954 30.924V34.1h2.127c.855 0 1.53-.754 1.53-1.544 0-.891-.675-1.63-1.53-1.63h-2.127zm-1.682-.725c0-.42.332-.88.867-.88h2.944c1.658 0 3.15 1.11 3.15 3.236 0 2.014-1.492 3.137-3.15 3.137h-2.128v1.683c0 .56-.357.878-.816.878a.86.86 0 01-.867-.878v-7.176zM27.236 31.028h-2.228c-1.11 0-1.11-1.63 0-1.63h6.026c1.135 0 1.135 1.63 0 1.63H28.92v6.436c0 1.108-1.683 1.135-1.683 0v-6.436z" />
        </symbol>

        <symbol id="icon-file-xls" viewBox="0 0 45 51" fill="none" fill-rule="evenodd">
            <path fill="#E2E5E7" d="M9.563 0a3.197 3.197 0 00-3.188 3.188v44.624A3.197 3.197 0 009.563 51h31.874a3.197 3.197 0 003.188-3.188V12.75L31.875 0H9.562z" />
            <path fill="#B0B7BD" d="M35.063 12.75h9.562L31.875 0v9.563a3.197 3.197 0 003.188 3.187z" />
            <path fill="#CAD1D8" d="M44.625 22.313l-9.562-9.563h9.562z" />
            <path fill="#84BD5A" d="M38.25 41.438c0 .876-.717 1.593-1.594 1.593H1.594A1.598 1.598 0 010 41.438V25.5c0-.877.717-1.594 1.594-1.594h35.062c.877 0 1.594.717 1.594 1.594v15.938z" />
            <path fill="#FFF" d="M11.19 32.492l2.217-2.778c.663-.867 1.95.24 1.224 1.07a74.483 74.483 0 00-2.332 2.892l2.6 3.237c.7.956-.7 1.872-1.389.929l-2.346-3.007-2.306 3.072c-.65.93-2.09-.114-1.364-.981l2.561-3.25c-.803-1.007-1.581-1.987-2.357-2.893-.802-.956.688-1.936 1.275-1.042l2.217 2.75zM16.471 30.197c0-.421.357-.778.804-.778.408 0 .752.359.752.778v6.384h3.466c1.248 0 1.275 1.669 0 1.669h-4.217c-.446 0-.803-.317-.803-.776v-7.277h-.002zM23.91 31.344c.293-2.473 4.025-2.918 5.785-1.566.867.7-.051 1.809-.816 1.248-.944-.598-3.084-.879-3.352.444-.344 2.091 5.199.894 5.11 4.284-.09 3.237-4.778 3.312-6.538 1.86-.422-.344-.408-.904-.178-1.25.331-.33.7-.444 1.134-.087 1.044.712 3.734 1.248 3.924-.563-.164-1.883-5.465-.75-5.07-4.37z" />
            <path fill="#CAD1D8" d="M36.656 43.031H6.375v1.594h30.281c.877 0 1.594-.717 1.594-1.594v-1.593c0 .876-.717 1.593-1.594 1.593z" />
        </symbol>
        <symbol id="icon-thumbs-up" viewBox="0 0 23 23" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.254 6.724L7 8.35v9.875l4.374.875c1.615.323 3.257.486 4.903.486h1.161a4 4 0 003.881-3.03l1.31-5.243a3 3 0 00-2.91-3.727H17V5.685c0-1.43-.808-2.738-2.088-3.378a2.888 2.888 0 00-4.111 1.957l-.547 2.46zm9.465 2.863a1 1 0 01.97 1.242l-1.31 5.243a2 2 0 01-1.94 1.515h-1.162c-1.514 0-3.025-.15-4.51-.447L9 16.587v-7l3-1.5.753-3.39a.888.888 0 011.265-.601c.602.3.982.916.982 1.589v3.902h4.72zM6 7.587H0v11h6v-11z" fill="currentColor" transform="translate(0,2)" />
        </symbol>

        <symbol id="icon-thumbs-down" viewBox="0 0 23 23" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.746 18.276L16 16.65V6.774l-4.374-.875a24.998 24.998 0 00-4.903-.486H5.562a4 4 0 00-3.881 3.03l-1.31 5.243a3 3 0 002.91 3.727H6v1.902c0 1.43.808 2.738 2.088 3.378a2.888 2.888 0 004.111-1.957l.547-2.46zM3.28 15.413a1 1 0 01-.97-1.242l1.31-5.243a2 2 0 011.94-1.515h1.162c1.514 0 3.025.15 4.51.447L14 8.413v7l-3 1.5-.753 3.39a.888.888 0 01-1.265.601A1.777 1.777 0 018 19.315v-3.902H3.28zm13.719 2h6v-11h-6v11z" fill="currentColor" />
        </symbol>
        <symbol id="icon-download" viewBox="0 0 24 24" fill="none">
            <path fill="currentColor" d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z" />
            <path d="M0 0h24v24H0z" fill="none" />
        </symbol>

        <symbol id="icon-download-alt" viewBox="0 0 10 13" fill="none">
            <path fill="currentColor" d="M0 10.826h10v2H0z" />
            <path d="M2 5.826l3 3m0 0l3-3m-3 3v-8" stroke="currentColor" stroke-width="2" />
        </symbol>

    </svg>
    <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

    <div id="top-panel" class="top-panel">
        <div class="container">
            <p class="current-date"></p>
            <div class="top-panel__icons">
                <a href="/feedback/" class="top-panel__button" title="Обратная связь">
                    <!-- <svg width="40" height="18">
                        <use xlink:href="#icon-envelope"></use>
                    </svg> -->
                    <!-- <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.66666 1.66666H13.3333C14.0667 1.66666 14.6667 2.26666 14.6667 2.99999V11C14.6667 11.7333 14.0667 12.3333 13.3333 12.3333H2.66666C1.93333 12.3333 1.33333 11.7333 1.33333 11V2.99999C1.33333 2.26666 1.93333 1.66666 2.66666 1.66666Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.6667 3L8 7.66667L1.33333 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Обратная связь</span> -->
                </a>
                <!-- <a href="/sitemap/" class="top-panel__button" title="Карта сайта">
                    <svg width="40" height="18">
                        <use xlink:href="#icon-sitemap"></use>
                    </svg>
                    <span>Карта сайта</span>
                </a> -->

                <button type="button" class="top-panel__button" title="Версия для слабовидящих">
                    <!-- <svg width="40" height="18">
                        <use xlink:href="#icon-glasses"></use>
                    </svg> -->
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.666656 6.99999C0.666656 6.99999 3.33332 1.66666 7.99999 1.66666C12.6667 1.66666 15.3333 6.99999 15.3333 6.99999C15.3333 6.99999 12.6667 12.3333 7.99999 12.3333C3.33332 12.3333 0.666656 6.99999 0.666656 6.99999Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 9C9.10457 9 10 8.10457 10 7C10 5.89543 9.10457 5 8 5C6.89543 5 6 5.89543 6 7C6 8.10457 6.89543 9 8 9Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Версия для слабовидящих</span>
                </button>
                <!-- Поиск -->
                <? $APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "search",
                    array(
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "USE_SUGGEST" => "N"
                    )
                );
                ?>
            </div>

        </div>
    </div>
    <header id="header" class="header">
        <div class="container container-hidden header__container">

            <!-- <img alt="флаг" class="flag" src="<?= SITE_TEMPLATE_PATH ?>/images/flag.png"> -->
            <a href="/" class="sitetitle">
                <img alt="контрактная система в сфере закупок" class="logo" src="<?= SITE_TEMPLATE_PATH ?>/images/logo.png">
                <div class="sitetitle__text">
                    <span>Глава Республики Дагестан</span>
                    <span class="sitetitle__bottom">
                        <svg width="567" height="17" viewBox="0 0 567 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="567" height="3" fill="#408535"/>
                            <rect y="7" width="567" height="3" fill="#18469F"/>
                            <rect y="14" width="567" height="3" fill="#DF0000"/>
                        </svg>
                    </span>
                </div>
            </a>

            <div class="header-feedback">
                <a href="mailto:letters@glavard.ru" class="header-feedback__mail">
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.66666 1.66666H13.3333C14.0667 1.66666 14.6667 2.26666 14.6667 2.99999V11C14.6667 11.7333 14.0667 12.3333 13.3333 12.3333H2.66666C1.93333 12.3333 1.33333 11.7333 1.33333 11V2.99999C1.33333 2.26666 1.93333 1.66666 2.66666 1.66666Z" stroke="#123179" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.6667 3L8 7.66667L1.33333 3" stroke="#123179" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Написать Главе</span>
                </a>
                <a href="tel:78722672032" class="header-feedback__phone">
                    Горячая линия: <span>(8722) 67-20-32</span>
                </a>
            </div>

            <button class="btn show-mob-menu">
                <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.375 0.5H0.625C0.41875 0.5 0.25 0.66875 0.25 0.875V3.875C0.25 4.08125 0.41875 4.25 0.625 4.25H37.375C37.5813 4.25 37.75 4.08125 37.75 3.875V0.875C37.75 0.66875 37.5813 0.5 37.375 0.5ZM37.375 29.75H0.625C0.41875 29.75 0.25 29.9187 0.25 30.125V33.125C0.25 33.3313 0.41875 33.5 0.625 33.5H37.375C37.5813 33.5 37.75 33.3313 37.75 33.125V30.125C37.75 29.9187 37.5813 29.75 37.375 29.75ZM37.375 15.125H0.625C0.41875 15.125 0.25 15.2937 0.25 15.5V18.5C0.25 18.7063 0.41875 18.875 0.625 18.875H37.375C37.5813 18.875 37.75 18.7063 37.75 18.5V15.5C37.75 15.2937 37.5813 15.125 37.375 15.125Z" fill="#2B4399"/>
                </svg>
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="close">
                    <path d="M25.18 0L14 11.18L2.82 0L0 2.82L11.18 14L0 25.18L2.82 28L14 16.82L25.18 28L28 25.18L16.82 14L28 2.82L25.18 0Z" fill="#2B4399"/>
                </svg>
            </button>
        </div>
    </header>
    <!-- Меню -->
    <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel1", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel1",
		"MENU_THEME" => "site"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);
    ?>

    <?
    if ($currentPage !== '/') {
        $isActivity = preg_match('/^\/activity\//', $currentPage);

        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "section",
            array(
                "ROOT_MENU_TYPE" => $isActivity ? "left-override" : "left",
                "MAX_LEVEL" => "1",
                "USE_EXT" => "Y",
                "ALLOW_MULTI_SELECT" => "N",
                "COMPONENT_TEMPLATE" => "section",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(),
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N"
            ),
            false
        );
    }
    ?>
    <div class="content-wrapper">
        <div class="content">
            <div class="<?php if ($currentPage !== '/') : ?>container<?php endif; ?>">
                <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb", "news05", Array(
	
	),
	false
); ?>

                <script>
                    //current date
                    let today = new Date();
                    let options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                    }
                    let current_date = today.toLocaleDateString('ru-RU', options);
                    document.querySelector(".current-date").textContent = current_date;
                </script>