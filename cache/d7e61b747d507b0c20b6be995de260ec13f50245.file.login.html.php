<?php /* Smarty version Smarty-3.1.13, created on 2013-05-18 12:29:57
         compiled from "F:\AppServ\www\freemvc_smarty\app\v\passport\login.html" */ ?>
<?php /*%%SmartyHeaderCode:12280519774457ec9b1-68274085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7e61b747d507b0c20b6be995de260ec13f50245' => 
    array (
      0 => 'F:\\AppServ\\www\\freemvc_smarty\\app\\v\\passport\\login.html',
      1 => 1340941506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12280519774457ec9b1-68274085',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5197744583f941_93793079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5197744583f941_93793079')) {function content_5197744583f941_93793079($_smarty_tpl) {?><form method="post" action="?ctl=passport&act=doLogin">
用户名:<input name="username" /><br/>
密码:<input name="password" type="password" /><br/>
<input type="submit" value="提交" /><br/>
</form>s<?php }} ?>