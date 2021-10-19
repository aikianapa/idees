<view>
    <section>
        <ul class="category__list">
            <wb-foreach wb-from="cards">
            <li class="category__item">
                <h3 class="category__item-title" wb-if="'{{title}}'>''">{{title}}</h3>
                <p class="category__item-description" wb-if="'{{text}}'>''">{{text}}</p>

                <a class="button category__link" href="{{btnlink}}" wb-if="'{{btnlink}}'>''">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </span>

                    <span class="button__text">{{btntext}}</span>
                </a>
            </li>
            </wb-foreach>
        </ul>
    </section>
</view>

<edit header="Блок текста с заголовком и ссылкой">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multiinput name="cards">
        <input class="form-control mb-1" type="text" name="title" placeholder="Заголовок">
        <textarea class="form-control mb-1" rows="auto" name="text" placeholder="Текст"></textarea>
        <input class="form-control col-sm-6 mb-1" type="text" name="btntext" placeholder="Текст кнопки">
        <input class="form-control col-sm-6 mb-1" type="text" name="btnlink" placeholder="Ссылка кнопки">
    </wb-multiinput>
</edit>