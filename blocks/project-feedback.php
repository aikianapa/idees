<view>
    <section class="project__feedback container">
        <h2 class="page__section-title">Отзыв клиента</h2>

        <blockquote class="feedback">
            <h3 class="feedback__title">{{_parent.name}}</h3>

            <p class="feedback__text feedback__text--single text-block">
                {{text}}
            </p>
            <div class="feedback__bottom feedback__bottom--inner">
                <cite class="feedback__author">
                    <img class="feedback__author-avatar" width="72" height="72" data-src="/thumbc/72x72/src{{avatar.0.img}}"
                        data-srcset="/thumbc/144x144/src{{avatar.0.img}} 2x" alt="{{author}}">
                    <span class="feedback__name">{{author}}</span>
                    <span class="feedback__role">{{position}}</span>
                </cite>

                <div class="feedback__actions">
                    <a class="feedback__watch-link popup-video" href="{{video}}" rel="noreferrer noopener nofollow">
                        <svg class="feedback__watch-link-icon" width="24" height="24" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#play"></use>
                        </svg>

                        <span class="feedback__watch-link-text">смотреть отзыв</span>
                    </a>

                    <a class="feedback__facebook-link" href="{{link}}" target="_blank" rel="noreferrer noopener nofollow" wb-if="'{{link}}'>''">
                        читать на facebook
                    </a>

                </div>
            </div>
        </blockquote>
    </section>
</view>

<edit header="Отзыв о проекте">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <div class="col-12 mb-2">
            <label class="form-control-label">Ссылка на facebook</label>
            <div class="input-group">
                <input class="form-control" type="text" name="link" placeholder="Ссылка">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <img class="dd-edit cursor-pointer" src="/module/myicons/20/323232/business-chart-research.svg">
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <label class="form-control-label">Ссылка на видео</label>
            <input name="video" type="text" class="form-control" placeholder="Ссылка на видео">
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12 mb-2">
                    <label class="form-control-label">Автор</label>
                    <input name="author" type="text" class="form-control">
                </div>

                <div class="col-12 mb-2">
                    <label class="form-control-label">Должность</label>
                    <input name="position" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-4">
            <input name="avatar" wb="module=filepicker&mode=single&width=150&height=150"
                wb-path="/uploads/projects/avatar/" class="pt-0">
        </div>

        <div class="col-12 mb-2">
            <label class="form-control-label">Текст</label>
            <textarea type="text" rows="auto" name="text" class="form-control"></textarea>
        </div>
    </div>
</edit>