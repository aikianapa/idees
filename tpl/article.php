<html class="page" lang="ru">

<head>
  <title>{{title}}</title>
</head>

<body class="page__body">
  <wb-data wb="table=catalogs&item=projects">
    <wb-var prjtype="{{_current.tree.data}}" />
  </wb-data>

  <div>
    <wb-module wb="module=yonger&mode=render&view=header" />
  </div>

  <main class="page__main">

    <section class="article-page container">
      <div class="article__tag-line article-page__tag-line">
        <wb-foreach wb="from=tags&tpl=false">
          <span class="article__tag">
            {{_var.prjtype.{{_val}}.name}}
          </span>
        </wb-foreach>
        <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
        <span class="article__views">1559</span>
      </div>

      <h1 class="page__title article-page__title">{{name}}</h1>

      <p class="article-page__description">
        {{descr}}
      </p>

      <img class="article-page__main-image" width="1620" height="600" data-src="/thumbc/1620x600/src{{cover.0.img}}" srcset="/thumbc/3240x1200/src{{cover.0.img}} 2x"
        alt="{{name}}">

      <div class="article-page__container">
        <div class="article-page__content">
          {{text}}
        </div>

        <wb-foreach wb="table=blog&tpl=false&limit=1&rand=true" wb-filter="{'active':'on','id':{'$ne':'{{_route.item}}'}}">
          <article class="article article--aside">
            <wb-foreach wb="from=tags&tpl=false&limit=1">
              <span class="article__tag">
                {{_var.prjtype.{{_val}}.name}}
              </span>
            </wb-foreach>

            <div class="article__info">
              <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
              <span class="article__views">1559</span>
            </div>

            <h3 class="article__title">{{name}}</h3>

            <p class="article__description">{{descr}}</p>

            <img class="article__image" width="790" height="500" data-src="/thumbc/790x500/src{{cover.0.img}}" srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x"
              alt="{{name}}">

            <a class="button article__link" href="/blog/{{_id}}/{{wbFurlGenerate({{name}})}}">
              <span class="button__icon-wrapper">
                <svg class="button__icon" width="24" height="24" aria-hidden="true">
                  <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                </svg>
              </span>

              <span class="button__text">читать статью</span>
            </a>
          </article>
        </wb-foreach>
      </div>
    </section>

    <section class="page__section container" wb-if="'{{similar}}'>''">
      <h2 class="page__section-title">Похожие статьи</h2>

      <ul class="article-page__similar-list" id="similarArticles">
        <wb-foreach wb="from=similar&size=6&limit=18&more=true:ещё">
          <li class="article-page__similar-item">
            <wb-data wb="table=blog&item={{_val}}">
            <article class="article">
              <wb-foreach wb="from=tags&tpl=false&limit=1">
                <span class="article__tag">
                  {{_var.prjtype.{{_val}}.name}}
                </span>
              </wb-foreach>

              <div class="article__info">
                <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
                <span class="article__views">1559</span>
              </div>

              <h3 class="article__title">{{name}}</h3>

              <p class="article__description">{{descr}}</p>

              <img class="article__image" width="790" height="500" data-src="/thumbc/790x500/src{{cover.0.img}}" srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x"
                alt="{{name}}">

              <a class="button article__link" href="/blog/{{_id}}/{{wbFurlGenerate({{name}})}}">
                <span class="button__icon-wrapper">
                  <svg class="button__icon" width="24" height="24" aria-hidden="true">
                    <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                  </svg>
                </span>

                <span class="button__text">читать статью</span>
              </a>
            </article>
            </wb-data>
          </li>
        </wb-foreach>
      </ul>

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

</body>

</html>