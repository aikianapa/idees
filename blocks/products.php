<view>
      
<section class="products__top-section container">
  <h1 class="products__title">{{header}}</h1>

  <div class="products__descrition-wrapper">
    <p class="products__description" style="white-space: break-spaces;">{{text}}</p>

    <a class="button products__link" href="http://yonger.ru/" target="_blank">
      <span class="button__icon-wrapper">
        <svg class="button__icon" width="24" height="24">
          <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
        </svg>
      </span>

      <span class="button__text">перейти на yonger.ru</span>
    </a>
  </div>

  <img class="products__image" width="1620" height="745" data-src="/thumb/1620x745/src{{image.0.img}}" srcset="/thumb/3240x1490/src{{image.0.img}} 2x" alt="Проект Yonger">
</section>


</view>

<edit header="Страница продукты">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
  <div class="form-group row">
    <label class="col-sm-3">Текст</label>
    <div class="col-sm-9">
    <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3">Текст кнопки перехода</label>
    <div class="col-sm-9">
    <input class="form-control" type="text" name="btntext" placeholder="Текст кнопки">      
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3">Ссылка кнопки перехода</label>
    <div class="col-sm-9">
    <input class="form-control" type="text" name="btnlink" placeholder="Ссылка кнопки">      
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3">Изображение</label>
    <div class="col-sm-9">
    <input wb="module=filepicker&mode=single&width=300&height=200" name="image" placeholder="Изображение">      
    </div>
  </div>

</edit>