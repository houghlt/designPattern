<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/2
 * Time: 22:40
 */

namespace App\Design\Strategy;

class ManStrategy implements BaseStrategy
{

    public function showAd()
    {
        echo "新款电脑！";
    }

    public function showLike()
    {
        echo "男装！";
    }

}