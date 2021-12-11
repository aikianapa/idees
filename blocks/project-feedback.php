<view>
        <section class="project__feedback mt-150">
            <h2 class="page__section-title">Отзыв клиента</h2>

            <blockquote class="feedback">
                <h3 class="feedback__title">{{_parent.name}}</h3>

                <p class="feedback__text feedback__text--single">
                    Заказывал разработку корпоративного стиля и сайта для крупнейшего в Европе центра дерматовенерологии
                    www.mosderm.ru. Остался крайне доволен взаимодействием. На каждом этапе работ предлагалась масса
                    вариантов решения, зачастую больше, чем прописано в техническом задании. Правки делались оперативно.
                    Остались только положительные эмоции.
                </p>

                <cite class="feedback__author">
                    <img class="feedback__author-avatar" width="72" height="72" src="/assets/img/feedback1@1x.jpg"
                        srcset="/assets/img/feedback1@2x.jpg 2x" alt="Александр Игнатьев">
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
                </div>
            </blockquote>
        </section>
</view>

<edit header="Отзыв о проекте">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>