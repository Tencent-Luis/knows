<?php
namespace backend\controllers;
/**
 * Description of ContentController
 * 内容管理控制器类
 * @author Lu
 * @time 2016-08-21
 */
class ContentController extends BaseController
{
    /**
     * 内容列表页
     * @return type
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    /**
     * 内容添加
     * @return type
     */
    public function actionAdd()
    {
        return $this->render('add');
    }
}
