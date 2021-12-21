<view>
    <main class="page__main">
      
<section class="blog container">
  <div class="blog__title-container">
    <h1 class="page__title">Блог</h1>

    <ul class="blog__tags tags">
      <li class="tags__item">
        <button class="tag tag--active" type="button">Все статьи</button>
      </li>
      <li class="tags__item">
        <button class="tag" type="button">Продукт</button>
      </li>
      <li class="tags__item">
        <button class="tag" type="button">Брендинг</button>
      </li>
      <li class="tags__item">
        <button class="tag" type="button">Стратегия</button>
      </li>
      <li class="tags__item">
        <button class="tag" type="button">Разработка</button>
      </li>
      <li class="tags__item">
        <button class="tag" type="button">Дизайн</button>
      </li>
    </ul>
  </div>

  <div class="blog__content">
      <wb-foreach wb="table=blog&tpl=false&limit=1">
        <article class="article article--main">
          <span class="article__tag">Дизайн</span>

          <div class="article__info">
            <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
            <span class="article__views">1559</span>
          </div>

          <h3 class="article__title">{{name}}</h3>

          <p class="article__description">{{descr}}</p>

          <img class="article__image" width="790" height="500" src="/thumbc/790x500/src{{cover.0.img}}" srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x" alt="{{name}}">

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
      <h2 class="blog__section-title">Глоссарий</h2>
      <p class="blog__section-text">Мы хотим вам помочь лучше понимать нас, поэтому заботливо составили словарь терминов, которые мы используем в работе. Предлагаем вам изучить его и использовать в качестве шпаргалки в работе с нами или с любыми другими вашими подрядчиками.</p>
      <a class="button blog__link" href="/glosario">
        <span class="button__icon-wrapper">
          <svg class="button__icon" width="24" height="24" aria-hidden="true">
            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
          </svg>
        </span>

        <span class="button__text">читать глоссарий</span>
      </a>
    </section>

    <ul class="blog__list" id="blogList">
        <wb-foreach wb="table=blog&size=6&bind=pages.blog&more=true:ещё">
      <li class="blog__item">
          <wb-var spec="article--special" wb-if="'{{spec}}'=='on'" else=""/>
        <article class="article {{_var.spec}}">
          <span class="article__tag">Дизайн</span>

          <div class="article__info">
            <time class="article__date" datetime="{{_created}}">{{datetext({{_created}})}}</time>
            <span class="article__views">1559</span>
          </div>

          <h3 class="article__title">{{name}}</h3>

          <p class="article__description">{{descr}}</p>

          <img class="article__image" width="790" height="500" data-src="/thumbc/790x500/src{{cover.0.img}}" srcset="/thumbc/1580x1000/src{{cover.0.img}} 2x" alt="{{name}}">

          <a class="button article__link" href="/blog/{{_id}}/{{wbFurlGenerate({{name}})}}">
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
    </ul>
  </div>
</section>

    </main>
</view>

<edit header="Страница - Блог">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>