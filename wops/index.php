<?php
/**
 * Created by PhpStorm.
 * User: hough
 * Date: 2019/12/2
 * Time: 21:44
 */

define("BASE_DIR", __DIR__);
include BASE_DIR . DIRECTORY_SEPARATOR .  "App/Loader.php";
spl_autoload_register("App\\Loader::autoLoader");

//$hello = new App\Common\Index();
//$hello->index();

//$singelObj = \App\Design\Single\SingleTon::getInstance();
//var_dump($singelObj);
//$singelObjs = \App\Design\Single\SingleTon::getInstance();
//var_dump($singelObjs);

// 策略模式
//class Page
//{
//    private $userStrategy;
//
//    function setStrategy(\App\Design\Strategy\BaseStrategy $baseStrategy)
//    {
//        $this->userStrategy = $baseStrategy;
//    }
//
//    function index()
//    {
//        echo "AD:";
//        echo $this->userStrategy->showAd();
//        echo "category:";
//        echo $this->userStrategy->showLike();
//    }
//}
//
//$sex = "man";
//$sex = "woman";
//if ($sex == "man") {
//    $strategy = new \App\Design\Strategy\ManStrategy();
//} else {
//    $strategy = new \App\Design\Strategy\WomanStrategy();
//}
//
////$strategy->showAd();
//
//$page = new Page();
//$page->setStrategy($strategy);
//$page->index();


// 观察者模式
echo "start\n";
$event = new \App\Design\Observe\Event();
$event->addObserve(new \App\Design\Observe\OrderObserve());
$event->addObserve(new \App\Design\Observe\AdminObserve());
$event->trigger();

