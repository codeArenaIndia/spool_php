<?php
/* Smarty version 3.1.32, created on 2018-05-31 18:42:38
  from 'F:\working_space\eclipse\projects\spool_php\tpls\cards.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b10421ec015f5_56389639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a15ec8f2f34454eb160dbdd95c31391268130a7' => 
    array (
      0 => 'F:\\working_space\\eclipse\\projects\\spool_php\\tpls\\cards.tpl',
      1 => 1527792155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b10421ec015f5_56389639 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cards']->value, 's', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['s']->value) {
?>
    <div class="card" style="width: 14rem;">
    <img class="card-img-top" src="assets/images/<?php echo $_smarty_tpl->tpl_vars['s']->value['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['s']->value['alt'];?>
">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
</h5>
        <a href="#" class="btn btn-primary">Play</a>
    </div>
    </div>
<?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php }
}
