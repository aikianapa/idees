<view>
  <section class="blog__section">
    <h2 class="blog__section-title">Рассылка</h2>
    <p class="blog__section-text">Самые свежие новости мы еженедельно отправляем на вашу почту, без спама и лишней информации</p>

    <form class="blog__form" action="https://echoacademy.ru/courses" method="post">
      <label class="visually-hidden" for="email-field-blog">Email</label>
      <input class="blog__input" id="email-field-blog" type="email" name="email" placeholder="введите свой email" required>

      <button class="button" type="submit">
        <span class="button__icon-wrapper">
          <svg class="button__icon" width="24" height="24" aria-hidden="true">
            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
          </svg>
        </span>

        <span class="button__text">подписаться</span>
      </button>
    </form>
  </section>
</view>

<edit header="Форма подписки">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>