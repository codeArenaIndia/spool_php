<?php
function showpage($content,$themepage="tpls/index.tpl")
{
	global $smarty;
	$smarty->assign("content",$content);
	echo $smarty->fetch($themepage);
	exit;
}