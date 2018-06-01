<?php
/* Smarty version 3.1.32, created on 2018-05-31 15:18:33
  from 'F:\working_space\eclipse\projects\spool_php\tpls\onepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1012496c59d3_74200757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58305872a92f85fc6d496a948390e1a41e1cd64d' => 
    array (
      0 => 'F:\\working_space\\eclipse\\projects\\spool_php\\tpls\\onepage.tpl',
      1 => 1527779357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpls/home.tpl' => 1,
    'file:tpls/movies.tpl' => 1,
    'file:tpls/sitcoms.tpl' => 1,
    'file:tpls/animes.tpl' => 1,
    'file:tpls/misc.tpl' => 1,
    'file:tpls/admin.tpl' => 1,
  ),
),false)) {
function content_5b1012496c59d3_74200757 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div id = "myTabContent" class = "tab-content">
  <div class = "tab-pane  in active" id = "home_block">
     <?php $_smarty_tpl->_subTemplateRender('file:tpls/home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </div>
   <div class = "tab-pane fade" id = "movies_block">
     <?php $_smarty_tpl->_subTemplateRender('file:tpls/movies.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </div>
   <div class = "tab-pane fade" id = "sitcoms_block">
     <?php $_smarty_tpl->_subTemplateRender('file:tpls/sitcoms.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </div>
   <div class = "tab-pane fade" id = "animes_block">
      <?php $_smarty_tpl->_subTemplateRender('file:tpls/animes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </div>
    <div class = "tab-pane fade" id = "misc_block">
    <?php $_smarty_tpl->_subTemplateRender('file:tpls/misc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </div>
   <div class = "tab-pane fade" id = "admin_block">
      <?php $_smarty_tpl->_subTemplateRender('file:tpls/admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </div>
</div>
<?php }
}
