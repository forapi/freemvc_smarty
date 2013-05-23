<?php
class Model extends Base
{
    var $table = null;
    var $db = null;
    var $id = 'id';
    
    function Model() {
        include_once(LIB_DIR."MysqlDB.php");
        // 连接数据库
        $this->db = new MysqlDB(DB_HOST,DB_USER,DB_PWD,DB_NAME);//mysqli不用写端口？？ bykang 
          
        if(empty($this->table)) die("miss table name");
    }
    
    function exec($sSql) {
        return $this->db->exec($sSql);
    }
    
    // insert 操作
    function insert($aData) {
        $aKey = array();
        $aVal = array();
        foreach($aData as $key=> $val) {
            $aKey[] = $key;
            $aVal[] = $val;
        }
        
        $sSql = "INSERT INTO `$this->table`(".implode(",",$aKey).") VALUES('".implode("','",$aVal)."')";
        if($this->db->exec($sSql)) {
            return $this->db->getLastID();
        }
        return false;
    }
    
    function update($aData,$iID) {
        $aSet = array();
        foreach($aData as $key=> $val) {
            $aSet[] = $key."='".$val."'";
        }
        $sSql = "UPDATE `$this->table` SET ".implode(",",$aSet)." WHERE ".$this->id."='".$iID."'";
        if(false == $this->db->exec($sSql)) return false;
        return true;
    }
    
    function delete($iID) {
        $sSql = "DELETE FROM `$this->table` WHERE ".$this->id."='".$iID."'";
        return $this->db->exec($sSql);
    }
    
    function getAll($page = null,$pagesize = null,$where = array(), $order = '') {
        $sLimit = "";
        if($page && is_numeric($page) && is_numeric($pagesize)) {
            $sLimit = " LIMIT ".$pagesize * ($page - 1).",".$pagesize;
        }
        
        $sWHERE = "";
        if($where) {
            $sWHERE = " WHERE ".implode(' AND ',$where);
        }
        
        $sOrder = "";
        if($order) {
            $sOrder = " ORDER BY ".$order;
        }
        
        $sSql = "SELECT count(*) AS num FROM `$this->table` ".$sWHERE;
        $aTemp = $this->db->fetchOne($sSql);
        $aResult['count'] = $aTemp['num'];
        
        $sSql = "SELECT * FROM `$this->table` ".$sWHERE.$sOrder.$sLimit;
        $aResult['data'] = $this->db->fetchAll($sSql);
 
        return $aResult;
    }
    
    function getOne($iID) {
        $sSql = "SELECT * FROM `$this->table` WHERE ".$this->id."='".$iID."'";
        return $this->db->fetchOne($sSql);
    }
}
