<?php
// 路径文件
define("BASE_DIR",dirname(__FILE__)."/../");
define("LIB_DIR",BASE_DIR."lib/");
define("CACHE_DIR",BASE_DIR."cache/");
define("APP_DIR",BASE_DIR."app/");

// sae环境下
if(defined("SAE_TMP_PATH")) {
    include_once(BASE_DIR."config/config.sae.php");
} else { // 本地环境
    include_once(BASE_DIR."config/config.local.php");
}

if(defined("INSTALL") && constant("INSTALL")) {
} else {
    // 非安装环境下的检测是否安装
    include_once(LIB_DIR."Install.php");
    //var_dump(Install::checkLock());
    if(!Install::checkLock()) {
        $url = $_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/install.php";
        header("location:http://".$url);
    }
}
