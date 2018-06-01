<?php
/* Smarty version 3.1.32, created on 2018-05-31 09:05:35
  from 'F:\working_space\eclipse\projects\spool_php\tpls\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0fbadf87b6f4_53041055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a1e96d9745e8d7eba13d22f15537104d8465a4a' => 
    array (
      0 => 'F:\\working_space\\eclipse\\projects\\spool_php\\tpls\\index.tpl',
      1 => 1527757526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpls/meta-header.tpl' => 1,
    'file:tpls/header.tpl' => 1,
    'file:tpls/footer.tpl' => 1,
  ),
),false)) {
function content_5b0fbadf87b6f4_53041055 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $_smarty_tpl->_subTemplateRender('file:tpls/meta-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:tpls/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php $_smarty_tpl->_subTemplateRender('file:tpls/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
