<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Общие сведения");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/index.css');
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
        margin: 20px 0;
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

    .table__description {
        font-size: 18px;

    }

    /* End */
</style>
<div class="content">
    <div class="contacts-page">
        <h3 class="table__title">Общие сведения</h3>
        <p class="table__description">Регулирование контрактной системы осуществляет министерство экономического развития и инвестиций Нижегородской области</p>
        <h3 class="table__title">Руководство</h3>

        <table class="table">
            <thead class="table__head">
                <tr class="table__row">
                    <th class="table__cell">
                        Сотрудник:
                    </th>
                    <th class="table__cell">
                        Подразделение:
                    </th>
                    <th class="table__cell">
                        Должность:
                    </th>

                </tr>
            </thead>
            <tbody class="table__body">
                <tr class="table__row worker">
                    <td class="table__cell">
                        <a class="worker__people" href="/about/structure/83/worker/137/">
                            <h3 class="worker__people-name">Исмагилов Денис Гамирович</h3>
                        </a>

                        <div class="worker__badges">
                        </div>

                    </td>
                    <td class="table__cell">
                        <div class="worker__department">
                            <a href="/about/structure/0/">
                                Mинистерство экономического развития и инвестиций Нижегородской области</a>
                        </div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__post">
                            Министр</div>
                    </td>
                </tr>

            </tbody>
        </table>
        <h3 class="table__title">Управление по развитию контрактной системы и внедрению стандарта закупочной деятельности</h3>
        <table class="table">
            <thead class="table__head">
                <tr class="table__row">
                    <th class="table__cell">
                        Сотрудник:
                    </th>
                    <th class="table__cell">
                        Подразделение:
                    </th>
                    <th class="table__cell">
                        Должность:
                    </th>
                    <th class="table__cell">
                        Контакты:
                    </th>

                </tr>
            </thead>
            <tbody class="table__body">
                <tr class="table__row worker">
                    <td class="table__cell">
                        <a class="worker__people" href="/about/structure/90/worker/171/">
                            <h3 class="worker__people-name">Бажанов Сергей Валиевич</h3>
                        </a>

                        <div class="worker__badges">
                        </div>

                    </td>
                    <td class="table__cell">
                        <div class="worker__department">
                            <a href="/about/structure/0/">
                                Управление по развитию контрактной системы и внедрению стандарта закупочной деятельности</a>
                        </div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__post">
                            Заместитель министра, начальник управления по развитию контрактной системы и внедрению стандартов закупочной деятельности</div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__contacts">
                            <div class="worker__schedule">
                                <p>Телефон:</p>
                                <a href="tel:+7 (831) 439−06−62">+7 (831) 439−06−62</a>
                            </div>
                        </div>
                    </td>

                </tr>
                <tr class="table__row worker">
                    <td class="table__cell">
                        <a class="worker__people" href="/about/structure/2624/worker/6294/">
                            <h3 class="worker__people-name">
                                Винокурова Мария Николаевна</h3>
                        </a>

                        <div class="worker__badges">
                        </div>

                    </td>
                    <td class="table__cell">
                        <div class="worker__department">
                            <a href="/about/structure/0/">
                                Управление по развитию контрактной системы и внедрению стандарта закупочной деятельности</a>
                        </div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__post">
                            Заместитель начальника управления, начальник отдела по регулированию контрактной системы и внедрению стандартов закупочной деятельности</div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__contacts">
                            <div class="worker__schedule">
                                <p>Телефон:</p>
                                <a href="tel:+7 (831) 439−06−62">+7 (831) 439−06−62</a>
                            </div>
                        </div>
                    </td>

                </tr>
                <tr class="table__row worker">
                    <td class="table__cell">
                        <a class="worker__people" href="/about/structure/93/worker/145/">
                            <h3 class="worker__people-name">
                                Еремеева Наталия Владимировна</h3>
                        </a>

                        <div class="worker__badges">
                        </div>

                    </td>
                    <td class="table__cell">
                        <div class="worker__department">
                            <a href="/about/structure/0/">
                                Управление по развитию контрактной системы и внедрению стандарта закупочной деятельности</a>
                        </div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__post">
                            Начальник отдела развития региональной информационной системы</div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__contacts">
                            <div class="worker__schedule">
                                <p>Телефон:</p>
                                <a href="tel:+7 (831) 439−06−62">+7 (831) 439−06−62</a>
                            </div>
                        </div>
                    </td>

                </tr>
                <tr class="table__row worker">
                    <td class="table__cell">
                        <a class="worker__people" href="/about/structure/93/worker/145/">
                            <h3 class="worker__people-name">
                                Мохначева Наталья Владимировна</h3>
                        </a>

                        <div class="worker__badges">
                        </div>

                    </td>
                    <td class="table__cell">
                        <div class="worker__department">
                            <a href="/about/structure/0/">
                                Управление по развитию контрактной системы и внедрению стандарта закупочной деятельности</a>
                        </div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__post">
                            Начальник отдела Федеральных адресных инвестиционных программ</div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__contacts">
                            <div class="worker__schedule">
                                <p>Телефон:</p>
                                <a href="tel:+7 (831) 439−06−62">+7 (831) 439−06−62</a>
                            </div>
                        </div>
                    </td>

                </tr>
            </tbody>
        </table>
        <h3 class="table__title">Управление анализа и оптимизации затрат для нужд области</h3>
        <table class="table">
            <thead class="table__head">
                <tr class="table__row">
                    <th class="table__cell">
                        Сотрудник:
                    </th>
                    <th class="table__cell">
                        Подразделение:
                    </th>
                    <th class="table__cell">
                        Должность:
                    </th>
                    <th class="table__cell">
                        Контакты:
                    </th>

                </tr>
            </thead>
            <tbody class="table__body">
                <tr class="table__row worker">
                    <td class="table__cell">
                        <a class="worker__people" href="/about/structure/90/worker/171/">
                            <h3 class="worker__people-name">Бажанов Сергей Валиевич</h3>
                        </a>

                        <div class="worker__badges">
                        </div>

                    </td>
                    <td class="table__cell">
                        <div class="worker__department">
                            <a href="/about/structure/0/">
                                Управление по развитию контрактной системы и внедрению стандарта закупочной деятельности</a>
                        </div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__post">
                            Заместитель министра, начальник управления по развитию контрактной системы и внедрению стандартов закупочной деятельности</div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__contacts">
                            <div class="worker__schedule">
                                <p>Телефон:</p>
                                <a href="tel:+7 (831) 439−06−62">+7 (831) 439−06−62</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="table__row worker">
                    <td class="table__cell">
                        <a class="worker__people" href="/about/structure/2624/worker/6294/">
                            <h3 class="worker__people-name">Винокурова Мария Николаевна</h3>
                        </a>

                        <div class="worker__badges">
                        </div>

                    </td>
                    <td class="table__cell">
                        <div class="worker__department">
                            <a href="/about/structure/0/">
                                Управление по развитию контрактной системы и внедрению стандарта закупочной деятельности</a>
                        </div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__post">
                            Заместитель начальника управления, начальник отдела по регулированию контрактной системы и внедрению стандартов закупочной деятельности</div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__contacts">
                            <div class="worker__schedule">
                                <p>Телефон:</p>
                                <a href="tel:+7 (831) 439−06−62">+7 (831) 439−06−62</a>
                            </div>
                        </div>
                    </td>

                </tr>
                <tr class="table__row worker">
                    <td class="table__cell">
                        <a class="worker__people" href="/about/structure/93/worker/145/">
                            <h3 class="worker__people-name">Еремеева Наталия Владимировна</h3>
                        </a>

                        <div class="worker__badges">
                        </div>

                    </td>
                    <td class="table__cell">
                        <div class="worker__department">
                            <a href="/about/structure/0/">
                                Управление по развитию контрактной системы и внедрению стандарта закупочной деятельности</a>
                        </div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__post">
                            Начальник отдела развития региональной информационной системы</div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__contacts">
                            <div class="worker__schedule">
                                <p>Телефон:</p>
                                <a href="tel:+7 (831) 439−06−62">+7 (831) 439−06−62</a>
                            </div>
                        </div>
                    </td>

                </tr>
                <tr class="table__row worker">
                    <td class="table__cell">
                        <a class="worker__people" href="/about/structure/93/worker/145/">
                            <h3 class="worker__people-name">Мохначева Наталья Владимировна</h3>
                        </a>

                        <div class="worker__badges">
                        </div>

                    </td>
                    <td class="table__cell">
                        <div class="worker__department">
                            <a href="/about/structure/0/">
                                Управление по развитию контрактной системы и внедрению стандарта закупочной деятельности</a>
                        </div>
                    </td>
                    <td class="table__cell">
                        <div class="worker__post">
                            Начальник отдела Федеральных адресных инвестиционных программ</div>
                    </td>

                    <td class="table__cell">
                        <div class="worker__contacts">
                            <div class="worker__schedule">
                                <p>Телефон:</p>
                                <a href="tel:+7 (831) 439−06−62">+7 (831) 439−06−62</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>