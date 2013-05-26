<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 02:03:19
         compiled from "F:\AppServ\www\github\freemvc_smarty\app\v\message\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3086251a16d671c2ba1-33045928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a218dfd999a0ffe10205448b5efd02e5c2a2bfa' => 
    array (
      0 => 'F:\\AppServ\\www\\github\\freemvc_smarty\\app\\v\\message\\edit.html',
      1 => 1368871307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3086251a16d671c2ba1-33045928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a16d675b3a26_33943107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a16d675b3a26_33943107')) {function content_51a16d675b3a26_33943107($_smarty_tpl) {?><form name="message" method="POST" action="?ctl=message&act=toAdd">
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