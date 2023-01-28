<edit header="Блок - список услуг">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>

<view>
    <div class="gray-box2-clear section-outer">
        <div class="container">

            <div class="title-section">
                <h2 class="title-section__title">Услуги агенства</h2>
                <a href="#" class="title-section__link big-link">
                    <div class="big-link__wrapper">
                        <span class="big-link__text">Все <span class="big-link__text-all">услуги</span></span>
                        <i class="big-link__icon-arrow">
                            <svg class="big-link__icon-arrow-svg" width="34" height="9" aria-hidden="true">
                                <use xlink:href="/assets/img/sprite.svg#big-arrow"></use>
                            </svg>
                        </i>
                    </div>
                </a>
            </div>

            <wb-var menu="{{yongerSiteMenu()}}" />

            <wb-foreach wb="from=_var.menu&tpl=false">

                <div class="uslugi" wb-if="'{{name}}'=='services'">

                    <wb-foreach wb="from=children&tpl=false">
                        <div class="uslugi-item" wb-if="'{{name}}'!=='services'">
                            <h3 class="sub-sub-title"> {{menu_title}} </h3>

                            <div class="ttext">
                            </div>
                            <div class="tlist">
                                <wb-foreach wb="table={{attach}}&tpl=false" wb-filter="{{attach_filter}}">
                                    <a href="{{path}}" class="menu__sub-link">
                                        {{header}}
                                    </a>
                                </wb-foreach>
                            </div>
                        </div>
                    </wb-foreach>
                </div>
            </wb-foreach>
        </div>
    </div>

</view>