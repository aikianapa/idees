<view>
  <main class="page__main">
    <section class="blog container">
      <div class="blog__title-container">
        <h1 class="page__title">Блог</h1>

        <ul class="blog__tags tags">
          <wb-data wb="table=catalogs&item=projects&field=tree">
            <li class="tags__item">
              <button class="tag tag--active" type="button" data-type="all" data-ajax="{'target':'#articlesList','clear':'true','filter_remove':'tags'}">Все проекты
              </button>
            </li>
            <wb-foreach wb-from="data">
              <li class="tags__item" data-type="{{id}}">
                <button class="tag" data-type="{{id}}" type="button" data-ajax="{'target':'#articlesList','clear':'true','filter_remove': 'tags','filter_add':{ 'tags': { '$like': '{{id}}' } } }">
                  {{name}}</button>
              </li>
            </wb-foreach>
          </wb-data>
        </ul>
      </div>

      <div class="blog__content">
        <wb-foreach wb="table=blog&tpl=false&limit=1">
          <article class="article article--main">
            <span class="article__tag">Дизайн</span>

            <div class="article__info">
              <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
              <span class="article__views" wb="module=autoinc&table=blog&field={{id}}"></span>
            </div>

            <h3 class="article__title">{{name}}</h3>

            <p class="article__description">{{descr}}</p>

            <img class="article__image" width="790" height="500" src="/thumbc/790x500/src{{cover.0.img}}" srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x"
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
        <section class="blog__section">
          <h2 class="blog__section-title">{{title}}</h2>
          <p class="blog__section-text text-break">{{text}}</p>
          <a class="button blog__link" href="{{link}}">
            <span class="button__icon-wrapper">
              <svg class="button__icon" width="24" height="24" aria-hidden="true">
                <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
              </svg>
            </span>

            <span class="button__text">{{linktext}}</span>
          </a>
        </section>

        <wb-data wb="table=catalogs&item=projects">
          <wb-var prjtype="{{_current.tree.data}}" />
        </wb-data>
        <ul class="blog__list" id="articlesList">
          <wb-foreach wb="table=blog&size=12&bind=pages.blog&_more=true:ещё">
            <li class="blog__item">
              <wb-var spec="article--special" wb-if="'{{spec}}'=='on'" else="" />
              <article class="article {{_var.spec}}">
                <wb-foreach wb="from=tags&tpl=false&limit=1">
                  <span class="article__tag">
                    {{_var.prjtype.{{_val}}.name}}
                  </span>
                </wb-foreach>

                <div class="article__info">
                  <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
                  <span class="article__views" wb="module=autoinc&table=blog&field={{id}}&ajax=true"></span>
                </div>

                <h3 class="article__title">
                  <a  wb-if="'{{spec}}'==''" class="button article__link" href="/blog/{{_id}}/{{wbFurlGenerate({{name}})}}">
                    {{name}}
                  </a>
                  <a  wb-if="'{{spec}}'=='on'" href="/blog/{{_id}}/{{wbFurlGenerate({{name}})}}">
                    {{name}}
                  </a>
                </h3>

                <p class="article__description" wb-if="'{{spec}}'==''">{{descr}}</p>

                <img class="article__image" width="790" height="500" data-src="/thumbc/790x500/src{{cover.0.img}}" srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x"
                  alt="{{name}}">

                <a class="button article__link" href="/blog/{{_id}}/{{wbFurlGenerate({{name}})}}"  wb-if="'{{spec}}'==''">
                  <span class="button__icon-wrapper">
                    <svg class="button__icon" width="24" height="24" aria-hidden="true">
                      <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                    </svg>
                  </span>

                  <span class="button__text">читать статью</span>
                </a>
              </article>
            </li>
            <wb-empty>
              <li class="blog__item">
                <article class="article">
                  <h3 class="article__title">К сожалению, ничего не найдено...</h3>
                </article>
              </li>
            </wb-empty>
          </wb-foreach>
        </ul>
      </div>
    </section>

  </main>
</view>

<edit header="Страница - Блог">
  <div>
    <wb-module wb="module=yonger&mode=edit&block=common.inc" />
  </div>
  <div class="row bg-gray-100 pt-3">
    <div class="col-12">
      <div class="form-group">
        <label>Заголовок</label>
        <input class="form-control" type="text" name="title">
      </div>
    </div>
    <div class="col-12">
      <div class="form-group">
        <label>Текст</label>
        <textarea class="form-control" name="text" rows="auto"></textarea>
      </div>
    </div>
    <div class="col-12">
      <div class="form-group row">
        <div class="col-6">
          <label>Текст ссылки</label>
          <input class="form-control" type="text" name="linktext">
        </div>
        <div class="col-6">
          <label>Ссылка</label>
          <input class="form-control" type="text" name="link">
        </div>
      </div>
    </div>
</edit>