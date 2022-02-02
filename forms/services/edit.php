<html>
<div class="modal fade effect-scale show removable" id="modalServicesEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xxl" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-5">
                    <h5>{{_lang.service}}</h5>
                </div>
                <div class="col-7">
                    <h5 class='header'></h5>
                </div>
                <i class="fa fa-close r-20 position-absolute cursor-pointer" data-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body pd-20">
                <div class="row">
                    <div class="col-5">
                        <form id="servicesEditForm">
                            <input type="checkbox" class="custom-control-input" name="active" id="servicesValueItemActive">

                            <div class="form-group row">
                                        <div class="col-12">
                                            <label class="form-control-label">Наименование услуги</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-control-label">Краткое описание</label>
                                            <textarea type="text" name="descr" class="form-control" required></textarea>
                                        </div>

                                <div class="col-12">
                                    <label class="form-control-label">Раздел</label>
                                    <wb-data wb="table=catalogs&item=projects&field=tree">
                                        <select name="tags" class="form-control" wb-select2>
                                            <wb-foreach wb-from="data">
                                                <option value="{{_id}}" selected
                                                    wb-if="'{{_id}}' == '{{_parent._parent.tags}}'">
                                                    {{name}}</option>
                                                <option value="{{_id}}"
                                                    wb-if="'{{_id}}' == '{{_parent._parent.tags}}'">
                                                    {{name}}</option>
                                            </wb-foreach>
                                        </select>
                                    </wb-data>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <wb-module wb="module=yonger&mode=structure&preset=service&target=#servicesBlocksForm" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-7">
                        <div id="servicesBlocksForm">
                            <form method="post">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>
<wb-lang>
    [ru]
    date = Дата 
    name = Имя 
    email = Эл.почта 
    phone = Телефон 
    service = Услуга 
    subject = Тема 
    msg = Обращение 
    info = Информация
    appends = Вложения 
    actions = Действия
</wb-lang>

</html>