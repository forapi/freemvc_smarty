<?php
class Core{
    // 构造函数 和类名称相同，或者用魔术方法 __construct()   by kang
    function Core(){
        $this->dispatch();
    }
    
    function dispatch() {
        include_once(LIB_DIR."Base.php");  
        include_once(LIB_DIR."Controller.php");
        
        $ctl = isset($_GET['ctl'])? $_GET['ctl'] : 'Message';//浏览器地址栏提交到index.php的控制器和方法 by kang
        $act = isset($_GET['act'])? $_GET['act'] : 'index';
        
        $ctl = ucwords(strtolower($ctl));//ucwords() 函数把字符串中每个单词的首字符转换为大写。by kang
        $act = strtolower($act);//strtolower() 函数把字符串转换为小写。 by kang
        
        $ctl_file = APP_DIR."c/".$ctl."Controller.php";//控制器路径 by kang
        
        // 判断控制器文件是否存在
        if(!file_exists($ctl_file)) die("controller not exists");
        include_once($ctl_file);//控制器 by kang
        $ctl = $ctl."Controller";//控制器的类 by kang
        $obj_ctl = new $ctl;//控制器实例化 by kang
        
        // 判断方法是存在
        if(!method_exists($ctl,$act)) die("method not exists");
        $obj_ctl->$act();
    }
}
