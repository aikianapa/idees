<view>
    <section class="special__top-section container">
        <h1 class="page__title">{{_parent.header}}</h1>

        <ul class="special__tabs" id="myTab">
            <wb-foreach wb="from=tabs&tpl=false">
                <li class="special__tabs-item">
                    <a class="special__tab-link" tab-num="{{_idx}}" href="#tab{{_idx}}">{{tab_title}}</a>
                </li>
            </wb-foreach>
        </ul>
    </section>
    <div class="special__content">
    <wb-foreach wb="from=tabs&tpl=false">
            <div class="special__tab-content">
                <section class="special__top-section container">
                    <div class="special__top-section-container">
                        <p class="special__description">
                            {{price_text}}
                        </p>

                        <aside class="special__aside">
                            <h2 class="special__aside-title">Сроки и стоимость</h2>

                            <dl class="special__aside-params">
                                <dt class="special__aside-params-name">Стоимость</dt>
                                <dd class="special__aside-params-value">от {{number_format({{price}}, 0, ".", " ")}} ₽</dd>

                                <dt class="special__aside-params-name">Сроки разработки</dt>
                                <dd class="special__aside-params-value">от {{deadline}}</dd>
                            </dl>
                        </aside>

                        <div class="special__links-container">
                            <a class="button special__contacts-button" href="{{contract.0.img}}" download wb-if="'{{contract.0.img}}'>''">
                                <span class="button__icon-wrapper">
                                    <svg class="button__icon" width="24" height="24">
                                        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </span>

                                <span class="button__text">скачать договор</span>
                            </a>

                            <a class="button special__contacts-button" href="{{brif.0.img}}" download wb-if="'{{brif.0.img}}'>''">
                                <span class="button__icon-wrapper">
                                    <svg class="button__icon" width="24" height="24">
                                        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </span>

                                <span class="button__text">скачать бриф</span>
                            </a>
                        </div>
                    </div>

                    <p class="special__label">Вы получите:</p>

                    <ul class="special__list">
                        <wb-foreach wb="from=result&tpl=false">
                            <li class="special__item">
                                <h3 class="special__item-title">{{res_title}}</h3>
                                <p class="special__item-description">{{res_text}}</p>
                            </li>
                        </wb-foreach>
                    </ul>

                    <p class="special__sub-text text-break">{{res_comments}}</p>
                </section>

                <section class="page__section page__section--grey">
                    <h2 class="visually-hidden">{{title}}</h2>
                    <div class="special__section-container container">
                        <p class="special__big-text">
                            {{gray_title}}
                        </p>

                        <p class="special__sub-descr">{{gray_text}}</p>

                        <ul class="special__contacts">
                            <li class="special__contacts-item">
                                <span class="special__contacts-name">Почта для вопросов</span>
                                <a class="special__contacts-value" href="mailto:{{_sett.email}}">{{_sett.email}}</a>
                            </li>

                            <li class="special__contacts-item">
                                <span class="special__contacts-name">Телефон для связи</span>
                                <a class="special__contacts-value" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_sett.phone}}</a>
                            </li>
                        </ul>
                    </div>
                </section>
                
                <section class="page__section container">
                    <h2 class="page__section-title">{{steps_title}}</h2>

                    <ul class="special__work-list">
                        <wb-foreach wb="from=steps&tpl=false">
                            <li class="special__work-item">
                                <h3 class="special__work-item-title">{{step_title}}</h3>
                                <p class="special__work-item-description">{{step_text}}</p>
                            </li>
                        </wb-foreach>
                    </ul>
                </section>

         <section class="page__section page__section--grey">
            <div class="container">
               <h2 class="page__section-title">{{slider_title}}</h2>
            </div>

            <div class="brand__slider-container js-slider">
               <div class="container">
                  <div class="brand__swiper">
                     <ul class="brand__slider swiper-container js-slider-list">
                        <div class="brand__slider-wrapper swiper-wrapper">
                        <wb-foreach wb="from=slider&tpl=false">
                              <li class="brand__slider-item swiper-slide">
                              <span class="brand__slider-item-number">{{sprintf("%02d", {{_ndx}})}}</span>
                              <span>{{slider_text}}</span>
                              </li>
                        </wb-foreach>
                        </div>
                     </ul>
                  </div>

                  <div class="brand__slider-buttons">
                     <button class="button brand__slider-button js-slider-button--prev" type="button" aria-label="Назад">
                        <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                           <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                        </svg>
                        </span>
                     </button>

                     <button class="button brand__slider-button js-slider-button--next" type="button" aria-label="Вперед">
                        <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                           <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                        </span>
                     </button>
                  </div>
               </div>
            </div>
         </section>

         <section class="page__section container">
            <h2 class="partners__section-title">
               {{issue_title}}
            </h2>
            <ul class="specail__fixes-list">
            <wb-foreach wb="from=issues&tpl=false">
               <li class="special__fixes-item">
                  <span class="special__fixes-text">{{issue_text}}</span>
               </li>
            </wb-foreach>
            </ul>
            <p class="special__fixes-sub" wb-if="'{{issue_sub}}'>''">{{issue_sub}}</p>
         </section>

            </div>
        </wb-foreach>
    </div>
    <wb-jq wb=" $dom->find('.special__tabs > .special__tabs-item:first-child')->addClass('special__tabs-item-active');
                $dom->find('.special__top-section > .special__tab-content:first-child')->addClass('tab-content-active');"
    />

<script>
    const allInBody = document.querySelectorAll('.special__tab-link');
    for (const element of allInBody) {
        element.href = location.pathname + "#tab" + element.getAttribute("tab-num");
    }
</script>

</view>



<edit header="Экспресс-дизайн блок с табами">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multilang wb-lang="logo,land,pres" wb-flags="false" name="tabs">
        <div class="form-group col-12">
            <div class="form-group row">
                <label class="col-sm-4">Заголовок таба</label>
                <div class="col-sm-8">
                    <input class="form-control col-12 mb-1 tx-bold" name="tab_title" placeholder="Заголовок">
                </div>
            </div>
        </div>

        <div class="col row divider-text">Сроки и стоимость</div>

        <div class="col row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <div class="col-12">
                        <label>Текст</label>
                        <textarea class="form-control" rows="auto" name="price_text" placeholder="Текст"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label class="col-sm-4">Стоимость от:</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="number" name="price" placeholder="Стоимость" />
                    </div>

                    <label class="col-sm-4">Срок от:</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="deadline" placeholder="Срок" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col row divider-text">Вы получите</div>

        <wb-multiinput name="result">
            <div class="form-group col row">
                <input class="form-control col-12 tx-bold" type="text" name="res_title" placeholder="Заголовок" />
            </div>
            <div class="form-group col row">
                <div class="col-12">
                    <textarea class="form-control" rows="auto" name="res_text" placeholder="Текст"></textarea>
                </div>
            </div>
        </wb-multiinput>
        <div class="form-group col row">
            <label class="col-sm-3">Сноски</label>
            <div class="col-sm-9">
                <textarea class="form-control" rows="auto" name="res_comments" placeholder="Сноски"></textarea>
            </div>
        </div>

        <div class="col row divider-text">Серый блок с контактами</div>

        <div class="bg-gray-200 py-3">
            <div class="form-group col row mb-1">
                <label class="col-sm-3">Большой текст</label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="auto" name="gray_title" placeholder="Большой текст"></textarea>
                </div>
            </div>
            <div class="form-group col row">
                <label class="col-sm-3">Текст</label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="auto" name="gray_text" placeholder="Мелкий текст"></textarea>
                </div>
            </div>

            <div class="form-group col row mb-0">
                <label class="col-sm-3">Договор и бриф</label>
                <div class="row">
                    <label class="col">
                        <label class="wd-100p tx-center tx-bold">Договор</label>
                        <div id="upload1" class="text-center">
                            <wb-module name="contract" wb="{
                                'module':'filepicker',
                                'width':'200',
                                'height':'200',
                                'mode':'single',
                                'original': true
                            }" wb-ext="pdf,doc,docx,rtf" wb-path='/uploads/pages/express' />
                        </div>    
                    </label>
                    <div class="col">
                        <label class="wd-100p tx-center tx-bold">Бриф</label>
                        <div id="upload2" class="text-center">
                            <wb-module name="brif" wb="{
                                'module':'filepicker',
                                'width':'200',
                                'height':'200',
                                'mode':'single',
                                'original': true
                            }" wb-ext="pdf,doc,docx,rtf" wb-path='/uploads/pages/express' />
                        </div>  
                    </div>
                </div>
            </div>

        </div>

        <div class="col row divider-text">Последовательность работы</div>

        <div class="form-group col row">
            <label class="col-sm-3">Заголовок секции</label>
            <div class="col-sm-9">
                <input class="form-control col-12 mb-1 tx-bold" name="steps_title" placeholder="Заголовок">
            </div>
        </div>
        <wb-multiinput name="steps">
            <div class="form-group col row">
                <input class="form-control col-12 tx-bold" type="text" name="step_title" placeholder="Заголовок" />
            </div>
            <div class="form-group col row">
                <div class="col-12">
                    <textarea class="form-control" rows="auto" name="step_text" placeholder="Текст"></textarea>
                </div>
            </div>
        </wb-multiinput>

        <div class="col row divider-text">Особенности услуги (слайдер)</div>
        <div class="form-group col row">
            <label class="col-sm-3">Заголовок секции</label>
            <div class="col-sm-9">
                <input class="form-control col-12 mb-1 tx-bold" name="slider_title" placeholder="Заголовок">
            </div>
        </div>
        <wb-multiinput name="slider">
            <div class="form-group col row">
                <div class="col-12">
                    <textarea class="form-control" rows="auto" name="slider_text" placeholder="Текст"></textarea>
                </div>
            </div>
        </wb-multiinput>

        <div class="col row divider-text">Правки и доработки</div>
        <div class="form-group col row">
            <label class="col-sm-3">Заголовок секции</label>
            <div class="col-sm-9">
                <input class="form-control col-12 mb-1 tx-bold" name="issue_title" placeholder="Заголовок">
            </div>
        </div>
        <wb-multiinput name="issues">
            <div class="form-group col row">
                <div class="col-12">
                    <textarea class="form-control" rows="auto" name="issue_text" placeholder="Текст"></textarea>
                </div>
            </div>
        </wb-multiinput>
        <div class="form-group col row">
            <label class="col-sm-3">Текст секции</label>
            <div class="col-sm-9">
                <textarea class="form-control" rows="auto" name="issue_sub" placeholder="Текст"></textarea>
            </div>
        </div>
    </wb-multilang>
</edit>

