<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 16:46:16
  from 'C:\xampp\htdocs\TPEweb2\templates\provisorio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f749a38ba6921_99871943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15045ce63c000995e91163a50754ce5a50cb0bfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\provisorio.tpl',
      1 => 1601477171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f749a38ba6921_99871943 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <div style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</div>
    <div>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wines']->value, 'vino');
$_smarty_tpl->tpl_vars['vino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vino']->value) {
$_smarty_tpl->tpl_vars['vino']->do_else = false;
?>
            <li><a href="detalle/<?php echo $_smarty_tpl->tpl_vars['vino']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['vino']->value->nombre;?>
 </a>: <span><?php echo $_smarty_tpl->tpl_vars['vino']->value->descripcion;?>
</span></li>      
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </ul>
    </div>
</body>
</html><?php }
}
