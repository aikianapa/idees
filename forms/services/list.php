<html>
<div class="m-3" id="yongerservices">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">{{_lang.services}}</h3>
        <a href="#" data-ajax="{'url':'/cms/ajax/form/services/edit/_new','html':'modals'}"
            class="ml-auto order-2 float-right btn btn-primary">
            <img src="/module/myicons/item-select-plus-add.svg?size=24&stroke=FFFFFF" /> {{_lang.newService}}
        </a>
    </nav>

    <table class="table table-striped table-hover tx-15">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Клиент</th>
                <th>Обращение</th>
                <th>Статус</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="servicesList">
            <wb-foreach wb="table=services&sort=_created:d&render=server&bind=cms.list.services&size={{_sett.page_size}}"
                wb-filter="{'_site' : {'$in': [null,'{{_sett.site}}']}}">
                <tr>
                    <td>{{wbDate("d.m.y H:i",{{_created}})}}</td>
                    <td>
                        {{name}}
                        <div class="tx-12">{{phone}} / {{email}}</div>
                    </td>
                    <td class="tx-12">{{wbGetWords({{task}},15)}}</td>
                    <td>{{status}}</td>
                    <td>
                        <a href="javascript:"
                            data-ajax="{'url':'/cms/ajax/form/services/edit/{{id}}','html':'modals'}"
                            class="d-inline">
                            <img src="/module/myicons/content-edit-pen.svg?size=24&stroke=323232">
                        </a>
                        <a href="javascript:"
                            data-ajax="{'url':'/ajax/rmitem/services/{{id}}','update':'cms.list.services','html':'modals'}"
                            class="d-inline">
                            <img src="/module/myicons/trash-delete-bin.2.svg?size=24&stroke=323232" class="d-inline">
                        </a>
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