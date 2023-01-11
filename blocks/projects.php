<view>
    <main class="page__main">
        <section class="projects container">
            <div class="projects__title-container">
                <h1 class="page__title">{{title}}</h1>


                <ul class="projects__tags tags">
                    <wb-data wb="table=catalogs&item=projects&field=tree&tpl=false">
                        <li class="tags__item">
                            <button class="tag tag--active" type="button" data-type="all"
                                data-ajax="{'target':'#projectsList','clear':'true','filter_remove':'tags'}">Все проекты
                            </button>
                        </li>
                        <wb-foreach wb-from="data" wb-tpl="false">
                            <li class="tags__item" data-type="{{id}}">
                                <button class="tag" data-type="{{id}}" type="button"
                                    data-ajax="{'target':'#projectsList','clear':'true','filter_remove': 'tags','filter_add':{ 'tags': { '$like': '{{id}}'}}}">
                                    {{name}}</button>
                            </li>
                        </wb-foreach>
                    </wb-data>
                </ul>

                <div class="projects__toogle-container">
                    <button class="projects__toogle-button js-toogle-blocks" type="button"
                        aria-label="Показать плиткой">
                        <svg class="button__icon" width="24" height="24" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#sort-blocks"></use>
                        </svg>
                    </button>

                    <button class="projects__toogle-button js-toogle-lines" type="button" aria-label="Показать списком">
                        <svg class="button__icon" width="24" height="24" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#sort-lines"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="cases-section projects__content">
                <wb-var cover="" />
                <ul class="cases-section__list" id="projectsList">
                    <wb-foreach wb="table=projects&sort=_sort&size=2&bind=cms.list.projects&render=server&more=true:"
                        wb-filter="active=on">
                        <wb-foreach wb="from=blocks&tpl=false" wb-filter="name=project-descr">
                            <wb-var cover="{{cover.0.img}}" wb-if="'{{_var.cover}}' == ''" />
                        </wb-foreach>
                        
                        <li class="cases-section__item">
                            <article class="case">
                                <a class="case__title-link-wrapper" href="/projects/{{wbFurlGenerate({{name}})}}">
                                    <h3 class="case__title">{{name}}</h3>
                                    <p class="case__description">{{descr}}</p>
                                </a>
                                <a class="case__image-wrapper lazy-wrapper" href="/projects/{{wbFurlGenerate({{name}})}}">
                                    <img class="case__image lazy-wrapper__img loading" width="790" height="500"
                                        data-src="/thumbc/790x500/src/{{_var.cover}}"
                                        data-srcset="/thumbc/1580x1000/src/{{_var.cover}} 2x"
                                        alt="{{name}}">
                                </a>

                                <a class="button case__link" href="/projects/{{wbFurlGenerate({{name}})}}">
                                    <span class="button__icon-wrapper">
                                        <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </span>

                                    <span class="button__text">посмотреть кейс</span>
                                </a>
                            </article>
                        </li>
                        <wb-empty>
                            <li class="cases-section__item">
                                <article class="case">
                                    <h3 class="case__title">Ничего не найдено</h3>
                                </article>
                            </li>
                        </wb-empty>
                        <wb-var cover="" />
                    </wb-foreach>
                </ul>
            </div>

            <div class="page__spinner-block visually-hidden">
                <img class="page__spinner page__spinner--active" src="/assets/img/spinner.svg" alt=""
                    aria-hidden="true">
            </div>
        </section>

        <script wb-app remove>
        function changeLink() {
            const moreBtn = document.querySelector('.page-link.more');
            moreBtn.innerHTML =
                `<span class="text-icon">загрузить еще</span> <span class="button__icon-wrapper"><svg class="button__icon" width="24" height="24"><use xlink:href="/assets/img/sprite.svg#arrow-right"></use></svg></span>`
            moreBtn.href = 'javascript:void(0)';
        }

        $("#projectsList").bind("DOMSubtreeModified", function() {
            changeLink();
        });
        changeLink();
        $('.projects__tags').delegate('.tags__item', wbapp.evClick, function() {
            $('.projects__tags .tag').removeClass('tag--active')
            $(this).children('.tag').addClass('tag--active')
        });

        $("#projectsList").on('wb-ajax-start', function(ev, params) {
            if (params.target !== "#projectsList") return;
            if (params._params !== undefined && params._params.more !== undefined) {
                $('.page__spinner-block').removeClass('visually-hidden');
            }
        });
        $("#projectsList").on('wb-ajax-done', function(ev, params) {
            if (params.target !== "#projectsList") return;
            if (params._params !== undefined && params._params.more !== undefined) {
                $('.page__spinner-block').addClass('visually-hidden');
            }
        });
        </script>
    </main>
</view>
<edit header="Список проектов">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" placeholder="Заголовок">
        </div>
    </div>

    <wb-include wb="form=projects&mode=list"></wb-include>

</edit>