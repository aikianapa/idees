<view>
<section class="agency__video-section">
  <h2 class="visually-hidden">{{title}}</h2>
  <video id="video" class="video-section__video js-video" src="{{video.0.img}}" poster="{{image.0.img}}" muted="" preload="none" loop=""
  wb-if="'{{link}}'==''"></video>
  <video id="video" class="video-section__video js-video" src="{{link}}" poster="{{image.0.img}}" muted="" preload="none" loop=""
  wb-if="'{{link}}'>''"></video>

  <button class="video-section__button video-section__button--play video-section__button--active js-play" type="button" aria-label="Play video" aria-controls="video">
    <svg class="video-section__button-icon" width="40" height="44">
      <use xlink:href="/assets/img/sprite.svg#play-button"></use>
    </svg>
  </button>

  <button class="video-section__button video-section__button--pause js-pause" type="button" aria-label="Pause video" aria-controls="video">
    <svg class="video-section__button-icon" width="40" height="44">
      <use xlink:href="/assets/img/sprite.svg#play-button"></use>
    </svg>
  </button>
</section>
</view>

<edit header="Блок видео">
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
        <div class="col-sm-6">
            <label>Превью</label>
            <wb-module wb="module=filepicker&mode=single&width=300&height=200&name=image" wb-ext="jpg,png,webp" wb-path="/assets/img/" />
        </div>
        <div class="col-sm-6">
            <label>Видео</label>
            <wb-module wb="module=filepicker&mode=single&width=300&height=200&name=video" wb-ext="mp4,avi,mpeg,webm" wb-path="/assets/img/" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Ссылка на видео</label>
        <div class="col-sm-9">
        <input class="form-control" type="text" name="link" placeholder="Ссылка на видео">
        </div>
    </div>
</edit>