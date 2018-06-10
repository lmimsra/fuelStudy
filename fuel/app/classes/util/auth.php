<?php
/**
 * Created by PhpStorm.
 * User: LiMa
 * Date: 2018/06/10
 * Time: 0:08
 */

namespace\Fuel\Core\MyAuth;

use \Fuel\Core\Session;



class MyAuth {
    public static function login($loginId, $loginPass) {
        $login_flag = false;
        $user = Model_User::query()->where(array('user_id' => $loginId, 'password' => $loginPass))->get_one();
        if (!$user == null) {
            Session::set('user_id', $user->get('user_id'));
            $login_flag = true;
        }
        
        return $login_flag;
    }
    
    public static function logout() {
    
    }
    
    public static function check() {
    
    }
    
    public static function getId() {
    
    }
    
    public static function getGroupId() {
    
    }
}