<edit header="Блок - две колонки (текст и виджеты)">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="divider-text">Левый блок</div>
    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" placeholder="Заголовок">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Подзаголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="subtitle" placeholder="Подзаголовок">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Тэги</label>
        <div class="col-sm-9">
            <wb-multiinput name="tags"></wb-multiinput>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12">Текст</label>
        <div class="col-12">
            <textarea name="text" wb-module="froalaeditor"></textarea>
        </div>
    </div>
    <div class="divider-text">Правый блок</div>
</edit>

<view>

    <div class="container">

        <div class="two-side">

            <div class="two-side-1">
                <h1 class="title"> {{title}} </h1>

                <div class="text-block block-corporate">

                    <h2 class="sub-title-text"> {{subtitle}} </h2>
                    <div class="ttext">
                        <wb-foreach wb="from=tags&tpl=false">
                        <div class="bggray">
                            {{_val}}
                        </div>
                        </wb-foreach>
                    </div>

                    <div class="formated">
                        {{text}}
                    </div>
                    <wb-jq wb="
                    $dom->find('.formated p')->addClass('ttext2');
                    $dom->find('.formated h2')->addClass('sub-title');
                    $dom->find('.formated h3')->addClass('sub-sub-title');
                    "/>
                    
                    <div class="ttext2">
                        В нашей компании широкий круг специалистов. Мы предлагаем Вам не только создание или разработку сайта с нуля (под ключ),
                        но и анализ и техподдержку уже созданного. Оказываем помощь в управлении готовым сайтом. Занимаемся
                        развитием и SEO продвижением корпоративных сайтов.
                    </div>

                    <div class="ttext2">
                        Гарантируем индивидуальный подход к каждому клиенту и беремся за решение любых задач по корпоративным сайтам и порталам.
                        Воплотим Ваши мечты в реальность - от идеи до реализации.
                    </div>

                    <div class="ttext2">
                        Свяжитесь с нами любым доступным способом: Заявка на сайте "начать проект", e-mail, телефон, сообщение в мессенджеры
                    </div>

                    <div class="ttext2">
                        Мы будем рады помочь Вам на всех этапах взаимодействия, начиная от первых консультаций по проекту, заканчивая составлением
                        технической документации по готовым решениям.
                    </div>

                </div>




                <div class="text-block  block-preimush">
                    <h2 class="sub-title"> Основные преимущества </h2>

                    <h3 class="sub-sub-title"> Гарантии — 12 месяцев </h3>

                    <div class="ttext2">
                        Мы предоставляем гарантию 12 месяцев на весь результат работ. Если в процессе эксплуатации выявляется ошибка, связанная с
                        нашей работой - мы бесплатно устраняем проблему в течение нескольких рабочих дней. Критические
                        (блокирующие) ошибки, влияющие на корректную работу сервиса устраняются в течение нескольких часов
                    </div>

                    <h3 class="sub-sub-title"> Современные технологии </h3>
                    <div class="ttext2">
                        Корпоративный сайт разрабатывается только на современных и стабильных технологиях — PHP7, Bitrix, VUE, Yii2, Laravel, JS/jQuery,
                        Rest API, база MongoDb/Mysql, Git, less. Так же мы используем собственную среду разработки Yonger,
                        это современный фреймворк со встроенной CMS и безграничными возможностями для развития.
                    </div>

                    <h3 class="sub-sub-title"> Соблюдение сроков </h3>
                    <div class="ttext2">
                        Отлаженные процессы и опыт помогают нам строго соблюдать оговоренные сроки. Срок — это приоритетно для нас.
                    </div>

                    <h3 class="sub-sub-title"> Большой опыт </h3>

                    <div class="ttext2">
                        Сильная команда с большой экспертизой, подтвержденной наградами, отзывами и успешным запуском проектов.
                    </div>

                </div>

            </div>


            <div class="two-side-1-5">
            </div>
            <div class="two-side-2">

                <div class="bblock">
                    <div class="btext"> Средняя стоимость и сроки </div>
                    <div class="bhtext"> Стоимость </div>
                    <div class="btext"> от 300 000 </div>
                    <div class="bhtext"> Сроки разработки </div>
                    <div class="btext"> от 20 рабочих дней </div>
                    <div class="ybutton zayav-button"> Отправить заявку </div>
                </div>


                <div class="bblock">
                    <div class="btext"> Что потребуется от Вас: * </div>

                    <div class="tlist">
                        <div>
                            — заполненный бриф;
                        </div>
                        <div>
                            — техническое задание;
                        </div>
                        <div>
                            — структура сайта (CJM);
                        </div>
                        <div>
                            — логотип в векторе;
                        </div>
                        <div>
                            — гайдбук и брендбук.
                        </div>
                    </div>

                    <div class="ttext3"> *Если у вас есть этот набор материалов — это упростит работу по проекту. Если нет, то не пугайтесь. Мы
                        поможем вам с их формированием. </div>
                </div>

                <div class="bblock">
                    <div class="btext"> Как начать сотрудничество </div>

                    <div class="ttext3">
                        Здесь Вы найдете все необходимое для начала сотрудничества, сможете ознакомиться с условиями и скачать типовые документы
                        и изучить четко описанные действия.
                    </div>

                    <button class="gbutton"> Посмотреть условия </button>


                </div>


                <div class="bblock">
                    <div class="btext"> Рекомендуем также услуги </div>

                    <div class="tlist">
                        <a href="#">
                            Кабинетные исследования
                        </a>
                        <a href="#">
                            Позиционирование
                        </a>
                        <a href="#">
                            Платформа бренда
                        </a>
                        <a href="#">
                            Коммуникационная стратегия
                        </a>
                        <a href="#">
                            Аудит бренда
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</view>