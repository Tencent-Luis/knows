<?php
namespace backend\controllers;

/**
 * Description of HomeController
 * 首页控制器类
 * @author Lu
 * @time 2016-08-21
 */
class HomeController extends BaseController
{
    /**
     * CMS首页
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
