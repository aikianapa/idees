<view>
    <section class="section-outer gray-box-clear">
        <div class="services-section">
            <div class="container">
                <div class="services-section__container" wb-if="'{{title}}'>'' OR '{{text}}'>''">
                    <h2 class="services-section__title" wb-if="'{{title}}'>''" >{{title}}</h2>

                    <div class="services-section__descrpiption-container" wb-if="'{{text}}'>''">
                        <p class="services-section__descrpiption text-break">{{text}}</p>
                    </div>

                    <button class="ybutton services-section__button js-form-open" type="button">
                        начать проект
                    </button>
                </div>
            </div>
        </div>
        <div class="about-regards">
            <div class="container">
                <div class="about-regards__list counter-list">
                    <div class="about-regards__item">
                        <div class="about-regards__item-count">
                            <span class="about-regards__item-count-number">2012</span>
                        </div>
                        <div class="about-regards__item-title">Год основания</div>
                        <div class="about-regards__item-description">
                            Внимательно относимся к деталям, занимаемся сложными задачами и гарантировано исполняем свои
                            обязательства. Не работаем формально, качество приоритетно.
                        </div>
                    </div>
                    <div class="about-regards__item">
                        <div class="about-regards__item-count">
                            ><span class="about-regards__item-count-number">500</span>
                        </div>
                        <div class="about-regards__item-title">Реализованных проектов</div>
                        <div class="about-regards__item-description">
                            Внимательно относимся к деталям, занимаемся сложными задачами и гарантировано исполняем
                            свои обязательства. Не работаем формально, качество приоритетно.
                        </div>
                    </div>
                    <div class="about-regards__item">
                        <div class="about-regards__item-count">
                            <span class="about-regards__item-count-number">45</span> +
                        </div>
                        <div class="about-regards__item-title">Человек в команде</div>
                        <div class="about-regards__item-description">
                            Внимательно относимся к деталям, занимаемся сложными задачами и гарантировано исполняем
                            свои обязательства. Не работаем формально, качество приоритетно.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <wb-module wb="module=yonger&mode=render&view=block-services-list" />
</view>
<edit header="Список категорий услуг">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" placeholder="Заголовок">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Текст</label>
        <div class="col-sm-9">
            <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
        </div>
    </div>
    <div class="alert alert-info">
        Контент блока генерируется автоматически на основе существующих страниц.
    </div>
</edit>