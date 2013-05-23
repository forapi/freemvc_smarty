<?php
// mysql数据库存操作类
class MysqlDB{
	//var $_link;
	var $mysqli;
    function MysqlDB($host,$user,$pwd,$dbname,$charset = 'utf8') {
	    //if(!($this->_link = mysql_connect($host,$user,$pwd))) die("database connects error");
	$this->mysqli=new mysqli($host,$user,$pwd,$dbname);
        if(mysqli_connect_errno()){
		echo "连接数据库失败：".mysqli_connect_error();
		$this->mysqli=null;
		exit;
	}	
        //mysql_select_db($dbname,$this->_link);
	//mysql_query("SET NAMES ".$charset,$this->_link);
	$this->mysqli->query("SET NAMES ".$charset);
    }
    
    function _query($sql) {
	    //return mysql_query($sql,$this->_link);
	    return $this->mysqli->query($sql);
    }
    
    function exec($sql) {
        $res = $this->_query($sql);
        if($res===false) return false;
	///return mysql_affected_rows($this->_link); // 返回影响行数
	return  $this->mysqli->affected_rows;//?
    }
    
    function getLastID() {
	    //return mysql_insert_id($this->_link);
	    return  $this->mysqli->insert_id;
    }
    
    function fetchOne($sql) {
         $res = $this->_query($sql);
	 //return mysql_fetch_array($res);
	 return  $res->fetch_array();
    }
    
    function fetchAll($sql) {
        $res = $this->_query($sql);
        $aResult = array();
        //while($row = mysql_fetch_array($res)) {
	  while($row =  $res->fetch_array()){
	      $aResult[] = $row;
        }
        return $aResult;
    }
    //$mysqli->close();
    
}
