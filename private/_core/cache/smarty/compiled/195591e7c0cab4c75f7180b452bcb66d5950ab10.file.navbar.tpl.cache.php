<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:38:28
         compiled from "..\private\templates\common\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2555056a060c4ac29b5-42200622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '195591e7c0cab4c75f7180b452bcb66d5950ab10' => 
    array (
      0 => '..\\private\\templates\\common\\navbar.tpl',
      1 => 1453350833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2555056a060c4ac29b5-42200622',
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
  'unifunc' => 'content_56a060c4ada0b9_83950980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a060c4ada0b9_83950980')) {function content_56a060c4ada0b9_83950980($_smarty_tpl) {?>
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
