<?php

function products_vitrina() {
	$tree=wbTreeRead("products_category");
	$tree=wbTreeFindBranchById($tree["tree"],$_ENV["route"]["item"],"category");
	$lang=wbArrayWhere($tree["data"]["lang"],'lang = "'.$_SESSION["lang"].'"');
	$header=$lang[0]["value"];
	$where=wbTreeWhere("products_category",$_ENV["route"]["item"],"category");
	$where='active = "on" AND ('.$where.')';
	$out=wbGetTpl("shop-grid.php");
	$out->wbSetData(array("_where"=>$where,"header"=>$header));
	return $out;
}

function productsAfterItemRead($Item) {
	if ($_ENV["route"]["mode"] == "show") {
		$Item=wbItemToArray($Item);
		$Item["header"]=$Item["name"];
	}

    $imgs=wbTreeFindBranchById($Item["content"],"header"); 
    if (is_array($imgs) AND isset($imgs["data"]["form"]["image"]) AND is_array($imgs["data"]["form"]["image"])) {
        
        foreach($imgs["data"]["form"]["image"] as $i) {
            if ($i["visible"] == "1" AND $i["img"] > "") {
                $Item["_image"]="/uploads/products/{$Item["id"]}/{$i["img"]}";
                break;
            }
        }
        
    }

	return $Item;
}

function products_list() {
    $app = new wbApp();
	$out=wbGetForm($_ENV["route"]["form"],$_ENV["route"]["mode"]);
	$flag=""; $where=""; $Item=array();
	if (isset($_ENV["route"]["item"]) && $_ENV["route"]["item"]>"") {
        $Item["result"] = $app->json("products")
                        ->where("category","contains",$_ENV["route"]["item"])
                        ->sortBy("id")->get();
    } else {
        $Item["result"] = $app->json("products")->sortBy("id")->get();
    }
	$Item["_table"]=$_ENV["route"]["form"];
	$out->wbSetData($Item);
    return $out;
}
?>
