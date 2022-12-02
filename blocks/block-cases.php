<view>
    <section class="service-page__section container pt-0">
        <h2  class="sub-title" wb-if="'{{title}}'==''">Кейсы</h2>
        <h2  class="sub-title" wb-if="'{{title}}'&gt;''">{{title}}</h2>

        <div class="cases">
            <wb-var cover="" />
            <wb-foreach wb="from=projects&tpl=false">
                <wb-data wb="table=projects&item={{_val}}">



				<div class="case" wb-if="'{{active}}'=='on'">
                    <wb-foreach wb="from=blocks&tpl=false" wb-filter="name=project-descr">
                        <wb-var cover="{{cover.0.img}}" wb-if="'{{_var.cover}}' == ''" />
                    </wb-foreach>
					<a href="/projects/{{wbFurlGenerate({{name}})}}" class="case-image case__image-wrapper  ttext">
						<img src="/thumbc/700x400/src{{_var.cover}}" class="case__image">
					</a>
					<a href="/projects/{{wbFurlGenerate({{name}})}}" class="case-description  ttext">
						{{descr}}
					</a>
				</div>
<!--
                    <li class="cases-section__item" wb-if="'{{active}}'=='on'">
                        <wb-foreach wb="from=blocks&tpl=false" wb-filter="name=project-descr">
                            <wb-var cover="{{cover.0.img}}" wb-if="'{{_var.cover}}' == ''" />
                        </wb-foreach>

                        <article class="case">
                            <a class="case__title-link-wrapper" href="/projects/{{_id}}/{{wbFurlGenerate({{name}})}}">
                                <h3 class="case__title">{{name}}</h3>
                                <p class="case__description">{{descr}}</p>
                            </a>
                            <a class="case__image-wrapper" href="/projects/{{_id}}/{{wbFurlGenerate({{name}})}}">
                                <img class="case__image" width="790" height="500"
                                    data-src="/thumbc/790x500/src/{{_var.cover}}"
                                    data-srcset="/thumbc/1580x1000/src/{{_var.cover}} 2x" alt="{{name}}">
                            </a>
                        </article>
                    </li>
-->
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
            <select name="projects" class="form-control" wb-select2 multiple>
                <wb-foreach wb="table=projects" wb-filter="active=on">
                    <option value="{{_id}}" selected wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'=='1'">
                        {{name}}</option>
                    <option value="{{_id}}" wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'!='1'">
                        {{name}}</option>
                </wb-foreach>
            </select>
        </div>
    </div>
</edit>