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
</main>

<wb-module wb="module=yonger&mode=render&view=footer"/>

</body>

</html>