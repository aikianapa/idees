<view><section class="feedback-section">
  <div class="feedback-section__title-container container">
    <h2 class="feedback-section__title">{{header}}</h2>

    <a class="button feedback-section__button" href="/feedback">
      <span class="button__icon-wrapper">
        <svg class="button__icon" width="24" height="24" aria-hidden="true">
          <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
        </svg>
      </span>

      <span class="button__text">все отзывы</span>
    </a>
  </div>


  <div class="feedback-section__list-container js-feedback-slider">
    <div class="container">
      <ul class="feedback-section__list js-feedback-slider-list">
        <wb-foreach wb="table=comments&amp;sort=_created:d;sort&tpl=false" wb-filter="active=on&amp;home=on">
        <li class="feedback-section__item">
          <blockquote class="feedback">
            <h3 class="feedback__title">{{title}}</h3>

            <p class="feedback__text">
              {{text}}
            </p>

            <cite class="feedback__author">
              <img class="feedback__author-avatar" width="72" height="72" src="/thumbc/72x72/src%7B%7Bavatar.0.img%7D%7D" srcset="/thumbc/144x144/src{{avatar.0.img}} 2x" alt="{{name}}" wb-if="'{{avatar}}'&gt;''">
              <img class="feedback__author-avatar" width="72" height="72" src="/module/myicons/72/323232/users-06.svg" srcset="/assets/img/feedback1@2x.jpg 2x" alt="{{name}}" wb-if="'{{avatar}}'==''">
              <span class="feedback__name">{{name}}</span>
              <span class="feedback__role">{{position}}</span>
            </cite>

            <div class="feedback__actions">
              <a class="feedback__watch-link" href="%7B%7Byoutube%7D%7D" target="_blank" rel="noreferrer noopener nofollow" wb-if="'{{youtube}}'&gt;''">
                <svg class="feedback__watch-link-icon" width="24" height="24" aria-hidden="true">
                  <use xlink:href="/assets/img/sprite.svg#play"></use>
                </svg>

                <span class="feedback__watch-link-text">смотреть отзыв</span>
              </a>

              <a class="feedback__facebook-link" href="%7B%7Bfacebook%7D%7D" target="_blank" rel="noreferrer noopener nofollow" wb-if="'{{facebook}}'&gt;''">
                читать на facebook
              </a>

              <button class="button feedback__next-button js-feedback-slider-button--next" type="button" aria-label="Следующий отзыв">
                <svg class="feedback__next-button-icon" width="24" height="24" aria-hidden="true">
                  <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                </svg>
              </button>
            </div>
          </blockquote>
        </li>
        </wb-foreach>
      </ul>
    </div>
  </div>
</section></view><edit header="Виджет отзывов"><div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
<div class="alert alert-info">
  Данные берутся из таблицы comments
</div></edit>