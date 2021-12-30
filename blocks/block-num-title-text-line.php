<view>
  <section class="page__section container">
    <h2 class="partners__section-title">
      {{title}}
    </h2>
    <ul class="specail__fixes-list">
      <wb-foreach wb="from=list&tpl=false">
        <li class="special__fixes-item">
          <span class="special__fixes-text">{{text2}}</span>
        </li>
      </wb-foreach>
    </ul>
    <p class="special__fixes-sub" wb-if="'{{text1}}'>''">{{text1}}</p>
  </section>
</view>

<edit header="Список номер+текст в линию">
  <div>
    <wb-module wb="module=yonger&mode=edit&block=common.inc" />
  </div>

  <div class="form-group">
    <label for="my-input">Заголовок</label>
    <input class="form-control col-12" type="text" name="title" placeholder="Заголовок строки" />
  </div>
  <wb-multiinput name="list">
    <textarea class="form-control col-12" rows="auto" name="text2" placeholder="Текст"></textarea>
  </wb-multiinput>

  <div class="form-group">
    <label for="my-input">Текст внизу</label>
    <textarea class="form-control" name="text1" placeholder="Текст внизу"></textarea>
  </div>
</edit>