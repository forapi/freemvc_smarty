<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 02:03:25
         compiled from "F:\AppServ\www\github\freemvc_smarty\app\v\message\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1860751a16d6da0de39-08373369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a778006f121d8c384078fd2dfa152e86f4a808' => 
    array (
      0 => 'F:\\AppServ\\www\\github\\freemvc_smarty\\app\\v\\message\\add.html',
      1 => 1368871392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1860751a16d6da0de39-08373369',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a16d6da57ab4_41647489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a16d6da57ab4_41647489')) {function content_51a16d6da57ab4_41647489($_smarty_tpl) {?><form name="message" method="POST" action="?ctl=message&act=toAdd">
    <input name="id" value="" type="hidden"/><br/>
    <input name="data[title]" value="" size="100"/><br/>
    <textarea name="data[content]" rows="4" cols="80"></textarea><br/>
<input type="submit" value="提交" />
</form>
<a href="?ctl=message&act=index">返回列表</a>
<?php }} ?>