<html>
<div class="modal effect-scale show removable" id="modal{{_form}}Edit" data-backdrop="static" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header px-3">
                <i class="fa fa-close wd-20" data-dismiss="modal" aria-label="Close"></i>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}SwitchItemActive"
                        onchange="$('#{{_form}}ValueItemActive').prop('checked',$(this).prop('checked'));">
                    <label class="custom-control-label" for="{{_form}}SwitchItemActive">Активна</label>
                </div>
            </div>
            <div class="modal-body pd-20">
                <form id="{{_form}}EditForm">
                    <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}ValueItemActive">
                    <div class="form-group row">
                        <label class="col-sm-3">Термин</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="name" placeholder="Термин">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3">Значение</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="auto" name="text" placeholder="Значение термина"></textarea>
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