<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("������������� ����������� �������");
?>


<style>
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
</style>
<div class="content">
    <div class="contacts-page">
        <h1 class="contact__title">Контакты и реквизиты </h1>
        <table class="data-table">
            <tbody>
                <tr>
                    <th colspan="2">Контактная информация</th>
                </tr>
                <tr>
                    <td>Наименование организации</td>
                    <td>Mинистерство экономического развития и инвестиций Нижегородской области</td>
                </tr>
                <tr>
                    <td>Юридический адрес</td>
                    <td>603082, г. Нижний Новгород, Кремль, корпус 2</td>
                </tr>
                <tr>
                    <td>Почтовый адрес</td>
                    <td>603082, г. Нижний Новгород, Кремль, корпус 2</td>
                </tr>
                <tr>
                    <td>Телефон приемной</td>
                    <td>+7 (831) 439−06−62</td>
                </tr>
                <tr>
                    <td>Телефон канцелярии</td>
                    <td>+7(347)218-12-36</td>
                </tr>

                <tr>
                    <td>Факс</td>
                    <td>+7 (831) 439−01−86 </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <a href="mailto:minec@minec.kreml.nnov.ru">
                            minec@minec.kreml.nnov.ru</a>
                    </td>
                </tr>
                <tr>
                    <td>Официальный сайт</td>
                    <td>
                        <a href="https://minec.government-nnov.ru">
                            https://minec.government-nnov.ru</a>
                    </td>
                </tr>
                <tr>
                    <td>Режим работы</td>
                    <td>
                        <p>С понедельника по пятницу с 9:00 до 18:00, обед с 13:00 до 14:00</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae1742c5eb1f8c13284ac32e6cd76e8cdbed144c8fd1f98780efdbf35318b9d80&amp;source=constructor" width="1120" height="500" frameborder="0"></iframe>

    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>