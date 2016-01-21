<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:37:29
         compiled from "..\private\modules\start\template\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2146156a06089bea081-17580503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91e9f81515b29bed421363d312d5aa8f7914a92f' => 
    array (
      0 => '..\\private\\modules\\start\\template\\head.tpl',
      1 => 1453350708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2146156a06089bea081-17580503',
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
  'unifunc' => 'content_56a06089d8c061_05888432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a06089d8c061_05888432')) {function content_56a06089d8c061_05888432($_smarty_tpl) {?><!doctype html>
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
