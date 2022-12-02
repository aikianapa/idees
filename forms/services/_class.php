<?php
class servicesClass extends cmsFormsClass
{
   
    function beforeItemShow(&$item)
    {
        $item['header'] = $item['name'];
        $item['path'] = "/services/{$item['tags']}/".wbFurlGenerate($item['header']);
    }

    function afterItemSave(&$item) {
        $this->app->vars('_route.mode') == 'save' ? $this->app->shadow('/module/yonger/yonmap') : null;
    }
}

?>
