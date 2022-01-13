<view><section class="page__section page__section--without-padding-top container">
  <h2 class="page__section-title">
    {{header}}
  </h2>

  <ul class="products__similar-list">
      <wb-foreach wb="table=projects&amp;tpl=false&amp;limit={{limit}}" wb-filter="{
                             'active':'on',
                             'yonger':'on'
                             }">
    <li class="products__similar-item">
      <article class="case">
        <a class="case__title-link-wrapper" href="/projects/%7B%7B_id%7D%7D/%7B%7BwbFurlGenerate(%7B%7Bname%7D%7D)%7D%7D">
          <h3 class="case__title">{{name}}</h3>
          <p class="case__description">{{descr}}</p>
        </a>
        <a class="case__image-wrapper" href="/projects/%7B%7B_id%7D%7D/%7B%7BwbFurlGenerate(%7B%7Bname%7D%7D)%7D%7D">
          <img class="case__image" width="790" height="500" data-src="/thumbc/790x500//src/{{cover.0.img}}" data-srcset="/thumbc/1580x1000//src/{{cover.0.img}} 2x" alt="{{name}}">
        </a>
      </article>
    </li>
    </wb-foreach>
  </ul>
</section></view><edit><div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
<div class="alert alert-info">
  Данные берутся из таблицы projects
</div>
<div class="form-group row">

    <label class="form-control-label col-3">Лимит записей</label>
    <div class="col-3">
    <input type="text" name="limit" class="form-control">
  </div>
  
</div></edit>