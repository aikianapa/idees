<html>
<div class="m-3" id="yongerSpace">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Новости</h3>
        <div class="ml-auto order-2 float-right">
            <a href="#" data-ajax="{'url':'/cms/ajax/form/news/edit/_new','append':'modals'}"
                class="btn btn-primary">
                <img src="/module/myicons/24/FFFFFF/item-select-plus-add.svg" width="24" height="24" /> Добавить новость
            </a>
        </div>
    </nav>

    <div class="yonger-nested mb-1">
        <span class="bg-light">
            <div class="header p-2">
                <span clsss="row">
                    <div class="col-3">
                    <input class="form-control" type="search" placeholder="Поиск..."
                    data-ajax="{'target':'#newsList','filter_add':{'$or':[{ 'header': {'$like' : '$value'} }, { 'tags': {'$like' : '$value'} }  ]} }">
                    </div>
                </span>
            </div>
        </span>


        <table class="table table-striped table-hover tx-15">
            <thead>
                <tr>
                    <td>Дата</td>
                    <td>Заголовок</td>
                    <td>Теги</td>
                    <td class="text-center">На главной</td>
                    <td class="text-right">Действия</td>
                </tr>
            </thead>
            <tbody id="newsList">
                <wb-foreach wb="{'ajax':'/api/query/news/',
                            'render':'server',
                            'bind':'cms.list.news',
                            'sort':'date:d',
                            'size':'{{_sett.page_size}}',
                            'filter': {'_site':'{{_sett.site}}'}
                }">
                    <tr class="bg-transparent">
                        <td data-ajax="{'url':'/cms/ajax/form/news/edit/{{_id}}','append':'modals'}">
                            <span class="tx-13 tx-inverse tx-semibold mg-b-0">{{date}}</span>
                        </td>
                        <td class="w-25">
                            {{header}}
                        </td>
                        <td class="w-25">
                            <wb-foreach wb="call=explode(',','{{blocks.seo.lang.{{_sess.lang}}.keywords}}')">
                                <small class="d-flex-inline p-1 mr-1 bg-light text-dark"
                                    wb-if="'{{_val}}'>''">{{_val}}</small>
                            </wb-foreach>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" name="home"
                                    id="newsSwitchItemHome{{_idx}}"
                                    onchange="wbapp.save($(this),{'table':'news','id':'{{_id}}','field':'home','silent':true})">
                                <label class="custom-control-label" for="newsSwitchItemHome{{_idx}}">&nbsp;</label>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" name="active"
                                    id="newsSwitchItemActive{{_idx}}"
                                    onchange="wbapp.save($(this),{'table':'news','id':'{{_id}}','field':'active','silent':true})">
                                <label class="custom-control-label"
                                    for="newsSwitchItemActive{{_idx}}">&nbsp;</label>
                            </div>
                            <a href="javascript:"
                                data-ajax="{'url':'/cms/ajax/form/news/edit/{{_id}}','update':'cms.list.news','append':'modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/content-edit-pen.svg" width="24"
                                    height="24"></a>
                            <a href="javascript:"
                                data-ajax="{'url':'/ajax/rmitem/news/{{_id}}','update':'cms.list.news','append':'modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/trash-delete-bin.2.svg" width="24"
                                    height="24"></a>
                        </td>
                    </tr>
                </wb-foreach>
            </tbody>
        </table>
    </div>
</div>

</html>