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