<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/3
 * Time: 23:37
 */

namespace App\Design\Decorate;

interface BaseDecorate
{

    function actionBefore();

    function actionAfter();

}
