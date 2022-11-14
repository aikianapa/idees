<?php
class servicesClass extends cmsFormsClass
{
   
    function beforeItemShow(&$item)
    {
        $item['header'] = $item['name'];
    }

    function afterItemSave(&$item) {
        $this->app->shadow('/cms/ajax/form/pages/list');
    }
}

?>
