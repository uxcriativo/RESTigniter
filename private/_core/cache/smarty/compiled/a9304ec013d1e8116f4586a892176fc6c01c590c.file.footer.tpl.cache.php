<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:38:28
         compiled from "..\private\templates\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13356a060c4c02ef8-90134234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9304ec013d1e8116f4586a892176fc6c01c590c' => 
    array (
      0 => '..\\private\\templates\\common\\footer.tpl',
      1 => 1453350902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13356a060c4c02ef8-90134234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cdn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a060c4c22308_14623876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a060c4c22308_14623876')) {function content_56a060c4c22308_14623876($_smarty_tpl) {?>	    <?php echo '<script'; ?>
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
