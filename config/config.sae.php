<?php
// === 数据库存配置 =========================================================
define("DB_HOST",constant("SAE_MYSQL_HOST_M"));
define("DB_PORT",constant("SAE_MYSQL_PORT"));
define("DB_NAME",constant("SAE_MYSQL_DB"));
define("DB_USER",constant("SAE_MYSQL_USER"));
define("DB_PWD", constant("SAE_MYSQL_PASS"));
define("DB_CHARSET","utf8");

// === 安装锁 ===============================================================
class sea_install {
    private static $kvdb = null;

    public static function getInstance() {
        if(!self::$kvdb)  {
            self::$kvdb = new SaeKV();
            self::$kvdb->init();
            if(($msg = self::$kvdb->errmsg()) != "Success" ) {
                echo $msg,"<br/>";
                die("please active kvdb service!");
            }
        }
        return  self::$kvdb;
    }

    public static function check() {
        return self::getInstance()->get("install.lock");
    }

    public static function set($msg) {
        return self::getInstance()->set("install.lock",$msg);
    }
    
    public static function clear() {
        return self::getInstance()->delete("install.lock");
    }
} // end class 

function install_lock_check() {
    return sea_install::check(); 
}

function install_lock_set($msg = "install lock") {
    return sea_install::set($msg);
}

function install_lock_clear() {
    return sea_install::clear();
}
