<view>
    <section class="section-outer gray-box-clear">
        <div class="services-section">
            <div class="container">
                <div class="services-section__container" wb-if="'{{title}}'>'' OR '{{text}}'>''">
                    <h2 class="services-section__title" wb-if="'{{title}}'>''">{{title}}</h2>

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
                    <wb-foreach wb="from=list&tpl=false">
                        <div class="about-regards__item">
                            <div class="about-regards__item-count">
                                {{preffix}}<span class="about-regards__item-count-number">{{number}}</span>{{suffix}}
                            </div>
                            <div class="about-regards__item-title">{{subtitle}}</div>
                            <div class="about-regards__item-description text-break">{{subtext}}</div>
                        </div>
                    </wb-foreach>
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

    <wb-multiinput name="list">
        <div class="col">
            <input class="form-control tx-right" type="text" name="preffix" placeholder="Префикс">
        </div>
        <div class="col-2">
            <input class="form-control tx-center tx-bold" type="number" name="number" placeholder="Число">
        </div>
        <div class="col">
            <input class="form-control tx-left" type="text" name="suffix" placeholder="Суффикс">
        </div>
        <div class="col-6">
            <input class="form-control tx-bold" type="text" name="subtitle" placeholder="Заголовок">
        </div>
        <div class="col-12 mt-1">
            <textarea class="form-control" rows="auto" name="subtext" placeholder="Текст"></textarea>
        </div>
    </wb-multiinput>
</edit>