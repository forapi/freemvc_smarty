<?php
// mysql数据库存操作类 gittest
class MysqliDB{
	var $mysqli;
    function __construct($host,$user,$pwd,$dbname,$charset = 'utf8') {
	$this->mysqli=new mysqli($host,$user,$pwd,$dbname);
        if(mysqli_connect_errno()){
		echo "连接数据库失败：".mysqli_connect_error();
		$this->mysqli=null;
		exit;
	}	
	$this->mysqli->query("SET NAMES ".$charset);
    }
    
    function _query($sql) {
	    return $this->mysqli->query($sql);
    }
    
    function exec($sql) {
        $res = $this->_query($sql);
        if($res===false) return false;
	 // 返回影响行数
	return  $this->mysqli->affected_rows;
    }
    
    function getLastID() {
	    return  $this->mysqli->insert_id;
    }
    
    function fetchOne($sql) {
         $res = $this->_query($sql);
	 //获取结果集 数组
	 return  $res->fetch_array();
    }
    
    function fetchAll($sql) {
        $res = $this->_query($sql);
        $aResult = array();
	  while($row =  $res->fetch_array()){
	      $aResult[] = $row;
        }
	return $aResult;
    }

    public function __destruct()
    {
	    $this->mysqli->close();
    }
    
    
}
