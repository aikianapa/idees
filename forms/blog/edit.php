<html>
<div class="modal effect-scale show removable" id="modalPagesEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header px-3">
                <i class="fa fa-close wd-20" data-dismiss="modal" aria-label="Close"></i>
                <h6>Редактирование статьи</h6>
                <div class="">
                    <div class="custom-control custom-switch d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}SwitchItemActive" onchange="$('#{{_form}}ValueItemActive').prop('checked',$(this).prop('checked'));">
                        <label class="custom-control-label" for="{{_form}}SwitchItemActive">Отображать</label>
                    </div>
                </div>
            </div>
            <div class="modal-body pd-20">
                <div class="row">
                    <div class="col-12">
                        <form id="{{_form}}EditForm">
                            <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}ValueItemActive">
                            <div class="form-group row">
                                <div class="col-6 mb-2">
                                    <input name="cover" wb="module=filepicker&mode=single&width=650&height=215" wb-path="/uploads/blog/cover" class="pt-0">
                                </div>

                                <div class="col-6">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label class="form-control-label">Наименование статьи</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-control-label">Краткое описание</label>
                                            <textarea type="text" name="descr" class="form-control" required wb="module=langinp"></textarea>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <label class="form-control-label">Специальное оформление в списке</label>
                                            <div class="custom-control custom-switch d-inline">
                                                <input wb="module=swico" name="spec" data-ico-on="interface-essential-112" data-ico-off="interface-essential-109">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-control-label">Услуга</label>
                                            <select name="serv" class="form-control" wb-select2>
                                                <option value="">&nbsp;</option>
                                                <wb-foreach wb="table=pages&tpl=false" wb-filter="{'path':'/services'}">
                                                    <option value="{{name}}" selected wb-if="'{{in_array({{_id}},{{_parent.serv}})}}'=='1'">
                                                        {{header}}
                                                    </option>
                                                    <option value="{{name}}" wb-if="'{{in_array({{_id}},{{_parent.serv}})}}'!='1'">
                                                        {{header}}
                                                    </option>
                                                </wb-foreach>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Рекомендуемые услуги</label>
                                <div class="col-sm-10">
                                    <div class="form-group row">
                                        <div class="col-12 mb-1">
                                            <input class="form-control" name="links_srv" wb-module="selectservices" multiple placeholder="Услуги">
                                        </div>
                                    </div>
                                </div>
                            </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2">Тэги</label>
                                        <div class="col-sm-10">
                                            <wb-data wb="table=catalogs&item=projects&field=tree">
                                                <select name="tags" class="form-control" wb-select2 multiple>
                                                    <wb-foreach wb-from="data">
                                                        <option value="{{_id}}" selected wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'=='1'">
                                                            {{name}}
                                                        </option>
                                                        <option value="{{_id}}" wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'!='1'">
                                                            {{name}}
                                                        </option>
                                                    </wb-foreach>
                                                </select>
                                            </wb-data>
                                        </div>
                                    </div>
                                    <div class="divider-text">Параметры SEO</div>
                                    <div class="form-group row">
                                        <label class="form-control-label col-md-3">Заголовок (title)</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="seo.title" placeholder="Заголовок (title)">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="form-control-label col-md-3">Описание (description)</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="seo.descr" rows="auto" placeholder="Описание (description)"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-control-label col-md-3">Ключевые слова</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" name="seo.keywords" placeholder="Ключевые слова" wb-module="tagsinput">
                                        </div>
                                    </div>

                                    <!--div class="form-group row">
                                <label class="col-sm-2">Похожие</label>
                                <div class="col-sm-10">
                                    <select name="similar" class="form-control" wb-select2 multiple>
                                        <wb-foreach wb="table={{_form}}" wb-filter="active=on">
                                            <option value="{{_id}}" selected wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'=='1'">
                                                {{name}}</option>
                                            <option value="{{_id}}" wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'!='1'">
                                                {{name}}</option>
                                        </wb-foreach>
                                    </select>
                                </div>
                            </div-->
                                    <div class="row">
                                        <div class="col-12">
                                            <wb-module wb="module=editor" name="text" />
                                        </div>
                                    </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>
<div class="modal effect-slide-in-right left w-50" id="modalPagesEditBlocks" data-backdrop="true" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i></i>
                <i class="fa fa-close cursor-pointer" data-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body p-0 pb-5 scroll-y">
                <div class="list-group" id="{{_form}}EditFormListBlocks">
                    <wb-foreach wb="ajax=/module/yonger/blocklist&render=client&bind=yonger.blocks">
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)" data-name="{{name}}" onclick="yonger.yongerPageBlockAdd('{{id}}')">
                            <span>{{name}}</span>
                            <span class="d-block tx-11 text-muted">{{header}}</span>
                        </a>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </div>
</div>

</html>