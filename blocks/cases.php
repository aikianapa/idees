<view>
    <section class="cases-section container">
        <h2 class="visually-hidden">{{header}}</h2>
        <ul class="cases-section__list">
            <wb-var cover="" />
            <wb-foreach wb="table=projects&amp;tpl=false" wb-filter="active=on&home=on">
                <wb-foreach wb="from=blocks&tpl=false" wb-filter="name=project-descr">
                    <wb-var cover="{{cover.0.img}}" wb-if="'{{_var.cover}}' == ''" />
                </wb-foreach>
                <li class="cases-section__item">
                    <article class="case">
                        <a class="case__title-link-wrapper" href="/projects/{{wbFurlGenerate({{name}})}}">
                            <h3 class="case__title">{{name}}</h3>
                            <p class="case__description">{{descr}}</p>
                        </a>
                        <a class="case__image-wrapper lazy-wrapper" href="/projects/{{wbFurlGenerate({{name}})}}">
                            <img class="case__image lazy-wrapper__img loading" width="790" height="500"
                                 data-src="/thumbc/790x500/src/{{_var.cover}}"
                                 data-srcset="/thumbc/1580x1000/src/{{_var.cover}} 2x"
                                 alt="{{name}}">
                        </a>

                        <a class="button case__link" href="/projects/{{wbFurlGenerate({{name}})}}">
                            <span class="button__icon-wrapper">
                                <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                    <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                                </svg>
                            </span>

                            <span class="button__text">{{_parent.btntext}}</span>
                        </a>
                    </article>
                </li>
                <wb-var cover="" />
            </wb-foreach>
        </ul>
    </section>
</view>
<edit header="Кейсы" thumb="">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Текст кнопки перехода</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="btntext" placeholder="Текст кнопки">
        </div>
    </div>
    <div class="alert alert-info">
        Данные берутся из таблицы projects.
    </div>
</edit>