<view>
<section class="main-section animation-section">
  <div id="scene" class="main-section__scene">
    <video class="main-section__scene-video main-section__scene-video-white" autoplay playsinline muted loop>
        <source type="video/mp4" src="/assets/img/W_HR_v01.mp4">
    </video>
    <video class="main-section__scene-video main-section__scene-video-black" autoplay playsinline muted loop>
        <source type="video/mp4" src="/assets/img/B_HR_v01.mp4">
    </video>
    <!-- <img class="main-section__scene-image" src="/assets/img/1x1_#676f51ff.png" alt="main-photo"> -->
  </div>

  <div class="main-section animation-section container">
      <h1 class="visually-hidden">{{_parent.header}}</h1>

    <p class="main-section__slogan">
      {{text}}
    </p>

    <button class="button main-section__button js-form-open animation-target" type="button">
      <span class="button__icon-wrapper">
        <svg class="button__icon" width="24" height="24" aria-hidden="true">
          <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
        </svg>
      </span>

      <span class="button__text">{{btntext}}</span>
    </button>
  </div>
</section>
</view>
<edit header="Заголовок главной страницы">
  <div>
    <wb-module wb="module=yonger&mode=edit&block=common.inc" />
  </div>
  <div class="form-group row">
    <label class="col-sm-3">Текст кнопки</label>
    <div class="col-sm-9">
    <input class="form-control" type="text" name="btntext" placeholder="Текст кнопки">      
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3">Текст заголовка</label>
    <div class="col-sm-9">
    <textarea class="form-control" rows="auto" name="text" placeholder="Текст заголовка"></textarea>
    </div>
  </div>
</edit>