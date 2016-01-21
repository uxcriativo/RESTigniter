<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:19:32
         compiled from "..\private\themes\basic\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1790756a05c5497b3d6-02602582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6977006b5de2e07f4b1321e8c34b2b6c22e01e6' => 
    array (
      0 => '..\\private\\themes\\basic\\header.tpl',
      1 => 1453349178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790756a05c5497b3d6-02602582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a05c54a46603_84208879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a05c54a46603_84208879')) {function content_56a05c54a46603_84208879($_smarty_tpl) {?><!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>TEMPLATigniter</h1>
        <p> <?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</p>
        <p><a class="btn btn-primary btn-lg" href="https://github.com/uxcriativo/startigniter" role="button">Download</a>
        <a class="btn btn-default btn-lg" href="<?php echo '<?'; ?>
=base_url();<?php echo '?>'; ?>
admin/login" role="button">Demo Private Area</a></p>
    </div>
</div>
<?php }} ?>
