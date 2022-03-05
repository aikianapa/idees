        <ol class="services-section__list">
            <wb-foreach wb="table=pages&tpl=false&sort=_sort" wb-filter="{'active':'on','path':'\/services'}">
                <li class="services-section__item">
                    <article class="service">
                        <h3 class="service__title">{{blocks.block_paragraph.title}}</h3>
                        <svg class="service__icon" width="180" height="60" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#{{name}}"></use>
                        </svg> 
                        <p class="service__description">{{blocks.block_paragraph.text}}</p>
                        <a class="service__link" href="/services/{{wbFurlGenerate({{name}})}}">Подробнее</a>
                    </article>
                </li>
            </wb-foreach>
        </ol>