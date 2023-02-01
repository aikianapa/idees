<view>
    <section class="feedback-section section-outer">
        <div class="feedback-section__title-container container">
            <div class="title-section">
                <h2 class="title-section__title">{{header}}</h2>
                <a href="/agency/feedback" class="title-section__link big-link">
                    <div class="big-link__wrapper">
                        <span class="big-link__text">Все <span class="big-link__text-all">{{header}}</span></span>
                        <i class="big-link__icon-arrow">
                            <svg class="big-link__icon-arrow-svg" width="34" height="9" aria-hidden="true">
                                <use xlink:href="/assets/img/sprite.svg#big-arrow"></use>
                            </svg>
                        </i>
                    </div>
                </a>
            </div>
        </div>
        <div class="feedback-section__list-container">
            <div class="container">
                <div class="feedback__swiper">
                    <ul class="feedback-section__list swiper-container js-feedback-slider-list">
                        <div class="feedback__slider-wrapper swiper-wrapper">
                            <wb-foreach wb="table=comments&amp;sort=_created:d;sort&tpl=false"
                                        wb-filter="active=on&amp;home=on">
                                <li class="feedback-section__item swiper-slide">
                                    <blockquote class="feedback">
                                        <cite class="feedback__author">
                                            <img class="feedback__author-avatar" width="72" height="72"
                                                 src="/thumbc/72x72/src%7B%7Bavatar.0.img%7D%7D"
                                                 data-srcset="/thumbc/144x144/src{{avatar.0.img}} 2x" alt="{{name}}"
                                                 wb-if="'{{avatar}}'&gt;''">
                                            <img class="feedback__author-avatar" width="72" height="72"
                                                 src="/module/myicons/72/323232/users-06.svg"
                                                 data-srcset="/assets/img/feedback1@2x.jpg 2x" alt="{{name}}"
                                                 wb-if="'{{avatar}}'==''">
                                            <span class="feedback__name">{{name}}</span>
                                            <span class="feedback__role">{{position}}</span>
                                        </cite>
                                        <p class="feedback__text">
                                            {{text}}
                                        </p>
                                        <div class="feedback__bottom">
                                        <h3 class="feedback__title">{{title}}</h3>
                                            <button class="button feedback__next-button js-feedback-slider-button--next"
                                                    type="button" aria-label="Следующий отзыв">
                                                <svg class="feedback__next-button-icon" width="80" height="24"
                                                     aria-hidden="true">
                                                    <use xlink:href="/assets/img/sprite.svg#big-arrow-2"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="feedback__actions">
                                            <a class="feedback__watch-link popup-video" href="%7B%7Byoutube%7D%7D"
                                               target="_blank" rel="noreferrer noopener nofollow"
                                               wb-if="'{{youtube}}'&gt;''">
                                                <svg class="feedback__watch-link-icon" width="24" height="24"
                                                     aria-hidden="true">
                                                    <use xlink:href="/assets/img/sprite.svg#play"></use>
                                                </svg>

                                                <span class="feedback__watch-link-text">смотреть отзыв</span>
                                            </a>

                                            <a class="feedback__facebook-link" href="%7B%7Bfacebook%7D%7D"
                                               target="_blank" rel="noreferrer noopener nofollow"
                                               wb-if="'{{facebook}}'&gt;''">
                                                читать на facebook
                                            </a>

                                            <button class="button feedback__next-button js-feedback-slider-button--next"
                                                    type="button" aria-label="Следующий отзыв">
                                                <svg class="feedback__next-button-icon" width="24" height="24"
                                                     aria-hidden="true">
                                                    <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </blockquote>
                                </li>
                            </wb-foreach>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</view>
<edit header="Виджет отзывов">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="alert alert-info">
        Данные берутся из таблицы comments
    </div>
</edit>