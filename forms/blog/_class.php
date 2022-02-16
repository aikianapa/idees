<?php
class blogClass extends cmsFormsClass
{
    function afterItemSave(&$item) {
        $this->app->shadow('/cms/ajax/form/pages/list');
    }

    function beforeItemShow(&$item) {
        $this->similar($item);
    }

    function similar(&$item = null) {
        if (!$item) return;
        $list = $this->app->itemList('blog')['list'];
        $tags = $item['tags'];
        $similar = [];
        foreach($list as $art) {
            if ($art !== $item) {
                $atags = $art['tags'];
                $ints = array_intersect($tags,$atags);
                if (count($ints)) {
                    $similar[] = $art;
                }
            }
        }
        $item['similar'] = $similar;
    }
}

?>
