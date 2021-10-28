<view>
  <section class="page__section container">
    <h2 class="page__section-title">
      {{title}}
    </h2>

    <ul class="agency__approach-list">
      <wb-foreach wb="from=list&tpl=false">
        <li class="agency__approach-item">
          <h3 class="agency__approach-title">{{text1}}</h3>
          <p class="agency__approach-descr text-break">{{text2}}</p>
        </li>
      </wb-foreach>
    </ul>
  </section>
</view>

<edit header="Список номер+заколовок+текст">
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