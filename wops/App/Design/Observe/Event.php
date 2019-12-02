<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/2
 * Time: 23:13
 */

namespace App\Design\Observe;

class Event
{

    private $observes = [];

    public function addObserve(BaseObserve $baseObserve)
    {
        $this->observes[] = $baseObserve;
    }

    public function trigger()
    {
        foreach ($this->observes as $observe) {
            $observe->notify();
        }
    }

}