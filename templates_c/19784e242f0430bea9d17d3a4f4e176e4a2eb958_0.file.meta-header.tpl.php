<?php
/* Smarty version 3.1.32, created on 2018-05-31 10:11:18
  from 'F:\working_space\eclipse\projects\spool_php\tpls\meta-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0fca46a9cc13_93259644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19784e242f0430bea9d17d3a4f4e176e4a2eb958' => 
    array (
      0 => 'F:\\working_space\\eclipse\\projects\\spool_php\\tpls\\meta-header.tpl',
      1 => 1527761472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0fca46a9cc13_93259644 (Smarty_Internal_Template $_smarty_tpl) {
?>    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['meta']->value['title'];?>
 -<?php echo $_smarty_tpl->tpl_vars['website']->value['name'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value['keywords'];?>
 " />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value['description'];?>
 " />
    <meta name="robots" content="<?php echo $_smarty_tpl->tpl_vars['website']->value['robots'];?>
" />
    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['website']->value['name'];?>
" />
    <meta name="copyright" content="<?php echo $_smarty_tpl->tpl_vars['website']->value['name'];?>
" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@flickr" />
    <meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value['title'];?>
 -<?php echo $_smarty_tpl->tpl_vars['website']->value['name'];?>
" />
    <meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value['keywords'];?>
" />
    <meta name="twitter:image" content="" />
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value['title'];?>
 -<?php echo $_smarty_tpl->tpl_vars['website']->value['name'];?>
"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="spoolmesh"/>
    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value['description'];?>
"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="../SPOOL_PHP/assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php }
}
