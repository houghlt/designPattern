<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/3
 * Time: 23:44
 */

namespace App\Design\Decorate;

class Decorate
{

    private $decorate;

    function addDecorate(BaseDecorate $decorate)
    {
        $this->decorate[] = $decorate;
    }

    function actionBefore()
    {
        foreach ($this->decorate as $decorate) {
            $decorate->actionBefore();
        }
    }

    function actionAfter()
    {
        $decorate = array_reverse($this->decorate);
        foreach ($decorate as $de) {
            $de->actionAfter();
        }
    }


}