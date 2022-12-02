<view>
<section class="page__form-section">
		<div class="slider-wrapper">
			<div class="container">
				<div class="bread"> <a href="#">Главная </a> / <a href="#">Услуги</a> / Корпоративные сайты </div>
			</div>

			<div class="slider">
                <wb-foreach wb="from=slider&tpl=false">
				<div class="slide">
                    <wb-var url="{{image.0.img}}" wb-if="image.0.img >''" else="/assets/img/slider/slide.jpg"/>
					<div class="slide-inner" style="background-image: url({{_var.url}})">
						<div class="container">
							<div class="slider-title"> {{title}}
							</div>
							<a href="{{link}}" class="slider-button" wb-if="'{{_parent.button}}' == '' && '{{link}}' > ''"> Посмотреть проект </a>
                            <a href="{{link}}" class="slider-button" wb-if="'{{_parent.button}}' > '' && '{{link}}' > ''"> {{_parent.button}} </a>
						</div>
					</div>
				</div>
                </wb-foreach>
			</div>

		</div>
</section>
</view>

<edit header="Слайдер с каунтером">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>

    <div class="form-group row">
        <label class="col-sm-3">Надпись кнопки перехода</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="button" placeholder="Кнопка">
        </div>
    </div>

    <wb-multiinput name="slider">
        <div class="col-sm-4">
            <input wb="module=filepicker&mode=single&width=400&height=200"  wb-ext="webp,jpg,png,jpeg,svg" wb-path="/uploads/blocks/slider-counter" name="image" class="mr-2">
        </div>
        <div class="col-sm-8">
            <div class="form-group row">
                <div class="col-12">
                    <label>Заголовок</label>
                    <input class="form-control tx-bold" type="text" name="title" placeholder="Заголовок">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <label>Ссылка</label>
                    <input class="form-control tx-bold" type="text" name="link" placeholder="Ссылка">
                </div>
            </div>
        </div>
    </wb-multiinput>
</edit>