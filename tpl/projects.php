<html class="page" lang="ru">

<head>
    <title>{{title}}</title>
</head>

<body class="page__body">
    <wb-module wb="module=yonger&mode=render&view=header" />

    <div id="viewport-scroll" class="main-wrapper">
        <div class="viewport">
            <div id="scroll-container" class="scroll-container">
            <main class="page__main">
        <section class="project container">
            <div class="project__title-container">
                <h1 class="page__title">{{descr}}</h1>

                <ul class="project__tags">
                    <li class="project__tag-item" wb-if="'{{budget}}'>''">≈ {{budget}} ₽</li>
                    <li class="project__tag-item" wb-if="'{{year}}'>''">{{year}}</li>
                </ul>
                <wb-data wb="table=catalogs&item=projects&field=tree">
                    <wb-var tags="{{data}}" />
                </wb-data>
                <div class="project__info-bar">
                    <ul class="project__works-list">
                        <li class="project__client-name">Клиент: {{client}}</li>
                        <wb-foreach wb-from="tags">
                            <li class="project__work-item">{{_var.tags.{{_val}}.name}}</li>
                        </wb-foreach>
                    </ul>

                    <a class="project__link" href="{{link}}">{{link}}</a>
                </div>
            </div>

            <section class="project__content">
                <wb-module wb="module=yonger&mode=render" />
            </section>
        </section>



        <div class="project__controls container">
            <a class="button" href="/projects/{{wbFurlGenerate({{prev_item.name}})}}">
                <span class="button__icon-wrapper">
                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                    </svg>
                </span>

                <span class="button__text project__controls-text">предыдущий проект</span>
            </a>

            <a class="project__back-link" href="/projects">вернуться в портфолио</a>

            <a class="button" href="/projects/{{wbFurlGenerate({{next_item.name}})}}">
                <span class="button__text project__controls-text">следующий проект</span>

                <span class="button__icon-wrapper">
                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                    </svg>
                </span>
            </a>
        </div>

        <section class="project__similar container">
            <div class="project__similar-top block-button-arrows">
                <h2 class="page__section-title">Похожие проекты</h2>
                <div class="project__slider-buttons swiper-slider-buttons">
                    <button class="button project__slider-button js-project-slider-button--prev" type="button" aria-label="Назад">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                        <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                        </svg>
                    </span>
                    </button>

                    <button class="button project__slider-button js-project-slider-button--next" type="button" aria-label="Вперед">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </span>
                    </button>
                </div>
            </div>
            <div class="project__similar-swiper slider-swiper">
                <ul class="project__similar-list swiper-container">
                    <div class="project__similar-slider-wrapper swiper-wrapper">
                        <wb-foreach wb="from=similar&tpl=false&limit=2&rand=true">
                        <wb-data wb="table=projects&item={{_val}}">
                        <wb-var link="/projects/{{wbFurlGenerate({{name}})}}"/>
                            <li class="project__similar-item swiper-slide">
                                <article class="case">
                                    <a class="case__title-link-wrapper" href="{{_var.link}}">
                                        <h3 class="case__title">{{name}}</h3>
                                        <p class="case__description">{{descr}}</p>
                                    </a>
                                    <a class="case__image-wrapper" href="{{_var.link}}">
                                        <img class="case__image" width="790" height="500" src="/thumbc/790x500/src{{cover.0.img}}"
                                            data-srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x" alt="{{name}}">
                                    </a>

                                    <a class="button case__link" href="{{_var.link}}">
                                        <span class="button__icon-wrapper">
                                            <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                                <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </span>

                                        <span class="button__text">посмотреть кейс</span>
                                    </a>
                                </article>
                            </li>
                        </wb-data>
                        </wb-foreach>
                    </div>
                </ul>
            </div>
        </section>

        <wb-module wb="module=yonger&mode=render&view=form-project-short" />
    </main>

    <wb-module wb="module=yonger&mode=render&view=footer" />
            </div>
        </div>
    </div>

</body>

</html>