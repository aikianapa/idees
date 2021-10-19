<html>
<div class="modal effect-scale show removable" id="modalCommentsEdit" data-backdrop="static" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header px-3">
                <i class="fa fa-close wd-20" data-dismiss="modal" aria-label="Close"></i>
                <h5>Отзыв</h5>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}SwitchItemActive" onchange="$('#{{_form}}ValueItemActive').prop('checked',$(this).prop('checked'));">
                    <label class="custom-control-label" for="{{_form}}SwitchItemActive">Активен</label>
                </div>
            </div>
            <div class="modal-body pd-20">
                <form id="{{_form}}EditForm">
                    <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}ValueItemActive">
                    <div class="form-group row">
                        <label class="col-sm-3">Наименование</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Текст отзыва</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="auto" name="text"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3">Ссылка Facebook</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="facebook">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3">Ссылка Youtube</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="youtube">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3">На главной</label>
                        <div class="col-sm-9">
                            <input class="form-control" wb-module="switch" name="home">
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Автор</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label class="col-sm-3">Имя</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="name" placeholder="Имя">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3">Должность</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="position" placeholder="Должность">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div style="margin-top:-20px">
                                    <input wb-module="filepicker" name="avatar" wb="mode=single&width=100&height=100">
                                    </div>
                                </div>
                            </div>

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