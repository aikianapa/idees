<?php
class vacanciesClass extends cmsFormsClass
{
    public $app;

    public function beforeItemShow(&$item)
    {
        $item['header'] = $item['name'];
    }
}

?>