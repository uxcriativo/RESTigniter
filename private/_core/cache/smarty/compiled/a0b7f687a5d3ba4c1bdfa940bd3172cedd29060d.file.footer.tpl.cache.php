<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:35:42
         compiled from "..\private\templates\basic\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1652456a0601e8cca52-37869952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0b7f687a5d3ba4c1bdfa940bd3172cedd29060d' => 
    array (
      0 => '..\\private\\templates\\basic\\footer.tpl',
      1 => 1453350902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652456a0601e8cca52-37869952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cdn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a0601e988278_25959899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a0601e988278_25959899')) {function content_56a0601e988278_25959899($_smarty_tpl) {?>	    <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/vendor/jquery-1.11.2.min.js"><\/script>')<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/vendor/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/plugins.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/main.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }} ?>
