<edit header="Состав команды - только профессии">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <label class="col-sm-2">Показать проекты</label>
        <div class="col-sm-10">
            <wb-var teamsel='{{team}}'/>
            <wb-data wb="table=catalogs&item=team">
            <select name="team" class="form-control" wb-select2 multiple>
                <wb-foreach wb="from=tree.data&tpl=false">
                    <option value="{{data.position}}" selected wb-if="'{{in_array({{data.position}},{{_var.teamsel}})}}'=='1'">
                        {{name}} - {{data.position}}</option>
                    <option value="{{data.position}}" wb-if="'{{in_array({{data.position}},{{_var.teamsel}})}}'!=='1'">
                        {{name}} - {{data.position}}</option>
                </wb-foreach>
            </select>
            </wb-data>
        </div>
    </div>
</edit>

<view>

<div class="gray-box mt-0 mb-0">
			<div class="command container">
				<div>
					<h2 class="sub-title"> Команда проекта </h2>
				</div>
				<div>

				</div>
                <wb-var list=""/>
				<div class="command-list">
                    <wb-foreach wb="from=team&tpl=false">
					    <div class="command-item"> {{_val}} </div>
                    </wb-foreach>
				</div>

			</div>

			<div class="spacer"> </div>
		</div>
</view>