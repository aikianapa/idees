<view>
    <div class="documents__container">
        <wb-var types='{"all":"Все документы","main":"Основные документы","brif":"Брифы","loan":"Правовые документы"}' />
        <ul class="documents__menu">
            <wb-foreach wb-from="_var.types">
                <li class="documents__menu-item">
                    <wb-var wb-if="_idx == 0" active="documents__menu-link--current" else="" />
                    <a class="documents__menu-link {{_var.active}}" href="javascript:void(0);"
                    data-type="{{_key}}">{{_val}}</a>
                </li>
            </wb-foreach>
        </ul>

        <ul class="documents__item-list">
            <wb-foreach wb="from=docs">
            <li class="documents__item" data-type="{{type}}">
                <article class="collapse-item">
                    <div class="collapse-item__title-wrapper">
                        <h3 class="collapse-item__title">{{title}}</h3>

                        <button class="collapse-item__button button" type="button" aria-label="Развернуть">
                            <svg class="collapse-item__button-icon" width="16" height="16">
                                <use xlink:href="assets/img/sprite.svg#cross"></use>
                            </svg>
                        </button>
                    </div>

                    <div class="collapse-item__container">
                        <p class="collapse-item__description documents__link-container">
                            <a class="button documents__link" href="{{pdf}}">
                                <span class="button__icon-wrapper">
                                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                        <use xlink:href="/assets/img/sprite.svg#arrow-down"></use>
                                    </svg>
                                </span>

                                <span class="button__text">скачать</span>
                            </a>

                            <a class="button documents__link" href="{{form}}">
                                <span class="button__icon-wrapper">
                                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </span>

                                <span class="button__text">заполнить онлайн</span>
                            </a>
                        </p>
                    </div>
                </article>
            </li>
            </wb-foreach>
        </ul>
        <script wb-app remove>
            $(document).delegate("a.documents__menu-link","click",function(){
                let type = $(this).attr('data-type');
                if (type == "all") {
                    $(this).parents('.documents__container').find('.documents__item').removeClass('d-none');
                } else {
                    $(this).parents('.documents__container').find('.documents__item').addClass('d-none');
                    $(this).parents('.documents__container').find('.documents__item[data-type='+type+']').removeClass('d-none');
                }
                $(this).parents('.documents__menu').find('.documents__menu-link').removeClass('documents__menu-link--current');
                $(this).addClass('documents__menu-link--current');
            })
        </script>
    </div>
</view>

<edit header="Документы">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-var types='{"main":"Основные документы","brif":"Брифы","loan":"Правовые документы"}' />
    <wb-multiinput name="docs">
        <div class="col-sm-8 mb-1">
            <input class="form-control" type="text" name="title" placeholder="Наименование документа">
        </div>
        <div class="col-sm-4 mb-1">
            <select class="form-control" name="type">
                <wb-foreach wb-from="_var.types">
                    <option value="{{_key}}">{{_val}}</option>
                </wb-foreach>
            </select>
        </div>

        <div class="col-sm-6 mb-1">
            <input class="form-control" type="text" name="pdf" placeholder="Ссылка на PDF">
        </div>
        <div class="col-sm-6 mb-1">
            <input class="form-control" type="text" name="form" placeholder="Ссылка на форму">
        </div>

    </wb-multiinput>
</edit>