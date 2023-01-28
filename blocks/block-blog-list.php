<edit header="Блок - список статей">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="alert alert-info">
        Данные
    </div>
</edit>
<view>
    <div class="blog-section section">
        <div class="container">
            <div class="title-section">
                <h2 class="title-section__title">Блог – новости, статьи, полезный контент</h2>
                <a href="/blog/" class="title-section__link big-link">
                    <div class="big-link__wrapper">
                        <span class="big-link__text">Все статьи</span>
                        <i class="big-link__icon-arrow">
                            <svg class="big-link__icon-arrow-svg" width="34" height="9" aria-hidden="true">
                                <use xlink:href="/assets/img/sprite.svg#big-arrow"></use>
                            </svg>
                        </i>
                    </div>
                </a>
            </div>
            <div class="blog-section__list">
                <wb-foreach wb="table=blog&tpl=false&limit=6&sort=_created:d">
                    <a href="/blog/{{wbFurlGenerate({{name}})}}" class="blog-section__item">
                        <div class="blog-section__item-img"
                             style="background-image: url('/thumbc/790x500/src{{cover.0.img}}');">
                        </div>
                        <div class="blog-section__item-content">
                            <div class="blog-section__item-title">
                                {{name}}
                            </div>
                            <div class="blog-section__item-description">
                                {{descr}}
                            </div>
                        </div>
                    </a>
                </wb-foreach>
            </div>
        </div>
    </div>
</view>