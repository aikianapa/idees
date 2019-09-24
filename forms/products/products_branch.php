    <div class="form-group row v-all">
        <label class="col-sm-3 form-control-label">Тип блока</label>
        <div class="col-sm-9">
        <select class="form-control select-type" name="type" placeholder="Тип блока">
            <option value="block-white">Белый блок</option>
            <option value="block-grey">Серый блок</option>
            <option value="block-video">Видео блок</option>
            <option value="block-image">Изображение</option>
            <option value="block-paralax">Паралакс</option>
            <option value="before-after">Было/Стало</option>
        </select>
        </div>
    </div>
    <div class="form-group row v-all">
        <label class="col-sm-3 form-control-label">Отображать</label>
        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="visible"><span></span></label></div>
    </div>
	<div class="form-group row v-block-white v-block-grey">
	  <label class="col-sm-3 form-control-label">Текст</label>
        <div class="col-sm-9"><textarea class="w-100" rows="15" name="text"></textarea></div>
	</div>
	<div class="form-group row v-before-after">
	  <label class="col-sm-3 form-control-label">Было/Стало</label>
        <div class="col-sm-4"><input type="hidden" name="before" data-wb-path="/uploads/{{_form}}/{{_item}}"  data-wb-role="uploader" ></div>
        <div class="col-sm-4"><input type="hidden" name="after" data-wb-path="/uploads/{{_form}}/{{_item}}" data-wb-role="uploader" ></div>
	</div>
	<div class="form-group row v-block-image v-block-paralax">
	  <label class="col-sm-3 form-control-label">Изображение</label>
        <div class="col-sm-5"><input type="hidden" name="image" data-wb-path="/uploads/{{_form}}/{{_item}}" data-wb-role="uploader" ></div>
	</div>

	<div class="form-group row v-block-video">
	    <label class="col-sm-3 form-control-label">Видео</label>
        <div class="col-sm-9"><input type="text" name="video" class="form-control" ></div>
	</div>

<script>
$(".modal.tree-edit form .select-type").off("change");
$(".modal.tree-edit form .select-type").on("change",function(){
    var form = $(this).parents("form");
    $(form).find(".form-group[class*='v-']:not(.v-all)").hide();
    $(form).find(".form-group[class*='v-'].v-"+$(this).val()).show();
    wb_delegates();
});
$(".modal.tree-edit form .select-type").trigger("change");
</script>