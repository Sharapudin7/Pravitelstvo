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

    .president-reception__list li {
        font-size: 12px;
        line-height: 21px;
        margin-bottom: 10px;
    }

    .president-reception__description {
        font-size: 12px;
        line-height: 21px;
        margin-bottom: 10px;
        margin-top: 20px;
    }

    /* End */
</style>
<div class="content">
    <div class="contacts-page">
        <h1 class="contact__title">Приёмная Президента Российской Федерации в Республике Дагестан</h1>
        <table class="data-table">
            <tbody>
                <tr>
                    <th colspan="2">Приёмная Президента Российской Федерации в Республике Дагестан работает по адресу:</th>
                </tr>
                <tr>
                    <td>Адрес:</td>
                    <td>367005, г. Махачкала, площадь Ленина, д. 1, Дом Правительства.</td>
                </tr>
                <tr>
                    <td>Личный приём граждан работниками приёмной:</td>
                    <td>Вт, Чт. с 10.00 до 18.00. Перерыв с 13.00 до 13.45.</td>
                </tr>
                <tr>
                    <td>Выходные дни</td>
                    <td>суббота, воскресенье.</td>
                </tr>
                <tr>
                    <td>Справочные телефоны Приёмной Президента Российской Федерации:</td>
                    <td>(8722) 78-12-06 </td>
                </tr>
            </tbody>
        </table>
        <h3>Объявление. Личный прием граждан</h3>
        <div>
            <p class="president-reception__description">
                Учитывая складывающуюся санитарно-эпидемиологическую ситуацию, связанную с распространением новой коронавирусной инфекции (COVID-19), а также рекомендации Федеральной службы по надзору в сфере защиты прав потребителей и благополучия человека, личный прием граждан в приемной Президента Российской Федерации в Республике Дагестан ПРОВОДИТСЯ ПО ПРЕДВАРИТЕЛЬНОЙ ЗАПИСИ при предъявлении документа, удостоверяющего личность (паспорта).
            </p>
            <p class="president-reception__description">
                Кроме того, гражданам, записавшимся на личный прием, рекомендовано:
            </p>
            <ul class="president-reception__list">
                <li>
                    - соблюдать санитарно-противоэпидемические (профилактические) и ограничительные меры, принятые с учетом текущей эпидемиологической ситуации, а также рекомендации работников приемной Президента Российской Федерации в Республике Дагестан;
                </li>
                <li>
                    - отказаться от посещения приемной Президента Российской Федерации в Республике Дагестан имеющим признаки, не исключающие заболевание острой респираторной инфекцией (кашель, чихание, насморк, повышенная температура тела), а также заявителям, которые должны находиться на карантине или самоизоляции;
                </li>
                <li>
                    - заблаговременно подготовить соответствующее обращение с учетом требований Федерального закона от 2 мая 2006 г. № 59-ФЗ «О порядке рассмотрения обращений граждан», адресованное Президенту Российской Федерации (возможность подготовки обращения в письменной форме в помещениях, предназначенных для организации и проведения приема в приемной Президента Российской Федерации в Республике Дагестан, исключена);
                </li>
                <li>
                    - прибыть на прием в приемную Президента Российской Федерации в Республике Дагестан в установленное время при предварительной записи;
                </li>
                <li>
                    - использовать средства индивидуальной защиты (медицинские маски и перчатки).
                </li>
                <li>
                    Дополнительно информируем, что заявления, адресованные Президенту Российской Федерации, Вы можете направить в письменной форме в приемную Президента Российской Федерации в Республике Дагестан, либо в форме электронного документа через <a class="link" target="_blank" href="http://letters.kremlin.ru">официальный сайт Президента Российской Федерации</a> в сети Интернетна странице <a class="link" href="http://letters.kremlin.ru/send" target="_blank">«Отправить письмо»</a>.
                </li>
                <li>
                    Уважаемые граждане, принимаемые меры, прежде всего, направлены на охрану Вашего здоровья, здоровья Ваших близких и окружающих.
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>