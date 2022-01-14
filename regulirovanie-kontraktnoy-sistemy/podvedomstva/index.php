<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Подведомственные учреждения");
?>
<style>
    .list {
        min-height: 200px;
        padding: 20px 0;
    }

    .list__top-buttons {
        display: grid;
        gap: 10px 20px;
        grid-template-columns: repeat(auto-fit, minmax(0, max-content));
        justify-content: flex-end;
        margin: 0 0 20px 0;
    }

    .list__item {
        padding: 20px 0;
        display: grid;
        grid-template-columns: max-content 1fr;
        gap: 20px;
        border-bottom: 1px solid var(--border-color);
    }

    .list__item--main {
        grid-template-columns: 1fr 1fr;
    }

    .list__item--no-photo {
        grid-template-columns: 100%;
    }

    .list__photo:hover {
        border: none;
    }

    .list__photo-image {
        border-radius: 4px;
        width: 100%;
    }

    .list__head {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .list__head>* {
        margin-bottom: 12px;
    }

    :root.root--special .list__item {
        border-color: var(--special-text-color);
    }

    @media (hover: hover) {
        .list__title>a:hover {
            text-decoration: underline;
            text-decoration-color: var(--primary-color-25);
        }
    }

    @media screen and (max-width: 735px) {
        .list__item {
            grid-template-columns: 100%;
        }

        .list__photo-image {
            width: 100%;
        }
    }
</style>
<section class="list">

    <article class="list__item">
        <a href="/about/suborg/32/" class="list__photo">
            <img alt="Государственное казенное учреждение Республики Башкортостан &quot;Информационные технологии&quot;" class="list__photo-image" src="/upload/resize_cache/alt/06d/06dc3be66551d78d0473e47632ae0b8a_136_85.png" srcset="/upload/resize_cache/alt/06d/06dc3be66551d78d0473e47632ae0b8a_272_170.png 2x">
        </a>
        <div class="list__detail">
            <div class="list__head">
                <div class="meta">
                    <div class="meta__item">
                        <svg width="17" height="20" class="meta__icon">
                            <use xlink:href="#icon-phone"></use>
                        </svg>
                        <span>+7 (347) 218-13-00</span>
                    </div>

                    <div class="meta__item">
                        <svg width="16" height="12" class="meta__icon">
                            <use xlink:href="#icon-mail"></use>
                        </svg>
                        <a href="mailto:it-gku@bashkortostan.ru">
                            it-gku@bashkortostan.ru </a>
                    </div>

                    <div class="meta__item">
                        <svg width="18" height="21" class="meta__icon">
                            <use xlink:href="#icon-link"></use>
                        </svg>
                        <a href="https://it-gku.bashkortostan.ru/" target="_blank">
                            https://it-gku.bashkortostan.ru/ </a>
                    </div>


                    <div class="meta__item">
                        <span>Руководитель:</span>
                        <span>Назаров Максим Владимирович</span>
                    </div>



                </div>
            </div>
            <div class="list-content">
                <h3 class="list__title">
                    <a href="/about/suborg/32/">Государственное казенное учреждение Республики Башкортостан "Информационные технологии"</a>
                </h3>


            </div>
        </div>
    </article>
    <article class="list__item">
        <a href="/about/suborg/31/" class="list__photo">
            <img alt="Государственное унитарное предприятие Центр информационно-коммуникационных технологий Республики Башкортостан" class="list__photo-image" src="/upload/resize_cache/alt/501/501c045ded96f36e5ed6edb769fbe96b_136_85.png" srcset="/upload/resize_cache/alt/501/501c045ded96f36e5ed6edb769fbe96b_272_170.png 2x">
        </a>
        <div class="list__detail">
            <div class="list__head">
                <div class="meta">
                    <div class="meta__item">
                        <svg width="17" height="20" class="meta__icon">
                            <use xlink:href="#icon-phone"></use>
                        </svg>
                        <span>+7 (347) 246-36-60</span>
                    </div>

                    <div class="meta__item">
                        <svg width="16" height="12" class="meta__icon">
                            <use xlink:href="#icon-mail"></use>
                        </svg>
                        <a href="mailto:support_cikt@bashkortostan.ru">
                            support_cikt@bashkortostan.ru </a>
                    </div>

                    <div class="meta__item">
                        <svg width="18" height="21" class="meta__icon">
                            <use xlink:href="#icon-link"></use>
                        </svg>
                        <a href="https://www.ciktrb.ru/" target="_blank">
                            https://www.ciktrb.ru/ </a>
                    </div>


                    <div class="meta__item">
                        <span>Руководитель:</span>
                        <span>Галикеев Ирек Анварович</span>
                    </div>



                </div>
            </div>
            <div class="list-content">
                <h3 class="list__title">
                    <a href="/about/suborg/31/">Государственное унитарное предприятие Центр информационно-коммуникационных технологий Республики Башкортостан</a>
                </h3>


            </div>
        </div>
    </article>

</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>