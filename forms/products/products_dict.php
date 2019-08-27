<div class="form-group row">
    <label class="col-12 form-control-label">Текст</label>
    <div class="col-12">
        <meta data-wb-role="include" src="editor" name="text" placeholder="Текст">
    </div>
</div>

<div class="form-group row">
    <label class="col-12 form-control-label">Текст</label>
    <div class="col-12">
        <input name="test" placeholder="Test">
    </div>
</div>

	<div data-wb-role="multiinput" name="property">
			<div class="col-sm-5"><input type="text" class="form-control" name="prop" placeholder="{{_LANG[property]}}"></div>
			<div class="col-sm-7"><input type="text" class="form-control" name="value" placeholder="{{_LANG[value]}}"></div>
	</div>

<div class="form-group row">
    <div class="col-6">
        <label class="form-control-label">Было</label>
        <input type="hidden" name="before" data-wb-path="/uploads/{{_post._form}}/{{_post._item}}/" data-wb-role="uploader" >
    </div>
    <div class="col-6">
        <label class="form-control-label">Стало</label>
        <input type="hidden" name="after" data-wb-path="/uploads/{{_post._form}}/{{_post._item}}/" data-wb-role="uploader" >
    </div>
        <div class="col-6" data-wb-role="multiinput">
        <label class="form-control-label">Было</label>
        <input type="hidden" name="test"  >
    </div>
</div>
