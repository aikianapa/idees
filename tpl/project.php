<html class="page" lang="ru">

<head>
    <title>{{title}}</title>
</head>

<body class="page__body">
    <wb-module wb="module=yonger&mode=render&view=header" />

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
            <a class="button" href="#">
                <span class="button__icon-wrapper">
                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                    </svg>
                </span>

                <span class="button__text project__controls-text">предыдущий проект</span>
            </a>

            <a class="project__back-link" href="">вернуться в портфолио</a>

            <a class="button" href="#">
                <span class="button__text project__controls-text">следующий проект</span>

                <span class="button__icon-wrapper">
                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                    </svg>
                </span>
            </a>
        </div>

        <section class="project__similar container">
            <h2 class="page__section-title">Похожие проекты</h2>

            <ul class="project__similar-list">
                <li class="project__similar-item">
                    <article class="case">
                        <a class="case__title-link-wrapper" href="/project.html">
                            <h3 class="case__title">ILM Group</h3>
                            <p class="case__description">Обновили логотип и фирменный стиль бренда. Создали необходимые
                                носители</p>
                        </a>
                        <a class="case__image-wrapper" href="/project.html">
                            <img class="case__image" width="790" height="500" src="/img/ilm-group@1x.jpg"
                                srcset="/img/ilm-group@2x.jpg 2x" alt="Проект компании ILM Group">
                        </a>

                        <a class="button case__link" href="/project.html">
                            <span class="button__icon-wrapper">
                                <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                    <use xlink:href="/img/sprite.svg#arrow-right"></use>
                                </svg>
                            </span>

                            <span class="button__text">посмотреть кейс</span>
                        </a>
                    </article>
                </li>

                <li class="project__similar-item">
                    <article class="case">
                        <a class="case__title-link-wrapper" href="/project.html">
                            <h3 class="case__title">Мосдерм</h3>
                            <p class="case__description">Обновление айдентики компании. Новый логотип, фирменный стиль,
                                веб-сайт</p>
                        </a>
                        <a class="case__image-wrapper" href="/project.html">
                            <img class="case__image" width="790" height="500" src="/img/mosderm@1x.jpg"
                                srcset="/img/mosderm@2x.jpg 2x" alt="Проект компании ILM Group">
                        </a>

                        <a class="button case__link" href="/project.html">
                            <span class="button__icon-wrapper">
                                <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                    <use xlink:href="/img/sprite.svg#arrow-right"></use>
                                </svg>
                            </span>

                            <span class="button__text">посмотреть кейс</span>
                        </a>
                    </article>
                </li>
            </ul>
        </section>

        <wb-module wb="module=yonger&mode=render&view=form-project-short" />
    </main>


    <wb-module wb="module=yonger&mode=render&view=footer" />

</body>

</html>