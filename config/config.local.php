<?php
define("DB_HOST","localhost");
define("DB_PORT",3306);
define("DB_NAME","freemvc");
define("DB_USER","root");
define("DB_PWD", "2587758");
define("DB_CHARSET","utf8");

// 安装锁 
function install_lock_check() {
    return file_exists(BASE_DIR."config/install.lock");
}

function install_lock_set($msg = "install lock") {
    return file_put_contents(BASE_DIR."config/install.lock",$msg);
}

function install_lock_clear() {
    return unlink(BASE_DIR."config/install.lock");
}
