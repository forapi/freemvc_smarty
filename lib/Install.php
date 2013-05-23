<?php
class Install{
    // 构造函数
    function Install() {
        header("Content-type: text/html; charset=utf-8");
        // $sql = file_get_contents(BASE_DIR."data.sql");
        // var_dump($this->splitSql($sql));
        if($_POST) {
            $this->installDB(); 
        } else {
            $this->installInit();
        }
    }

    // 解析sql语名
    function splitSql($sql) {
        preg_match_all('/(INSERT|UPDATE|DELETE|DROP|CREATE)+[^\;]+\;/i',trim($sql),$matches);
        if(is_array($matches[0])){
            return $matches[0];
        }else{
            return false;
        }
    } // 
    
    function installInit() {
        echo "请先设置好config/config.php文件里的相关配置<br/><form method=POST><input type='submit' name='submit' value='安装'/></form>";
    } 

    function installDB() {
        $sql = file_get_contents(BASE_DIR."data.sql");
        if(empty($sql)) $this->installFail("get data.sql fail");

        $arrSql = $this->splitSql($sql);
        if(is_array($arrSql)) {
            include_once(LIB_DIR."MysqlDB.php");
            // 连接数据库
            $this->db = new MysqlDB(DB_HOST.":".DB_PORT,DB_USER,DB_PWD,DB_NAME);
            foreach($arrSql as $sql) {
                $this->db->exec($sql);
            }
            $this->installSucc("install succeed");
        } else {
            $this->installFail("data.sql is empty");
        }
    }

    function installSucc($msg = null) {
        self::setLock();
        //die("install succeed");
        $url = $_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']);
        header("refresh:3;url=http://".$url);
        echo $msg.",3秒后跳转 <a href=\"http://".$url."\">".$url."</a>";die();

    }

    function installFail($msg) {
        die($msg);
    } 

    static public function checkLock() { 
        return install_lock_check();
    }
    
    static public function setLock($msg = "install.lock") { 
        return install_lock_set($msg);
    }
     
} // end class
