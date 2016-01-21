<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:38:28
         compiled from "..\private\modules\start\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2942356a060c4b2ffc9-69004583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e134bd0ab24cc1bda4e694b90bf6bf3d086bd62e' => 
    array (
      0 => '..\\private\\modules\\start\\template\\header.tpl',
      1 => 1453350968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2942356a060c4b2ffc9-69004583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a060c4b43846_89401763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a060c4b43846_89401763')) {function content_56a060c4b43846_89401763($_smarty_tpl) {?><!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        <p> <?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</p>
        <p><a class="btn btn-primary btn-lg" href="https://github.com/uxcriativo/startigniter" role="button">Download</a>
        <a class="btn btn-default btn-lg" href="<?php echo '<?'; ?>
=base_url();<?php echo '?>'; ?>
admin/login" role="button">Demo Private Area</a></p>
    </div>
</div>
<?php }} ?>
