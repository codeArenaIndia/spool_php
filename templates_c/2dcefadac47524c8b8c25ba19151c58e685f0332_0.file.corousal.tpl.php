<?php
/* Smarty version 3.1.32, created on 2018-05-31 16:43:07
  from 'F:\working_space\eclipse\projects\spool_php\tpls\corousal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b10261b1aef56_30080529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dcefadac47524c8b8c25ba19151c58e685f0332' => 
    array (
      0 => 'F:\\working_space\\eclipse\\projects\\spool_php\\tpls\\corousal.tpl',
      1 => 1527784984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b10261b1aef56_30080529 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['corousal']->value, 's', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['s']->value) {
?>
        <li data-target="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?> class="active" <?php }?></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['corousal']->value, 'it', false, 'ky');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ky']->value => $_smarty_tpl->tpl_vars['it']->value) {
?>
    <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['ky']->value == 0) {?> active <?php }?>">
      <img src="assets/images/<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
.JPG" alt="Los Angeles" width="500" height="300">
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><?php }
}
