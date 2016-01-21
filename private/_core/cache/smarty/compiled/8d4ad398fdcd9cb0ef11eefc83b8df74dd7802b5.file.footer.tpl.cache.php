<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 06:50:47
         compiled from "..\private\templates\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:784656a071b7341058-36325921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d4ad398fdcd9cb0ef11eefc83b8df74dd7802b5' => 
    array (
      0 => '..\\private\\templates\\common\\footer.tpl',
      1 => 1453350902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '784656a071b7341058-36325921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cdn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a071b735c5e5_72573295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a071b735c5e5_72573295')) {function content_56a071b735c5e5_72573295($_smarty_tpl) {?>	    <?php echo '<script'; ?>
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
