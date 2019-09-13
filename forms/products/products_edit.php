<div class="modal fade" id="{{_GET[form]}}_{{_GET[mode]}}" data-keyboard="false" data-backdrop="true" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title">{{header}}</h5>
      </div>
      <div class="modal-body">

<form id="{{_GET[form]}}EditForm" data-wb-form="{{_GET[form]}}" data-wb-item="{{_GET[item]}}"  class="form-horizontal" role="form">

                    <div class="form-group row">
                        <label class="col-3 form-control-label">Идентификатор</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="id" placeholder="ID" required>
                        </div>
                    </div>

<div class="nav-active-primary">
<ul class="nav nav-tabs" role="tablist">
	<li class="nav-item"><a class="nav-link active" href="#{{_GET[form]}}Descr" data-toggle="tab">Описание</a></li>
	<li class="nav-item"><a class="nav-link" href="#{{_GET[form]}}Property" data-toggle="tab" >Свойства</a></li>
	<li class="nav-item"><a class="nav-link" href="#{{_GET[form]}}Images" data-toggle="tab">Изображения</a></li>
</ul>
</div>
<div class="tab-content  p-a m-b-md">
<br />
<div id="{{_GET[form]}}Descr" class="tab-pane fade show active" role="tabpanel">

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Наименование</label>
	   <div class="col-sm-9"><input type="text" class="form-control" name="name" placeholder="Наименование" required></div>
	</div>

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Описание</label>
        <div class="col-sm-9"><textarea class="form-control" rows="auto" name="descr" placeholder="Короткое описание" required></textarea></div>
	</div>

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Отображать</label>
	   <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="active"><span></span></label></div>

	  <label class="col-sm-2 form-control-label">На главную</label>
	   <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="tohome"><span></span></label></div>
    
        <div class="col-sm-3"><input type="text" class="form-control" name="sort" placeholder="Сортировка"></div>
	</div>
    
	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Клиент</label>
	   <div class="col-sm-9"><input type="text" class="form-control" name="client" placeholder="Клиент"></div>
	</div>

	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Сайт</label>
	   <div class="col-sm-9"><input type="text" class="form-control" name="site" placeholder="Сайт"></div>
	</div>
    
	<div class="form-group row">
	  <label class="col-sm-3 form-control-label">Вид работ</label>
	   <div class="col-sm-9">
		   <select class="form-control select2" name="category[]" data-wb-role="tree" data-wb-item="products_category" multiple>
				<option value="{{id}}">{{name}}</option>
		   </select>
           <style>
               .select2-container--default .select2-selection--multiple .select2-selection__choice {background-color: #5ccdde; border:0;}
               .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {position: relative;color: white;top: 0;left: 0;font-size: 14px;opacity: 1;}
           </style>
           
		</div>
    </div>

    <div class="form-group row">
	  <label class="col-sm-3 form-control-label">Тэги</label>
        <div class="col-sm-9">
           <input type="text" class="form-control input-tags" name="tags" placeholder="Тэги">
        </div>
	</div>
    
</div>

<div id="{{_GET[form]}}Property" class="tab-pane fade" role="tabpanel">
    <div data-wb-role="tree" name="content" data-wb-dict="portfoliocontent"></div>
</div>
<div id="{{_GET[form]}}Images" class="tab-pane fade" data-wb-role="include" src="uploader" role="tabpanel"></div>
</div>
</form>


    </div>
		  <div class="modal-footer" data-wb-role="include" src="form" data-wb-name="common_close_save" data-wb-hide="wb">

		</div>
</div>
</div>
<script type="text/locale" data-wb-role="include" src="products_common"></script>
<script>
        if ($("#{{_GET[form]}}EditForm [name=category]").val() == "")  {
                var url=$(".content-box").data("wb_ajax");
                url=explode("/",url);
                $("#{{_GET[form]}}EditForm [name=category]").val(url[4]);
        }
</script>
