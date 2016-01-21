<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 06:50:47
         compiled from "..\private\templates\common\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2023556a071b727db33-91021701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '573e180b1c5ca8803dc4e6c9a12dc6ebf3da7a18' => 
    array (
      0 => '..\\private\\templates\\common\\navbar.tpl',
      1 => 1453350833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2023556a071b727db33-91021701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a071b728d535_76287647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a071b728d535_76287647')) {function content_56a071b728d535_76287647($_smarty_tpl) {?>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin" class="btn btn-success">Private-Area</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav><?php }} ?>
