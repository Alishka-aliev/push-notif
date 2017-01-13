<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 14.01.17
 * Time: 2:19
 */
namespace App;

class  Route extends Auth{

    public function __construct()
    {
        parent::__construct();
        var_dump($this->_connect);
    }

    public function content(){
        ob_start();
        include_once  $this->_baseDir."_login.php";
        $res = ob_get_contents();
        ob_end_flush();
        return $res;
    }
}