<view>
    <section class="page__section page__section--grey brand__grey-section">
        <h2 class="visually-hidden">{{title}}</h2>

        <p class="page__big-text brand__big-text container text-break">{{text}}</p>

        <div class="brand__actions" wb-if="'{{count({{links}})}}' > 0 AND '{{links.0.link}}' > ''">
            
            <wb-foreach wb="from=links&tpl=false">
                <a class="button brand__link" href="{{link}}" download wb-if="'{{download}}'=='on'">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </span>
                    <span class="button__text">{{label}}</span>
                </a>
                <a class="button brand__link" href="{{link}}" wb-if="'{{download}}'==''">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </span>
                    <span class="button__text">{{label}}</span>
                </a>
            </wb-foreach>
        </div>
    </section>

</view>

<edit header="Большой текст + ссылки">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" placeholder="Заголовок">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Текст</label>
        <div class="col-sm-9">
            <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
        </div>
    </div>
    <wb-multiinput name="links">
        <input class="form-control col-5" type="text" name="label" placeholder="Надпись">
        <input class="form-control col-5" type="text" name="link" placeholder="Ссылка" wb="module=yonpageselect">
        <div class="col-2 tx-center">
            <wb-module wb="module=swico" name="download" data-ico-on="download-circle" data-ico-off="attachment-link-arrows" data-size="36" />
        </div>
    </wb-multiinput>
</edit>