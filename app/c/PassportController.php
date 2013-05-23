<?php
class PassportController extends Controller
{
    function PassportController(){
        parent::Controller();
    }
    function index() {
        $this->login();
    }
    
    function login() {
        $this->view->display("passport/login.html");
    }
    
    function doLogin() {
        // 这里处理登陆
        print_r($_POST);
    }
}
