<view>
    <main class="page__main">
        <section class="projects container">
            <div class="projects__title-container">
                <h1 class="page__title">{{title}}</h1>


                <ul class="projects__tags tags">
                    <wb-data wb="table=catalogs&item=projects&field=tree">
                    <li class="tags__item">
                        <button class="tag tag--active" type="button" data-type="all" data-ajax="{'target':'#projectsList','clear':'true','filter_remove':'tags'}" >Все проекты</button>
                    </li>
                    <wb-foreach wb-from="data">
                    <li class="tags__item" data-type="{{id}}">
                        <button class="tag" data-type="{{id}}" type="button"
                         data-ajax="{'target':'#projectsList','clear':'true','filter_remove': 'tags','filter_add':{ 'tags': { '$like': '{{id}}' } } }">
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
                <ul class="cases-section__list" id="projectsList">
                    <wb-foreach wb="table=projects&size=2&bind=cms.list.projects&render=server&more=true:ещё" wb-filter="active=on">
                        <li class="cases-section__item">
                            <article class="case">
                                <a class="case__title-link-wrapper"
                                    href="/projects/%7B%7B_id%7D%7D/%7B%7BwbFurlGenerate(%7B%7Bname%7D%7D)%7D%7D">
                                    <h3 class="case__title">{{name}}</h3>
                                    <p class="case__description">{{descr}}</p>
                                </a>
                                <a class="case__image-wrapper"
                                    href="/projects/%7B%7B_id%7D%7D/%7B%7BwbFurlGenerate(%7B%7Bname%7D%7D)%7D%7D">
                                    <img class="case__image" width="790" height="500"
                                        data-src="/thumbc/790x500/src/{{cover.0.img}}"
                                        srcset="/thumbc/1580x1000/src/{{cover.0.img}} 2x" alt="{{name}}">
                                </a>

                                <a class="button case__link"
                                    href="/projects/%7B%7B_id%7D%7D/%7B%7BwbFurlGenerate(%7B%7Bname%7D%7D)%7D%7D">
                                    <span class="button__icon-wrapper">
                                        <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </span>

                                    <span class="button__text">посмотреть кейс</span>
                                </a>
                            </article>
                        </li>
                    </wb-foreach>
                </ul>
            </div>

            <div class="page__spinner-block visually-hidden">
                <img class="page__spinner page__spinner--active" src="/assets/img/spinner.svg" alt=""
                    aria-hidden="true">
            </div>
        </section>
        <wb-snippet wb="name=wbapp" />
        <script wb-app>
            $("#feedbackList").on('wb-ajax-start',function(ev,params) {
        if (params.target !== "#feedbackList") return;
        if (params._params !== undefined && params._params.more !== undefined) {
            $('.page__spinner-block').removeClass('visually-hidden');
        }
    });
    $("#feedbackList").on('wb-ajax-done',function(ev,params) {
        if (params.target !== "#feedbackList") return;
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
</edit>