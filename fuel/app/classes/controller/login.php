<?php
/**
 * Created by PhpStorm.
 * User: LiMa
 * Date: 2018/06/10
 * Time: 18:11
 */

class Controller_Login extends \Fuel\Core\Controller {
    public function action_index(){
        return Response::forge(View::forge('login'));
    }
    
    public function action_go(){
        $loginId=$_POST['login-id'];
        $loginPass=$_POST['login-pass'];
        
    }
}