<html>
<div class="m-3" id="yongerservices">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">{{_lang.services}}</h3>
        <a href="#" data-ajax="{'url':'/cms/ajax/form/services/edit/_new','html':'modals'}"
            class="ml-auto order-2 float-right btn btn-primary">
            <img src="/module/myicons/item-select-plus-add.svg?size=24&stroke=FFFFFF" /> {{_lang.newServ}}
        </a>
    </nav>

    <table class="table table-striped table-hover tx-15">
        <thead>
            <tr>
                <th>Наименование</th>
                <th>Описание</th>
                <th>Действие</th>
            </tr>
        </thead>
        <tbody id="servicesList">
            <wb-foreach wb="table=services&sort=_created:d&render=server&bind=cms.list.services&size={{_sett.page_size}}"
                wb-filter="{'_site' : {'$in': [null,'{{_sett.site}}']}}">
                <tr>
                    <td>
                        {{name}}
                    </td>
                    <td class="tx-12 w-50">{{wbGetWords({{descr}},10)}}</td>
                        <td class="text-right">
                            <div class="custom-control custom-switch d-inline">
                                <input wb="module=swico" name="active"  onchange="wbapp.save($(this),{'table':'services','id':'{{_id}}','field':'active','silent':true})">
                            </div>
                            <a href="javascript:"
                                data-ajax="{'url':'/cms/ajax/form/services/edit/{{_id}}','update':'cms.list.services','append':'modals'}"
                                class=" d-inline"><img src="/module/myicons/24/323232/content-edit-pen.svg" width="24"
                                    height="24"></a>
                            <a href="javascript:"
                                data-ajax="{'url':'/ajax/copy/services/{{_id}}/','update':'cms.list.services','append':'modals'}"
                                class=" d-inline">
                                <img src="/module/myicons/24/323232/copy-paste-select-add-plus.svg" width="24" height="24" class="dd-copy" wb-allow="admin">
                            </a>
                            <a href="javascript:"
                                onclick="wbapp.confirm('Удаление','Удалить запись с идентификатором {{_id}} из таблицы services ?').on('confirm',()=>{
                                    wbapp.ajax({'url':'/ajax/rmitem/services/{{_id}}/?_confirm','update':'cms.list.services','append':'modals'});
                                })" class=" d-inline"><img src="/module/myicons/24/323232/trash-delete-bin.2.svg" width="24" height="24"></a>
                        </td>
                </tr>
            </wb-foreach>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>
<script wb-app>

</script>
<wb-lang>
    [ru]
    services = Услуги
    search = Поиск
    newServ = Новая услуга
    [en]
    services = Services
    search = Search
    newServ = New service
</wb-lang>

</html>