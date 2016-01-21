<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:33:15
         compiled from "..\private\templates\basic\navbar.tpl.php" */ ?>
<?php /*%%SmartyHeaderCode:662056a05f8babf146-47130355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f397343d88f4d5c45b153fe8c7eff65cc0a5f4a' => 
    array (
      0 => '..\\private\\templates\\basic\\navbar.tpl.php',
      1 => 1453350758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '662056a05f8babf146-47130355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a05f8bb6edf0_08359413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a05f8bb6edf0_08359413')) {function content_56a05f8bb6edf0_08359413($_smarty_tpl) {?>
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
            <a href="<?php echo '<?'; ?>
=base_url().'admin';<?php echo '?>'; ?>
" class="btn btn-success">Private-Area</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav><?php }} ?>
