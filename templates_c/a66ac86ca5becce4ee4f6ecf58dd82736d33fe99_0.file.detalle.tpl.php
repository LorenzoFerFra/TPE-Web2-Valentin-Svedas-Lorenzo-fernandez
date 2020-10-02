<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 17:04:55
  from 'C:\xampp\htdocs\TPEweb2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75f0176145e4_21806859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a66ac86ca5becce4ee4f6ecf58dd82736d33fe99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\detalle.tpl',
      1 => 1601564690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f75f0176145e4_21806859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?php echo $_smarty_tpl->tpl_vars['wine']->value->nombre;?>
</th>
                    <th scope="col">Año cosecha</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Graduacion alcoholica</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['wine']->value->descripcion;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['wine']->value->ano_cosecha;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['wine']->value->origen;?>
  
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['wine']->value->alcohol;?>
%
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['wine']->value->stock == 1) {?>
                            <p class="text-success">Con stock disponlibe</p>
                        <?php } else { ?>
                            <p class="text-danger">Sin stock</p>
                        <?php }?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
