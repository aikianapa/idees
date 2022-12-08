<html>
    <select name class="form-control" wb-select2 placeholder="Услуги">
        <wb-foreach wb="table=services&sort=name" wb-filter="active=on">
            <option value="{{_id}}" selected wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'=='1'">
                {{name}}</option>
            <option value="{{_id}}" wb-if="'{{in_array({{_id}},{{_parent._parent.tags}})}}'!='1'">
                {{name}}</option>
        </wb-foreach>
    </select>
</html>