<view>
    <section class="section container">
        <div class="title-section">
            <h2 class="title-section__title" wb-if="'{{title}}'==''">Проекты</h2>
            <h2 class="sub-title" wb-if="'{{title}}'&gt;''">{{title}}</h2>
            <a href="#" class="title-section__link big-link">
                <div class="big-link__wrapper">
                    <span class="big-link__text">Все <span class="big-link__text-all">проекты</span></span>
                    <i class="big-link__icon-arrow">
                        <svg class="big-link__icon-arrow-svg" width="34" height="9" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#big-arrow"></use>
                        </svg>
                    </i>
                </div>
            </a>
        </div>
        <div class="cases-new">
            <wb-var cover="" />
            <wb-foreach wb="from=projects&tpl=false">
                <wb-data wb="table=projects&item={{_val}}">
                    <div class="cases-new__case" wb-if="'{{active}}'=='on'">
                        <wb-foreach wb="from=blocks&tpl=false" wb-filter="name=project-descr">
                            <wb-var cover="{{cover.0.img}}" wb-if="'{{_var.cover}}' == ''" />
                        </wb-foreach>
                        <a href="/projects/{{wbFurlGenerate({{name}})}}" class="cases-new__img-link lazy-wrapper ttext">
                            <div class="cases-new__img-wrapper">
                                <img class="cases-new__img loading lazy-wrapper__img"
                                     data-src="/thumbc/700x400/src{{_var.cover}}"
                                     data-srcset="/thumbc/1580x1000/src{{_var.cover}} 2x" alt="{{descr}}">
                            </div>
                        </a>
                        <a href="/projects/{{wbFurlGenerate({{name}})}}" class="cases-new__description">
                            {{descr}}
                        </a>
                    </div>
                </wb-data>
                <wb-var cover="" />
            </wb-foreach>
        </div>
    </section>
</view>
<edit header="Блок - Кейсы">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc"></wb-module>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <label class="form-control-label">Заголовок блока</label>
            <input type="text" name="title" class="form-control" placeholder="Кейсы">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2">Показать проекты</label>
        <div class="col-sm-10">
            <input wb-module="selectcases" name="projects" multiple>
        </div>
    </div>
</edit>