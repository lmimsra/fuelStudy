<?php
/**
 * Created by PhpStorm.
 * User: LiMa
 * Date: 2018/06/10
 * Time: 18:11
 */

use \Fuel\Core\Controller;
use \Fuel\Core\Response;
use \Fuel\Core\View;

class Controller_Login extends Controller {
    public function action_index(){
        $data['msg']=null;
        if (isset($_POST['login-id']) && isset($_POST['login-id'])) {
            $loginId = $_POST['login-id'];
            $loginPass = $_POST['login-pass'];
            $user = Model_User::query()->where(array('user_id' => $loginId, 'password' => $loginPass))->get_one();
            if (!$user == null) {
                Response::redirect('/menu');
            } else {
                $data['msg']='入力が正しくないです';
                return Response::forge(View::forge('login',$data));
            }
        }
        return Response::forge(View::forge('login',$data));
    }
    
    public function action_go(){
        $loginId=$_POST['login-id'];
        $loginPass=$_POST['login-pass'];
        $user=Model_User::query()->where(array('user_id'=>$loginId,'password'=>$loginPass))->get_one();
        if (!$user==null){
            return Response::forge(View::forge('main'));
        }else{
            return Response::forge(View::forge('login'));
        }
    }
}