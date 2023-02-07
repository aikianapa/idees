<html class="page" lang="ru">

<head>
    <title>{{title}}</title>
</head>

<body class="page__body">
<wb-module wb="module=yonger&mode=render&view=header"/>
<main class="page__main">
    <section class="project">
        <div class="container project__title-container">
            <h1 class="page__title">{{descr}}</h1>

            <ul class="project__tags">
                <li class="project__tag-item" wb-if="'{{budget}}'>''">≈ {{budget}} ₽</li>
                <li class="project__tag-item" wb-if="'{{year}}'>''">{{year}}</li>
            </ul>
            <wb-data wb="table=catalogs&item=projects&field=tree">
                <wb-var tags="{{data}}"/>
            </wb-data>
            <div class="project__info-bar">
                <ul class="project__works-list">
                    <li class="project__client-name">Клиент: {{client}}</li>
                    <wb-foreach wb-from="tags">
                        <li class="project__work-item">{{_var.tags.{{_val}}.name}}</li>
                    </wb-foreach>
                </ul>
                <wb-var url="{{parse_url({{link}})}}"/>
                <a class="project__link" href="{{link}}">{{_var.url.host}}</a>
            </div>
        </div>

        <section class="project__content">
            <wb-module wb="module=yonger&mode=render"/>
        </section>
    </section>


    <div class="container project__controls">
        <a class="project__controls-button" href="/projects/{{wbFurlGenerate({{prev_item.name}})}}">
            <span class="button__icon-wrapper">
                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                    </svg>
                </span>
            <span class="button__text project__controls-text">предыдущий проект</span>
        </a>

        <a class="project__controls-button" href="/projects">вернуться в портфолио</a>

        <a class="project__controls-button" href="/projects/{{wbFurlGenerate({{next_item.name}})}}">
            <span class="button__text project__controls-text">следующий проект</span>
            <span class="button__icon-wrapper">
                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                    </svg>
                </span>
        </a>
    </div>

    <section class="container project__similar" wb-if="'{{similar}}'>'[]'">
        <div class="project__similar-top block-button-arrows">
            <h2 class="page__section-title">Похожие проекты</h2>
        </div>
        <ul class="project__similar-list">
            <div class="cases-new">
                <wb-foreach wb="from=similar&size=6&limit=18&more=true:ещё" wb-filter="active=on">
                    <wb-var link="/projects/{{wbFurlGenerate({{name}})}}"/>
                    <li class="cases-new__case">
                        <a href="/projects/{{wbFurlGenerate({{name}})}}" class="cases-new__img-link lazy-wrapper">
                            <div class="cases-new__img-wrapper">
                                <img class="cases-new__img loading lazy-wrapper__img"
                                     data-src="/thumbc/700x400/src{{cover.0.img}}"
                                     data-srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x" alt="{{descr}}">
                            </div>
                        </a>
                        <a href="/projects/{{wbFurlGenerate({{name}})}}" class="cases-new__description">
                            {{descr}}
                        </a>
                    </li>
                </wb-foreach>
            </div>
        </ul>
    </section>
    <div class="gray-box2-clear section-outer">
        <div class="container">

            <div class="title-section">
                <h2 class="title-section__title">Услуги агенства</h2>
                <a href="/services" class="title-section__link big-link">
                    <div class="big-link__wrapper">
                        <span class="big-link__text">Все <span class="big-link__text-all">услуги</span></span>
                        <i class="big-link__icon-arrow">
                            <svg class="big-link__icon-arrow-svg" width="34" height="9" aria-hidden="true">
                                <use xlink:href="/assets/img/sprite.svg#big-arrow"></use>
                            </svg>
                        </i>
                    </div>
                </a>
            </div>

            <wb-var menu="{{yongerSiteMenu()}}"/>

            <wb-foreach wb="from=_var.menu&tpl=false">

                <div class="uslugi" wb-if="'{{name}}'=='services'">

                    <wb-foreach wb="from=children&tpl=false">
                        <div class="uslugi-item" wb-if="'{{name}}'!=='services'">
                            <h3 class="sub-sub-title"> {{menu_title}} </h3>

                            <div class="ttext">
                            </div>
                            <div class="tlist">
                                <wb-foreach wb="table={{attach}}&tpl=false" wb-filter="{{attach_filter}}">
                                    <a href="{{path}}" class="menu__sub-link">
                                        {{header}}
                                    </a>
                                </wb-foreach>
                            </div>
                        </div>
                    </wb-foreach>
                </div>
            </wb-foreach>
        </div>
    </div>
    <wb-module wb="module=yonger&mode=render&view=form-project-short"/>
</main>

<wb-module wb="module=yonger&mode=render&view=footer"/>

</body>

</html>