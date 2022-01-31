<view>
        <div class="project__content-block">
        <div class="project__content-text-block project__content-text-block--steacky">
            <h3 class="project__content-title">{{title}}</h3>

            <p class="project__content-text text-break">{{text}}</p>
        </div>


        <img-comparison-slider wb-if="'{{before.0.img}}'>'' AND '{{after.0.img}}'>''">
            <img class="project__content-image" width="928" height="600" src="/thumbc/928x600/src{{before.0.img}}" srcset="/thumbc/1856x1200/src{{before.0.img}} 2x" alt="{{alt}}"
                slot="first">

            <img class="project__content-image" width="928" height="600" src="/thumbc/928x600/src{{after.0.img}}" srcset="/thumbc/1856x1200/src{{before.0.img}} 2x"
                alt="{{alt}}" slot="second">
        </img-comparison-slider>

        <wb-foreach wb="from=video&tpl=false">
            <div class="project__content-video-container" wb-if="'{{_val}}'>''">
                <iframe class="project__content-video" src="{{_val}}" allowfullscreen width="160" height="90"></iframe>
            </div>
        </wb-foreach>

        <wb-foreach wb="from=images&tpl=false">
        <img class="project__content-image popup-image" width="928" height="600" src="/thumbc/928x600/src{{img}}" srcset="/thumbc/1856x1200/src{{img}} 2x"
            alt="{{alt}}" wb-if="'{{img}}'>''">
        </wb-foreach>

    </div>
</view>

<edit header="Блок контента">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <div class="col-12 mb-2">
            <label class="form-control-label">Заголовок</label>
            <input name="title" type="text" class="form-control">
        </div>

        <div class="col-12 mb-2">
            <label class="form-control-label">Текст</label>
            <textarea type="text" rows="auto" name="text" class="form-control"></textarea>
        </div>
    </div>
    <div class="divider-text">Проект до и после</div>
    <div class="form-group row">
        <div class="col-6 mb-2">
            <input name="before" wb="module=filepicker&mode=single&width=240&height=150" wb-path="/uploads/projects/" class="pt-0">
        </div>
        <div class="col-6 mb-2">
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
        <div class="col mb-2">
            <input name="images" wb="module=filepicker&mode=multiple&width=160&height=120" wb-path="/uploads/projects/" class="pt-0">
        </div>
    </div>
</edit>