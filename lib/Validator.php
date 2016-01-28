<?php
/**
 * Created by PhpStorm.
 * User: Tito
 * Date: 1/28/2016
 * Time: 1:57 AM
 */

namespace lib;


class Validator
{
    private static $instance;

    private function __construct(){

    }

    public static function getInstance() {
        if (!isset(self::$instance))
        {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }

    public function clean($value){
        $clean=stripslashes($value);
        $clean=trim($clean);
        return $clean;

    }

    public function isNotEmpty($value){
        if(isset($value)){
            return true;
        }
        else{
            return false;
        }

    }
}