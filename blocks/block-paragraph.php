<view>
<section class="container">
  <h1 class="page__title">{{title}}</h1>

  <p class="category__description">
    {{text}}
  </p>

</section>
</view>

<edit header="Блок с абзацем">
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

</edit>