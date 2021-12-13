<html>
<div class="m-3" id="yongerSpace">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">{{_lang.header}}</h3>
        <a href="#" data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/_new','html':'#yongerSpace modals'}"
            class="ml-auto order-2 float-right btn btn-primary">
            <img src="/module/myicons/item-select-plus-add.svg?size=24&stroke=FFFFFF" /> {{_lang.create}}
        </a>
    </nav>

    <table class="table table-striped table-hover tx-15">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Тема</th>
                <th>Автор</th>
                <th>Главн.</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="{{_form}}List">
            <wb-foreach wb="table={{_form}}&sort=_created:d;sort&bind=cms.list.{{_form}}&size={{_sett.page_size}}"
                wb-filter="{'_site':null}">
                <tr>
                    <td>{{wbDate("d.m.y",{{_created}})}}</td>
                    <td>{{title}}</td>
                    <td>{{name}}<div class="tx-12">{{position}}</div></td>
                    <td>
                        <input wb-module="swico" name="home"
                            data-ico-on="checkmark-sqaure.1"
                            data-ico-off="square"
                            data-color="323232"
                            onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'home','silent':true})">                        
                    </td>
                    <td class="text-right">
                        <input wb-module="swico" name="active"
                                id="{{_form}}SwitchItemActive{{_idx}}"
                                onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active','silent':true})">
                        <a href="javascript:"
                            data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/{{id}}','html':'#yongerSpace modals'}"
                            class="d-inline">
                            <img src="/module/myicons/24/323232/content-edit-pen.svg">
                        </a>
                        <a href="javascript:"
                            data-ajax="{'url':'/ajax/rmitem/{{_form}}/{{id}}','update':'cms.list.comments','html':'#yongerSpace modals'}"
                            class="d-inline">
                            <img src="/module/myicons/24/323232/trash-delete-bin.2.svg" class="d-inline">
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


    <modals></modals>
</div>

    <wb-lang>
        [ru]
        header = Комментарии
        search = Поиск
        create = Создать
        [en]
        header = Комментарии
        search = Search
        create = Создать
    </wb-lang>

</html>