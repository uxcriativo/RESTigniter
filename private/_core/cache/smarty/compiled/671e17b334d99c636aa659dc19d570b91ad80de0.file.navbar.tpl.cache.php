<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:34:16
         compiled from "..\private\templates\basic\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1267456a05fc802dcd6-33435441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671e17b334d99c636aa659dc19d570b91ad80de0' => 
    array (
      0 => '..\\private\\templates\\basic\\navbar.tpl',
      1 => 1453350833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1267456a05fc802dcd6-33435441',
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
  'unifunc' => 'content_56a05fc8110611_59956664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a05fc8110611_59956664')) {function content_56a05fc8110611_59956664($_smarty_tpl) {?>
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
