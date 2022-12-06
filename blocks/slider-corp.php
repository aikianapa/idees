<view>
<section class="page__form-section pt-0 pb-0">
		<div class="slider-wrapper">
			<div class="container">
				<div class="bread"> <a href="/">Главная </a> / <a href="/services">Услуги</a> / Корпоративные сайты </div>
			</div>

			<div class="slider">
                <wb-foreach wb="from=slider&tpl=false">
				<div class="slide">
                    <wb-data wb="table=projects&item={{_val}}">
                    <wb-var url="{{cover.0.img}}" wb-if="cover.0.img >''" else="/assets/img/slider/slide.jpg"/>
                    <wb-var link="/projects/{{wbFurlGenerate({{name}})}}"/>
					<div class="slide-inner" style="background-image: url({{_var.url}})">
						<div class="container">
							<div class="slider-title"> {{descr}}
							</div>
							<a href="{{_var.link}}" class="slider-button" wb-if="'{{_parent.button}}' == '' && '{{_var.link}}' > ''"> Посмотреть проект </a>
                            <a href="{{_var.link}}" class="slider-button" wb-if="'{{_parent.button}}' > '' && '{{_var.link}}' > ''"> {{_parent.button}} </a>
						</div>
					</div>
                    </wb-data>
				</div>
                </wb-foreach>
			</div>

		</div>
</section>
</view>

<edit header="Слайдер с проектами">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>

    <div class="form-group row">
        <label class="col-sm-3">Надпись кнопки перехода</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="button" placeholder="Кнопка">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3">Проекты в слайдере</label>
        <div class="col-sm-9">
            <input wb-module="selectcases" name="slider" multiple>
    </div>

</edit>