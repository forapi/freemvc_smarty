<?php
class MessageModel extends Model{
    var $table = "message";
    var $id = "message_id";
    
    // 重载父类方法
    function getAll($page = null,$pagesize = null,$where = array(), $order = ''){
        // 使用父类的方法
        $aData = parent::getAll($page, $pagesize, $where, $order);
        
        $aTemp = array(); 
        
        foreach($aData['data'] as $key => $row) {
            $row['id']  = $row[$this->id];
	    $row['add_time']  = date("Y-m-d H:i:s",$row['add_time']);
	    
            $aTemp[$key] = $row;
        }
        
        $aData['data'] = $aTemp;
        return $aData;
    }
}
