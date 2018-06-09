<?php
/**
 * Created by PhpStorm.
 * User: LiMa
 * Date: 2018/06/09
 * Time: 12:16
 */

namespace migrations;


class Users{
    function up(){
        \DBUtil::create_table('tests', array(
            'id'=>array('type'=>'int','constraint'=>5),
            'user_id'=>array('type'=>'int','constraint'=>5),
            'name'=>array('type'=>'varchar','constraint'=>100),
            'body'=>array('type'=>'text')
        ),array('id')
        );
    }

    function down(){
        \DBUtil::drop_tabele('tests');
    }
}