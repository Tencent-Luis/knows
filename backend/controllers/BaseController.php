<?php
namespace backend\controllers;

use yii\web\Controller;

/**
 * Description of BaseController
 * 控制器父类
 * @author Lu
 * @time 2016-08-21
 */
class BaseController extends Controller
{
    /**
     * 使用自定义layout
     * @var string 
     */
    public $layout = 'index';
}
