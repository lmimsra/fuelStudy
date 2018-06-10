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
    public function action_index(){
        return Response::forge(View::forge('main'));
    }
}