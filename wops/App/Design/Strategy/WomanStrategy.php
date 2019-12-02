<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/2
 * Time: 22:40
 */

namespace App\Design\Strategy;

class WomanStrategy implements BaseStrategy
{

    public function showAd()
    {
        echo "新款口红！";
    }

    public function showLike()
    {
        echo "女装！";
    }

}