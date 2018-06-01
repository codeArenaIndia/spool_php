<?php
include_once "smarty.php";
include_once "meta-header.php";
include_once "functions.php";


$cards=array();
$cards[0]['src']="friends.jpg";
$cards[0]['alt']="friends Quiz";
$cards[0]['dest']="";
$cards[0]['title']="Friends Quiz";



$smarty->assign('cards',$cards);
showpage($smarty->fetch("tpls/onepage.tpl"));