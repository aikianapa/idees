<view>
    <div class="service-page__section service-page__section--top container">
        <div class="service-page__title-container">
            <h1 class="page__title">Корпоративные сайты</h1>

            <p class="service-page__description">
                Основная функция корпоративных сайтов, это четко, последовательно и красиво презентавать услуги компании
            </p>

            <svg class="service-page__icon" width="360" height="120" aria-hidden="true">
                <use xlink:href="/assets/img/sprite.svg#develop"></use>
            </svg>
        </div>

        <div class="service-page__container">
            <section class="service-page__section service-page__section--column">
                <h2 class="visually-hidden">Этапы работы</h2>

                <ul class="service-page__stages">
                    <wb-foreach wb="from=list&tpl=false">
                    <li class="service-page__stage">
                        <h3 class="service-page__stage-title">{{list_title}}</h3>
                        <p class="service-page__stage-description">{{list_text}}</p>
                    </li>
                    </wb-foreach>
                </ul>
            </section>

            <aside class="service-page__aside">
                <h2 class="visually-hidden">Дополнительные требования</h2>
                <div class="service-page__aside-block service-page__aside-block--grey">
                    <h3 class="service-page__aside-title">Самое важное</h3>

                    <dl class="service-page__aside-params">
                        <dt class="service-page__aside-params-name">Стоимость</dt>
                        <dd class="service-page__aside-params-value">от {{number_format({{price}},0, "", " ")}} ₽</dd>

                        <dt class="service-page__aside-params-name">Сроки разработки</dt>
                        <dd class="service-page__aside-params-value">от {{days}} рабочих дней</dd>
                    </dl>

                    <button class="button js-form-open" type="button">
                        <span class="button__icon-wrapper">
                            <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </span>

                        <span class="button__text">отправить заявку</span>
                    </button>
                </div>

                <div class="service-page__aside-block">
                    <h3 class="service-page__aside-title">Может потребоваться: *</h3>

                    <ul class="servise-page__aside-list">
                        <wb-foreach wb="from=list1&tpl=false">
                        <li class="service-page__aside-list-item">{{_val}}</li>
                        </wb-foreach>
                    </ul>
                </div>

                <p class="service-page__aside-descr">
                    {{alert}}
                </p>
            </aside>
        </div>
    </div>
</view>

<edit header="Услуги - описание ">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control mb-1" type="text" name="title" placeholder="Заголовок">
        </div>
        <label class="col-sm-3">Текст</label>
        <div class="col-sm-9">
            <textarea class="form-control mb-1" rows="auto" name="text" placeholder="Текст"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6">
            <div class="divider-text">Этапы</div>
            <wb-multiinput name="list">
                <input class="form-control mb-1" type="text" name="list_title" placeholder="Заголовок">
                <textarea class="form-control mb-1" rows="auto" name="list_text" placeholder="Текст"></textarea>
            </wb-multiinput>
        </div>
        <div class="col-sm-6">
            <div class="divider-text">Подробности</div>
            <div class="form-group row">
                <label class="col-sm-3">Цена от</label>
                <div class="col-sm-9">
                    <input class="form-control mb-1" type="text" name="price" placeholder="Цена от">
                </div>
                <label class="col-sm-3">Срок от</label>
                <div class="col-sm-9">
                    <input class="form-control mb-1" type="text" name="days" placeholder="Срок от">
                </div>
            </div>
            <div class="divider-text">Может потребоваться</div>
            <wb-multiinput name="list1">
                <input class="form-control mb-1" type="text" name="list1" placeholder="Наименование">
            </wb-multiinput>
            <div class="form-group">
                <label for="my-input">Текст сноски</label>
                <textarea class="form-control mb-1" rows="auto" name="alert" placeholder="Текст сноски"></textarea>
            </div>
        </div>
    </div>
</edit>