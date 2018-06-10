<?php
/**
 * Created by PhpStorm.
 * User: LiMa
 * Date: 2018/06/10
 * Time: 0:09
 */

use \Fuel\Core\Controller_Template;

class Controller_Glasses extends Controller_Template{

    public $template = 'layout/template';

    public function before()
    {
         parent::before();
        $url = $_SERVER['REQUEST_URI'];
        $tmp = explode("/", $url);
        $end_of_url = end($tmp);
        if ($end_of_url!='/' && \Fuel\Core\Session::get('user_id')==null){
            $data['msg']=null;
            \Fuel\Core\Response::redirect('/',$data);
        }
        


    }
}