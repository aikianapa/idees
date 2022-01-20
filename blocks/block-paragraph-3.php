<view>
<section class="agency__top-section container">
  <h1 class="page__title">{{title}}</h1>

  <div class="agency__description-container">
    <p class="agency__description text-break">{{text}}</p>
  </div>

  <a class="button agency__download" href="{{link}}" download="">
    <span class="button__icon-wrapper">
      <svg class="button__icon" width="24" height="24">
        <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
      </svg>
    </span>

    <span class="button__text">{{label}}</span>
  </a>
</section>
</view>

<edit header="Заголовок+ссылка слева, текст справа">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
  <div class="form-group row">
    <label class="col-sm-3">Заголовок</label>
    <div class="col-sm-9">
    <input class="form-control" type="text" name="title" placeholder="Заголовок">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3">Текст</label>
    <div class="col-sm-9">
    <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-6">
        <label>Текст ссылки</label>
        <input class="form-control" type="text" name="label" placeholder="Текст ссылки">
    </div>
    <div class="col-sm-6">
        <label>Ссылка</label>
        <input class="form-control" type="text" name="link" placeholder="Ссылка" wb="module=yonpageselect">
    </div>
  </div>
</edit>