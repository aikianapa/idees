<view>
<section class="page__section">
<div class="brand__section-container container">
    <h2 class="page__section-title brand__section-title">
      {{title}}
    </h2>

    <p class="brand__section-text">{{text}}</p>
  </div>
  <img class="brand__image" width="1920" height="900" src="/thumb/1920x900/src/{{image.0.img}}" 
    data-srcset="/thumb/3840x1800/src/{{image.0.img}} 2x" alt="{{title}}"
    wb-if="'{{image.0.img}}'>''">
</section>
</view>

<edit header="Заголовок слева, текст справа + картинка ">
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
    <label class="col-sm-3">Текст</label>
    <div class="col-sm-9">
    <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
    </div>
  </div>
    <div class="form-group">
        <wb-module wb="module=filepicker&mode=single&width=300&height=200&name=image" wb-path="/assets/img/" />
    </div>
</edit>