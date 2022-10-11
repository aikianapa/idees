<?php
class commentsClass extends cmsFormsClass
{
    function afterItemSave(&$item) {
        $this->app->shadow('/cms/ajax/form/pages/list');
    }
    public function beforeItemShow(&$item)
    {
        $item['header'] = $item['name'];
    }
}

?>
