<?php

// импорт из монги в локальные .json файлы
// вначале в _driver.ini сделать монгу по-умолчанию

require $_SERVER['DOCUMENT_ROOT']. "/engine/engine.php";
foreach (glob($app->vars('_env.dba')."/*.json") as $filename) {
    $name = basename($filename);
    if (substr($name,0,1) !== '_') {
        $table = substr($name,0, -5);
        $res = $app->itemList($table);
        if ($res['count'] > 0) {
            file_put_contents($app->vars('_env.dba').'/'.$name, json_encode($res['list']));
            echo $name.' - '. $res['count']. '<br>';
        }

    }
    
}
?>