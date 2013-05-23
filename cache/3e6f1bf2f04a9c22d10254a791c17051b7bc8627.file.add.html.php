<?php /* Smarty version Smarty-3.1.13, created on 2013-05-18 10:07:30
         compiled from "F:\AppServ\www\freemvc_smarty\app\v\message\add.html" */ ?>
<?php /*%%SmartyHeaderCode:6762519752e2ea6298-10402702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e6f1bf2f04a9c22d10254a791c17051b7bc8627' => 
    array (
      0 => 'F:\\AppServ\\www\\freemvc_smarty\\app\\v\\message\\add.html',
      1 => 1368871392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6762519752e2ea6298-10402702',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519752e2ef08a3_21420624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519752e2ef08a3_21420624')) {function content_519752e2ef08a3_21420624($_smarty_tpl) {?><form name="message" method="POST" action="?ctl=message&act=toAdd">
    <input name="id" value="" type="hidden"/><br/>
    <input name="data[title]" value="" size="100"/><br/>
    <textarea name="data[content]" rows="4" cols="80"></textarea><br/>
<input type="submit" value="提交" />
</form>
<a href="?ctl=message&act=index">返回列表</a>
<?php }} ?>