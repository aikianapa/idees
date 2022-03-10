<view>

    <section class="page__section page__section--grey">
        <h2 class="visually-hidden">{{header}}</h2>
        <div class="special__section-container container">
            <p class="special__big-text">
                {{title}}
            </p>

            <p class="special__sub-descr">{{text}}</p>

            <ul class="special__contacts">
                <li class="special__contacts-item">
                    <span class="special__contacts-name">Почта для вопросов</span>
                    <a class="special__contacts-value" href="mailto:{{_sett.email}}">{{_sett.email}}</a>
                </li>

                <li class="special__contacts-item">
                    <span class="special__contacts-name">Телефон для связи</span>
                    <a class="special__contacts-value" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_sett.phone}}</a>
                </li>
            </ul>
        </div>
    </section>
    
</view>

<edit header="Большой текст + контакты">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <textarea class="form-control" rows="auto" name="title" placeholder="Большой текст"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Текст</label>
        <div class="col-sm-9">
            <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
        </div>
    </div>
</edit>