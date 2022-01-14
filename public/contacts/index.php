<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("������������� ����������� �������");
?><style>
    .contacts-page {
        padding-bottom: var(--grid-gap);
        width: 100%;
        overflow-x: auto;
    }

    .contacts-page__buttons {
        display: grid;
        gap: 10px 20px;
        grid-template-columns: repeat(auto-fit, minmax(0, max-content));
        justify-content: flex-end;
        margin: 20px 0;
    }

    .contacts-page .data-table tr td {
        min-width: 250px;
    }

    .contacts-page .data-table tr td:first-child {
        width: 250px;
    }

    @media screen and (max-width: 735px) {
        .contacts-page__buttons {
            grid-template-columns: 1fr;
        }

        .contacts-page .data-table tr td,
        .contacts-page .data-table tr th {
            display: block;
            min-width: 250px;
        }

        .contacts-page .data-table tr td:first-child {
            width: 100%;
            border-bottom: none;
            border-top: none;
        }
    }




    .table {
        --cell-spacing: 20px;
        --border: 1px solid var(--border-color);
        border-collapse: collapse;
        font-size: calc(14rem / var(--initial-font-multiplier));
        width: 100%;
    }

    .table__row {
        border-bottom: var(--border);
    }

    .table__row:empty {
        border-bottom: none;
    }

    .table__cell {
        padding: 20px;
        position: relative;
        vertical-align: top;
        text-align: left;
    }

    .table__cell+.table__cell::before {
        content: '';
        position: absolute;
        top: var(--cell-spacing);
        bottom: var(--cell-spacing);
        left: 0;
        border-left: var(--border);
    }

    .table__head {
        --cell-bg-1: var(--light-gray-color);
        --cell-bg-2: hsl(240, 12%, 94%);
        --border: none;
        font-size: calc(18rem / var(--initial-font-multiplier));
        font-weight: bold;
    }

    .table__head .table__cell {
        vertical-align: top;
        text-align: left;
        padding: calc(var(--cell-spacing) / 2) var(--cell-spacing);
    }

    .table__head .table__cell:nth-child(2n+1) {
        background: var(--cell-bg-1);
    }

    .table__head .table__cell:nth-child(2n) {
        background: var(--cell-bg-2);
    }

    :root.root--special .table {
        --border: 1px solid var(--special-text-color);
        border: var(--border);
    }

    :root.root--special .table__cell {
        background: var(--special-background-color);
    }

    @media screen and (max-width: 735px) {
        .table__head {
            display: none;
        }

        .table__row {
            display: flex;
            flex-direction: column;
        }

        .table__row:first-of-type:not(:empty) {
            border-top: var(--border);
        }

        .table__cell+.table__cell::before {
            left: var(--cell-spacing);
            right: var(--cell-spacing);
            top: 0;
            bottom: unset;
            border-left: unset;
            border-top: var(--border);
        }
    }


    .worker {
        --content-spacing: 10px;
    }

    @media screen and (max-width: 735px) {
        .worker__content-wrapper {
            padding: 0;
        }
    }

    .worker__people {
        --image-offset: 10px;
        padding: var(--content-spacing) 0;
        display: flex;
        flex-wrap: nowrap;
    }

    .worker__people-photo {
        margin-top: calc(0px - var(--image-offset));
        height: 113px;
        width: auto;
        border-radius: 4px;
    }

    .worker__people-name {
        margin-left: 20px;
        font-weight: bold;
    }

    @media (hover: hover) {
        .worker__people:hover .worker__people-name {
            color: var(--primary-color-hover);
        }

        :root.root--special .worker__people:hover .worker__people-name {
            color: var(--special-text-color);
        }
    }

    .worker .admin-area {
        margin-top: var(--content-spacing);
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
        justify-content: flex-end;
    }

    .worker .admin-area__badges {
        margin-left: 10px;
    }

    .worker .admin-area__buttons {
        margin-left: 0;
    }

    .worker__department>a:not(:last-of-type)::after {
        content: ' / '
    }

    .worker__contacts {
        line-height: 1.7;
    }

    .worker__schedule {
        margin-top: 12px;
    }

    .meta__item {
        white-space: nowrap;
    }

    .data-table {
        border-collapse: collapse;
        width: 100%;
        margin: 40px 0;
    }

    .data-table th,
    .data-table td {
        border: 1px solid var(--border-color);
        padding: 10px 15px;
        vertical-align: top;
        font-size: 18px;
        color: #333333;

    }

    @media screen and (max-width: 735px) {
        h1 {
            font-size: calc(24rem/var(--initial-font-multiplier));
        }
    }

    .table__title {
        font-size: 25px;
        margin: 30px 0 30px 0;
    }

    .contact__title {
        margin-top: 20px;
        font-size: 30px;
    }

    /* End */
</style><br>
 <br>
 <br>
 <br>
 <br>
<div class="content">
	<div class="contacts-page">
 <b><span style="font-size: 16pt;"><span style="font-size: 18pt; color: #000000;">Контактная информация</span><br>
 </span></b><br>
 <br>
 <br>
 <span style="font-size: 16pt;"> <b><span style="font-size: 14pt; color: #000000;">Наименование организации:</span></b><span style="font-size: 14pt;"> Администрация&nbsp;Главы и Правительства&nbsp;Республики Дагестан</span></span><br>
 <span style="font-size: 14pt;"> </span><span style="font-size: 14pt;"> </span><br>
 <span style="font-size: 14pt;"> </span><span style="font-size: 16pt;"><span style="font-size: 14pt;"> </span><b><span style="font-size: 14pt; color: #000000;">Юридический адрес:</span></b><span style="font-size: 14pt;"><span style="color: #000000;"> </span>367005, Республика Дагестан г.Махачкала, проспект Р.Гамзатова, 1</span></span><br>
 <span style="font-size: 14pt;"> </span><span style="font-size: 14pt;"> </span><br>
 <span style="font-size: 14pt;"> </span><span style="font-size: 16pt;"><span style="font-size: 14pt;"> </span><b><span style="font-size: 14pt; color: #000000;">Почтовый адрес:</span></b><span style="font-size: 14pt;"> 367005, Республика Дагестан г.Махачкала, проспект Р.Гамзатова, 1</span></span><br>
 <br>
 <br>
 <br>
 <br>
 <b><span style="font-size: 18pt; color: #000000;">Приемная Главы Республики Дагестан</span></b><br>
 <br>
 <br>
 <br>
 <span style="font-size: 16pt;"><b><span style="font-size: 14pt; color: #000000;">Email</span></b><span style="font-size: 14pt;"><span style="color: #000000;">:</span>&nbsp;</span></span><a href="mailto:raa49@mail.ru;"><span style="font-size: 14pt;">raa49@mail.ru</span></a><br>
 <br>
 <br>
 <br>
 <br>
 <b><span style="font-size: 18pt; color: #000000;">Контакты для&nbsp;Пресс-службы Главы Республики Дагестан для СМИ</span></b><br>
 <br>
 <br>
 <br>
 <span style="font-size: 16pt;"><b><span style="font-size: 14pt; color: #000000;">Телефон</span></b><span style="font-size: 14pt;"><span style="color: #000000;">:</span> 8(8722)67-87-90</span></span><br>
 <span style="font-size: 14pt;"> </span><span style="font-size: 14pt;"> </span><br>
 <span style="font-size: 14pt;"> </span><span style="font-size: 16pt;"><span style="font-size: 14pt;"> </span><b><span style="font-size: 14pt; color: #000000;">Email</span></b><span style="font-size: 14pt;"><span style="color: #000000;">:</span>&nbsp;</span></span><a href="mailto:prd.press@yandex.ru"><span style="font-size: 14pt;">prd.press@yandex.ru</span></a><br>
 <br>
 <br>
 <br>
 <br>
		<span style="color: #000000;"> </span><span style="font-size: 18pt;"><b><span style="color: #000000;">ОТДЕЛ УЧЕТА И РЕГИСТРАЦИИ ДОКУМЕНТОВ</span></b></span><br>
 <br>
 <br>
 <br>
 <span style="font-size: 16pt;"><b><span style="font-size: 14pt; color: #000000;">Телефон</span></b><span style="font-size: 14pt;"><span style="color: #000000;">:</span> 8(8722) 67-30-23</span></span><br>
 <span style="font-size: 14pt;"> </span><span style="font-size: 14pt;"> </span><br>
 <span style="font-size: 14pt;"> </span><span style="font-size: 16pt;"><span style="font-size: 14pt;"> </span><b><span style="font-size: 14pt; color: #000000;">Телефон</span></b><span style="font-size: 14pt;"><span style="color: #000000;">:</span> 8(8722) 78-04-22</span></span><br>
 <br>
 <br>
 <br>
	</div>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>