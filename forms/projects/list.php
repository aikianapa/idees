<html>
<div class="m-3" id="yongerSpace">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="order-1 tx-bold tx-spacing--2">Проекты</h3>
        <div class="order-2 float-right ml-auto">
            <a href="#" data-ajax="{'url':'/cms/ajax/form/projects/edit/_new','append':'modals'}"
                class="btn btn-primary">
                <img src="/module/myicons/24/FFFFFF/item-select-plus-add.svg" width="24" height="24" /> Добавить проект
            </a>
        </div>
    </nav>

    <div class="mb-1 yonger-nested">
        <span class="bg-light">
            <div class="p-2 header">
                <span clsss="row">
                    <div class="col-3">
                    <input class="form-control" type="search" placeholder="Поиск..."
                    data-ajax="{'target':'#projectsList','filter_add':{'$or':[{ 'header': {'$like' : '$value'} }, { 'tags': {'$like' : '$value'} }  ]} }">
                    </div>
                </span>
            </div>
        </span>


        <table class="table table-striped table-hover tx-15">
            <thead>
                <tr>
                    <td>Наименование</td>
                    <td>Теги</td>
                    <!--td class="text-center">На главной</!--td-->
                    <td class="text-right">Действия</td>
                </tr>
            </thead>
            <tbody id="projectsList">
                <wb-foreach wb="{'ajax':'/api/query/projects/',
                            'render':'server',
                            'bind':'cms.list.projects',
                            'sort':'_sort',
                            'size':'{{_sett.page_size}}',
                            'filter': {'_site':'{{_sett.site}}'}
                }">
                    <tr class="bg-transparent">
                        <td  class="cursor-pointer w-25" data-ajax="{'url':'/cms/ajax/form/projects/edit/{{_id}}','append':'modals'}" class="cursor-pointer">
                            {{name}}
                        </td>
                        <td class="w-25">
                            <wb-foreach wb-from="tags" wb-tpl="false">
                                <small class="p-1 mr-1 d-flex-inline bg-light text-dark"
                                    wb-if="'{{_val}}'>''">{{_val}}</small>
                            </wb-foreach>
                        </td>
                        <!--td class="text-center">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" name="home"
                                    id="projectsSwitchItemHome{{_idx}}"
                                    onchange="wbapp.save($(this),{'table':'projects','id':'{{_id}}','field':'home','silent':true})">
                                <label class="custom-control-label" for="projectsSwitchItemHome{{_idx}}">&nbsp;</label>
                            </div>
                        </!--td-->
                        <td class="text-right nobr">
                            <div class="custom-control custom-switch d-inline">
                                <input wb="module=swico" name="active"  onchange="wbapp.save($(this),{'table':'projects','id':'{{_id}}','field':'active','silent':true})">
                            </div>
                            <a href="javascript:"
                                data-ajax="{'url':'/cms/ajax/form/projects/edit/{{_id}}','update':'cms.list.projects','append':'modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/content-edit-pen.svg" width="24"
                                    height="24"></a>
                            <a href="javascript:"
                                data-ajax="{'url':'/ajax/copy/projects/{{_id}}/','update':'cms.list.projects','append':'modals'}"
                                class=" d-inline">
                                <img src="/module/myicons/24/323232/copy-paste-select-add-plus.svg" width="24" height="24" class="dd-copy" wb-allow="admin">
                            </a>
                            <a href="javascript:"
                                onclick="wbapp.confirm('Удаление','Удалить запись с идентификатором {{_id}} из таблицы projects ?').on('confirm',()=>{
                                    wbapp.ajax({'url':'/ajax/rmitem/projects/{{_id}}/?_confirm','update':'cms.list.projects','append':'modals'});
                                })" class=" d-inline"><img src="/module/myicons/24/323232/trash-delete-bin.2.svg" width="24" height="24"></a>
                        </td>
                    </tr>
                </wb-foreach>
            </tbody>
        </table>

    </div>
</div>

</html>