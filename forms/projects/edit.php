<html>
<div class="modal effect-scale show removable" id="modalPagesEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header px-3">
                <i class="fa fa-close wd-20" data-dismiss="modal" aria-label="Close"></i>
                <div class="">
                <div class="custom-control custom-switch d-inline-block mr-3">
                    <input type="checkbox" class="custom-control-input" name="yonger" id="{{_form}}SwitchItemYonger"
                        onchange="$('#{{_form}}ValueItemYonger').prop('checked',$(this).prop('checked'));">
                    <label class="custom-control-label" for="{{_form}}SwitchItemYonger">Yonger</label>
                </div>
                <div class="custom-control custom-switch d-inline-block">
                    <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}SwitchItemActive"
                        onchange="$('#{{_form}}ValueItemActive').prop('checked',$(this).prop('checked'));">
                    <label class="custom-control-label" for="{{_form}}SwitchItemActive">Активен</label>
                </div>
                </div>
            </div>
            <div class="modal-body pd-20">
                <form id="{{_form}}EditForm">
                    <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}ValueItemActive">
                    <input type="checkbox" class="custom-control-input" name="yonger" id="{{_form}}ValueItemYonger">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="form-control-label">Наименование проекта</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-control-label">Краткое описание</label>
                                    <textarea type="text" name="descr" class="form-control" required wb="module=langinp"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <label class="form-control-label mb-0">Обложка проекта</label>
                            <input name="cover" wb="module=filepicker&mode=single&width=280&height=140" wb-path="/uploads/products/cover" class="pt-0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Разделы</label>
                        <div class="col-sm-9">
                            <wb-data wb="table=catalogs&item=projects&field=tree">
                            <select name="tags" class="form-control" wb-select2 multiple>
                                <wb-foreach wb-from="data">
                                    <option value="{{_id}}" selected wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'=='1'">{{name}}</option>
                                    <option value="{{_id}}" wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'!='1'">{{name}}</option>
                                </wb-foreach>
                            </select>
                            </wb-data>
                        </div>
                    </div>
                </form>



            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>


</html>