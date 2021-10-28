<view>
<section class="service-page__section service-page__section--grey">
  <div class="container">
    <h2 class="service-page__section-title">{{title}}</h2>

    <ul class="service-page__team-list">
        <wb-foreach wb="from=list&tpl=false">
      <li class="service-page__team-item">{{_val}}</li>
</wb-foreach>
    </ul>
  </div>
</section>
</view>

<edit header="Список номер+заголовок (серый фон)">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <input class="form-control col-12" type="text" name="title" placeholder="Заголовок" />
    </div>
    <wb-multiinput name="list">
        <input class="form-control tx-semibold col-12 mb-1" name="list" placeholder="">
    </wb-multiinput>
</edit>