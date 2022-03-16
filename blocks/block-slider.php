<view>
  <div class="brand__slider-container js-slider">
    <div class="container">
      <div class="brand__swiper">
        <ul class="brand__slider swiper-container js-slider-list">
          <div class="brand__slider-wrapper swiper-wrapper">
            <wb-foreach wb="from=list&tpl=false">
                <li class="brand__slider-item swiper-slide">
                <span class="brand__slider-item-number">{{sprintf("%02d", {{_ndx}})}}</span>
                <span>{{text}}</span>
                </li>
            </wb-foreach>
          </div>
        </ul>
      </div>

      <div class="brand__slider-buttons">
        <button class="button brand__slider-button js-slider-button--prev" type="button" aria-label="Назад">
          <span class="button__icon-wrapper">
            <svg class="button__icon" width="24" height="24">
              <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
            </svg>
          </span>
        </button>

        <button class="button brand__slider-button js-slider-button--next" type="button" aria-label="Вперед">
          <span class="button__icon-wrapper">
            <svg class="button__icon" width="24" height="24">
              <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
            </svg>
          </span>
        </button>
      </div>
    </div>
  </div>
</view>

<edit header="Слайдер номер+текст">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multiinput name="list">
        <textarea class="form-control col-12" rows="auto" name="text" placeholder="Текст"></textarea>
    </wb-multiinput>
</edit>

