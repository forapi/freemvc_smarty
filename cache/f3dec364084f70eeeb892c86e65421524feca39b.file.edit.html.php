<?php /* Smarty version Smarty-3.1.13, created on 2013-05-18 10:07:42
         compiled from "F:\AppServ\www\freemvc_smarty\app\v\message\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:15195519752ee7839c6-32526504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3dec364084f70eeeb892c86e65421524feca39b' => 
    array (
      0 => 'F:\\AppServ\\www\\freemvc_smarty\\app\\v\\message\\edit.html',
      1 => 1368871307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15195519752ee7839c6-32526504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519752ee8578b7_61700726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519752ee8578b7_61700726')) {function content_519752ee8578b7_61700726($_smarty_tpl) {?><form name="message" method="POST" action="?ctl=message&act=toAdd">
    <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value["message_id"];?>
" type="hidden"/><br/>
    <input name="data[title]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value["title"];?>
" size="100"/><br/>
    <textarea name="data[content]" rows="4" cols="80"><?php echo $_smarty_tpl->tpl_vars['data']->value["content"];?>
</textarea><br/>
<input type="submit" value="提交" />
</form>
<a href="?ctl=message&act=index">返回列表</a>
<?php }} ?>