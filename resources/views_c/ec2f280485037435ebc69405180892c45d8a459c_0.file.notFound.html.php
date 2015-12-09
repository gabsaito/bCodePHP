<?php /* Smarty version 3.1.27, created on 2015-12-08 18:34:10
         compiled from "application\views\notFound.html" */ ?>
<?php
/*%%SmartyHeaderCode:1887556671492586e75_94132640%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2f280485037435ebc69405180892c45d8a459c' => 
    array (
      0 => 'application\\views\\notFound.html',
      1 => 1449596045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1887556671492586e75_94132640',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566714925bf545_91210878',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566714925bf545_91210878')) {
function content_566714925bf545_91210878 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1887556671492586e75_94132640';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h1>Erro 404: Página não encontrada</h1>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>