<?php
/**
 * Created by PhpStorm.
 * User: aliev
 * Date: 11.01.17
 * Time: 10:34
 */

namespace App;


class Db extends \PDO
{
    protected static $_instance = null;

    function __construct($config)
    {
        try {
            parent::__construct("mysql:host=" . $config['dbhost'] . ";dbname=" . $config['dbname'] . ";", $config['dbuser'], $config['dbpwd']);
            //    $this->query("set names utf8");
        } catch (\PDOException $e) {
            die("3.0.0 Errors:\r\n" . $e->getMessage() . ".\r\nMethod: " . get_class() . "\r\n");
        }
    }


    /**
     * Singleton
     * @param $var
     * @return Mysql|null
     */
    static public function getInstance($var)
    {
        if (self::$_instance === null) {
            self::$_instance = new self($var);
        }
        return self::$_instance;
    }

}