<html>
<div class="modal effect-scale show removable" id="modalPagesEdit" data-backdrop="static" tabindex="-1" role="dialog"
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
                        <label class="col-sm-3">Вакансия</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Описание</h5>
                        <textarea name="text" rows="auto" class="form-control" placeholder="Описание"
                            required></textarea>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Зарплата от</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" name="money">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Тэги</label>
                        <div class="col-sm-9">
                            <input class="form-control" wb-module="module=tagsinput" type="text" name="tags"
                                placeholder="Тэги">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Место работы</label>
                        <div class="col-sm-7">
                            <input class="form-control" wb-module="module=tagsinput" type="text" name="places"
                                placeholder="Место работы">
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="my-input">Удалёнка</label>
                                <input wb-module="module=switch" name="distance">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Задачи</label>
                        <div class="col-sm-9">
                            <wb-multiinput name="tasks" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Требования</label>
                        <div class="col-sm-9">
                            <wb-multiinput name="skils" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Условия</label>
                        <div class="col-sm-9">
                            <wb-multiinput name="enviroment" />
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