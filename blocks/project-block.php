<view>
    <div class="container project__content-block project__content-item">
        <div class="project__content-text-block">
            <h3 class="project__content-title">{{title}}</h3>

            <p class="project__content-text text-break">{{text}}</p>
        </div>
        <wb-foreach wb="from=video&tpl=false">
            <div class="project__content-video-container" wb-if="'{{_val}}'>''">
                <!--wb-foreach wb="from=_parent._parent.blocks&tpl=false">
                    <wb-var cover="{{cover.0.img}}" wb-if="'{{_var.cover}}' == ''" />
                </!--wb-foreach-->
                <div class="project__content-video-img">
                    <!--img width="1620" height="600" data-src="/thumbc/700x400/src{{_var.cover}}" data-srcset="/thumbc/1580x1000/src{{_var.cover}} 2x" alt="{{descr}}"-->
                    <div class="project__content-video-play-btn">
                        <svg class="project__content-video-play-btn-icon" width="40" height="40" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#play-inner"></use>
                        </svg>
                    </div>
                </div>
                <video id="videoPlayer" class="project__content-video" width="600" height="400" controls allowfullscreen>
                    <source src="{{_val}}" type="video/mp4">
                    <source src="{{_val}}" type="video/ogg">
                </video>
            </div>
        </wb-foreach>

        <div class="project__content-image-box" wb-if="'{{images.0.img}}'>''">
            <wb-foreach wb="from=images&tpl=false">
                <img class="project__content-image popup-image" width="928" height="600" data-src="/thumbc/928x600/src{{img}}" data-srcset="/thumbc/1856x1200/src{{img}} 2x" alt="{{alt}}" wb-if="'{{img}}'>''">
            </wb-foreach>
        </div>
    </div>
</view>

<edit header="Блок контента">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <div class="mb-2 col-12">
            <label class="form-control-label">Заголовок</label>
            <input name="title" type="text" class="form-control">
        </div>

        <div class="mb-2 col-12">
            <label class="form-control-label">Текст</label>
            <textarea type="text" rows="auto" name="text" class="form-control"></textarea>
        </div>
    </div>
    <div class="divider-text">Проект до и после</div>
    <div class="form-group row">
        <div class="mb-2 col-6">
            <input name="before" wb="module=filepicker&mode=single&width=240&height=150" wb-path="/uploads/projects/" class="pt-0">
        </div>
        <div class="mb-2 col-6">
            <input name="after" wb="module=filepicker&mode=single&width=240&height=150" wb-path="/uploads/projects/" class="pt-0">
        </div>
    </div>
    <div class="divider-text">Ссылки на видео</div>
    <div class="form-group row">
        <div class="col">
            <wb-multiinput name="video"></wb-multiinput>
        </div>
    </div>
    </div>
    <div class="divider-text">Изображения</div>
    <div class="form-group row">
        <div class="mb-2 col">
            <input name="images" wb="module=filepicker&mode=multiple&width=160&height=120" wb-path="/uploads/projects/" class="pt-0">
        </div>
    </div>
</edit>