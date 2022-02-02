<view>
    <section class="services container">
        <div class="page__title-container">
            <h1 class="page__title">{{title}}</h1>
        </div>

        <ol class="services__list">
            <wb-foreach wb="table=pages&tpl=false" wb-filter="{
                'active':'on',
                'path':'\/services'
            }">
                <wb-data wb="field=blocks.block_paragraph">
                <li class="services__item" wb-if="'{{active}}'=='on'">
                    <h2 class="services__item-title">
                        <a class="services__item-link" href="{{_parent.url}}" wb-if="'{{title}}'==''">{{_parent.header}}</a>
                        <a class="services__item-link" href="{{_parent.url}}" wb-if="'{{title}}'>''">{{title}}</a>
                    </h2>

                    <p class="services__item-description">{{text}}</p>

                    <ul class="services__sub-list">
                        <wb-foreach wb="table={{_parent.attach}}&tpl=false" wb-filter="{{_parent.attach_filter}}">
                        <li class="services__sub-list-item">
                            <a class="services__item-link" href="{{_parent._parent.url}}/{{wbFurlGenerate({{name}})}}">{{name}}</a>
                        </li>
                        </wb-foreach>
                    </ul>

                    <svg class="services__icon" width="180" height="60" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#strategy"></use>
                    </svg>
                </li>
                </wb-data>
            </wb-foreach>
        </ol>

    </section>
</view>

<edit header="Услуги">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="alert alert-info">
        Список услуг формируется автоматически на основе данных раздела Услуги.
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" placeholder="Заголовок">
        </div>
    </div>

</edit>