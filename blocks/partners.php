<view>
<section class="partners__top-section">
  <div class="container">
    <h1 class="page__title">{{header}}</h1>
  </div>

  <div class="partners__top-section-container container">
    <p class="partners__description text-break">{{text1}}</p>

    <p class="partners__addition-description text-break">{{text2}}</p>
  </div>

  <div class="page__section partners__bonus-section page__section--grey">
    <div class="partners__section-grey-container container">
      <dl class="parners__bonus-list">
        <dt class="partners__bonus-name">{{title1}}</dt>
        <dd class="partners__bonus-value">{{percent1}}%</dd>

        <dt class="partners__bonus-name">{{title2}}</dt>
        <dd class="partners__bonus-value">{{percent2}}%</dd>
      </dl>

      <div class="partners__grey-description-container text-break">{{text3}}</div>


      <a class="button partners__link" id="partner-link" href="#partners-form">
        <span class="button__icon-wrapper">
          <svg class="button__icon" width="24" height="24">
            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
          </svg>
        </span>

        <span class="button__text">начать сотрудничество</span>
      </a>
    </div>
  </div>
</section>

<script>
    document.getElementById("partner-link").href = location.pathname + "#partners-form";
</script>

</view>

<edit header="Промо блок">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <input class="form-control col-12" type="text" name="title" placeholder="Заголовок" />
    </div>

    <div class="form-group row px-3">
        <textarea class="form-control col-sm-6" rows="auto" name="text1" placeholder="Подзаголовок слева"></textarea>
        <textarea class="form-control col-sm-6" rows="auto" name="text2" placeholder="Подзаголовок справа"></textarea>
    </div>

    <div class="form-group row pr-3">
        <div class="input-group col-4">
            <input class="form-control" type="number" name="percent1" placeholder="Процент">
            <div class="input-group-append">
                <span class="input-group-text">%</span>
            </div>
        </div>
        <input class="form-control col-8" type="text" name="title1" placeholder="Подпись" />
    </div>
    <div class="form-group row pr-3">
        <div class="input-group col-4">
            <input class="form-control" type="number" name="percent2" placeholder="Процент">
            <div class="input-group-append">
                <span class="input-group-text">%</span>
            </div>
        </div>
        <input class="form-control col-8" type="text" name="title2" placeholder="Подпись" />
    </div>
    <div class="form-group row px-3">
        <textarea class="form-control col-12" rows="auto" name="text3" placeholder="Текст"></textarea>
    </div>
</edit>