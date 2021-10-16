<view>
<section class="feedback-section">
  <div class="feedback-section__title-container container">
    <h2 class="feedback-section__title">{{header}}</h2>

    <a class="button feedback-section__button" href="/feedback.html">
      <span class="button__icon-wrapper">
        <svg class="button__icon" width="24" height="24" aria-hidden="true">
          <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
        </svg>
      </span>

      <span class="button__text">все отзывы</span>
    </a>
  </div>


  <div class="feedback-section__list-container">
    <div class="container">
      <ul class="feedback-section__list">
        <li class="feedback-section__item feedback-section__item--active">
          <blockquote class="feedback">
            <h3 class="feedback__title">Мосдерм</h3>

            <p class="feedback__text">
              Заказывал разработку корпоративного стиля и сайта для крупнейшего в Европе центра дерматовенерологии www.mosderm.ru. Остался крайне доволен взаимодействием. На каждом этапе работ предлагалась масса вариантов решения, зачастую больше, чем прописано в техническом задании. Правки делались оперативно. Остались только положительные эмоции.
            </p>

            <cite class="feedback__author">
              <img class="feedback__author-avatar" width="72" height="72" src="/assets/img/feedback1@1x.jpg" srcset="/assets/img/feedback1@2x.jpg 2x" alt="Александр Игнатьев">
              <span class="feedback__name">Александр Игнатьев</span>
              <span class="feedback__role">Директор по развитию</span>
            </cite>

            <div class="feedback__actions">
              <a class="feedback__watch-link" href="#" target="_blank" rel="noreferrer noopener nofollow">
                <svg class="feedback__watch-link-icon" width="24" height="24" aria-hidden="true">
                  <use xlink:href="/assets/img/sprite.svg#play"></use>
                </svg>

                <span class="feedback__watch-link-text">смотреть отзыв</span>
              </a>

              <a class="feedback__facebook-link" href="#" target="_blank" rel="noreferrer noopener nofollow">
                читать на facebook
              </a>

              <button class="button feedback__next-button" type="button" aria-label="Следующий отзыв">
                <svg class="feedback__next-button-icon" width="24" height="24" aria-hidden="true">
                  <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                </svg>
              </button>
            </div>
          </blockquote>
        </li>

        <li class="feedback-section__item">
          <blockquote class="feedback">
            <h3 class="feedback__title">Мосдерм</h3>

            <p class="feedback__text">
              Заказывал разработку корпоративного стиля и сайта для крупнейшего в Европе центра дерматовенерологии www.mosderm.ru. Остался крайне доволен взаимодействием. На каждом этапе работ предлагалась масса вариантов решения, зачастую больше, чем прописано в техническом задании. Правки делались оперативно. Остались только положительные эмоции.
            </p>

            <cite class="feedback__author">
              <img class="feedback__author-avatar" width="72" height="72" src="/assets/img/feedback1@1x.jpg" srcset="/assets/img/feedback1@2x.jpg 2x" alt="Александр Игнатьев">
              <span class="feedback__name">Александр Игнатьев</span>
              <span class="feedback__role">Директор по развитию</span>
            </cite>

            <div class="feedback__actions">
              <a class="feedback__watch-link" href="#" target="_blank" rel="noreferrer noopener nofollow">
                <svg class="feedback__watch-link-icon" width="24" height="24" aria-hidden="true">
                  <use xlink:href="/assets/img/sprite.svg#play"></use>
                </svg>

                <span class="feedback__watch-link-text">смотреть отзыв</span>
              </a>

              <a class="feedback__facebook-link" href="#" target="_blank" rel="noreferrer noopener nofollow">
                читать на facebook
              </a>

              <button class="button feedback__next-button" type="button" aria-label="Следующий отзыв">
                <svg class="feedback__next-button-icon" width="24" height="24" aria-hidden="true">
                  <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                </svg>
              </button>
            </div>
          </blockquote>
        </li>
      </ul>
    </div>
  </div>
</section>
</view>

<edit header="Виджет отзывов">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>