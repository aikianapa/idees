<view>
  <main class="page__main">
    <wb-var first=""/>
    <wb-data wb="table=catalogs&item=projects">
      <wb-var prjtype="{{_current.tree.data}}" />
    </wb-data>
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
        <wb-foreach wb="table=blog&tpl=false&limit=1&sort=_created:d">
          <article class="article article--main">
            <div class="article__tags">
              <wb-foreach wb="from=tags&tpl=false">
                <span class="article__tag">
                  {{_var.prjtype.{{_val}}.name}}
                </span>
              </wb-foreach>
            </div>
            <wb-var first="{{_id}}"/>
            <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__info">
              <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
              <span class="article__views" wb="module=autoinc&table=blog&field={{id}}"></span>
            </a>

            <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__title">{{name}}</a>

            <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__description">{{descr}}</a>

            <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__img lazy-wrapper">
                <img class="article__image loading lazy-wrapper__img" width="790" height="500"
                     src="/thumbc/790x500/src{{cover.0.img}}"
                     data-src="/thumbc/790x500/src{{cover.0.img}}"
                     data-srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x"
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

        <ul class="blog__list" id="articlesList">
          <wb-foreach wb="table=blog&size=12&bind=pages.blog&sort=_created:d&more=true:ещё" wb-filter="{'_id':{'$ne':'{{_var.first}}'}}">
            <li class="blog__item">
              <wb-var spec="article--special" href="/blog/{{wbFurlGenerate({{name}})}}" wb-if="'{{spec}}'=='on'" else="" />
              <article class="article {{_var.spec}}">
                <div class="article__tags">
                  <wb-foreach wb="from=tags&tpl=false">
                    <span class="article__tag">
                      {{_var.prjtype.{{_val}}.name}}
                    </span>
                  </wb-foreach>
                </div>

                <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__info">
                  <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
                  <span class="article__views" wb="module=autoinc&table=blog&field={{id}}"></span>
                </a>

                <h3 class="article__title">
                  <a  wb-if="'{{spec}}'==''" class="article__link" href="/blog/{{wbFurlGenerate({{name}})}}">
                    {{name}}
                  </a>
                  <a  wb-if="'{{spec}}'=='on'" href="/blog/{{wbFurlGenerate({{name}})}}">
                    {{name}}
                  </a>
                </h3>

                <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__description" wb-if="'{{spec}}'==''">{{descr}}</a>

                <a href="/blog/{{wbFurlGenerate({{name}})}}" class="article__img lazy-wrapper">
                    <img class="article__image loading lazy-wrapper__img"
                         width="790" height="500"
                         data-src="/thumbc/790x500/src{{cover.0.img}}"
                         data-srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x"
                         alt="{{name}}"
                    >
                </a>

                <a class="button article__link" href="/blog/{{wbFurlGenerate({{name}})}}"  wb-if="'{{spec}}'==''">
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
            <div class="page__spinner-block visually-hidden">
                <img class="page__spinner page__spinner--active" src="/assets/img/spinner.svg" alt="" aria-hidden="true">
            </div>
    </section>
        <script wb-app remove>
            function changeLink() {
                const moreBtn = document.querySelector('.page-link.more');
                moreBtn.innerHTML = `<span class="text-icon">загрузить еще</span> <span class="button__icon-wrapper"><svg class="button__icon" width="24" height="24"><use xlink:href="/assets/img/sprite.svg#arrow-right"></use></svg></span>`
                moreBtn.href = 'javascript:void(0)';
            }
            $("#articlesList").bind("DOMSubtreeModified",function(){
                changeLink();
            });
            changeLink();
            $("#articlesList").on('wb-ajax-start', function(ev, params) {
                if (params.target !== "#articlesList") return;
                if (params._params !== undefined && params._params.more !== undefined) {
                    $('.page__spinner-block').removeClass('visually-hidden');
                }
            });
            $("#articlesList").on('wb-ajax-done', function(ev, params) {
                if (params.target !== "#articlesList") return;
                if (params._params !== undefined && params._params.more !== undefined) {
                    $('.page__spinner-block').addClass('visually-hidden');
                }
            });
        </script>
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
          <input class="form-control" type="text" name="link" wb="module=yonpageselect">
        </div>
      </div>
    </div>
    <wb-include wb="form=blog&mode=list"></wb-include>
</edit>