<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 06:50:47
         compiled from "..\private\modules\start\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1277656a071b72b84b3-44950272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931607fd85bd0ebb12bd572fe8831104d9246f26' => 
    array (
      0 => '..\\private\\modules\\start\\template\\header.tpl',
      1 => 1453350968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1277656a071b72b84b3-44950272',
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
  'unifunc' => 'content_56a071b72c7ec0_76500643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a071b72c7ec0_76500643')) {function content_56a071b72c7ec0_76500643($_smarty_tpl) {?><!-- Main jumbotron for a primary marketing message or call to action -->
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
