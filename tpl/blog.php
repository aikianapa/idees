<html class="page" lang="ru">

<head>
  <title>{{title}}</title>
  <wb-module wb="module=yonger&mode=render&view=head" />
</head>

<body class="page__body">
  <wb-module wb="module=yonger&mode=render&view=header" />
  <wb-data wb="table=catalogs&item=projects">
    <wb-var prjtype="{{_current.tree.data}}" />
  </wb-data>

  <main class="page__main">
    <section class="container article-page">
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
      <img class="article-page__main-image" width="1620" height="600" data-src="/thumbc/1620x600/src{{cover.0.img}}" data-srcset="/thumbc/3240x1200/src{{cover.0.img}} 2x" alt="{{name}}">
      <div class="article-page__container">
        <div class="article-page__content">
          {{text}}
        </div>

        <div class="bblock" wb-if="count({{links_srv}})>0">
          <div class="btext">Подходящие услуги</div>
          <div class="tlist">
            <wb-foreach wb="from=links_srv&tpl=false">
              <wb-data wb="table=services&item={{_val}}">
                <a href="/services/{{tags}}/{{wbFurlGenerate({{header}})}}" class="menu__sub-link">
                  {{header}}
                </a>
              </wb-data>
            </wb-foreach>
          </div>
        </div>

        <div class="bblock" wb-if="'{{serv}}'>'' && '{{links_srv}}'==''">
          <div class="btext">Подходящие услуги</div>
          <wb-foreach wb="table=pages&limit=1" wb-filter="{'url':'\/services\/{{serv}}'}">
            <!--a href="/services/{{_parent.serv}}" class="article__item-title category__item-title">{{blocks.block_paragraph.header}}</a-->
            <!--p class="article__item-description category__item-description">{{blocks.block_paragraph.text}}</p-->
            <div class="tlist">
              <wb-foreach wb="table={{attach}}&tpl=false" wb-filter="{{attach_filter}}">
                <a class="menu__sub-link" href="{{_parent.url}}/{{wbFurlGenerate({{name}})}}">{{name}}</a>
              </wb-foreach>
            </div>

          </wb-foreach>
        </div>
      </div>
    </section>

    <section class="container page__section" wb-if="'{{similar}}'>''">
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
                    <img class="article__image" width="790" height="500" data-src="/thumbc/790x500/src{{cover.0.img}}" data-srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x" alt="{{name}}">
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

  <!-- <div id="viewport-scroll" class="main-wrapper">
    <div class="viewport">
      <div id="scroll-container" class="scroll-container">
          
      </div>
    </div>
  </div> -->
</body>

</html>