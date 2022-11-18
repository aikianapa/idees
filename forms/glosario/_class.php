<?php
class glosarioClass extends cmsFormsClass
{

    function beforeItemShow(&$item) {
        $item['header'] = $item['name'];
    }

    function afterItemSave(&$item) {
        $this->app->vars('_route.mode') == 'save' ? $this->app->shadow('/module/yonger/yonmap') : null;
    }
}

?>
