<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 14.01.17
 * Time: 2:10
 */

namespace App;

use  App;

abstract class Auth
{
    private $login = null;
    private $password = null;
    protected $_connect = null;
    protected $_config = null;
    protected $_baseDir = null;

    public function __construct()
    {
        $this->_config = Config::_setting();
        $this->_connect = Db::getInstance($this->_config['db']);
        $this->_baseDir = $this->_config['layoutPath'];
    }

}
