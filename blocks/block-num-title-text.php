<view>
  <section class="page__section partners__work-section container">
    <h2 class="partners__section-title">
      {{title}}
    </h2>

    <ul class="partners__work-list">
      <wb-foreach wb="from=list&tpl=false">
      <li class="partners__work-item">
        <h3 class="partners__work-title">{{text1}}</h3>
        <p class="partners__work-description text-break">{{text2}}</p>
      </li>
      </wb-foreach>
    </ul>
  </section>
</view>

<edit header="Список номер+заголовок+текст">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <input class="form-control col-12" type="text" name="title" placeholder="Заголовок" />
    </div>
    <wb-multiinput name="list">
        <input class="form-control col-12 mb-1" name="text1" placeholder="Заголовок">
        <textarea class="form-control col-12" rows="auto" name="text2" placeholder="Текст"></textarea>
    </wb-multiinput>
</edit>
