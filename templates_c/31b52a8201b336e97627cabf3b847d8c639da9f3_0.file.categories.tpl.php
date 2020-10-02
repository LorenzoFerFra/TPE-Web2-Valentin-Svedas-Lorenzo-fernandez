<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 16:49:36
  from 'C:\xampp\htdocs\TPEweb2\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75ec8003f537_88362146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b52a8201b336e97627cabf3b847d8c639da9f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\categories.tpl',
      1 => 1601563772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f75ec8003f537_88362146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1>Categorias de vinos:</h1>
        <ul class="list-group list-group-flush">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
 : Color característico,  <?php echo $_smarty_tpl->tpl_vars['categoria']->value->color;?>
</li>      
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </ul>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
