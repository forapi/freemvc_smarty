<?php /* Smarty version Smarty-3.1.13, created on 2013-05-19 01:24:18
         compiled from "F:\AppServ\www\freemvc_smarty\app\v\message\index.html" */ ?>
<?php /*%%SmartyHeaderCode:24661519752be725c85-13875036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74954d91ec72ff03926b632cfe1769c53827fa4c' => 
    array (
      0 => 'F:\\AppServ\\www\\freemvc_smarty\\app\\v\\message\\index.html',
      1 => 1368926637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24661519752be725c85-13875036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519752be7e98c3_37235233',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519752be7e98c3_37235233')) {function content_519752be7e98c3_37235233($_smarty_tpl) {?>
<table width="100%" align="center">
  <tr>
      <td>编号</td>
      <td>标题</td>
	  <td>内容</td>
	  <td>时间</td>
	  
      <td>操作</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value["message_id"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['item']->value["content"];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['item']->value["add_time"];?>
</td>
	  
      <td>
         <a href="?ctl=message&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value["message_id"];?>
">修改</a>
         <a href="?ctl=message&act=delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value["message_id"];?>
">删除</a>
      </td>
  </tr>
  <?php } ?>
  
    <tr>
      <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
</td>
    </tr>
  
</table>
<a href="?ctl=message&act=add">添加</a>&nbsp;<a href="?ctl=passport">管理</a>
<?php }} ?>