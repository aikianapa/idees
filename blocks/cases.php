<view>
  <section class="cases-section container">
    <h2 class="visually-hidden">{{header}}</h2>
    <ul class="cases-section__list">
      <wb-foreach wb-from='cases'>
      <li class="cases-section__item">
        <article class="case">
          <a class="case__title-link-wrapper" href="{{link}}">
            <h3 class="case__title">{{title}}</h3>
            <p class="case__description">{{text}}</p>
          </a>
          <a class="case__image-wrapper" href="{{link}}">
            <img class="case__image" width="790" height="500" src="/thumbc/790x500/src/{{image.0.img}}" srcset="/thumbc/1580x1000/src/{{image.0.img}} 2x"
              alt="{{title}}">
          </a>

          <a class="button case__link" href="{{link}}">
            <span class="button__icon-wrapper">
              <svg class="button__icon" width="24" height="24" aria-hidden="true">
                <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
              </svg>
            </span>

            <span class="button__text">{{_parent.btntext}}</span>
          </a>
        </article>
      </li>
      </wb-foreach>
    </ul>
  </section>
</view>
<edit header="Кейсы" thumb="">
  <div>
    <wb-module wb="module=yonger&mode=edit&block=common.inc" />
  </div>
  <div class="form-group row">
    <label class="col-sm-3">Текст кнопки перехода</label>
    <div class="col-sm-9">
    <input class="form-control" type="text" name="btntext" placeholder="Текст кнопки">      
    </div>
  </div>
  <wb-multiinput name="cases">
    <div class="col-sm-4">
      <wb-module wb="module=filepicker&mode=single&name=image" wb-ext="jpg,png,webp,svg,gif" wb-path="/assets/img/cases" />
    </div>
    <div class="col-sm-8 pt-3">
      <input class="form-control mb-1" type="text" name="title" placeholder="Заголовок">
      <input class="form-control mb-1" type="text" name="link" placeholder="Ссылка">
      <textarea class="form-control mb-1" rows="auto" name="text" placeholder="Текст"></textarea>
    </div>
  </wb-multiinput>
</edit>