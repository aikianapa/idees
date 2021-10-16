<view>
    <section class="services-section container">
        <div class="services-section__container">
            <h2 class="services-section__title">{{header}}</h2>

            <div class="services-section__descrpiption-container">
                <p class="services-section__descrpiption" style="white-space: break-spaces;">{{text}}</p>
            </div>

            <button class="button services-section__button js-form-open" type="button">
                <span class="button__icon-wrapper">
                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                    </svg>
                </span>

                <span class="button__text">начать проект</span>
            </button>
        </div>

        <ol class="services-section__list">
            <wb-foreach wb-from="services">
            <li class="services-section__item">
                <article class="service">
                    <h3 class="service__title">{{title}}</h3>
                    <svg class="service__icon" width="180" height="60" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#{{sprite}}"></use>
                    </svg>
                    <p class="service__description">{{text}}</p>
                    <a class="service__link" href="{{link}}">Подробнее</a>
                </article>
            </li>
            </wb-foreach>
        </ol>
    </section>

</view>
<edit header="Главная - услуги">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Текст кнопки</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="btntext" placeholder="Текст кнопки">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Текст</label>
        <div class="col-sm-9">
            <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
        </div>
    </div>
    <wb-multiinput name="services">
        <div class="col-sm-4">
            <input class="form-control mb-1" type="text" name="title" placeholder="Заголовок">
        </div>
        <div class="col-sm-4">
            <input class="form-control mb-1" type="text" name="link" placeholder="Ссылка">
        </div>
        <div class="col-sm-4">
<select name="sprite" placeholder="Спрайт" class="form-control">
    <wb-foreach wb-json='["strategy","branding","develop","design"]'>
    <option value="{{_val}}">{{_val}}</option>
    </wb-foreach>
</select>
        </div>
        <div class="col-12">
            <textarea class="form-control mb-1" rows="auto" name="text" placeholder="Текст"></textarea>
        </div>
        </div>
    </wb-multiinput>
</edit>