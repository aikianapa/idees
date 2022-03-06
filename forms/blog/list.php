<html>
<div class="m-3 wd-100p" id="yongerSpace">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Блог</h3>
        <div class="ml-auto order-2 float-right">
            <a href="#" data-ajax="{'url':'/cms/ajax/form/blog/edit/_new','append':'modals'}"
                class="btn btn-primary">
                <img src="/module/myicons/24/FFFFFF/item-select-plus-add.svg" width="24" height="24" /> Добавить статью
            </a>
        </div>
    </nav>

    <div class="yonger-nested mb-1 col">
        <span class="bg-light">
            <div class="header p-2">
                <span clsss="row">
                    <div class="col-3">
                    <input class="form-control" type="search" placeholder="Поиск..."
                    data-ajax="{'target':'#blogList','filter_add':{'$or':[{ 'header': {'$like' : '$value'} }, { 'tags': {'$like' : '$value'} }  ]} }">
                    </div>
                </span>
            </div>
        </span>


        <table class="table table-striped table-hover tx-15">
            <thead>
                <tr>
                    <td>&nbsp;</td>
                    <td>Дата</td>
                    <td>Наименование</td>
                    <td>Теги</td>
                    <td class="text-right">Действия</td>
                </tr>
            </thead>
            <tbody id="blogList">
                <wb-foreach wb="{'ajax':'/api/query/blog/',
                            'render':'server',
                            'bind':'cms.list.blog',
                            'sort':'_created:d',
                            'size':'{{_sett.page_size}}',
                            'filter': {'_site':'{{_sett.site}}'}
                }">
                    <tr class="bg-transparent">
                        <td data-ajax="{'url':'/cms/ajax/form/blog/edit/{{_id}}','append':'modals'}" class="cursor-pointer">
                            <img data-src="/thumbc/50x30/src{{cover.0.img}}" class="img-fluid rounded" />
                        </td>
                        <td>
                            {{wbDate("d.m.Y H:i",{{_created}})}}
                        </td>
                        <td class="w-30">
                            {{name}}
                        </td>
                        <td class="w-20">
                            <wb-foreach wb-from="tags">
                                <small class="d-flex-inline p-1 mr-1 bg-light text-dark"
                                    wb-if="'{{_val}}'>''">{{_val}}</small>
                            </wb-foreach>
                        </td>

                        <td class="text-right nobr">
                            <div class="custom-control custom-switch d-inline">
                                <input wb="module=swico" name="active"  onchange="wbapp.save($(this),{'table':'blog','id':'{{_id}}','field':'active','silent':true})">
                            </div>
                            <a href="javascript:"
                                data-ajax="{'url':'/cms/ajax/form/blog/edit/{{_id}}','bind':'cms.list.blog','append':'modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/content-edit-pen.svg" width="24"
                                    height="24"></a>
                            <a href="javascript:"
                                data-ajax="{'url':'/ajax/rmitem/blog/{{_id}}','bind':'cms.list.blog','append':'modals'}"
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