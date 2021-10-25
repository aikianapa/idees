<view>
    <section class="services">
        <div class="page__title-container">
            <h1 class="page__title">{{title}}</h1>
        </div>

        <ol class="services__list">
            <wb-foreach wb="from=list&tpl=false">
                <li class="services__item">
                    <h2 class="services__item-title">
                        <a class="services__item-link" href="{{blk_title_link}}">{{blk_title}}</a>
                    </h2>

                    <p class="services__item-description">{{blk_text}}</p>

                    <ul class="services__sub-list">
                        <wb-foreach wb="from=links&tpl=false">
                        <li class="services__sub-list-item">
                            <a class="services__item-link" href="{{lnk_text}}">{{lnk_label}}</a>
                        </li>
                        </wb-foreach>
                    </ul>

                    <svg class="services__icon" width="180" height="60" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#strategy"></use>
                    </svg>
                </li>
            </wb-foreach>
        </ol>

    </section>
</view>

<edit header="Услуги">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" placeholder="Заголовок">
        </div>
    </div>
    <wb-multiinput name="list">
        <div class="col-12">
            <div class="form-group row">
                <label class="col-sm-3">Заголовок блока</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="blk_title" placeholder="Заголовок блока">
                </div>
                <div class="col-sm-5">
                    <input class="form-control" type="text" name="blk_title_link" placeholder="Ссылка заголовка">
                </div>
                <label class="col-sm-3">Текст</label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="auto" name="blk_text" placeholder="Текст"></textarea>
                </div>
                <label class="col-sm-3">Ссылки</label>
                <div class="col-sm-9">
                    <wb-multiinput name="links">
                        <input class="form-control col-sm-6 mb-1" name="lnk_label" placeholder="Текст ссылки">
                        <input class="form-control col-sm-6 mb-1" name="lnk_text" placeholder="Ссылка">
                    </wb-multiinput>
                </div>
            </div>
        </div>
    </wb-multiinput>
</edit>