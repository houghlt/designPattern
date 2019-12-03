<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/3
 * Time: 23:39
 */

namespace App\Design\Decorate;

class numDecorate implements BaseDecorate
{

    private $num;

    function __construct($num)
    {
        $this->num = $num;
    }

    function actionAfter()
    {
        echo $this->num;
    }

    function actionBefore()
    {
        echo $this->num;
    }

}