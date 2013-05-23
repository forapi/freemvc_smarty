<?php
// 分页类
class Page
{
    var $_current_page = 1;
    var $_amount = 0;
    var $_pagesize = 20;
    var $_params = array();
    var $_pageamount = 0;
    
    function Page($current_page = null,$amount = null,$pagesize = null,$params = array()) {
        $this->_init($current_page,$amount,$pagesize,$params);
    }
    
    function _init($current_page,$amount,$pagesize,$params) {
        if(intval($current_page)) $this->_current_page = intval($current_page);
        if(intval($amount)) $this->_amount = intval($amount);
        if(intval($pagesize)) $this->_pagesize = intval($pagesize);
        if(is_array($params) && !empty($params)) $this->_params = $params;
    }
    
    function show($current_page = null,$amount = null,$pagesize = null,$params = array()) {
        $this->_init($current_page,$amount,$pagesize,$params);
        $this->_pageamount = ceil($this->_amount/$this->_pagesize);
        
        return $this->_firstPage(1)." ".
             $this->_prevPage($this->_current_page -1)." ".
             $this->_nextPage((($this->_current_page + 1) >= $this->_pageamount)? $this->_pageamount : ($this->_current_page + 1) )." ".
             $this->_lastPage($this->_pageamount);
    }
    
    function _pager($num = 1) {
        $this->_params['page'] = $num? $num : 1;
        $this->_params['ctl'] = isset($_REQUEST['ctl'])? $_REQUEST['ctl'] : 'message';
        $this->_params['act'] = isset($_REQUEST['act'])? $_REQUEST['act'] : 'index';
        
        $arr_params = array();
        foreach($this->_params as $key=>$row) {
            $arr_params[] = $key."=".$row;
        }
        
        return "?".implode("&",$arr_params);
    }
    
    function _firstPage($num) {
        return "<a href=".$this->_pager($num).">首页</a>";
    }
    
    function _prevPage($num) {
        return "<a href=".$this->_pager($num).">上一页</a>";
    }
    
    function _nextPage($num) {
        return "<a href=".$this->_pager($num).">下一页</a>";
    }
    
    function _lastPage($num) {
        return "<a href=".$this->_pager($num).">末页</a>";
    }
}
