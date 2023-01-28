<view>
    <section class="animation-section">
        <div class="root-slider">
            <div class="root-slider__img-wrapper">
                <wb-var bkg="{{bkg.0.img}}" wb-if="'{{bkg.0.img}}'>''" else="/assets/img/bg-root-banner.png" />
                <img src="{{_var.bkg}}" class="root-slider__img" alt="">
            </div>
            <div class="container">
                <div class="root-slider__wrapper">
                    <div class="root-slider__content">
                        <div class="root-slider__content-left">
                            <div class="root-slider__title">
                                Создаем
                                <div class="root-slider__title-arrow">
                                    <svg class="root-slider__title-arrow-svg" width="24" height="24" aria-hidden="true">
                                        <use xlink:href="/assets/img/sprite.svg#big-arrow"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="root-slider__nav">
                                <div class="root-slider__nav-wrapper js-root-slider-nav swiper-container">
                                    <div class="swiper-wrapper">
                                        <wb-foreach wb="from=list&tpl=false">
                                            <div class="root-slider__nav-item swiper-slide">
                                                {{label}}
                                            </div>
                                        </wb-foreach>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="root-slider__description swiper-active">
                            <div class="root-slider__description-arrow">
                                <svg class="root-slider__description-arrow-svg" width="24" height="24" aria-hidden="true">
                                    <use xlink:href="/assets/img/sprite.svg#big-arrow"></use>
                                </svg>
                            </div>
                            <div class="swiper-container js-root-slider-description">
                                <div class="root-slider__description-swiper swiper-wrapper">
                                    <wb-foreach wb="from=list&tpl=false">
                                        <div class="root-slider__description-item swiper-slide">
                                            <div class="root-slider__description-content">
                                                <p>
                                                    {{text}}
                                                </p>
                                                <div class="ybutton ybutton--invers zayav-button" data-service="{{label}}" data-index="1">Отправить заявку</div>
                                            </div>
                                        </div>
                                    </wb-foreach>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</view>
<edit header="Заголовок главной страницы">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Текст кнопки</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="btntext" placeholder="Текст кнопки">
        </div>
    </div>

    <div class="divider-text">Пункты</div>
    <wb-multiinput name="list">
        <div class="col-sm-5">
            <input class="form-control" type="text" name="label" placeholder="Пункт">
        </div>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="text" placeholder="Текст">
        </div>

    </wb-multiinput>

    <div class="divider-text">Фоновое изображение</div>
    <div class="form-group row">
        <div class="col-12">
            <input wb="module=filepicker&mode=single&width=400&height=200" name="bkg" wb-ext="jpg,jpeg,png,svg,gif,webp" wb-path="/assets/img/" />
        </div>
    </div>
</edit>