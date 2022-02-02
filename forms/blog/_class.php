<?php
class blogClass extends cmsFormsClass
{
    function afterItemSave(&$item) {
        $this->app->shadow('/cms/ajax/form/pages/list');
    }
}

?>
