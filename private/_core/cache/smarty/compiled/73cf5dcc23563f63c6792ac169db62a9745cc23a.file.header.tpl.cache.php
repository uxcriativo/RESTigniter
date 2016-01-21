<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:36:11
         compiled from "..\private\templates\basic\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2999356a05ea711a074-85777722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73cf5dcc23563f63c6792ac169db62a9745cc23a' => 
    array (
      0 => '..\\private\\templates\\basic\\header.tpl',
      1 => 1453350968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2999356a05ea711a074-85777722',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a05ea7217f30_06922622',
  'variables' => 
  array (
    'title' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a05ea7217f30_06922622')) {function content_56a05ea7217f30_06922622($_smarty_tpl) {?><!-- Main jumbotron for a primary marketing message or call to action -->
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
