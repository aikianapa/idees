<?php
class blogClass extends cmsFormsClass
{
    function afterItemSave(&$item) {
        $this->app->shadow('/cms/ajax/form/pages/list');
    }

    function beforeItemSave(&$item)
    {
        if (!isset($item['_created'])) $item['_created'] = date('Y-m-d H:i:s');
    }


    function beforeItemShow(&$item) {
        $this->similar($item);
        $item['header'] = $item['name'];
        if (isset($item['seo'])) {
			$seo = false;
			if (isset($item['seo']['title'])) {$item['meta_title'] = $item['seo']['title'];$seo=true;}
			if (isset($item['seo']['keywords'])) {$item['meta_keywords'] = $item['seo']['keywords'];$seo=true;}
			if (isset($item['seo']['descr'])) {$item['meta_description'] = $item['seo']['descr'];$seo=true;}
			if ($seo) $item['seo'] = 'on';
		}
    }

    function similar(&$item = null) {
        if (!$item) return;
        $list = $this->app->itemList('blog')['list'];
        $tags = (array)$item['tags'];
        $similar = [];
        foreach($list as $art) {
            if ($art !== $item) {
                $atags = (array)$art['tags'];
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
