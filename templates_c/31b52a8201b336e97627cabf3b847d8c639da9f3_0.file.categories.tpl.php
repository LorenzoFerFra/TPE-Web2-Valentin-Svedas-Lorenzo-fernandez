<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 22:57:23
  from 'C:\xampp\htdocs\TPEweb2\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f74f133e074b1_14089296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b52a8201b336e97627cabf3b847d8c639da9f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\categories.tpl',
      1 => 1601499442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f74f133e074b1_14089296 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <div>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
 : Color característico, <span><?php echo $_smarty_tpl->tpl_vars['categoria']->value->color;?>
</span></li>      
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </ul>
    </div>
</body>
</html><?php }
}
