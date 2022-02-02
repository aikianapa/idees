<view>
    <section class="services-section container">
        <wb-var mb80="mb-80" wb-if="'{{btntext}}'==''" else=""></wb-var>
        <div class="services-section__container {{_var.mb80}}">
            <h2 class="services-section__title">{{header}}</h2>
        </div>
        <ol class="services-section__list">
            <wb-foreach wb="table=pages&amp;tpl=false&amp;sort=name" wb-filter="{'active':'on','path':'\/services'}">
                <li class="services-section__item">
                    <article class="service">
                        <h3 class="service__title">{{blocks.block_paragraph.title}}</h3>
                        <svg class="service__icon" width="180" height="60" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#{{name}}"></use>
                        </svg>
                        <p class="service__description">{{blocks.block_paragraph.text}}</p>
                        <a class="service__link" href="/services/%7B%7B_id%7D%7D/%7B%7BwbFurlGenerate(%7B%7Bname%7D%7D)%7D%7D">Подробнее</a>
                    </article>
                </li>
            </wb-foreach>
        </ol>
    </section>
</view>
<edit header="Категории услуг">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="alert alert-info">
        Контент блока генерируется автоматически на основе существующих страниц в /services.
    </div>
</edit>