<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/2
 * Time: 22:27
 */

namespace App\Design\Single;

class SingleTon
{

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance)
            self::$instance = new self();
        return self::$instance;
    }

}