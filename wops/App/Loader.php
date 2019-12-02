<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/2
 * Time: 21:45
 */

namespace App;

class Loader
{


    static function autoLoader($class)
    {
        include_once BASE_DIR . DIRECTORY_SEPARATOR . $class . ".php";
    }

}