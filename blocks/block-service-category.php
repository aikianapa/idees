<view>
  <section class="container">
    <ul class="category__list">
      <wb-foreach wb="table={{_parent.attach}}&tpl=false" wb-filter="{{_parent.attach_filter}}">
            <li class="category__item">
                <h3 class="category__item-title">{{name}}</h3>
                <p class="category__item-description">{{descr}}</p>

                <a class="button category__link" href="{{_parent._parent.url}}/{{id}}/{{wbFurlGenerate({{name}})}}">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </span>

                    <span class="button__text"> подробнее</span>
                </a>
            </li>
      </wb-foreach>
    </ul>
  </section>
</view>

<edit header="Блок категории услуг">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>