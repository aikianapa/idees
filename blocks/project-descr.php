<view>

    <h2 class="visually-hidden">Описание проекта</h2>

    <div class="project__content-block project__content-block--main container">
        <div class="project__content-text-block">
            <h3 class="project__content-title">{{title}}</h3>
            <p class="project__content-text text-break">{{text}}</p>
        </div>

        <img class="project__content-main-image project__content-image" width="1620" height="600"
             data-src="/thumbc/1620x600/src{{cover.0.img}}"
            data-srcset="/thumbc/3240x1200/src{{cover.0.img}} 2x" alt="{{title}}" wb-if="'{{cover.0.img}}'>''">
    </div>
</view>

<edit header="Описание проекта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <div class="col-12 mb-2">
            <input name="cover" wb="module=filepicker&mode=single&width=650&height=215" wb-path="/uploads/projects/cover" class="pt-0">
        </div>
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
</edit>