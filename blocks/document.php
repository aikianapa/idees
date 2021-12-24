<view>
    <div class="container">
        <div class="document">
        <div class="document__title-container" wb-if="'{{title}}'>''">
            <h1 class="document__title">{{title}}</h1>
        </div>
            <div class="document__content">
            {{text}}
            </div>
        </div>
    </div>

    <wb-jq wb="$dom->find('.document__content')->find('h1,h2,h3,h4,h5')->addClass('document__subtitle')" />
    <wb-jq wb="$dom->find('.document__content p')->addClass('document__paragraph')" />
    <wb-jq wb="$dom->find('.document__content > ol')->addClass('document__list')" />
    <wb-jq wb="$dom->find('.document__content > ol > li')->addClass('document__list-item document__list-item--with-border')" />
    <wb-jq wb="$dom->find('.document__content > ol > li > h2')->addClass('document__subtitle document__subtitle--with-counter')" />
    <wb-jq wb="$dom->find('.document__content > ol > li > ol')->addClass('document__list document__list--level2')" />
    <wb-jq wb="$dom->find('.document__content > ol > li > ol li')->addClass('document__list-item document__list-item--with-counter')" />
    <wb-jq wb="$dom->find('.document__content > ol > li > ol li ol')->addClass('document__list document__list--alpha')" />
</view>


<edit header="Форматирование документа">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label>Заголовок</label>
        <input class="form-control" type="text" name="title">
    </div>
    <wb-module wb="module=editor" name="text">
</edit>