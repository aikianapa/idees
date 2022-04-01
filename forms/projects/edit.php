<html>
<div class="modal effect-scale show removable" id="modalProjectsEdit" data-backdrop="static" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header px-3">
                <i class="fa fa-close wd-20" data-dismiss="modal" aria-label="Close"></i>
                <h6>Редактирование проекта</h6>
                <div class="">
                    <div class="custom-control custom-switch d-inline-block mr-3">
                        <input type="checkbox" class="custom-control-input" name="yonger" id="projectsSwitchItemYonger"
                            onchange="$('#projectsValueItemYonger').prop('checked',$(this).prop('checked'));">
                        <label class="custom-control-label" for="projectsSwitchItemYonger">Yonger</label>
                    </div>
                    <div class="custom-control custom-switch d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="active" id="projectsSwitchItemActive"
                            onchange="$('#projectsValueItemActive').prop('checked',$(this).prop('checked'));">
                        <label class="custom-control-label" for="projectsSwitchItemActive">Активен</label>
                    </div>
                </div>
            </div>
            <div class="modal-body pd-20">
                <div class="row">
                    <div class="col-5">
                        <form id="projectsEditForm">
                            <input type="checkbox" class="custom-control-input" name="active"
                                id="projectsValueItemActive">
                            <input type="checkbox" class="custom-control-input" name="yonger"
                                id="projectsValueItemYonger">

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label class="form-control-label">Наименование проекта <input class="text-right position-absolute r-20 bd-0" name="_sort"></input></label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-control-label">Краткое описание</label>
                                            <textarea type="text" name="descr" class="form-control" required
                                                wb="module=langinp"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-8">
                                    <label>Клиент</label>
                                    <input class="form-control" type="text" name="client">
                                </div>
                                <div class="col-4">
                                    <label>Год реализации</label>
                                    <input class="form-control" type="text" name="year">
                                </div>

                                <div class="col-8">
                                    <label>Ссылка на проект</label>
                                    <input class="form-control" type="text" name="link">
                                </div>
                                <div class="col-4">
                                    <label>Бюджет</label>
                                    <input class="form-control" type="text" name="budget">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Разделы</label>
                                <div class="col-sm-10">
                                    <wb-data wb="table=catalogs&item=projects&field=tree">
                                        <select name="tags" class="form-control" wb-select2 multiple>
                                            <wb-foreach wb-from="data">
                                                <option value="{{_id}}" selected
                                                    wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'=='1'">
                                                    {{name}}</option>
                                                <option value="{{_id}}"
                                                    wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'!='1'">
                                                    {{name}}</option>
                                            </wb-foreach>
                                        </select>
                                    </wb-data>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <wb-module wb="module=yonger&mode=structure&preset=project&target=#projectsBlocksForm" />
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-7">
                        <div id="projectsBlocksForm">
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


</html>