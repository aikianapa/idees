<html>
<div class="m-3" id="yongerSpace">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Вакансии</h3>
        <div class="ml-auto order-2 float-right">
            <a href="#" data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/_new','html':'#yongerSpace modals'}"
                class="btn btn-primary">
                <img src="/module/myicons/24/FFFFFF/item-select-plus-add.svg" width="24" height="24" /> Добавить вакансию
            </a>
        </div>
    </nav>

    <div class="yonger-nested mb-1">
        <span class="bg-light">
            <div class="header p-2">
                <span clsss="row">
                    <div class="col-3">
                    <input class="form-control" type="search" placeholder="Поиск..."
                    data-ajax="{'target':'#{{_form}}List','filter_add':{'$or':[{ 'name': {'$like' : '$value'} }, { 'tags': {'$like' : '$value'} }  ]} }">
                    </div>
                </span>
            </div>
        </span>


        <table class="table table-striped table-hover tx-15">
            <thead>
                <tr>
                    <td>Дата</td>
                    <td>Вакансия</td>
                    <td>Теги</td>
                    <td class="text-center">Удалёнка</td>
                    <td class="text-right">Действия</td>
                </tr>
            </thead>
            <tbody id="{{_form}}List">
                <wb-foreach wb="{'ajax':'/api/query/{{_form}}/',
                            'render':'server',
                            'bind':'cms.list.{{_form}}',
                            'sort':'_created:d',
                            'size':'{{_sett.page_size}}',
                            'filter': {'_site':'{{_sett.site}}'}
                }">
                    <tr class="bg-transparent">
                        <td data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/{{_id}}','html':'#yongerSpace modals'}">
                            <span class="tx-13 tx-inverse tx-semibold mg-b-0">{{wbDate("d.m.y H:i",{{_created}})}}</span>
                        </td>
                        <td class="w-25">
                            {{name}}
                        </td>
                        <td class="w-25">
                            <wb-foreach wb="call=explode(',','{{tags}}')">
                                <small class="d-flex-inline p-1 mr-1 rounded bg-light text-dark"
                                    wb-if="'{{_val}}'>''">{{_val}}</small>
                            </wb-foreach>
                        </td>
                        <td class="text-center">
                        <input wb-module="swico" name="distance"
                            data-ico-on="checkmark-sqaure.1"
                            data-ico-off="square"
                            data-color="323232"
                            onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'distance','silent':true})">   
                        </td>
                        <td class="text-right">
                                <input wb-module="swico" name="active"
                                    id="{{_form}}SwitchItemActive{{_idx}}"
                                    onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active','silent':true})">

                            <a href="javascript:"
                                data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/{{_id}}','update':'cms.list.{{_form}}','html':'#yongerSpace modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/content-edit-pen.svg" width="24"
                                    height="24"></a>
                            <a href="javascript:"
                                data-ajax="{'url':'/ajax/rmitem/{{_form}}/{{_id}}','update':'cms.list.{{_form}}','html':'#yongerSpace modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/trash-delete-bin.2.svg" width="24"
                                    height="24"></a>
                        </td>
                    </tr>
                </wb-foreach>
            </tbody>
        </table>
    </div>
    <modals></modals>
</div>

</html>