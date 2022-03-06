<view>
    <wb-var vacancy='' />
    <wb-data wb="table=vacancies&item={{_route.item}}">
        <wb-var vacancy='{{_current}}' />
    </wb-data>
    <div class="vacancy container" wb-if="'{{_var.vacancy.active}}'=='on'">
        <h1 class="page__title">{{_var.vacancy.name}}</h1>
        <title>Вакансия - {{_var.vacancy.name}}</title>
        <div class="vacancy__container">
            <section class="vacancy__content">
                <p style="text-break">{{_var.vacancy.text}}</p>

                <h3>Задачи</h3>
                <ul>
                    <wb-foreach wb="from=_var.vacancy.tasks">
                        <li>{{_val}}</li>
                    </wb-foreach>
                </ul>

                <h3>Требования</h3>

                <ul>
                    <wb-foreach wb="from=_var.vacancy.skils">
                        <li>{{_val}}</li>
                    </wb-foreach>
                </ul>

                <h3>Условия</h3>

                <ul>
                    <wb-foreach wb="from=_var.vacancy.enviroment">
                        <li>{{_val}}</li>
                    </wb-foreach>
                </ul>
            </section>

            <aside class="vacancy__contacts">
                <div>
                    <wb-data wb="table=pages" wb-filter="name=vacancies">
                        <wb-foreach wb="from=blocks&tpl=false&limit=1" wb-filter="{'name':'block-vacancy'}">
                            <h2 class="vacancy__contacts-title" wb-if="'{{title}}'==''">Контакты отдела HR:</h2>
                            <h2 class="vacancy__contacts-title" wb-if="'{{title}}'> ''">{{title}}</h2>

                            <ul class="vacancy__contacts-list">
                                <li class="vacancy__contacts-item" wb-if="'{{phone}}'> ''">
                                    <a class="vacancy__contacts-link" href="tel:+{{wbDigitsOnly({{phone}})}}" target="_blank">{{phone}}</a>
                                </li>
                                <li class="vacancy__contacts-item">
                                    <a class="vacancy__contacts-link" href="email:{{email}}" target="_blank">{{email}}</a>
                                </li>
                                <li class="vacancy__contacts-item">
                                    <a class="vacancy__contacts-link" href="https://t.me/{{telegram}}" target="_blank">@{{telegram}}</a>
                                </li>
                            </ul>
                    </wb-data>
                    </wb-foreach>
                </div>
                <a class="button vacancy__contacts-button" href="#vacancy-form">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </span>

                    <span class="button__text">отправить заявку</span>
                </a>
            </aside>

        </div>
    </div>
</view>
<edit header="Страница вакансии">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Текст</label>
        <div class="col-sm-9">
            <textarea rows="auto" name="text" class="form-control"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3">Контакты</label>
        <div class="col-sm-9">
            <div class="card">
                <div class="card-title mb-0">
                    <input type="text" class="form-control bd-0 tx-semibold" name="title" placeholder="Контакты отдела HR:">
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-3">Телефон</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" wb-mask="+7 (999) 999-99-99" name="phone" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Эл.почта</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Telegram</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input class="form-control" type="text" name="telegram" placeholder="Telegram">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Условия</label>
        <div class="col-sm-9">
            <wb-multiinput name="enviroment" />
        </div>
    </div>
</edit>