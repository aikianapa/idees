<view>
    <div class="mailing-block">
        <div class="container mailing-block__container">
            <span class="mailing-block__text">
                Полезная рассылка два раза в неделю: во вторник и пятницу
            </span>

            <form class="mailing-block__form" action="/mailing" method="post">
                <label class="visually-hidden" for="email-field">Email</label>
                <input class="mailing-block__input" id="email-field" type="email" name="email" placeholder="введите свой email" required
                    done="">

                <div class="mailing-block__buttons-wrapper">
                    <button class="mailing-block__accept-button" type="submit">Подписаться</button>

                    <button class="mailing-block__close-button button" type="button" aria-label="Не подписываться">
                        <svg class="button__icon button__icon--fill" width="24" height="24" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#menu-cross"></use>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</view>

<edit header="Блок подписки">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>