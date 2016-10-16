<?php
namespace backend\controllers;
/**
 * Description of SitesController
 * 站点管理控制器
 * @author Lu
 * @time 2016-10-15
 */
use Yii;

class SitesController extends BaseController
{
    /**
     * 站点状态
     * @var array 
     */
    public $status = [
        '1' => '上线',
        '2' => '内测',
        '3' => '开发',
        '4' => '关闭',
    ];

    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAdd()
    {
        if(Yii::$app->getRequest()->isAjax)
        {
            $post = Yii::$app->getRequest()->post();
            var_dump($post);exit;
        }
        
        return $this->render('add', [
            'siteStatus' => $this->status,
        ]);
    }
}
