<?php
header( 'Content-Type: text/html; charset=utf-8' );
define('SITE_ABSPATH', dirname(__FILE__).'/'); //we need to give full path
define("SITE_TPL_DIR",SITE_ABSPATH."tpls/"); //dont need it here.
define('SMARTY_DIR', 'splib/Smarty_3/libs/');


require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates/';
$smarty->compile_dir  = 'templates_c/';
$smarty->config_dir   = 'configs/';
$smarty->cache_dir    = 'cache/';

$smarty->assign('SITE_ASSET_URL',SITE_ABSPATH.'assets/');
$smarty->assign('name','Ned');


