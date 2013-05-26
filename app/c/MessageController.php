<?php
class MessageController extends Controller
{
    var $_oMessage;
    
    function MessageController(){
        parent::Controller();
        $this->_oMessage = $this->getModel("message");// =>return $this->_model[message]  base.php中方法  实例化了MessageModel by kang
    }
    function index() {
        $page = isset($_GET['page'])? intval($_GET['page']) : 1;
        $page = $page? $page : 1;
	$pagesize = 5;
	$where="";
	$order="add_time DESC";
        
        $aData = $this->_oMessage->getAll($page,$pagesize,$where,$order);// =>$aData  modul MessageModel.php的方法  by kang
        
        $this->view->assign('pager',$this->page->show($page,$aData['count'],$pagesize));// =>$this->data['pager']=字符串   by kang
        $this->view->assign('data',$aData['data']);// =>$this->data['data']=$aData['data']   by kang
        $this->view->display("message/index.html");// =>$pager=字符串,  $data=$aData['data']=$aData  by kang
    }
    
    function add() {
        $this->view->display("message/add.html");
    }
    
    function toAdd() {
        if(empty($_POST)) $this->message("非法访问");//message为父类Controller中的方法。 by kang
        
        if(empty($_POST['id'])) {// 添加操作
            $_POST['data']['add_time'] = time()+8*60*60;//时间
            $bFlag = $this->_oMessage->insert($_POST['data']);
	} else {// 修改操作
	    
            $bFlag =  $this->_oMessage->update($_POST['data'],$_POST['id']);
        }
        
        if($bFlag) $this->message("操作成功");
        $this->message("操作失败");
    }
    
    function edit() {
        $id = intval($_GET['id']);
        if(!$id) $this->message("ID为空");
        
        $aData = $this->_oMessage->getOne($id);
        if(empty($aData)) $this->message("非法的ID");
        
        $this->view->assign("data",$aData);
        
	//$this->add();
	$this->view->display("message/edit.html");
    }
    
    function delete() {
        $id = intval($_GET['id']);
        if(!$id) $this->message("ID为空");
        
        $bFlag = $this->_oMessage->delete($id);
        if($bFlag) $this->message("删除成功");
        $this->message("删除失败");
    }
}
