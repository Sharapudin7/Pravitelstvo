<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дагестан в лицах");
CModule::IncludeModule('iblock');
$property_enums = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>15, "XML_ID"=>2));
if($enum_fields = $property_enums->GetNext())
{
    $arFilter = Array("IBLOCK_ID"=>15, "ACTIVE"=>"Y", "=PROPERTY_FOR_PAGE"=>$enum_fields["ID"]);
    $res = CIBlockElement::GetList(Array("ID"=>"ASC"), $arFilter, false, Array(), array( 'IBLOCK_ID', "ID", "NAME"));
    if ($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $arFields["PROPERTIES"] = $ob->GetProperties();
        $ids= $arFields["PROPERTIES"]['IMAGES']['VALUE'];
        rsort($ids);
    }
}

?>
<div class="main-text">
    <h3 class="block-title">Дагестан в лицах</h3>

    <img  alt="Расул Гамзатов" src="/images/rasul_gamzatov.png"  align="left" class="main-img-ras">

    Не только имеющиеся природные ресурсы и значительный экономический потенциал определяют дальнейшее развитие
    республики. Богатство Дагестана - его люди. Много славных имен связано с дагестанской землей.
    <br>
    <br>
    Народный поэт Дагестана Расул Гамзатов (1923-2003 гг.) является символом и гордостью дагестанской и российской литературы, выдающимся поэтом современности.
    <br>
    <br>
    Герой Советского союза, Заслуженный деятель республики Дагестан летчик-космонавт Муса Манаров осуществил два
    космических полета, во время которых совершил 7 выходов в открытый космос общей продолжительностью 34 часа 23
    минуты.
    <br>
    <br>
    Булач Гаджиев, Заслуженный учитель Дагестана и РСФСР, Народный учитель СССР, автор более 40 книг, 55 лет бессменно
    преподавал курс истории и обществоведения в средней школе г. Буйнакска, 45 лет руководил Клубом краеведов школы и
    свыше 40 лет был автором и ведущим телепередачи "В стране легенд и преданий".
    <br>
    <br>
    Академик Гаджи Гамзатов - выдающийся ученый в области филологии, культурологии и искусствознания, действительный
    член РАН по Отделению литературы и языка, председатель Президиума Дагестанского научного центра РАН.
    <br>
    <br>
    Член Государственного Совета Республики Дагестан Гамзат Гамзатов с 1993 по 2006 гг. возглавлял ОАО "Дагэнерго", в
    настоящее время является полномочным представителем ОАО РАО "ЕЭС России" по вопросам реформирования
    электроэнергетического комплекса Республики Дагестан.
    <br>
    <br>
    Герой Социалистического труда, доктор сельскохозяйственных наук, профессор, действительный член Академии
    технологических наук РФ Нариман Алиев - автор более 70 научных трудов, почти 50 лет руководит совхозом им. Ш.
    Алиева, где разработал и внедрил новые, революционные методики виноградарства и виноделия.
    <br><br>
    Герой Российской Федерации и Заслуженный летчик-испытатель РФ Магомед Толбоев с 1996 по 1998 гг. был секретарем
    Совета безопасности Республики Дагестан, позднее работал начальником авиации Московского округа Внутренних войск и
    главным инспектором МВД России, с 1997 года является почетным Президентом Международного аэрокосмического салона
    МАКС.
    <br>
    <br>
    Фазу Алиева - Народная поэтесса Дагестана, Председатель Союза женщин республики, главный редактор журнала "Женщина
    Дагестана", Депутат Верховного Совета ДАССР пяти созывов - в течение 15 лет являлась заместителем Председателя
    Верховного Совета ДАССР. С 1971 года - Председатель Дагестанского комитета защиты мира и отделения Советского Фонда
    Мира Дагестана, член Всемирного Совета Мира, член Общественной палаты страны.
    <br>
    <br>
    Дагестанский композитор Ширвани Чалаев - автор партитуры гимна Республики Дагестан, девяти опер, трех симфоний,
    двадцати пяти концертов для солирующих инструментов с оркестром, песен для солистов и хора, камерных сочинения.
    Имеет почетное звание "Народный артист Российской Федерации", член Союза композиторов РФ, лауреат многих
    республиканских, всесоюзных и международных конкурсов. В 1998 году был удостоен государственной премии Российской
    Федерации за вокальный цикл на стихи А. Пушкина и М. Лермонтова "Посвящение" и за Второй концерт для скрипки с
    оркестром.
    <br>
    <br>
    Мурад Кажлаев, заслуженный деятель искусств России, Народный артист СССР, лауреат высшей музыкальной награды России
    - Государственной премии РСФСР им. М. И. Глинки, член Союза композиторов СССР, автор таких знаменитых произведений,
    как симфоническая поэма "Памяти 28 героев-панфиловцев" и национальный балет "Горянка" - хореографическая трагедия по
    поэме Расула Гамзатова. В 1958 году он приехал в Москву и стал сотрудничать с музыкантами эстрадно-симфонического
    оркестра и его дирижёром Ю.В. Силантьевым, записывать с ними свои оркестровые произведения. В 1989 году М. Кажлаев
    стал художественным руководителем и главным дирижером Академического большого концертного оркестра Всесоюзного
    радио, более 20 лет участвовал в работе комиссий по присуждению Государственных и Ленинских премий, выступал членом
    жюри международных конкурсов "Сопот", "Братиславская лира", "Золотой Орфей", возглавлял российские и международные
    фестивали эстрадной песни. Признанием важной роли маэстро в становлении современной национальной музыки стало
    учреждение в Дагестане конкурса эстрадной песни им. Мурада Кажлаева.
    <br>
    <br>
</div>

<div class="gallery">
    <?php if($ids){?>
        <h3 class="block-title">Галерея изображений</h3>
        <div class="dag-peoples-gallery">
            <?php foreach ($ids as $item){?>
                <div class="dag-peoples-gallery__item">
                    <img src="<?=CFile::GetPath($item)?>" alt="">
                </div>
        <? } }?>
        </div>
</div>
    <style>
        .block-title{
            padding-top: 38px;
            padding-bottom: 40px;
        }
        .main-img-ras{
           margin-right:22px;
            height:516px !important;
            width:368px !important;
        }

        .main-text{
            font-size: 18px;
            color: #011545;
            line-height:22px;
        }
        .dag-peoples-gallery__item {
            margin-right: 10px;
        }
    </style>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>