<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/2
 * Time: 23:11
 */

namespace App\Design\Observe;

class OrderObserve implements BaseObserve
{

    public function notify()
    {
        echo "订单操作！";
    }

}