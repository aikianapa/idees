<view>
    <section class="services-section container">
        <wb-var mb80="mb-80" wb-if="'{{btntext}}'==''" else=""></wb-var>
        <div class="services-section__container {{_var.mb80}}">
            <h2 class="services-section__title">{{header}}</h2>
        </div>

        <ol class="services-section__list">
            <wb-foreach wb="table=services&tpl=false&sort=name" wb-filter="{'active':'on','id':{'$ne': '{{_parent.id}}' }}">
                <li class="services-section__item">
                    <article class="service">
                        <h3 class="service__title">{{name}}</h3>
                        <svg class="service__icon" width="180" height="60" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#{{sprite}}"></use>
                        </svg>
                        <p class="service__description">{{descr}}</p>
                        <a class="service__link" href="/services/{{wbFurlGenerate({{name}})}}">Подробнее</a>
                    </article>
                </li>
            </wb-foreach>
        </ol>
    </section>
</view>
<edit header="Главная - услуги">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="alert alert-info">
        Контент блока генерируется автоматически на основе существующих проектов.
    </div>
</edit>