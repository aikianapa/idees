<?php
class vacanciesClass extends cmsFormsClass
{

    public function beforeItemShow(&$item)
    {
        $item['header'] = $item['name'];
    }
    function afterItemSave(&$item) {
        $this->app->shadow('/cms/ajax/form/pages/list');
    }
}

?>