<?php
setlocale(LC_ALL, 'ru_RU.utf8');

@include_once(__DIR__ . '/engine/modules/yonger/common/scripts/functions.php');

function datetext($date)
{
    return strftime('%e %B %Y', strtotime($date));
}

?>