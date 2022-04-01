<html>
<div class="m-3" id="yongerSpace">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Глоссарий</h3>
        <div class="ml-auto order-2 float-right">
            <a href="#" data-ajax="{'url':'/cms/ajax/form/glosario/edit/_new','append':'modals'}"
                class="btn btn-primary">
                <img src="/module/myicons/24/FFFFFF/item-select-plus-add.svg" width="24" height="24" /> Добавить термин
            </a>
        </div>
    </nav>

    <div class="yonger-nested mb-1">
        <span class="bg-light">
            <div class="header p-2">
                <span clsss="row">
                    <div class="col-3">
                    <input class="form-control" type="search" placeholder="Поиск..."
                    data-ajax="{'target':'#glosarioList','filter_add':{'$or':[{ 'header': {'$like' : '$value'} }, { 'tags': {'$like' : '$value'} }  ]} }">
                    </div>
                </span>
            </div>
        </span>

        <wb-var types="" />
        <wb-data wb="table=catalogs&item=projects&field=tree">
            <wb-var types="{{data}}" />
        </wb-data>

        <table class="table table-striped table-hover tx-15">
            <thead>
                <tr>
                    <td>Термин</td>
                    <td>Теги</td>
                    <td class="text-right">Действия</td>
                </tr>
            </thead>
            <tbody id="glosarioList">
                <wb-foreach wb="{'ajax':'/api/query/glosario/',
                            'render':'server',
                            'bind':'cms.list.glosario',
                            'sort':'date:d',
                            'size':'{{_sett.page_size}}',
                            'filter': {'_site':'{{_sett.site}}'}
                }">
                    <tr class="bg-transparent">
                        <td class="w-25">
                            {{name}}
                        </td>
                        <td>
                            <wb-foreach wb-from="tags">
                                <small class="d-flex-inline p-1 mr-1 bg-light text-dark">{{_var.types.{{_val}}.name}}</small>
                            </wb-foreach>
                        </td>
                        <td class="text-right nobr w-25">
                            <div class="custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" name="active"
                                    id="glosarioSwitchItemActive{{_idx}}"
                                    onchange="wbapp.save($(this),{'table':'glosario','id':'{{_id}}','field':'active','silent':true})">
                                <label class="custom-control-label"
                                    for="glosarioSwitchItemActive{{_idx}}">&nbsp;</label>
                            </div>
                            <a href="javascript:"
                                data-ajax="{'url':'/cms/ajax/form/glosario/edit/{{_id}}','update':'cms.list.glosario','append':'modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/content-edit-pen.svg" width="24"
                                    height="24"></a>
                            <a href="javascript:"
                                data-ajax="{'url':'/ajax/rmitem/glosario/{{_id}}','update':'cms.list.glosario','append':'modals'}"
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