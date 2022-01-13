<?php

class projectsClass extends cmsFormsClass
{
    public function beforeItemShow(&$item)
    {
        $list = $this->app->itemList('projects', ['_site'=>$this->app->vars('_sett.site'),'active'=>'on']);
        $list = $list['list'];
        // поиск следующего и предыдущего
        $keys = array_keys($list);
        $count = count($keys)-1;
        $pos = array_search($item['id'],$keys);
        $next = isset($keys[$pos+1]) ? $keys[$pos+1] : $keys[0];
        $prev = isset($keys[$pos-1]) ? $keys[$pos-1] : $keys[$count];
        $item['next_item'] = $list[$next];
        $item['prev_item'] = $list[$prev];
        // поиск похожих
        $tags = $item['tags'];
        $similar = wbArrayFilter($list, ['filter'=> [
            'id'=>['$ne'=>$item['id']],
            'tags'=>['$like'=>$tags[0]]
        ]]);
        $item['similar'] = array_keys($similar);
    }
}
?>