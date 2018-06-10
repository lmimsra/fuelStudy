<?php
/**
 * Created by PhpStorm.
 * User: LiMa
 * Date: 2018/06/10
 * Time: 20:42
 */

use \Fuel\Core\Response;
use \Fuel\Core\View;
class Controller_Menu extends \Fuel\Core\Controller{
    
    public function before()
    {
        parent::before();
        $url = $_SERVER['REQUEST_URI'];
        $tmp = explode("/", $url);
        $end_of_url = end($tmp);
        var_dump($end_of_url);
        $session = \Fuel\Core\Session::get('user_id');
        if ($session==null){
            Response::redirect('/');
        }
        
        
        
    }
    public function action_index(){
        return Response::forge(View::forge('main'));
    }
}