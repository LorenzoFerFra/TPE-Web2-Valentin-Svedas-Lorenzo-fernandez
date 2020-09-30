<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 22:48:10
  from 'C:\xampp\htdocs\TPEweb2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f74ef0a661de1_50528820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a66ac86ca5becce4ee4f6ecf58dd82736d33fe99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\detalle.tpl',
      1 => 1601496737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f74ef0a661de1_50528820 (Smarty_Internal_Template $_smarty_tpl) {
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
        <table>
            <thead>
                <th><?php echo $_smarty_tpl->tpl_vars['wine']->value->nombre;?>
</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>Detalle: <?php echo $_smarty_tpl->tpl_vars['wine']->value->descripcion;?>
</p>
                    </td>
                    <td>
                        <p>Año cosecha: <?php echo $_smarty_tpl->tpl_vars['wine']->value->ano_cosecha;?>
</p>
                    </td>
                    <td>
                        <p>Origen: <?php echo $_smarty_tpl->tpl_vars['wine']->value->origen;?>
</p>  
                    </td>
                    
                    <td>
                        <p>Graduacion Alcoholica: <?php echo $_smarty_tpl->tpl_vars['wine']->value->alcohol;?>
%</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html><?php }
}
