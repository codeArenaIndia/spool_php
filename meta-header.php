<?php
//$meta= call mysql and get meta of the page else
$meta= array(); // tell not called from mqsql
$meta = defaultMeta($meta);
$smarty->assign("meta",$meta);
function defaultMeta($meta=array()){
    if (!isset($meta['keywords'])){
        $meta['keywords'] = "Spoolmesh";
    }
    if (!isset($meta['description'])){
        $meta['description'] = "Spoolmesh";
    }
    if (!isset($meta['title'])){
        $meta['title'] = "Spoolmesh";
    }
    return $meta;
}

$website=array();
$website['name'] = "Spoolmesh";
$website['robots'] = "Spoolmesh";
$smarty->assign("website",$website);
