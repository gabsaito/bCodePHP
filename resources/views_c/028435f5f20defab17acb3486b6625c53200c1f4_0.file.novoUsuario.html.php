<?php /* Smarty version 3.1.27, created on 2015-12-09 01:22:35
         compiled from "application\views\novoUsuario.html" */ ?>
<?php
/*%%SmartyHeaderCode:191815667744ba3f2f9_87516293%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '028435f5f20defab17acb3486b6625c53200c1f4' => 
    array (
      0 => 'application\\views\\novoUsuario.html',
      1 => 1449620548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191815667744ba3f2f9_87516293',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667744baadc74_32513280',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667744baadc74_32513280')) {
function content_5667744baadc74_32513280 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '191815667744ba3f2f9_87516293';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div>
    <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>