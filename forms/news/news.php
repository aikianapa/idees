<?php
function news_show() {
	$out=wbGetTpl("news_show.php");
	$out->wbSetData($_ENV["ITEM"]);
	return $out;
}
?>
