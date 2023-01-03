<view>
    <section class="services-section container">
        <div class="services-section__container" wb-if="'{{title}}'>'' OR '{{text}}'>''">
            <h2 class="services-section__title" wb-if="'{{title}}'>''" >{{title}}</h2>

            <div class="services-section__descrpiption-container" wb-if="'{{text}}'>''">
                <p class="services-section__descrpiption text-break">{{text}}</p>
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

        <wb-include wb-tpl="services-category.inc.php" />
    </section>
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
    <div class="alert alert-info">
        Контент блока генерируется автоматически на основе существующих страниц.
    </div>
</edit>