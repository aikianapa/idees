<html class="page" lang="ru">

<head>
  <title>{{title}}</title>
</head>

<body class="page__body"> 
  <wb-module wb="module=yonger&mode=render&view=header" />

  <div id="viewport-scroll" class="main-wrapper">
    <div class="viewport">
      <div id="scroll-container" class="scroll-container">
              <wb-data wb="table=catalogs&item=projects">
            <wb-var prjtype="{{_current.tree.data}}" />
          </wb-data>
          

          <main class="page__main">

            <section class="article-page container">
              <div class="article__tag-line article-page__tag-line">
                <wb-foreach wb="from=tags&tpl=false">
                  <span class="article__tag">
                    {{_var.prjtype.{{_val}}.name}}
                  </span>
                </wb-foreach>
                <div class="article__tag-line-info">
                  <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
                  <span class="article__views" wb="module=autoinc&table=blog&field={{id}}&increase=true&ajax=true"></span>
                </div>
              </div>

              <h1 class="page__title article-page__title">{{name}}</h1>

              <p class="article-page__description">
                {{descr}}
              </p>

              <img class="article-page__main-image" width="1620" height="600" data-src="/thumbc/1620x600/src{{cover.0.img}}" data-srcset="/thumbc/3240x1200/src{{cover.0.img}} 2x"
                alt="{{name}}">

              <div class="article-page__container">
                <div class="article-page__content">
                  {{text}}
                </div>

                <wb-foreach wb="table=blog&tpl=false&limit=1&rand=true" wb-filter="{'active':'on','id':{'$ne':'{{_route.item}}'}}">
                  <article class="article article--aside">
                    <div class="article__name">Подходящие услуги</div>
                    <a href="#" class="article__item-title category__item-title">Стратегия</a>
                    <p class="article__item-description category__item-description">Создаем сильный и узнаваемый бренд с помощью позиционирования, стратегии и нейминга</p>
                    <ul class="article__sub-list services__sub-list">
                        <li class="article__sub-list-item services__sub-list-item">
                            <a class="article__item-link services__item-link" href="#">Кабинетные исследования</a>
                        </li>
                        <li class="article__sub-list-item services__sub-list-item">
                            <a class="article__item-link services__item-link" href="#">Позиционирование</a>
                        </li>
                        <li class="article__sub-list-item services__sub-list-item">
                            <a class="article__item-link services__item-link" href="#">Платформа бренда</a>
                        </li>
                        <li class="article__sub-list-item services__sub-list-item">
                            <a class="article__item-link services__item-link" href="#">Коммуникационная стратегия</a>
                        </li>
                        <li class="article__sub-list-item services__sub-list-item">
                            <a class="article__item-link services__item-link" href="#">Аудит бренда</a>
                        </li>
                    </ul>
                    <a class="button article__link category__link" href="#">
                        <span class="button__icon-wrapper">
                            <svg class="button__icon" width="24" height="24">
                                <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </span>

                        <span class="button__text"> подробнее</span>
                    </a>
                  </article>
                </wb-foreach>
              </div>
            </section>

            <section class="page__section container" wb-if="'{{similar}}'>''">
              <div class="page__section-top block-button-arrows">
                <h2 class="page__section-title">Похожие статьи</h2>
                <div class="page__section-slider-buttons swiper-slider-buttons">
                    <button class="button page__section-slider-button js-article-slider-button--prev" type="button" aria-label="Назад">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                        <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                        </svg>
                    </span>
                    </button>

                    <button class="button page__section-slider-button js-article-slider-button--next" type="button" aria-label="Вперед">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </span>
                    </button>
                </div>
              </div>
              <div class="article-page__similar-swiper slider-swiper">
                <ul class="article-page__similar-list swiper-container" id="similarArticles">
                  <div class="article-page__similar-list-wrapper swiper-wrapper">
                    <wb-foreach wb="from=similar&size=6&limit=18&more=true:ещё">
                      <li class="article-page__similar-item swiper-slide">

                        <article class="article">
                          <div class="article__tags">
                            <wb-foreach wb="from=tags&tpl=false&limit=1">
                              <span class="article__tag">
                                {{_var.prjtype.{{_val}}.name}}
                              </span>
                            </wb-foreach>
                          </div>

                          <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__info">
                            <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
                            <span class="article__views" wb="module=autoinc&table=blog&field={{id}}"></span>
                          </a>

                          <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__title">{{name}}</a>

                          <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__description">{{descr}}</a>

                          <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__img">
                            <img class="article__image" width="790" height="500" data-src="/thumbc/790x500/src{{cover.0.img}}" data-srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x"
                            alt="{{name}}">
                          </a>

                          <a class="button article__link" href="/blog/{{wbFurlGenerate({{name}})}}">
                            <span class="button__icon-wrapper">
                              <svg class="button__icon" width="24" height="24" aria-hidden="true">
                                <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                              </svg>
                            </span>

                            <span class="button__text">читать статью</span>
                          </a>
                        </article>

                      </li>
                    </wb-foreach>
                  </div>
                </ul>
              </div>
              

              <!--div class="article-page__button-container">
                <button class="button" type="button">
                  <span class="button__icon-wrapper">
                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                      <use xlink:href="/assets/img/sprite.svg#arrow-down"></use>
                    </svg>
                  </span>

                  <span class="button__text">загрузить ещё</span>
                </button>
              </div-->
            </section>

          </main>
          
          <wb-module wb="module=yonger&mode=render&view=footer" />
      </div>
    </div>
  </div>
</body>

</html>