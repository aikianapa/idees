<view>
<section class="main-section animation-section">
  <div id="scene" class="main-section__scene">
    <video class="main-section__scene-video main-section__scene-video-white" autoplay playsinline muted loop>
        <source type="video/mp4" src="/assets/img/W_HHR_v01.mp4" wb-if="'{{video_white.0.img}}'==''">
    </video>
    <video class="main-section__scene-video main-section__scene-video-black" autoplay playsinline muted loop>
        <source type="video/mp4" src="/assets/img/B_HHR_v01.mp4" wb-if="'{{video_white.0.img}}'==''">
    </video>

    <video class="main-section__scene-video main-section__scene-video-white" autoplay playsinline muted loop>
        <source type="video/mp4" src="{{video_white.0.img}}" wb-if="'{{video_white.0.img}}'>''">
    </video>
    <video class="main-section__scene-video main-section__scene-video-black" autoplay playsinline muted loop>
        <source type="video/mp4" src="{{video_dark.0.img}}" wb-if="'{{video_dark.0.img}}'>''">
    </video>

    <!-- <img class="main-section__scene-image" src="" alt="main-photo"> -->
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

      <div class="form-group row">
        <div class="col-sm-6">
            <label>Видео White</label>
            <wb-module wb="module=filepicker&mode=single&width=300&height=200&name=video_white" wb-ext="mp4,avi,mpeg,webm" wb-path="/assets/img/" />
        </div>
        <div class="col-sm-6">
            <label>Видео Dark</label>
            <wb-module wb="module=filepicker&mode=single&width=300&height=200&name=video_dark" wb-ext="mp4,avi,mpeg,webm" wb-path="/assets/img/" />
        </div>
    </div>
</edit>