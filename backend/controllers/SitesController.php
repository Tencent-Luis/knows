<?php
namespace backend\controllers;
/**
 * Description of SitesController
 * 站点管理控制器
 * @author Lu
 * @time 2016-10-15
 */
use Yii;
use backend\exception\CustomException;
use common\models\BasicSites;

class SitesController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAdd()
    {
        if(Yii::$app->getRequest()->isAjax)
        {
            $post = Yii::$app->getRequest()->post();
            
            if(!isset($post['site_name']) || empty($post['site_name']))
            {
                throw new CustomException(200, '请输入站点名称!', 406);
            }
        }
        
        //站点状态
        $siteStatus = Yii::$app->params['site_status'];
        return $this->render('add', [
            'siteStatus' => $siteStatus,
        ]);
    }
}
