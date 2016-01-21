<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:38:28
         compiled from "..\private\templates\common\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:839356a060c4934252-65363793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae17f2493fa1c8bca84d4d79a8a4c2c1a0b01b49' => 
    array (
      0 => '..\\private\\templates\\common\\head.tpl',
      1 => 1453350708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '839356a060c4934252-65363793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'cdn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a060c4a5d092_71875427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a060c4a5d092_71875427')) {function content_56a060c4a5d092_71875427($_smarty_tpl) {?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo '<?'; ?>
=CDN<?php echo '?>'; ?>
img/apple-touch-icon.png">
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/favicon.ico" type="image/x-icon">    

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
css/main.css">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"><?php echo '</script'; ?>
>
     </head>
     <body>
     <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--><?php }} ?>
