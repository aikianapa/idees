<view>
<section class="main-section animation-section container">
  <div id="scene" class="main-section__scene">
    <svg class="main-section__scene-img" data-depth="0.3" xmlns="http://www.w3.org/2000/svg" width="500" height="300" fill="none" viewbox="0 0 500 300">
      <path fill="#FFFE4C" d="M167.5 101.26s-108.23-2.9 66.5-89.5c501.1-65.68 71.33 160.23 266 273.95-243.34 83.86-239.67-239.19-375.53 0C2.23 169.11 268.41 160.24 37.01 160.24c-131.73 0 130.49-58.98 130.49-58.98Z">
        <animate attributename="d" from="M167.5 101.26s-108.23-2.9 66.5-89.5c501.1-65.68 71.33 160.23 266 273.95-243.34 83.86-239.67-239.19-375.53 0C2.23 169.11 268.41 160.24 37.01 160.24c-131.73 0 130.49-58.98 130.49-58.98Z" to="M167.5 101.26s-108.23-2.9 66.5-89.5c501.1-65.68 71.33 160.23 266 273.95-243.34 83.86-239.67-239.19-375.53 0C2.23 169.11 268.41 160.24 37.01 160.24c-131.73 0 130.49-58.98 130.49-58.98Z" values="M167.5 101.26s-108.23-2.9 66.5-89.5c501.1-65.68 71.33 160.23 266 273.95-243.34 83.86-239.67-239.19-375.53 0C2.23 169.11 268.41 160.24 37.01 160.24c-131.73 0 130.49-58.98 130.49-58.98Z; M272.33 0S352.3 100.22 500 22.85c0 57.97-73.66 155.98-147.7 186.77C146.63 284.55 187.77-85.16 187.77 300c-186.38 0 29.09-175.64-166.5-175.64C-90.1 124.36 272.32 0 272.32 0Z; M314.24 15.38s185.65-78 185.65 117.32c0 54.69 6.64 51.39-85.8 80.43-256.8 70.69-37.9 85.27-205.44 85.27C-24.05 298.4.77 328 .77 132.7 168.53 326.45 314.24 15.38 314.24 15.38Z; M365.6 0s-198.28 177.07 0 99.7c0 57.97 206.77 79.13 107.38 109.92C196.84 284.55 252.07-85.16 252.07 300 1.85 300 291.12 124.36 28.53 124.36-120.95 124.36 365.6 0 365.6 0Z; M500 230.43S1.87-26.37 185.72 5.07c495.5-43.62 53.9 206.49 246.39 282.03-240.62 55.7-246.4-92.66-371.34 0C-60.1 209.65.91 179.85 229.67 183.36 316.15 184.7 500 230.43 500 230.43Z; M167.5 101.26s-108.23-2.9 66.5-89.5c501.1-65.68 71.33 160.23 266 273.95-243.34 83.86-239.67-239.19-375.53 0C2.23 169.11 268.41 160.24 37.01 160.24c-131.73 0 130.49-58.98 130.49-58.98Z" dur="15s" repeatcount="indefinite"></animate>
      </path>
    </svg>
  </div>

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