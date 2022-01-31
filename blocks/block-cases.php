<view><section class="service-page__section container pt-0">
        <h2 class="service-page__section-title" wb-if="'{{title}}'==''">Кейсы</h2>
        <h2 class="service-page__section-title" wb-if="'{{title}}'&gt;''">{{title}}</h2>

        <ul class="cases-section__list cases-section__list--blocks cases-section__list--without-top-borders">
            <wb-foreach wb="from=projects&amp;tpl=false">
                <li class="cases-section__item">
                    <wb-data wb="table=projects&amp;item={{_val}}">
                        <article class="case">
                            <a class="case__title-link-wrapper" href="/projects/%7B%7B_id%7D%7D/%7B%7BwbFurlGenerate(%7B%7Bname%7D%7D)%7D%7D">
                                <h3 class="case__title">{{name}}</h3>
                                <p class="case__description">{{descr}}</p>
                            </a>
                            <a class="case__image-wrapper" href="/projects/%7B%7B_id%7D%7D/%7B%7BwbFurlGenerate(%7B%7Bname%7D%7D)%7D%7D">
                                <img class="case__image" width="790" height="500" data-src="/thumbc/790x500/src/{{cover.0.img}}" data-srcset="/thumbc/1580x1000/src/{{cover.0.img}} 2x" alt="{{name}}">
                            </a>
                        </article>
                    </wb-data>
                </li>
            </wb-foreach>
        </ul>

    </section></view><edit header="Блок - Кейсы"><div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
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
            <select name="projects" class="form-control" wb-select2 multiple>
                <wb-foreach wb="table=projects" wb-filter="active=on">
                    <option value="{{_id}}" selected wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'=='1'">
                        {{name}}</option>
                    <option value="{{_id}}" wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'!='1'">
                        {{name}}</option>
                </wb-foreach>
            </select>
        </div>
    </div></edit>