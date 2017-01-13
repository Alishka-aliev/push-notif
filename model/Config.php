<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 14.01.17
 * Time: 2:15
 */
namespace  App;

class Config {
    static function _setting() {
        return[
            'db'=>[
                'dbhost'=>'localhost',
                'dbname'=>'push',
                'dbuser'=>'root',
                'dbpwd'=>'root',
            ],
            'layoutPath'=>__DIR__."../view/layout/"
        ];
    }
}