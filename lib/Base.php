<?php
class Base
{
    var $_model;
    
    function getModel($model) {
        include_once(LIB_DIR."Model.php");
        $model = ucwords(strtolower($model));//仅首字母大写 by kang
        
        // model pool 如果有声明 就使用model pool里的对象
        if($this->_model[$model]) return $this->_model[$model];
        
        $mdl_file = APP_DIR."m/".$model."Model.php";
        
        if(!file_exists($mdl_file)) die("model not exists");
        include_once($mdl_file);
        
        $model = $model."Model";
        $obj_mdl = new $model;
        $this->_model[$model] = $obj_mdl;
        return $obj_mdl;
    }
}
