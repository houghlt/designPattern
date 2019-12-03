<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/3
 * Time: 23:40
 */

namespace App\Design\Decorate;

class wordDecorate implements BaseDecorate
{

    private $word;

    function __construct($word)
    {
        $this->word = $word;
    }


    function actionAfter()
    {
        echo $this->word;
    }


    function actionBefore()
    {
        echo $this->word;
    }


}