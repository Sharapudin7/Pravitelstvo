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
        min-width: 500px;
    }

    .contacts-page .data-table tr td:first-child {
        width: 500px;
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

    .grid-container {
        display: grid;
        grid-gap: 20px;
        margin: 20px 0 0 0;
    }

    .grid-container p {
        font-size: 14px;
        line-height: 21px;
    }

    .hotline-title {
        font-size: 16px;
    }

    p {
        font-size: 14px;
        line-height: 21px;
    }

    .medium-title {
        font-size: 18px;
        text-align: center;
        line-height: 21px;
        margin: 0 0 10px 0;
    }

    /* End */
</style>
<div class="content">
    <div class="contacts-page">
        <h3 class="medium-title">Обращения граждан</h3>
        <h3 class="medium-title">
            «Телефон доверия» Главы Республики Дагестан по вопросам противодействия коррупции
        </h3>
        <h3 class="medium-title">Уважаемые заявители!</h3>

        <p>
            В целях обеспечения защиты прав и законных интересов граждан и получения дополнительной информации для совершенствования деятельности органов исполнительной власти Республики Дагестан и органов местного самоуправления муниципальных образований Республики Дагестан (далее - органы местного самоуправления) по вопросам противодействия коррупции, оперативного реагирования на возможные коррупционные проявления в деятельности должностных лиц органов исполнительной власти Республики Дагестан и органов местного самоуправления, должностных лиц государственных учреждений Республики Дагестан и организаций, созданных для выполнения задач, поставленных перед органами исполнительной власти Республики Дагестан, формирования в обществе нетерпимости к коррупционному поведению с 1 августа 2016 года в Управлении Администрации Главы и Правительства Республики Дагестан по вопросам противодействия коррупции функционирует «телефон доверия» Главы Республики Дагестан по вопросам противодействия коррупции:
        </p>
        <table class="data-table">
            <tbody>
                <tr>
                    <th colspan="2">78-01-62</th>
                </tr>
            </tbody>
        </table>
        <p>
            Перед направлением обращения на «телефон доверия» Главы Республики Дагестан по вопросам противодействия коррупции рекомендуем ознакомиться с информацией о функционировании «телефона доверия», целях его создания и ПРАВИЛАХ ПРИЕМА СООБЩЕНИЙ, изложенных в Порядке работы «телефона доверия» Главы Республики Дагестан по вопросам противодействия коррупции, утвержденном Указом Главы Республики Дагестан от 25 мая 2016 г. № 163, а также с федеральными законами от 2 мая 2006 г. № 59-ФЗ «О порядке рассмотрения обращений граждан Российской Федерации» и от 27 июля 2006 г. № 152-ФЗ «О персональных данных» и со статьей 306 Уголовного кодекса Российской Федерации.
        </p>

        <div class="grid-container grid-container_hotline">
            <h3 class="hotline-title">Правила приема сообщений по «телефону доверия»</h3>
            <p>
                По «телефону доверия» Главы Республики Дагестан по вопросам противодействия коррупции принимается и рассматривается информация о фактах:
            </p>
            <p>
                коррупционных проявлений в действиях должностных лиц органов исполнительной власти Республики Дагестан, органов местного самоуправления, должностных лиц государственных учреждений Республики Дагестан и подведомственных организаций;
            </p>
            <p>
                неурегулированного конфликта интересов на государственной гражданской службе Республики Дагестан и муниципальной службе в Республике Дагестан;
            </p>
            <p>
                несоблюдения гражданскими служащими, муниципальными служащими, руководителями государственных учреждений Республики Дагестан и подведомственных организаций ограничений, запретов и требований, установленных законодательством Российской Федерации.
            </p>
        </div>

        <div class="grid-container grid-container_hotline">
            <h3 class="hotline-title">Не рассматриваются:</h3>
            <p>
                анонимные обращения (без указания фамилии гражданина, направившего обращение); </p>
            </p>
            <p>
                обращения, не содержащие почтового адреса, по которому должен быть направлен ответ; </p>
            </p>
            <p>
                обращение, в котором обжалуется судебное решение; </p>
            </p>
            <p>
                обращения, не касающиеся коррупционных действий должностных лиц органов исполнительной власти Республики Дагестан, органов местного самоуправления, должностных лиц государственных учреждений Республики Дагестан и подведомственных организаций. </p>
            </p>
            <p>
                Конфиденциальность обращения гарантируется.
            </p>
        </div>
        <div class="grid-container grid-container_hotline">
            <h3 class="hotline-title">Время приема обращений по «телефону доверия»:</h3>
            <p>
                "Телефон доверия" функционирует круглосуточно в автоматическом режиме и оснащен системой записи поступающих сообщений. Все поступающие обращения записываются на жесткий диск компьютера в виде звукового файла.</p>
            </p>
        </div>

        <div class="grid-container grid-container_hotline">
            <h3 class="hotline-title">Время приема одного обращения в режиме работы автоответчика составляет 5 минут.</h3>
            <p>
                "Телефон доверия" функционирует круглосуточно в автоматическом режиме и оснащен системой записи поступающих сообщений. Все поступающие обращения записываются на жесткий диск компьютера в виде звукового файла.</p>
            </p>
        </div>


        <table class="data-table">
            <tbody>
                <tr>
                    <th colspan="2">Прием обращений по "телефону доверия" в рабочее время осуществляется гражданским служащим Управления Администрации Главы и Правительства Республики Дагестан по вопросам противодействия коррупции, в служебные обязанности которого входит обеспечение деятельности "телефона доверия", ежедневно по следующему графику:</th>
                </tr>

                <tr>
                    <td>с понедельника по четверг:</td>
                    <td>с 9.00 до 18.00</td>
                </tr>
                <tr>
                    <td>в пятницу:</td>
                    <td>с 9.00 до 16.45</td>
                </tr>

                <tr>
                    <th colspan="2">Обращаем внимание на то, что статьей 306 Уголовного кодекса Российской Федерации предусмотрена уголовная ответственность за заведомо ложный донос о совершении преступления. </th>
                </tr>

            </tbody>
        </table>




    </div>
</div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>