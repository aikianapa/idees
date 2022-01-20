<html>
<div class="m-3" id="yongerSpace">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Проекты</h3>
        <div class="ml-auto order-2 float-right">
            <a href="#" data-ajax="{'url':'/cms/ajax/form/projects/edit/_new','html':'#yongerSpace modals'}"
                class="btn btn-primary">
                <img src="/module/myicons/24/FFFFFF/item-select-plus-add.svg" width="24" height="24" /> Добавить проект
            </a>
        </div>
    </nav>

    <div class="yonger-nested mb-1">
        <span class="bg-light">
            <div class="header p-2">
                <span clsss="row">
                    <div class="col-3">
                    <input class="form-control" type="search" placeholder="Поиск..."
                    data-ajax="{'target':'#{{_form}}List','filter_add':{'$or':[{ 'header': {'$like' : '$value'} }, { 'tags': {'$like' : '$value'} }  ]} }">
                    </div>
                </span>
            </div>
        </span>


        <table class="table table-striped table-hover tx-15">
            <thead>
                <tr>
                    <td>&nbsp;</td>
                    <td>Наименование</td>
                    <td>Теги</td>
                    <td class="text-center">На главной</td>
                    <td class="text-right">Действия</td>
                </tr>
            </thead>
            <tbody id="{{_form}}List">
                <wb-foreach wb="{'ajax':'/api/query/{{_form}}/',
                            'render':'server',
                            'bind':'cms.list.{{_form}}',
                            'sort':'date:d',
                            'size':'{{_sett.page_size}}',
                            'filter': {'_site':'{{_sett.site}}'}
                }">
                    <tr class="bg-transparent">
                        <td data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/{{_id}}','html':'#yongerSpace modals'}" class="cursor-pointer">
                            <img data-src="/thumbc/50x30/src{{cover.0.img}}" class="img-fluid rounded" />
                        </td>
                        <td class="w-25">
                            {{name}}
                        </td>
                        <td class="w-25">
                            <wb-foreach wb-from="tags">
                                <small class="d-flex-inline p-1 mr-1 bg-light text-dark"
                                    wb-if="'{{_val}}'>''">{{_val}}</small>
                            </wb-foreach>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" name="home"
                                    id="{{_form}}SwitchItemHome{{_idx}}"
                                    onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'home','silent':true})">
                                <label class="custom-control-label" for="{{_form}}SwitchItemHome{{_idx}}">&nbsp;</label>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="custom-control custom-switch d-inline">
                                <input wb="module=swico" name="active"  onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active','silent':true})">
                            </div>
                            <a href="javascript:"
                                data-ajax="{'url':'/cms/ajax/form/projects/edit/{{_id}}','update':'cms.list.{{_form}}','html':'#yongerSpace modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/content-edit-pen.svg" width="24"
                                    height="24"></a>
                            <a href="javascript:"
                                data-ajax="{'url':'/ajax/copy/{{_form}}/{{_id}}/','update':'cms.list.{{_form}}','html':'#yongerSpace modals'}"
                                class=" d-inline">
                                <img src="/module/myicons/24/323232/copy-paste-select-add-plus.svg" width="24" height="24" class="dd-copy" wb-allow="admin">
                            </a>
                            <a href="javascript:"
                                onclick="wbapp.confirm('Удаление','Удалить запись с идентификатором {{_id}} из таблицы {{_form}} ?').on('confirm',()=>{
                                    wbapp.ajax({'url':'/ajax/rmitem/{{_form}}/{{_id}}/?_confirm','update':'cms.list.{{_form}}','html':'#yongerSpace modals'});
                                })" class=" d-inline"><img src="/module/myicons/24/323232/trash-delete-bin.2.svg" width="24" height="24"></a>
                        </td>
                    </tr>
                </wb-foreach>
            </tbody>
        </table>

    </div>
    <modals></modals>
</div>

</html>