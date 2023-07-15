<view>
    <main class="page__main">
        <section class="container projects">
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
            </div>
            <div class="cases-section projects__content">
                <wb-var cover="" />
                <ul class="cases-new" id="projectsList">
                    <wb-foreach wb="table=projects&sort=_sort&size=7&bind=cms.list.projects&render=server&more=true:"
                        wb-filter="active=on">
                        <wb-foreach wb="from=blocks&tpl=false" wb-filter="name=project-descr">
                            <wb-var cover="{{cover.0.img}}" wb-if="'{{_var.cover}}' == ''" />
                        </wb-foreach>
                        
                        <li class="cases-new__case">
                            <a class="cases-new__img-link lazy-wrapper ttext" href="/projects/{{wbFurlGenerate({{name}})}}">
                                <div class="cases-new__img-wrapper">
                                    <img class="cases-new__img loading lazy-wrapper__img" 
                                        data-src="{{_var.cover}}"
                                        alt="{{name}}">
                                </div>
                            </a>
                            <a href="/projects/{{wbFurlGenerate({{name}})}}" class="cases-new__description">
                                {{descr}}
                            </a>
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
			if (moreBtn) {
                moreBtn.innerHTML =
                    `<span class="text-icon">загрузить еще</span> <span class="button__icon-wrapper"><svg class="button__icon" width="24" height="24"><use xlink:href="/assets/img/sprite.svg#arrow-right"></use></svg></span>`
                moreBtn.href = 'javascript:void(0)';
            }
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